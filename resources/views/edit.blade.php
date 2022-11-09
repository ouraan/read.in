@extends('layouts.app')

@section('content')
     <div class="container-fluid form-update" id="form-update">
        <form action="/update/{{$book->id}}" class="shadow" method="POST">
            @csrf
            @method('PATCH')
            <h3>Update your reading.</h3>
            <p class="subtitle mb-4">Fill this form below</p>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control mt-2" name="title" value="{{$book->title}}">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control mt-2" name="author" value="{{$book->author}}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image URL</label>
                <input type="text" class="form-control mt-2" name="image" value="{{$book->image}}">
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="number" class="form-control mt-2" name="year" value="{{$book->year}}">
            </div>
            <div class="mb-4">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control mt-2" name="description" value="{{$book->description}}">
            </div>
            <div class="mb-4">
                <label for="page" class="form-label">Last read</label>
                <input type="text" class="form-control mt-2" name="page" value="{{$book->page}}">
            </div>
            <div class="mb-4">
                <input type="hidden" name="iscompleted" value="false">
                <input type="checkbox" name="iscompleted" value="true" class="form-check-input" 
                @if($book->iscompleted == "true")
                    checked
                @endif >
                <label for="iscompleted" class="form-check-label">Mark as completed</label>
            </div>
            <div class="float-end" id="buttons-form">
                <button type="submit" class="form-control" id="btn-submit">Update</button>
            </div>
        </form>
    </div>
@endsection