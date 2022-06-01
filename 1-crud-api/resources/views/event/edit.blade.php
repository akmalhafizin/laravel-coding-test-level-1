@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/event" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Edit Event</h1>
                    <p>Edit and submit this form to update a event</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Post Name</label>
                                <input type="text" id="name" class="form-control" name="name"
                                       placeholder="Enter Post Name" value="{{ $post->name }}" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="slug">Post Slug</label>
                                <textarea id="slug" class="form-control" name="slug" placeholder="Enter Post Slug"
                                          rows="5" required>{{ $post->slug }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Update Event
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection