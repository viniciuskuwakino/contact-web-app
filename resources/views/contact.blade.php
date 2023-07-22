@extends('layout.main')

@section('title', 'Contacts')

@section('content')

    <div class="flex justify-center items-center h-screen">
        <div class="space-y-auto">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">

                    <a href="/contact">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            Add contact
                        </button>
                    </a>

                    @foreach ($contacts as $contact)
                        <ul role="list" class="divide-y divide-gray-100">
                            <li class="flex justify-between gap-x-6 py-5">
                                <div class="flex gap-x-4">
                                    <div class="min-w-0 flex-auto">
                                        <p class="text-sm font-semibold leading-6 text-gray-900">{{ $contact['name'] }}</p>

                                        @php
                                            $maskedContact = substr($contact['contact'],0, 5) . '-' . substr($contact['contact'], -4)
                                        @endphp

                                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $maskedContact }}</p>
                                    </div>
                                </div>
                                <div class="space-x-16 hidden sm:flex sm:flex-col sm:items-end">
                                    <a class="text-sm leading-6 text-gray-900 hover:underline" href="{{route('contacts.details', $contact['id'])}}">Details</a>
                                    <p class="mt-1 text-xs leading-5 text-gray-500 ">
                                        <a class="hover:underline" href="{{route('contacts.edit', $contact['id'])}}">Edit</a>
                                    </p>
                                    <form action="/contact/{{ $contact['id'] }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="mt-1 text-xs leading-5 text-gray-500 hover:underline" type="submit">Delete</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection
