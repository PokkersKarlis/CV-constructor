<div class="container">
    <div class="row">

        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#customModal">
            Add your custom field
        </button>

        <div class="modal fade" id="customModal" tabindex="-1" aria-labelledby="customModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="customModalLabel">Education</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{asset('/custom')}}">
                            @csrf
                            <div class="row g-3">
                                <input type="hidden" value="{{ $user->id }}" name="userId">
                                <div class="col-sm-12">
                                    <label for="title" class="form-label">Title of your field</label>
                                    <input type="text" class="form-control" placeholder="Title of your field"
                                           name="title">
                                </div>

                                <div class="col-md-12">
                                    <label for="description" class="textarea-label">Description</label>
                                    <textarea class="form-control" name="description" rows="4" cols="50"></textarea>
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
