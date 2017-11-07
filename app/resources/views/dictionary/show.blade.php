@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="btn-group pull-right">
                    <a href="{{ route('dictionaries.edit', ['dictionary' => $dictionary->id]) }}" class="btn btn-default">Edit</a>
                </div>
            </div>
            <div class="col-md-12">
                <h1>{{ $dictionary->name }}</h1>
                <ul>
                    @forelse($dictionary->words as $word)
                        <li>{{$word->word}}</li>
                    @empty
                        <li>Empty</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection
