<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1> Add Book </h1>
    <form method="POST" action="/store/book">
        @csrf
        <div class="mb-3">
          <label for="book-title" class="form-label">Book Title</label>
          <input type="text" class="form-control" id="book-title" name="judulBuku">
        </div>

        <div class="mb-3">
            <label for="publisher-name" class="form-label">Publisher Name</label>
            <select class="form-select" name="namaPenerbit">
                <option selected>Open this select menu</option>
                @foreach ($penerbit_penerbit as $penerbit)
                    <option value="{{$penerbit->id}}">{{$penerbit->publisherName}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author Name</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="harga">
        </div>

        <div class="mb-3">
            <label for="release-date" class="form-label">Release Date</label>
            <input type="date" class="form-control" id="release-date" name="tanggalRilis">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
