<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\NotaVentaExport;
use Barryvdh\DomPDF\Facade\Pdf;

class AlquilerController extends Controller
{
    public function pdfNotaVenta($id)
    {
        //return Excel::download(new PedidosExport, 'reporte.xlsx');
        $customPaper = array(0,0,1200.00,283.80);
        $data = [
            'productos' => []
        ];
        $pdf = Pdf::loadView('alquiler.notaVenta', $data);
        //return $pdf->download('nota_venta-'.$id.'.pdf');
        return $pdf->setPaper($customPaper, 'landscape')->stream('nota_venta-'.$id.'.pdf');
    }
}
