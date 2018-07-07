@extends('layouts.app')

@section('content')
    <h1>Contact</h1>
    {!! Form::open(['url' => 'contact/sumbit']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['placeholder' => 'Enter Name', 'class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'E-Mail Address')}}
            {{Form::text('email', '', ['placeholder' => 'example@gmail.com', 'class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('message', 'Message')}}
            {{Form::textarea('message', '', ['placeholder' => 'Enter Message', 'class' => 'form-control'])}}
        </div>
    {!! Form::close() !!}
@endsection