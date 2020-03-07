@extends('layouts.app2')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            Создать Турнир
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
            <form action="{{route('tournaments.store')}}" method="POST" >
                @csrf

                <div class="form-group">
                    <label for="name" class="">Имя</label>
                    <input type="text" id="name" class="form-control" name="name">
                </div>


                <div class="form-group">
                    <label for="href" class="">Ссылка</label>
                    <input type="text" id="href" class="form-control" name="href">
                </div>


                <div class="form-group">
                    <label for="description">Контент</label>
                    <textarea class="form-control" rows="5" cols="5" name="description"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Добавить Турнир</button>
                </div>

            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix-core.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <script>
        flatpickr('#published_at',{
            enableTime:true
        });
        $(document).ready(function() {
            $('.tags-selector').select2();
        });
    </script>
@endsection

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection
