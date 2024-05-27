<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index()
    {
        return view('bills.index');
    }

    public function calculate(Request $request)
    {
        $usage = $request->input('usage');
        $bill = 0;

        if ($usage <= 25) {
            $bill = $usage * 150;
        } elseif ($usage <= 50) {
            $bill = (25 * 150) + (($usage - 25) * 170);
        } elseif ($usage <= 75) {
            $bill = (25 * 150) + (25 * 170) + (($usage - 50) * 210);
        } else {
            $bill = (25 * 150) + (25 * 170) + (25 * 210) + (($usage - 75) * 250);
        }

        return view('bills.index', [
            'usage' => $usage,
            'bill' => $bill
        ]);
    }
}
