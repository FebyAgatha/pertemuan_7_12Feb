<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Warehouse Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1> Warehouse : </h1>
    
        @foreach ($warehouses as $wh)
        <div class="card m-5" style="width: 18rem;">
            <h2> Address: {{$wh->address}} </h2>
            <h3> Phone Number: {{$wh->phoneNum}} </h3>
            <ul>
                @foreach ($wh->bookList as $book)
                <li>
                    {{$book->author}} : {{$book->bookTitle}}
                </li>
                @endforeach
            </ul>
        </div>
        @endforeach

        {{-- <div class="card-body">
          <h5 class="card-title">{{$penerbit->publisherName}}</h5>
          @foreach ($penerbit->books as $buku)
          <p class="card-title"> {{$buku->bookTitle}} </p>
          @endforeach
        </div> --}}
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</body>
</html>