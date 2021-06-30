@extends('auth/main')

@section('login_form')
<div class="col-lg-6 fback mt-5">
    <form action="/register" method="post" class="mt-5">
        {{csrf_field()}}
        <div class="row">
            <div class="form-group mb-3">
                {{-- <label for="">email</label> --}}
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="type your email" aria-describedby="helpId">
                @error('email')
                <small id="helpId" class="invalid-feedback">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group mb-3">
                {{-- <label for="">email</label> --}}
                <input type="text" name="name" id="name" class="form-control @error('email') is-invalid @enderror" placeholder="input your name" aria-describedby="helpId">
                @error('name')
                <small id="helpId" class="invalid-feedback">{{$message}}</small>
                @enderror
            </div>
            <div class="container mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{-- <label for="">Password</label> --}}
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" aria-describedby="helpId">
                            @error('password')
                            <small id="helpId" class="invalid-feedback">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{-- <label for="">Password</label> --}}
                            <input type="password" name="password2" id="password2" class="form-control @error('password') is-invalid @enderror" placeholder="confirm password" aria-describedby="helpId">
                            @error('password2')
                            <small id="helpId" class="invalid-feedback">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-md" style="width: 16.5rem">Register</button>
            </div>
            <div class="col-md">
                <div class="line"></div>
                <div class="col-md" style="float:right">
                    <a class="btn btn-danger btn-md btn-block"><i class='bx bxl-google'></i> Google</a>
                    <a class="btn btn-primary btn-md btn-block"><i class='bx bxl-twitter' ></i> Twitter</a>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
</div>
@endsection