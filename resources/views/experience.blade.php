<div class="container data-sections">
    <main>
        <div class="row g-5">
            <div class="col-md-12">
                <h2 class="mb-3">Work experience</h2>

                @if($user->experience->isEmpty())
                    <h5>No records!</h5>

                @else
                    @foreach($user->experience as $jobExperience)
                        <div class="sections">
                            <form method="POST" action="{{asset('/experience/'.$jobExperience->id)}}">
                                @csrf

                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label for="company" class="form-label">Company name</label>
                                        <input type="text" class="form-control" name="company"
                                               value="{{ $jobExperience->company }}">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="position" class="form-label">Position</label>
                                        <input type="text" class="form-control" name="position"
                                               value="{{$jobExperience->position}}">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="stack" class="form-label">Stack</label>
                                        <select class="form-select" name="stack">
                                            <option
                                                value="{{$jobExperience->stack}}">{{$jobExperience->stack}}</option>
                                            <option value="Full-stack">Full-stack</option>
                                            <option value="Part-time">Part-time</option>
                                            <option value="Piecework">Piecework</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="startDate" class="form-label">Start date</label>
                                        <input type="date" class="form-control" name="jobStartDate"
                                               value="{{$jobExperience->job_start_date}}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="endDate" class="form-label">End date</label>
                                        <input type="date" class="form-control" name="jobEndDate"
                                               value="{{$jobExperience->job_end_day}}">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="description" class="textarea-label">Description</label>
                                        <textarea class="form-control" name="description" rows="4" cols="500">
                                        {{$jobExperience->description}}
                                    </textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="condition" class="form-label">Condition</label>
                                        <select class="form-select" name="condition">
                                            <option
                                                value="{{$jobExperience->job_condition}}">{{$jobExperience->job_condition}}</option>
                                            <option value="Main-job">Main-job</option>
                                            <option value="Achievement">Achievement</option>
                                            <option value="Piecework">Piecework</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-outline-warning">
                                        Edit
                                    </button>
                                </div>
                            </form>
                            <form action="{{asset('/experience/'.$jobExperience->id)}}" method="POST">

                                @method('DELETE')
                                @csrf
                                <div class="row g-3">
                                    <button type="submit" class="btn btn-outline-danger">
                                        Delete
                                    </button>
                                </div>
                            </form>
                        </div>
            </div>
            @endforeach
            @endif

        </div>
    </main>
    @include('includes.modals.addExperience')
</div>
