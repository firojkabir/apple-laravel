<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index()
    {
        $phones = Phone::all();

        return view('phones', [
            'phones' => $phones
        ]);
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

    public function edit($id)
    {
        $phone = Phone::find($id)->first();

        return view('edit')->with('phone', $phone);
    }

    public function update(Request $request, $id)
    {
        $phone = Phone::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'brand' => $request->input('brand'),
                'price' => $request->input('price'),
                'state' => $request->input('state'),
            ]);

        return redirect('/phones');
    }

    public function destroy($id)
    {
        $phone = Phone::find($id)->first();

        $phone->delete();

        return redirect('/phones');
    }
}
