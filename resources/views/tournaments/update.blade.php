@extends('layouts.app2')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            Изменить Турнир
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach($errors->all() as $error)
                            <li class="list-group-item text-danger">
                                {{$error}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('tournaments.update', $tournament->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name" class="">Имя</label>
                    <input type="text" id="name" class="form-control" name="name" value="{{$tournament->name}}">
                </div>


                <div class="form-group">
                    <label for="href" class="">Ссылка</label>
                    <input type="text" id="href" class="form-control" name="href" value="{{$tournament->href}}">
                </div>

                <div class="form-group">
                    <label for="description">Контент</label>
                    <textarea rows="5" cols="5" name="description" class="form-control">{{$tournament->description}}</textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-success">Изменить Турнир</button>
                </div>

            </form>
        </div>
    </div>
@endsection

