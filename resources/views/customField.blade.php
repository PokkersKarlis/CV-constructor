<div class="container data-sections">
    <main>
        <div class="row g-5">
            <div class="col-md-12">
                <h2 class="mb-3">Custom data</h2>

                @if($user->customData->isEmpty())
                    <h5>No records!</h5>

                @else
                    @foreach($user->customData as $custom)
                        <div class="sections">
                            <form method="POST" action="{{asset('/custom/'.$custom->id)}}">
                                <input type="hidden" name="userId" value="{{ $custom->user_id }}">
                                @csrf

                                <div class="row g-3">
                                    <div class="col-sm-12">
                                        <label for="title" class="form-label">Title of your field</label>
                                        <input type="text" class="form-control" placeholder="Title of your field"
                                               name="title" value="{{$custom->title}}">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="description" class="textarea-label">Description</label>
                                        <textarea class="form-control" name="description" rows="4" cols="50">
                                            {{ $custom->description }}
                                        </textarea>
                                    </div>
                                    <button type="submit" class="btn btn-outline-warning">
                                        Edit
                                    </button>
                                </div>
                            </form>
                            <form action="{{asset('/custom/'.$custom->id)}}" method="POST">

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
    @include('includes.modals.addCustomField')
</div>
