@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($words as $word)
                <div class="col-md-12">
                    {{$word->word}}
                </div>
            @endforeach
        </div>
    </div>
@endsection
