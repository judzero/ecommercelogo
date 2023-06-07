@extends('layouts.master')
@section('name', 'Home Page')
@section('content')
    <main class="homepage">

    @include('pages.components.home.header')

    @auth
        <form action="{{route('logout')}}" method="post">
            <button class="btn btn-primary">LOGOUT</button>
        </form>
    @endauth

    </main>
@endsection