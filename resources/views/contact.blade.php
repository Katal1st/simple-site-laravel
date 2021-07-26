@extends('layouts.app')

@section('title-block')Contacts @endsection

@section('content')
    <h1>Contacts</h1>

    <form action="{{ route('contact-form') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Enter your name</label>
            <input type="text" name="name" placeholder="Enter your name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="name">Email</label>
            <input type="text" name="email" placeholder="Enter your email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Message subject</label>
            <input type="text" name="subject" placeholder="Message subject" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control" placeholder="Enter your message"></textarea>
        </div>


        <button type="submit" class="btn btn-success">Submit</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </form>
@endsection
