<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/united/bootstrap.min.css" rel="stylesheet" integrity="sha384-bzjLLgZOhgXbSvSc5A9LWWo/mSIYf7U7nFbmYIB2Lgmuiw3vKGJuu+abKoaTx4W6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <h1 class="text-center">ToDo</h1>
        <form class="form-create" method="post" action="{{ route('todo.store') }}">
            @csrf
            <input type="text" name="title" class="form-control col-10 input" placeholder="Enter ToDo">
            <button type="submit" class="btn btn-primary col-2">Submit</button>
        </form>
        @include('partial.error')
        @include('partial.message')
        <hr>
        <div class="row">
            <div class="col-8">
                @yield('current')
            </div>
            <div class="col-4">
                @yield('done')
            </div>
        </div>


    </div>

</body>
</html>
