<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/style_dashboard.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg p-4 bg-white">
        <div class="container-fluid">
            <a href="/dashboard" class="navbar-brand text-dark" id="logo">read.<span class="text-warning">in</span></a>
            <div class="collapse navbar-collapse">
                <form action="" class="d-flex mx-5">
                    <input type="text" class="form-control me-2" placeholder="Search..." aria-label="Search" id="input-search">
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <button type="button" id="btn-add">Add book</button>
                    </li>
                    <li class="nav-item mx-4 pt-2">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        <span class="px-1">Rizha Alfianita</span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid pt-4 px-5 d-flex" id="div-title">
        <h4>Your reading</h4>
        <p class="py-2 px-3">All books</p>
    </div>
    <div class="container-fluid p-5">
       <div class="row row-cols-5">
            @foreach($books as $book)
            <a href="/edit/{{$book->id}}" class="col btn-update" id="btn-update">
                <div class="card text-center pt-4 border-0 rounded">
                    <img src="../assets/hp 8.jpg" class="mx-auto rounded shadow" alt="" height="auto" width="150">
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
            @endforeach
        </div>
    </div>
    <div class="container-fluid form-hidden" id="form-add">
        <form action="/store" class="shadow" method="POST">
            @csrf
            <h3>Add your reading.</h3>
            <p class="subtitle mb-4">Fill this form below</p>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control mt-2" name="title" placeholder="Harry Potter and The Deathly Hollows I">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control mt-2" name="author" placeholder="J.K Rowling">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image URL</label>
                <input type="text" class="form-control mt-2" name="image" placeholder="https://google.com/image.png">
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="number" class="form-control mt-2" name="year" placeholder="2009">
            </div>
            <div class="mb-4">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control mt-2" name="description" placeholder="Harry Potter 7th novel">
            </div>
            <div class="mb-4">
                <label for="page" class="form-label">Last read</label>
                <input type="text" class="form-control mt-2" name="page" placeholder="37">
            </div>
            <div class="mb-4">
                <input type="hidden" name="iscompleted" value="false">
                <input type="checkbox" name="iscompleted" value="true" class="form-check-input">
                <label for="iscompleted" class="form-check-label">Mark as completed</label>
            </div>
            <div class="d-flex float-end" id="buttons-form">
                <button type="button" class="form-control text-center mx-2" id="btn-close">Close</button>
                <button type="submit" class="form-control" id="btn-submit">Add</button>
            </div>
        </form>
    </div>
    <script src="{{ asset('scripts/script_dashboard.js') }}"></script>
</body>
</html>