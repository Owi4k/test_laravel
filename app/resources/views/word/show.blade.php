@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="btn-group pull-right">
{{--                    <a href="{{ route('dictionaries.edit', ['dictionary' => $dictionary->id]) }}" class="btn btn-default">Edit</a>--}}
                </div>
            </div>
            <div class="col-md-12">
                <h1>{{ $word->word }}</h1>
            </div>
        </div>
    </div>
@endsection
