<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagihanController extends Controller
{
    public function index()
    {
        return view('tagihan');
    }

    public function hitungTagihan(Request $request)
    {
        $pemakaian = $request->input('pemakaian');
        $tagihan = 0;

        if ($pemakaian <= 25) {
            $tagihan = $pemakaian * 150;
        } elseif ($pemakaian > 25 && $pemakaian <= 50) {
            $tagihan = 25 * 150 + ($pemakaian - 25) * 170;
        } elseif ($pemakaian > 50 && $pemakaian <= 75) {
            $tagihan = 25 * 150 + 25 * 170 + ($pemakaian - 50) * 210;
        } else {
            $tagihan = 25 * 150 + 25 * 170 + 25 * 210 + ($pemakaian - 75) * 250;
        }

        return view('tagihan', compact('tagihan'));
    }
}