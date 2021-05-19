<div class="container data-sections">
    <main>
        <div class="row g-5">
            <div class="col-md-12">
                <h2 class="mb-3">Education</h2>

                @if($user->educations->isEmpty())
                    <h5>No records!</h5>

                @else
                    @foreach($user->educations as $education)
                        <div class="sections">
                            <form method="POST" action="{{asset('/education/edit/'.$education->id)}}">
                                @csrf

                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label for="schoolName" class="form-label">School name</label>
                                        <input type="text" class="form-control" name="school"
                                               value="{{ $education->school }}">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="schoolLevel" class="form-label">Faculty, field of study</label>
                                        <input type="text" class="form-control" name="schoolLevel"
                                               value="{{$education->school_level}}">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="schoolStatus" class="form-label">Status</label>
                                        <select class="form-select" name="schoolStatus">
                                            <option
                                                value="{{$education->school_status}}">{{$education->school_status}}</option>
                                            <option value="Finished">Finished</option>
                                            <option value="Discontinued">Discontinued</option>
                                            <option value="Learning">Learning</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="startDate" class="form-label">Start date</label>
                                        <input type="date" class="form-control" name="schoolStartDate"
                                               value="{{$education->school_startDate}}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="endDate" class="form-label">End date</label>
                                        <input type="date" class="form-control" name="schoolEndDate"
                                               value="{{$education->school_endDate}}">
                                    </div>
                                    <button type="submit" class="btn btn-outline-warning">
                                        Edit
                                    </button>
                                </div>
                            </form>
                            <form action="{{asset('/education/'.$education->id)}}" method="POST">

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
    @include('includes.modals.addEducation')
</div>
