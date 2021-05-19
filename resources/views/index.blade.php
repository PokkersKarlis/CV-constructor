@extends('layouts.app')

@section('content')

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2>CV list</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th>ID no.</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>&nbsp;</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($users->isEmpty())
                                <td>No records!</td>
                            @else
                                @foreach($users as $user)
                                    <tr class="alert" role="alert">
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->surname }}</td>
                                        <td>{{ $user->email }}</td>

                                        <td>
                                            <a href="{{asset ('print/'.$user->id)}}" class="btn btn-outline-primary">
                                                Print
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{asset('/edit/'.$user->id)}}" class="btn btn-outline-warning" on>
                                                Edit
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ asset('/delete/'.$user->id) }}" class="btn btn-outline-danger"
                                               onclick="event.preventDefault(); document.getElementById('submit-form').submit();">
                                                Delete
                                            </a>
                                            <form id="submit-form" action="{{ asset('/delete/'.$user->id)}}" method="POST" class="hidden">
                                                @csrf

                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <a href="{{ asset('/add') }}" class="btn btn-outline-success">Add CV</a>
            </div>
        </div>
    </section>

@endsection

