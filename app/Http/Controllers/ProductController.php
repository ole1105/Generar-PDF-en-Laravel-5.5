<?php

namespace App\Http\Controllers;

use App\Product;
use App\Exports\ProductsExport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }

    public function pdf()
    {        
        /**
         * toma en cuenta que para ver los mismos 
         * datos debemos hacer la misma consulta
        **/
        $products = Product::all(); 

        $pdf = PDF::loadView('pdf.products', compact('products'));

        return $pdf->download('listado.pdf');
    }
    
    public function excel()
    {   
        $products = new ProductsExport();
        return $products->download('products.xlsx');
        //return $products->download('products.ods');
    }
}
