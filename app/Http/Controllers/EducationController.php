<?php

namespace App\Http\Controllers;


use App\Http\Requests\AddEducationRequest;
use App\Models\Education;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class EducationController extends Controller
{
    public function store(AddEducationRequest $request): RedirectResponse
    {
        $education = new Education();

        $education->user_id = $request->userId;
        $education->school = $request->school;
        $education->school_level = $request->schoolLevel;
        $education->school_status = $request->schoolStatus;
        $education->school_startDate = $request->schoolStartDate;
        $education->school_endDate = $request->schoolEndDate;

        $education->save();

        return Redirect::back()->with('success', 'Education record created');
    }

    public function update(AddEducationRequest $request, $id): RedirectResponse
    {
        $education = Education::find($id);

        $education->school = $request->school;
        $education->school_level = $request->schoolLevel;
        $education->school_status = $request->schoolStatus;
        $education->school_startDate = $request->schoolStartDate;
        $education->school_endDate = $request->schoolEndDate;

        $education->save();

        return Redirect::back()->with('success', 'Education record edited');
    }

    public function destroy($id): RedirectResponse
    {
        $education = Education::find($id);

        $education->delete();

        return Redirect::back()->with('success', 'Education record deleted');
    }
}
