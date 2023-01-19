<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        $categorias = DB::table('xcart_categories')->where('parentid', 0)->get();

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
    ->join('xcart_products_categories', 'xcart_products.productid', '=', 'xcart_products_categories.productid')
    ->join('xcart_images_P', 'xcart_products.productid', '=', 'xcart_images_P.id')
    ->where('xcart_products_categories.categoryid', $id)
    ->select('xcart_products.*', 'xcart_images_P.image_path')
    ->get();


       return view('productos.index', compact('categoria', 'subcategorias', 'productos'));
    }
}
