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

        return view('welcome', compact('categorias'));
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
