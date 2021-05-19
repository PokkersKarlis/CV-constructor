<?php

namespace App\Http\Controllers;


use App\Http\Requests\AddCustomDataRequest;
use App\Models\CustomData;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class CustomDataController extends Controller
{
    public function store(AddCustomDataRequest $request): RedirectResponse
    {
        $customData = new CustomData();

        $customData->user_id = $request->userId;
        $customData->title = $request->title;
        $customData->description = $request->description;

        $customData->save();

        return Redirect::back()->with('success', 'Custom data added');
    }

    public function update(AddCustomDataRequest $request, $id): RedirectResponse
    {
        $customData = CustomData::find($id);

        $customData->title = $request->title;
        $customData->description = $request->description;

        $customData->save();

        return Redirect::back()->with('success', 'Custom data edited');
    }

    public function destroy($id): RedirectResponse
    {
        $customData = CustomData::find($id);

        $customData->delete();

        return Redirect::back()->with('success', 'Custom data deleted');
    }
}
