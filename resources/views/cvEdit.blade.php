@extends('layouts.app')

@section('content')

    <div class="container">
        <main>
            <div class="row g-5">
                <div class="col-md-12">
                    <h2>Here you can edit your personal information or add new one</h2>

                    <form class="form-horizontal" method="POST" action="{{asset('/edit/'.$user->id)}}">
                        @csrf
                        <fieldset>

                            @include('includes.messages')
                            <div class="row g-3">
                            <div class="col-md-6">
                                <label class="col-md-6 control-label" for="firstName">First Name</label>
                                <input id="firstName" name="firstName" placeholder="Insert your First Name"
                                       class="form-control input-md" type="text" value="{{$user->name}}">
                            </div>

                            <div class="col-md-6">
                                <label class="col-md-6 control-label" for="lastName">Last Name</label>
                                <input id="lastName" name="lastName" placeholder="Insert your Last Name"
                                       class="form-control input-md" type="text" value="{{$user->surname}}">
                            </div>

                            <div class="col-md-6">
                                <label class="col-md-6 control-label" for="phone">Phone</label>
                                <input id="phone" name="phone" placeholder="Insert your phone number"
                                       class="form-control input-md" type="text" value="{{$user->phone}}">
                            </div>

                            <div class="col-md-6">
                                <label class="col-md-6 control-label" for="email">Email</label>
                                <input id="email" name="email" placeholder="Insert your Email"
                                       class="form-control input-md" type="text" value="{{$user->email}}">
                            </div>

                            <button type="submit" class="btn btn-outline-warning">Edit</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
    @include('address')
    @include('education')
    @include('experience')
    @include('customField')
@endsection
