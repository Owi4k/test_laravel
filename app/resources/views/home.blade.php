@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="btn-group">
                    <a href="{{route('dictionaries.create')}}" class="btn btn-success">Create</a>
                </div>
            </div>
            @foreach($dictionaries as $dictionary)
                <div class="col-md-3 col-sm-4">
                    <div class="panel panel-body">
                        <h4>
                            <a href="{{ route('dictionaries.show', ['dictionary' => $dictionary->id]) }}">{{ $dictionary->name }}</a>
                        </h4>
                        <ul>
                            @forelse($dictionary->words as $word)
                                <li>{{$word->word}}</li>
                            @empty
                                <li>Empty</li>
                            @endforelse
                        </ul>
                        <a class="btn btn-warning btn-sm"
                           href="{{ route('dictionaries.edit', ['dictionary' => $dictionary->id]) }}">Edit</a>
                        {!! Form::open(['route' => ['dictionaries.destroy', $dictionary->id], 'method' => 'DELETE']) !!}
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
