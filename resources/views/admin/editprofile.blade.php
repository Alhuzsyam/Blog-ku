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
<div class="home_content continer ">
    <div class="text col-md ml-1">
        {{-- Profile --}}
        <div style=""><?//=$title?></div>
    </div>
    <div class="row ml-1 mt-5">
        <div class="col-md-0">
            <div class="">
                @foreach ($profiles as $p)
                <img src="{{url('Assets/img/')}}/{{ $p->image }}" alt="" srcset="" class="img rounded-circle" style="width:130px">
                @endforeach
            </div>
        </div>
        <div class="col-md-6">
            <div class="h2">{{$p->username}}</div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="h4"><?php
                        $path = URL::current();
                        echo substr($path,20);
                        ?></div>
                    <p class="tsecondary">Setup profile anda semenarik mugkin</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row ml-1 mt-5">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link tsecondary  active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Edit Profile</a>
            <a class="nav-link tsecondary" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Account Seting</a>
            <a class="nav-link tsecondary" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Password</a>
            <a class="nav-link tsecondary" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Social profile</a>
          </div>
          <div class="tab-content ml-3" id="v-pills-tabContent">
           
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <form action="editprofile" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                <div class="row">
                    <div class="col-md-2">
                        @foreach ($profiles as $p)
                        <img src="{{url('Assets/img/')}}/{{ $p->image }}" alt="" srcset="" class="img rounded-circle" style="width:80px">
                        @endforeach
                    </div>
                    <div class="col-md-8">
                        <div class="row ml-2 mt-3">
                            <div class="col-md-9 mt-2">
                                <div class="btn btn-sm btn-primary" id="upload">upload new picture</div>
                            </div>
                            <div class="col-md-3 mt-2">
                                <div class="btn btn-secondary btn-sm float-right">Delete</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($profiles as $p)
                        <div class="col-md-10">
                            <div class="form-group">
                              <label for=""></label>
                              <input type="text" class="form-control rounded" name="username" id="username" aria-describedby="helpId" placeholder="username" value="{{$p->username}}">
                            </div>
                            <div class="form-group" style="margin-top: -35px;">
                              <label for=""></label>
                              <input type="text" class="form-control rounded" name="alamat" id="alamat" aria-describedby="helpId" placeholder="alamat" value="{{$p->alamat}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Biografi</label>
                                <textarea name="bio" id="bio" class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10">{{$p->bio}}</textarea>
                            </div>                          
                            <div class="form-group">
                                <button type="submit" class="btn btn-sm btn-primary" id="upload"><i class='bx bxs-save' ></i> SAVE</button>
                            </div>                          
                        </div>
                        @endforeach
                </div>
            </form>
            </div>
            
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
          </div>
    </div>
    </div>
</div>
@endsection