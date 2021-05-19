<?php

namespace App\Http\Controllers;


use App\Http\Requests\AddAddressRequest;
use App\Models\Address;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class AddressController extends Controller
{

    public function store(AddAddressRequest $request): RedirectResponse
    {
        $address = new Address();

        $address->user_id = $request->userId;
        $address->country = $request->country;
        $address->city = $request->city;
        $address->street = $request->street;
        $address->house_number = $request->houseNumber;
        $address->flat_number = $request->flatNumber;
        $address->home_name = $request->houseName;
        $address->postal_code = $request->postalCode;

        $address->save();

        return Redirect::back()->with('success', 'Address added');

    }

    public function update(AddAddressRequest $request, $id): RedirectResponse
    {
        $address = Address::find($id);

        $address->country = $request->country;
        $address->city = $request->city;
        $address->street = $request->street;
        $address->house_number = $request->houseNumber;
        $address->flat_number = $request->flatNumber;
        $address->home_name = $request->houseName;
        $address->postal_code = $request->postalCode;

        $address->save();

        return Redirect::back()->with('success', 'Address updated');
    }

    public function destroy($id): RedirectResponse
    {
        $address = Address::find($id);

        $address->delete();

        return Redirect::back()->with('success', 'Address deleted');

    }
}
