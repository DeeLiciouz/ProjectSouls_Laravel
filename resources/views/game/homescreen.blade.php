@extends('layouts.app')

@section('headscripts')
  <script src="https://cdn.jsdelivr.net/npm/phaser@3.15.1/dist/phaser-arcade-physics.min.js"></script>
@endsection

@section('content')
<script src="{{asset('js/phaser/core.js')}}"></script>
@endsection