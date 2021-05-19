<div class="container">
    <div class="row">

        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add your address
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Address</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{asset('/address')}}">
                            @csrf
                            <div class="mb-3">
                                <input type="hidden" value="{{ $user->id }}" name="userId">
                                <label for="country" class="col-form-label">Country:</label>
                                <input type="text" class="form-control" name="country">

                                <label for="city" class="col-form-label">City:</label>
                                <input type="text" class="form-control" name="city">

                                <label for="street" class="col-form-label">Street:</label>
                                <input type="text" class="form-control" name="street">

                                <label for="houseNumber" class="col-form-label">House number:</label>
                                <input type="number" class="form-control" name="houseNumber">

                                <label for="flatNumber" class="col-form-label">Flat number:</label>
                                <input type="number" class="form-control" name="flatNumber">

                                <label for="houseName" class="col-form-label">House name:</label>
                                <input type="text" class="form-control" name="houseName">

                                <label for="postalCode" class="col-form-label">Postal code:</label>
                                <input type="text" class="form-control" name="postalCode">

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
