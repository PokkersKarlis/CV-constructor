@extends('layouts.app')

@section('content')

    <div class="container">
        <main>
            <div class="row g-5">
                <div class="col-md-12">
                    <h2 class="mb-3">Please add your personal information</h2>

                    <form class="form-horizontal" method="POST" action="{{route('createCv')}}">
                        @csrf
                        <fieldset>

                            <div class="row g-3">

                                @include('includes.messages')

                                <div class="col-md-6">
                                    <label class="col-md-6 control-label" for="firstName">First Name</label>
                                    <input id="firstName" name="firstName" placeholder="Insert your First Name"
                                           class="form-control input-md" type="text">
                                    <span class="help-block"> </span>
                                </div>

                                <div class="col-md-6">
                                    <label class="col-md-6 control-label" for="lastName">Last Name</label>
                                    <input id="lastName" name="lastName" placeholder="Insert your Last Name"
                                           class="form-control input-md" type="text">
                                    <span class="help-block"> </span>
                                </div>

                                <div class="col-md-6">
                                    <label class="col-md-6 control-label" for="phone">Phone</label>
                                    <input id="phone" name="phone" placeholder="Insert your phone number"
                                           class="form-control input-md" type="text">
                                    <span class="help-block"> </span>
                                </div>

                                <div class="col-md-6">
                                    <label class="col-md-6 control-label" for="email">Email</label>
                                    <input id="email" name="email" placeholder="Insert your Email"
                                           class="form-control input-md" type="text">
                                    <span class="help-block"> </span>
                                </div>
                                <button type="submit" class="btn btn-outline-primary">Add</button>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>

@endsection
