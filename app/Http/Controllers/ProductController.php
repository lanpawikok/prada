<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug)
    {
        $products = [

            // === WOMEN ===
            'light-re-nylon-midi-dress' => [
                'name' => 'Light Re-Nylon midi-dress',
                'price' => '$3,050',
                'color' => 'Blue',
                'image' => 'https://www.prada.com/content/dam/pradabkg_products/2/230/230736/1WQ9F0AA7/230736_1WQ9_F0AA7_S_OOO_SLF.jpg'
            ],
            'cotton-canvas-dress' => [
                'name' => 'Cotton canvas dress',
                'price' => '$2,350',
                'color' => 'White',
                'image' => 'https://www.prada.com/content/dam/pradabkg_products/P/P3P/P3P75R/16NTF0009/P3P75R_16NT_F0009_S_OOO_SLF.jpg'
            ],
            'silk-broadcloth-midi-dress' => [
                'name' => 'Silk broadcloth midi-dress',
                'price' => '$5,100',
                'color' => 'Beige',
                'image' => 'https://www.prada.com/content/dam/pradabkg_products/P/P3P/P3P91/17C7F0304/P3P91_17C7_F0304_S_OOO_SLF.jpg'
            ],
            'printed-georgette-dress' => [
                'name' => 'Printed georgette dress',
                'price' => '$5,900',
                'color' => 'Floral',
                'image' => 'https://www.prada.com/content/dam/pradabkg_products/P/P3Q/P3Q04/17MKF0075/P3Q04_17MK_F0075_S_OOO_SLF.jpg'
            ],

            // === MEN ===
            're-nylon-hooded-blouson' => [
                'name' => 'Cotton jacket',
                'price' => '$3,600',
                'color' => 'Navy',
                'image' => 'https://www.prada.com/content/dam/pradabkg_products/S/SGC/SGC629/1480F0192/SGC629_1480_F0192_S_OOO_MDD.jpg/_jcr_content/renditions/cq5dam.web.hebebed.2000.2000.jpg'
            ],
            're-nylon-bomber-jacket' => [
                'name' => 'Re-Nylon bomber jacket',
                'price' => '$2,350',
                'color' => 'Black',
                'image' => 'https://www.prada.com/content/dam/pradabkg_products/S/SGC/SGC629/1480F0192/SGC629_1480_F0192_S_OOO_MDD.jpg/_jcr_content/renditions/cq5dam.web.hebebed.2000.2000.jpg'
            ],
            'technical-gabardine-trench-coat' => [
                'name' => 'Re-Nylon coat',
                'price' => '$2,650',
                'color' => 'Dark Grey',
                'image' => 'https://www.prada.com/content/dam/pradabkg_products/S/SGC/SGC745/1WQ8F0002/SGC745_1WQ8_F0002_S_OOO_SLF.jpg'
            ],
            're-nylon-puffer-jacket' => [
                'name' => 'Single-breasted cotton coat',
                'price' => '$4,900',
                'color' => 'Ivory',
                'image' => 'https://www.prada.com/content/dam/pradabkg_products/U/UC5/UC525D/16L5F0002/UC525D_16L5_F0002_S_OOO_SLF.jpg'
            ],

        ];

        $product = $products[$slug] ?? abort(404);

        return view('product', compact('product'));
    }
}
