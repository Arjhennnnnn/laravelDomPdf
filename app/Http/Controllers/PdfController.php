<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generatePdf()
    {

        $customers = Customer::all();

        $data = [
            'title' => 'Laravel DomPDF',
            'customers' => $customers

        ];

        $pdf = Pdf::loadView('generate-customer-pdf', $data);
        return $pdf->download('customers.pdf');
    }
}
