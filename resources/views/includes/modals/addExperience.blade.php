<div class="container">
    <div class="row">

        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#experienceModal">
            Add your experience
        </button>

        <div class="modal fade" id="experienceModal" tabindex="-1" aria-labelledby="experienceModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="experienceModalLabel">Education</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{asset('/experience')}}">
                            @csrf
                            <div class="row g-3">
                                <input type="hidden" value="{{ $user->id }}" name="userId">
                                <div class="col-sm-12">
                                    <label for="company" class="form-label">Company name</label>
                                    <input type="text" class="form-control" placeholder="Company name"
                                           name="company">
                                </div>

                                <div class="col-sm-12">
                                    <label for="position" class="form-label">Position</label>
                                    <input type="text" class="form-control"
                                           placeholder="position" name="position">
                                </div>
                                <div class="col-md-12">
                                    <label for="stack" class="form-label">Stack</label>
                                    <select class="form-select" name="stack">
                                        <option value="Full-stack">Full-stack</option>
                                        <option value="Part-time">Part-time</option>
                                        <option value="Piecework">Piecework</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="startDate" class="form-label">Start date</label>
                                    <input type="date" class="form-control" name="jobStartDate">
                                </div>
                                <div class="col-md-12">
                                    <label for="endDate" class="form-label">End date</label>
                                    <input type="date" class="form-control" name="jobEndDate">
                                </div>
                                <div class="col-md-12">
                                    <label for="description" class="textarea-label">Description</label>
                                    <textarea class="form-control" name="description" rows="4" cols="50"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for="condition" class="form-label">Condition</label>
                                    <select class="form-select" name="condition">
                                        <option value="Main-job">Main-job</option>
                                        <option value="Achievement">Achievement</option>
                                        <option value="Piecework">Piecework</option>
                                    </select>
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
