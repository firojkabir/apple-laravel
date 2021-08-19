<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index()
    {
        return view('phones');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'brand' => 'required',
            'price' => 'required',
            'state' => 'required',
        ]);

        Phone::create([
            'name' => $request->name,
            'brand' => $request->brand,
            'price' => $request->price,
            'state' => $request->state,
        ]);

        return redirect()->route('phones');
    }
}
