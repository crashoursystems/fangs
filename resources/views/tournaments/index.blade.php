@extends('layouts.app2')

@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a href="{{route('tournaments.create')}}" class="btn btn-success">Добавить Турнир</a>
    </div>
    <div class="card card-default">
        <div class="card-header">
            Турниры
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                <th>Имя</th>
                <th>Удалить</th>
                <th>Обновить</th>
                </thead>

                <tbody>
                @foreach($tournaments as $tournament)
                    <tr>
                        <td>
                            {{$tournament->name}}
                        </td>
                        <td>
                            <form action="{{route('tournaments.destroy',$tournament->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                            </form>
                        </td>
                        <td>
                            <a href="{{route('tournaments.edit', $tournament->id)}}" class="btn btn-success btn-sm">Обновить</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
