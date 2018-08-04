@extends ('layouts.base')


@section('content')


    <div class="row">
        <h1>Счётчик</h1>
    </div>

    <div class="row">


        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>counter</th>
            </tr>
            </thead>


            @foreach ($articles as $article)

                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->name }}</td>
                    <td>Counter: {{ $article->counter }}
                        <a href="/{{ $article->id }}">+</a>
                    </td>
                </tr>
            @endforeach


        </table>


    </div>


@endsection