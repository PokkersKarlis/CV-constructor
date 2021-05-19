<div class="container data-sections">
    <main>
        <div class="row g-5">
            <div class="col-md-12">
                <h2 class="mb-3">Address</h2>

                @if($user->address->isEmpty())
                    <h5>No records!</h5>

                @else
                    @foreach($user->address as $address)
                        <div class="sections">
                            <form method="POST" action="{{asset('/address/'.$address->id)}}">

                                @csrf

                                <div class="row g-3">
                                    <div class="col-sm-4">
                                        <label for="country" class="form-label">Country</label>
                                        <input type="text" class="form-control" name="country"
                                               value="{{ $address->country }}">
                                    </div>

                                    <div class="col-sm-4">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control" name="city"
                                               value="{{ $address->city }}">
                                    </div>

                                    <div class="col-sm-4">
                                        <label for="street" class="form-label">Street</label>
                                        <input type="text" class="form-control" name="street"
                                               value="{{ $address->street }}">
                                    </div>

                                    <div class="col-sm-3">
                                        <label for="houseNumber" class="form-label">House number</label>
                                        <input type="number" class="form-control" name="houseNumber"
                                               value="{{ $address->house_number }}">
                                    </div>

                                    <div class="col-sm-3">
                                        <label for="flatNumber" class="form-label">Flat number</label>
                                        <input type="number" class="form-control" name="flatNumber"
                                               value="{{ $address->flat_number }}">
                                    </div>

                                    <div class="col-sm-3">
                                        <label for="houseName" class="form-label">Home name</label>
                                        <input type="text" class="form-control" name="houseName"
                                               value="{{ $address->home_name }}">
                                    </div>

                                    <div class="col-sm-3">
                                        <label for="postalCode" class="form-label">Postal code</label>
                                        <input type="text" class="form-control" name="postalCode"
                                               value="{{ $address->postal_code }}">
                                    </div>


                                    <button type="submit" class="btn btn-outline-warning">
                                        Edit
                                    </button>
                                </div>
                            </form>
                            <form action="{{asset('/address/'.$address->id)}}" method="POST">

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
    @include('includes.modals.addAddress')
</div>

