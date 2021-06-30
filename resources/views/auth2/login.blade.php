@extends('auth2/main')

@section('login_form')
<div class="col-md-7">
    <div class="d-flex align-items-center p-5 mt-5">
        <div class="container">
            <div class="col-lg-10 col-xl-7 mx-auto">
                <div class="h2 logo_name textwhite">Login Form</div>
                {{-- <p class="text-muted mb-4">Create a login split page using Bootstrap 4.</p> --}}
                <form action="/loginpost" method="post" class="mt-5">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if (session('statuscek'))
                    <div class="alert alert-danger">
                        {{ session('statuscek') }}
                    </div>
                    @endif
                    {{csrf_field()}}
                    <div class="form-group">
                      <label for=""></label>
                      <input type="email" name="email" id="email" class="form-control  @error('email') is-invalid @enderror" placeholder="type your email" aria-describedby="helpId">
                      @error('email')
                      <small id="helpId" class="invalid-feedback">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for=""></label>
                      <input type="password" name="password" id="password" class="form-control   @error('password') is-invalid @enderror" placeholder="Password" aria-describedby="helpId">
                      @error('password')
                      <small id="helpId" class="invalid-feedback">{{$message}}</small>
                      @enderror
                      <small id="helpId" class="text-muted mt-2" style="float: right">Recovery Password</small>
                    </div>
                    <div class="mt-5">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary border-0" type="button">Login</button>
                        </div>
                    </div>
                    <div class="line">
                    </div>
                    <div class="mt-3">
                        <div class="d-grid gap-2">
                            <button class="btn btn-danger" type="button">Google</button>
                            <button class="btn btn-primary" type="button">Twitter</button>
                          </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection