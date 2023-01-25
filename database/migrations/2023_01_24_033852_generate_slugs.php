<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Obtén todos los productos
        $products = DB::table('xcart_products')->get();

        // Recorre cada producto
        foreach ($products as $product) {
            // Genera el slug a partir del título
            $slug = Str::slug($product->title_tag);
            // Actualiza el producto con el nuevo slug
            DB::table('xcart_products')
                ->where('productid', $product->productid)
                ->update(['slug' => $slug]);
        }

        // Obtén todos las categorias
        $categories = DB::table('xcart_categories')->get();

        // Recorre cada categoria
        foreach ($categories as $product) {
            // Genera el slug a partir del título
            $slug = Str::slug($product->title_tag);
            // Actualiza el producto con el nuevo slug
            DB::table('xcart_categories')
                ->where('categoryid', $product->categoryid)
                ->update(['slug' => $slug]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
