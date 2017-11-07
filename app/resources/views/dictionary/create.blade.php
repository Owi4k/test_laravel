@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => 'dictionaries.store']) !!}
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name') !!}
                {!! Form::submit('Save') !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
