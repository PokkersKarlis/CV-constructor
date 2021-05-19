@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger col-md-12" role="alert">
            {{ $error }}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success col-md-12" role="alert">
        {{ session('success') }}
    </div>
@endif


