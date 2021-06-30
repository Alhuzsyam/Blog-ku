@extends('auth/main')

@section('login_form')


<div class="col-lg-6 fback mt-5">
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
        <div class="row">
            <div class="form-group mb-3">
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="type your email" aria-describedby="helpId">
                @error('email')
                <small id="helpId" class="invalid-feedback">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                {{-- <label for="">Password</label> --}}
                <input type="password" name="password" id="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Password" aria-describedby="helpId">
                @error('password')
                <small id="helpId" class="invalid-feedback">{{$message}}</small>
                @enderror
                <small id="helpId" class="text-muted" style="float: right">Recovery Password</small>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-md" style="width: 16.5rem">Login</button>
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