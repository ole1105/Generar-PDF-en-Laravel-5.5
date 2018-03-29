<?php

namespace App\Exports;

use App\Product;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class ProductsExport implements FromView
{
    use Exportable;
    public function view(): View
    {
        return view('pdf.products', [
            'products' => Product::all()
        ]);
    }
}
