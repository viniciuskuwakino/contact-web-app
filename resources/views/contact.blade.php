@extends('layout.main')

@section('title', 'Contacts')

@section('content')


    @foreach ($contacts as $contact)
    <p>Name: {{ $contact['name'] }}</p>
    <p>Email: {{ $contact['email'] }}</p>
    <p>Contact: {{ $contact['contact'] }}</p>
    <a href="{{route('contacts.details', $contact['id'])}}">Details</a>
    <a href="{{route('contacts.edit', $contact['id'])}}">Edit</a>
    <form action="/contact/{{ $contact['id'] }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <br>
@endforeach


@endsection
