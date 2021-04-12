@extends("layouts.app")
@section("title","Entrar")
@section("subtitle","Pantalla de Login")

@section("content")
<div class="box">
    <div class="columns is-centered">
        <div class="column is-5-tablet is-4-desktop is-3-widescreen">
          <form  class="box" action="{{route("login")}}" method="POST">
            @csrf
            <div class="field">
              <label for="email" class="label">Email</label>
              <div class="control has-icons-left">
                <input type="email" name="email" placeholder="Ej: fran@gmail.com" class="input" value="{{old('email')}}">
                <span class="icon is-small is-left">
                  <i class="fa fa-envelope"></i>
                </span>
              </div>
              @error("email")
                <p class="help is-danger">{{$message}}</p>
              @enderror
            </div>
            <div class="field">
              <label for="password" class="label">Password</label>
              <div class="control has-icons-left">
                <input type="password" name="password" placeholder="*******" class="input">
                <span class="icon is-small is-left">
                  <i class="fa fa-lock"></i>
                </span>
              </div>
              @error("password")
              <p class="help is-danger">{{$message}}</p>
              @enderror
            </div>
            <div class="field">
              <button type="submit" class="button is-success">
                Entrar
              </button>
            </div>
          </form>
        </div>
      </div>
</div>
@endsection
