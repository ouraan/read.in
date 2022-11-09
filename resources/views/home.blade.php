@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-4 px-5 d-flex" id="div-title">
        <h4>Your reading</h4>
        <p class="py-2 px-3">All books</p>
    </div>
    <div class="container-fluid p-3">
       <div class="row row-cols-5">
            @forelse($books as $book)
            <a href="/edit/{{$book->id}}" class="col btn-update" id="btn-update">
                <div class="card text-center pt-4 border-0 rounded">
                    <img src="{{$book->image}}" class="mx-auto rounded shadow" alt="" height="210" width="150">
                    <div class="card-body">
                        <p class="mb-2" id="name-text">{{$book->title}}</p>
                        @if($book->iscompleted == "true")
                            <p id="page-text" class="text-success">Completed</p>
                        @else
                            <p id="page-text">Page #{{$book->page}}</p>
                        @endif
                    </div>
                </div>
            </a>
            @empty
            <p class="text-center">No result found for keyword <strong>{{ request()->query('search') }}</strong></p>
            @endforelse
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('scripts/script_dashboard.js') }}"></script>
@endsection