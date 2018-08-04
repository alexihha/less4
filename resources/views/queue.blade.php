@extends ('layouts.base')


@section('content')

    <div class="container">


        <div class="row">
            <h1>Очередь</h1>
        </div>
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