<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCvRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class CvController extends Controller
{

    public function index()
    {
        return view('cvForm');
    }

    public function store(AddCvRequest $request): RedirectResponse
    {
        $user = new User();

        $user->name = $request->firstName;
        $user->surname = $request->lastName;
        $user->phone = $request->phone;
        $user->email = $request->email;

        $user->save();

        return redirect()->route('editCv', $user->id)->with('success', 'New person created');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('cvEdit')->with('user', $user);
    }

    public function update(AddCvRequest $request, $id): RedirectResponse
    {
        $user = User::find($id);

        $user->name = $request->firstName;
        $user->surname = $request->lastName;
        $user->phone = $request->phone;
        $user->email = $request->email;

        $user->save();

        return Redirect::back()->with('success', 'Person data changed');
    }

    public function destroy($id): RedirectResponse
    {
        $user = User::find($id);

        $user->delete();
        $user->educations()->delete();
        $user->address()->delete();
        $user->experience()->delete();
        $user->customData()->delete();

        return Redirect::back()->with('success', 'Person data deleted');
    }
}
