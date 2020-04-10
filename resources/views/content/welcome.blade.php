@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row-cols-1 align-items-center">
            <div class="col">
                <img src="/public/img/shattered_faith_logo.png" class="img-fluid" alt="shattered faith logo">
            </div>
        </div>
        <h1 class="ps-text-welcome text-center">Willkommen,@guest Besucher @else {{Auth::user()->name}} @endguest</h1>
    </div>
@endsection
