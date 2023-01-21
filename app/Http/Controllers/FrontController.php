<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function categoria($id)
    {
        $categoria = DB::table('xcart_categories')
        ->where('categoryid',$id)->first();

        $subcategorias = DB::table('xcart_categories')
        ->where('parentid', $id)
        ->where('avail', 'Y')->get();

        $productos = DB::table('xcart_products')
        ->leftjoin('xcart_products_categories', 'xcart_products.productid', '=', 'xcart_products_categories.productid')
        ->leftjoin('xcart_images_P', 'xcart_products.productid', '=', 'xcart_images_P.id')
        ->where('xcart_products_categories.categoryid', $id)
        ->where('xcart_products.forsale', 'Y')
        ->select('xcart_products.*', 'xcart_images_P.image_path')
        ->get();


       return view('productos.index', compact('categoria', 'subcategorias', 'productos'));
    }

    public function producto($id)
    {
        $imagenes = DB::table('xcart_images_d')
        ->where('id', $id)
        ->get();



        $randomProducts = DB::table('xcart_products')
        ->join('xcart_images_P', 'xcart_products.productid', '=', 'xcart_images_P.id')
        ->select('xcart_products.*', 'xcart_images_P.image_path')
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

        return view('productos.detail', compact('producto', 'imagenes', 'randomProducts'));
    }


}
