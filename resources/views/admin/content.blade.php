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
<div class="home_content continer mscroll">
    @if (session('status'))
    {{-- <div class="alert alert-success">
        {{ session('status') }}
    </div> --}}
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Alert</strong> {{ session('status') }}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    <div class="row">
       <div class="col-md-12 p-5 mt-0">
            {{-- <img src="{{url('/assets/img/banner.png')}}" alt="" class="img-thumbnail"> --}}
            <div class="jumbotron jumbotron-fluid" style="background: url('/assets/img/banner.png'); border-radius:0px">
                <div class="container">
                  <h2 class="display-5"><?= $title ?></h1>
                  <p class="lead">Focuse on being productive instead of busy</p>
                </div>
              </div>
             <form action="/content/write" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('POST') }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Judul</label>
                          <input type="text" name="judul" id="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="" aria-describedby="helpId">
                          @error('judul')
                          <small id="helpId" class="invalid-feedback">{{$message}}</small>
                          @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Deskripsi</label>
                          <input type="text" name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="" aria-describedby="helpId">
                          @error('deskripsi')
                          <small id="helpId" class="invalid-feedback">{{$message}}</small>
                          @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class='bx bx-image-add bx-sm'></i></span>
                            </div>
                            <div class="custom-file">
                              <input type="file" name="file" class="custom-file-input @error('file') is-invalid @enderror" id="inputGroupFile01">
                              <label class="custom-file-label" for="inputGroupFile01">Choose file </label>
                            </div>
                            @error('file')
                            <small id="helpId" class="invalid-feedback">{{$message}}</small>
                            @enderror
                          </div>
                    </div>
                </div>
                <div class="row">
                   <div class="col-md-12">
                       <div class="form-group">
                           <label for="exampleFormControlTextarea1">write the content</label>
                           <textarea name="content" id="mytextarea" class="form-control rounded-0 form-control @error('deskripsi') is-invalid @enderror" id="exampleFormControlTextarea1" rows="10"></textarea>
                           @error('content')
                           <small id="helpId" class="invalid-feedback">{{$message}}</small>
                           @enderror
                       </div>   
                   </div>
                </div>
                <div class="row col-md-4">
                    <button class="btn btn-primary btn-sm"><i class='bx bx-pointer'></i> POST</button>
                </div>
             </form>
       </div>
    </div>
    {{-- <div class="row ml-1 mt-1">
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
    </div> --}}
</div>
@endsection