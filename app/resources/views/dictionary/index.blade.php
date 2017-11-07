@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($dictionaries as $dictionary)
                <div class="col-md-12">
                    {{$dictionary->name}}
                </div>
            @endforeach
        </div>
    </div>
@endsection
