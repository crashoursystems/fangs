@extends('layouts.app2')

@section('content')
    <link href="https://vjs.zencdn.net/7.5.5/video-js.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/dist/summernote-lite.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="/dist/summernote-lite.js"></script>
    <script src="/dist/lang/summernote-ru-RU.js"></script>
    <div class="card card-default">
        <div class="card-header">
            Update Clubs
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
            <form action="{{route('clubs.update', $club->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name" class="">Name</label>
                    <input type="text" id="name" class="form-control" name="name" value="{{$club->name}}">
                </div>
                <div class="form-group">
                    <label for="address" class="">Address</label>
                    <input type="text" id="address" class="form-control" name="address"  value="{{$club->address}}">
                </div>
                <div class="form-group">
                    <label for="place" class="">Place</label>
                    <input type="text" id="place" class="form-control" name="place" value="{{$club->place}}">
                </div>

                <div class="form-group">
                    <label for="priority" class="">Image</label>
                    <img src="{{$club->image}}" alt="">
                    <input type="file" id="image" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label for="priority" class="">Приоритеты</label>
                    <textarea name="priority" id="text" cols="30" rows="10" class="form-control">{{$club->priority}}</textarea>
                </div>
{{--                <div class="form-group">--}}
{{--                    <label for="priority">Content</label>--}}
{{--                    <input id="priority" type="hidden" name="priority" value="{{$club->priority}}">--}}
{{--                    <trix-editor input="priority"></trix-editor>--}}
{{--                </div>--}}

                <div class="form-group">
                    <button class="btn btn-success">Update Clubs</button>
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
    <script>
        $('#text').summernote();
    </script>
@endsection

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection
