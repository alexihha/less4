@extends ('layouts.base')


@section('content')

    <div class="container">


        <div class="row">
            <h1>Очередь</h1>
        </div>





        <div class="row">
            <form class="form-inline" action="add">
                <button class="btn btn-outline-success my-2 my-sm-0 " type="submit">В работу</button>
            </form>
        </div>

        <br>

        <div class="row">


            <div class="dropdown open">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Фильтр
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <form class="form-inline" action="queue">
                        <button class="dropdown-item  {{ Request::is('queue') ? 'disabled' : '' }} " type="submit">В очереди</button>
                    </form>
                    <form class="form-inline" action="done">
                        <button class="dropdown-item  {{ Request::is('done') ? 'disabled' : '' }} " type="submit">Готово</button>
                    </form>
                </div>
            </div>

        </div>



    </div>
    <br>
    <div class="row">
        @if(isset($_GET['id']))


            <div class="alert alert-secondary" role="alert">
                Задача с id {{  $_GET['id'] }} отправлена в работу.
            </div>


        @endif
    </div>
    <div class="row">


        @if (count($articles))



            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th>date</th>
                    <th>id</th>
                    <th>status</th>
                </tr>
                </thead>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->created_at }}</td>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->status }}</td>
                    </tr>
                @endforeach
            </table>

        @else
            <div class="alert alert-success" role="alert">
                Очередь пуста!
            </div>
        @endif
    </div>
    </div>
@endsection