@extends('layouts.app')

@section('title-block')update record @endsection

@section('content')
    <h1>update record</h1>

    <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Enter your name</label>
            <input type="text" name="name" value="{{$data->name}}" placeholder="Enter your name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="name">Email</label>
            <input type="text" name="email" value="{{$data->email}}" placeholder="Enter your email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Message subject</label>
            <input type="text" name="subject" value="{{$data->subject}}" placeholder="Message subject" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control" placeholder="Enter your message">{{$data->message}}</textarea>
        </div>


        <button type="submit" class="btn btn-success">Update</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </form>
@endsection
