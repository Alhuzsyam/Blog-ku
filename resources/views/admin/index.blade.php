@extends('layout/main')

@section('title',"BlogKu Office")


{{-- @section('profile_content')
<div class="profile_content">
    <div class="profile">
        <div class="profile_details">
            @foreach ($profiles as $p)
            <img src="{{url('Assets/img/')}}/{{ $p->image }}" alt="" srcset="">
        <div class="name_job">
            <div class="name">{{auth()->user()->name}}</div>
            <div class="job">{{$p->alamat}}</div>
        </div>
        @endforeach
        </div>
@endsection --}}

@section('container')
<div class="home_content continer">
    <div class="text col-md ml-1">
        <?= $title ?>
    </div>
    <div class="row ml-1 mt-1">
        <div class="col-md-4" style="z-index: -1">
            <div class="h-100 p-5 bprimary text boxes rounded-3">
                <div class="row">
                    <div class="col-md-2">
                        <i class='bx bx-folder-open bx-tada bx-md' ></i>
                    </div>
                    <div class="col-md-10">
                        <h2>Your have 22 content</h2>
                        <button class="btn btn-outline-light" type="button">Cek your content</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-1">
            <div class="h-100 p-5 bsecondary text boxes rounded-3">
                <div class="row">
                    <div class="col-md-2">
                        <i class='bx bx-comment-detail bx-tada bx-md' ></i>
                    </div>
                    <div class="col-md-10">
                        <h2>Your have 22 comment</h2>
                        <button class="btn btn-outline-light" type="button">Replay the comment</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 mt-1">
            <div class="h-100 bprimary text boxes rounded-3">
                <div class="col-md text-center">
                    <i class='bx bx-heart-circle bx-tada mt-5' style="font-size:5rem "></i>
                </div>
                <div class="col-md text-center mt-2 mb-4">
                    <button class="btn btn-outline-light" type="button">Favorite Article</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection