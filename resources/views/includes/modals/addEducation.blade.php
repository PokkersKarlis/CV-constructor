<div class="container">
    <div class="row">

        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#educationModal">
            Add your education
        </button>

        <div class="modal fade" id="educationModal" tabindex="-1" aria-labelledby="educationModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="educationModalLabel">Education</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{asset('/education')}}">
                            @csrf
                            <div class="row g-3">
                                <input type="hidden" value="{{ $user->id }}" name="userId">
                                <div class="col-sm-12">
                                    <label for="schoolName" class="form-label">School name</label>
                                    <input type="text" class="form-control" placeholder="School name"
                                           name="school">
                                </div>

                                <div class="col-sm-12">
                                    <label for="schoolLevel" class="form-label">Faculty, field of study</label>
                                    <input type="text" class="form-control"
                                           placeholder="Faculty, field of study" name="schoolLevel">
                                </div>

                                <div class="col-md-12">
                                    <label for="schoolStatus" class="form-label">Status</label>
                                    <select class="form-select" name="schoolStatus">
                                        <option value="Finished">Finished</option>
                                        <option value="Discontinued">Discontinued</option>
                                        <option value="Learning">Learning</option>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <label for="startDate" class="form-label">Start date</label>
                                    <input type="date" class="form-control" name="schoolStartDate">
                                </div>
                                <div class="col-md-12">
                                    <label for="endDate" class="form-label">End date</label>
                                    <input type="date" class="form-control" name="schoolEndDate">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close
                                </button>
                                <button type="submit" class="btn btn-outline-success">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
