<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrController extends Controller
{
    public function index()
    {
        return view('pages.qr-generator');
    }

    public function generate(Request $request)
    {
        $qrtext = $request->input('qrtext');
        $qr = QrCode::size(200)->generate($qrtext);
        return view('pages.qr-generator', compact('qr'));
    }
}
