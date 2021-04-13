@extends("layouts.app")
@section("title","Home")
@section("subtitle","Pantalla de home del usario")

@section("content")
<div class="box">
    Bienvenido usuario {{Auth::user()->name}} te cuento que tenes el rol <span class="has-text-info">{{Auth::user()->rol->nombre}}</span>.
</div>
@endsection
