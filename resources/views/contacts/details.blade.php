@extends('layout.main')

@section('title', 'Create Contact')

@section('content')

    <p>Name: {{ $contact['name'] }}</p>
    <p>Email: {{ $contact['email'] }}</p>
    <p>Contact: {{ $contact['contact'] }}</p>


@endsection
