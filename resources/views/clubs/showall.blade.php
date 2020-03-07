@extends('layouts.app2')

@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a href="{{route('clubs.create')}}" class="btn btn-success">Add Clubs</a>
    </div>
    <div class="card card-default">
        <div class="card-header">
            Clubs
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                <th>Name</th>
                <th>Address</th>
                <th>Place</th>
                <th>delete</th>
                <th>update</th>
                </thead>

                <tbody>
                @foreach($clubs as $club)
                    <tr>
                        <td>
                            <a href="/club/{{$club->id}}">{{$club->name}}</a>
                        </td>
                        <td>
                            {{$club->address}}
                        </td>
                        <td>
                            {{$club->place}}
                        </td>
                        <td>
                            <form action="{{route('clubs.destroy',$club->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                        <td>
                            <a href="{{route('clubs.edit', $club->id)}}" class="btn btn-success btn-sm">Update</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
