<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsExport;
use PDF;

class ProductExportController extends Controller
{
    public function exportExcel()
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }

    public function exportPdf()
    {
        $products = Product::with('category')->get();

        $pdf = PDF::loadView('products.export_pdf', compact('products'));
        return $pdf->download('products.pdf');
    }
}

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsExport implements FromCollection
{
    public function collection()
    {
        return Product::all();
    }
}
