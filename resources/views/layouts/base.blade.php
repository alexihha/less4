<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Queue</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>




<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href="/">Счётчик</a>
            </li>
            <li class="nav-item {{ Request::is('queue') ? 'active' : '' }}">
                <a class="nav-link" href="queue">Очередь</a>
            </li>
        </ul>
    </div>
    <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto" href="#">L3</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <form class="form-inline" action="add">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">В работу</button>
                </form>
            </li>
        </ul>
    </div>
</nav>






<div class="container">

    @yield ('content')

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>