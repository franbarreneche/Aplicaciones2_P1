@extends("layouts.app")
@section("title","Home")
@section("subtitle","Pantalla de home del usario")

@section("content")
<div class="box">
    Bienvenido usuario {{Auth::user()->name}} !!
</div>
@endsection
