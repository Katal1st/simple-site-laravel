@extends('layouts.app')

@section('title-block')Main page @endsection

@section('content')
    <h1> Main page</h1>
    <p>Lorem ipsum dolor sit amet,
        consectetur adipisicing elit. Amet debitis dignissimos,
        dolore dolores esse eveniet fugit impedit maiores
        molestiae molestias neque pariatur perspiciatis porro
        praesentium similique veniam voluptatum! Dolorum, minus.</p>
@endsection

@section('aside')
    @parent
    <p>additional text</p>
@endsection
