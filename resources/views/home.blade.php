@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio officiis velit asperiores voluptatum beatae, illo commodi, tempora culpa atque neque laborum! Veritatis itaque ipsum non, dicta eos enim impedit atque?</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection