@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($users as $user)
                <div class="col-md-12">
                    <h1>{{$user['name']}}</h1>
                </div>
            @endforeach
        </div>
    </div>
@endsection
