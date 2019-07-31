<?php

namespace App\Http\Controllers;

use App\Address;
use App\Http\Requests\AddressRequest;
use Illuminate\Http\Request;

class AddressesController extends Controller
{
    public function store(AddressRequest $request)
    {
        $attributes = $request->all();
        $attributes['user_id'] = auth()->id();

        Address::make()->add($attributes);

        return redirect()->back()->with('status', 'Address added!');
    }

    public function destroy(Address $address)
    {
        $address->delete();

        return redirect()->back()->with('status', 'Address deleted!');
    }
}
