@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{ Form::model($dictionary, ['route' => ['dictionaries.update', $dictionary->id], 'method' => 'PUT']) }}
                {!! Form::text('name') !!}
                {!! Form::submit('Save') !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
