<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/add/publisher">Add Publisher</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/add/book">Add Book</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/add/warehouse">Add Warehouse</a>
              </li>
            </ul>
          </div>
          <div class="d-flex">
            @auth
              <form class="form-inline my-e my-lg-0" method="POST" action="/logout">
                @csrf
                <button class="btn btn-outline-danger" type="submit">Logout</button>
              </form>
            @else 
              <a href="/login" class="btn btn-outline-success" type="submit">Login</a>
            @endauth
            
          </div>
        </div>
      </nav>

    @foreach ($buku_buku as $buku)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$buku->bookTitle}}</h5>
          <h5 class="card-title">{{$buku->author}}</h5>
          <a href="/book/{{$buku->id}}" class="btn btn-primary">See More Detail</a>
          <a href="/update/book/{{$buku->id}}" class="btn btn-secondary">Update</a>
          <form action="/delete/book/{{$buku->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
          </form>
          <a href="book/warehouse/{{$buku->id}}" class="btn btn-warning">Book to Warehouse</a>
        </div>
    </div>
    @endforeach

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</body>
</html>