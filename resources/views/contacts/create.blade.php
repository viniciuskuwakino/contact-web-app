@extends('layout.main')

@section('title', 'Create Contact')

@section('content')

    <form action="/contact" method="POST">
        @csrf

{{--        <div style="width: 368px; height: 108px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">--}}
{{--            <div style="align-self: stretch; color: #666666; font-size: 12px; font-family: Noto Sans; font-weight: 600; line-height: 18px; word-wrap: break-word">Name</div>--}}
{{--            <div style="align-self: stretch; height: 56px; padding: 16px; background: white; border-radius: 8px; border: 0.50px #CCCCCC solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">--}}
{{--                <div style="align-self: stretch; justify-content: space-between; align-items: flex-start; gap: 8px; display: inline-flex">--}}
{{--                    <div style="width: 304px; color: #666666; font-size: 16px; font-family: Noto Sans; font-weight: 400; line-height: 24px; word-wrap: break-word">--}}
{{--                        <input type="text" id="name" name="name" placeholder="Contact name">--}}
{{--                    </div>--}}
{{--                    <div style="width: 24px; height: 24px; position: relative; opacity: 0">--}}
{{--                        <div style="width: 24px; height: 24px; left: 0px; top: 0px; position: absolute"></div>--}}
{{--                        <div style="width: 20px; height: 20px; left: 2px; top: 2px; position: absolute; background: black"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Contact name">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Contact email">

        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="contact" placeholder="Contact phone">

        <input type="submit" value="Create">
    </form>

@endsection
