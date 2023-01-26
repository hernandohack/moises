<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\xcart_product;
use App\Models\xcart_categorie;

class FrontController extends Controller
{
    public function index()
    {
        $categorias = DB::table('xcart_categories')
        ->where('parentid', 0)
        ->where('avail', 'Y')
        ->orderby('order_by')
        ->get();

        $categories = DB::table('xcart_categories')
        ->select('xcart_categories.*')
        ->addSelect(DB::raw('(SELECT COUNT(*) FROM xcart_products_categories WHERE xcart_products_categories.categoryid = xcart_categories.categoryid) AS product_count'))
        ->where('avail', 'Y')
        ->where('product_count', '>=', 3)
        ->inRandomOrder()
        ->take(5)
        ->get();

        $bestsellers = array();
        foreach ($categories as $category) {
            $bestsellers[$category->category] = DB::table('xcart_products')
            ->join('xcart_products_categories', 'xcart_products.productid', '=', 'xcart_products_categories.productid')
            ->join('xcart_images_p', 'xcart_images_p.id', '=', 'xcart_products.productid')
            ->select('xcart_products.*','xcart_images_p.image_path')
            ->where('xcart_products_categories.categoryid', $category->categoryid)
            ->inRandomOrder()
            ->take(3)
            ->get();
        }

        $ramdomproducts = DB::table('xcart_products')
        ->join('xcart_images_p', 'xcart_images_p.id', '=', 'xcart_products.productid')
        ->select('xcart_products.*', 'xcart_images_p.image_path')
        ->inRandomOrder()
        ->take(10)
        ->get();

        return view('welcome', compact('categorias', 'bestsellers', 'ramdomproducts'));
    }

    public function categoria($slug)
    {

        $categoria = xcart_categorie::where('slug', $slug)->first();
        $id = $categoria->categoryid;

        $categoria = DB::table('xcart_categories')
        ->where('categoryid',$id)->first();

        $subcategorias = DB::table('xcart_categories')
        ->join('xcart_images_c', 'xcart_categories.categoryid', '=', 'xcart_images_c.id')
        ->select('xcart_categories.*', 'xcart_images_c.image_path')
        ->where('parentid', $id)
        ->where('xcart_categories.avail', 'Y')->get();

        // $productos = DB::table('xcart_products')
        $productos = xcart_product::
        leftjoin('xcart_products_categories', 'xcart_products.productid', '=', 'xcart_products_categories.productid')
        ->leftjoin('xcart_images_p', 'xcart_products.productid', '=', 'xcart_images_p.id')
        ->where('xcart_products_categories.categoryid', $id)
        ->where('xcart_products.forsale', 'Y')
        ->select('xcart_products.*', 'xcart_images_p.image_path')
        ->get();


       return view('productos.index', compact('categoria', 'subcategorias', 'productos'));
    }

    public function producto($slug)
    {
        $product = xcart_product::where('slug', $slug)->first();

        $id = $product->productid;

       $imagenes = DB::table('xcart_images_d')
       ->where('id', $id)
       ->get();


       $randomProducts = DB::table('xcart_products')
       ->join('xcart_images_p', 'xcart_products.productid', '=', 'xcart_images_p.id')
       ->select('xcart_products.*', 'xcart_images_p.image_path')
       ->inRandomOrder()
       ->take(6)
       ->get();

      $producto = DB::table('xcart_products')
      ->join('xcart_pricing', 'xcart_products.productid', '=', 'xcart_pricing.productid')
      ->where('xcart_products.productid', $id)
      ->select('xcart_products.*', 'xcart_pricing.price')
      ->orderBy('xcart_pricing.priceid', 'desc')
      ->limit(1)
      ->first();

      $variantes = DB::table('xcart_variants')
      ->join('xcart_pricing', 'xcart_variants.variantid', '=', 'xcart_pricing.variantid')
      ->where('xcart_variants.productid', $id)
      ->select('xcart_variants.*', 'xcart_pricing.price')
      ->get();


        return view('productos.detail', compact('producto', 'imagenes','variantes', 'randomProducts'));
    }

    public function buscar(REQUEST $request)
    {
        $buscar = $request->input('producto');

        $productos = xcart_product::
        leftjoin('xcart_images_p', 'xcart_products.productid', '=', 'xcart_images_p.id')
        ->where('xcart_products.forsale', 'Y')
        ->where('product', 'like', "%$buscar%")
        ->select('xcart_products.*', 'xcart_images_p.image_path')
        ->get();

        return view('search', compact('productos', 'buscar'));

    }

}
