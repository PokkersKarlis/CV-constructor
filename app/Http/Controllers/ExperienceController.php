<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddExperienceRequest;
use App\Models\Experience;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class ExperienceController extends Controller
{
    public function store(AddExperienceRequest $request): RedirectResponse
    {
        $experience = new Experience();

        $experience->user_id = $request->userId;
        $experience->company = $request->company;
        $experience->position = $request->position;
        $experience->stack = $request->stack;
        $experience->job_start_date = $request->jobStartDate;
        $experience->job_end_date = $request->jobEndDate;
        $experience->description = $request->description;
        $experience->job_condition = $request->condition;

        $experience->save();

        return Redirect::back()->with('success', 'Experience record created');
    }

    public function update(AddExperienceRequest $request, $id): RedirectResponse
    {
        $experience = Experience::find($id);

        $experience->company = $request->company;
        $experience->position = $request->position;
        $experience->stack = $request->stack;
        $experience->job_start_date = $request->jobStartDate;
        $experience->job_end_date = $request->jobEndDate;
        $experience->description = $request->description;
        $experience->job_condition = $request->condition;

        $experience->save();

        return Redirect::back()->with('success', 'Experience record edited');
    }

    public function destroy($id): RedirectResponse
    {
        $experience = Experience::find($id);

        $experience->delete();

        return Redirect::back()->with('success', 'Experience record deleted');
    }
}
