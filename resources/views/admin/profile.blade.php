@extends('layout/main')

@section('title',"BlogKu Office")


{{-- @section('profile_content')
<div class="profile_content">
    <div class="profile">
        <div class="profile_details">
            <img src="assets/img/profile.jpeg" alt="" srcset="">
            <div class="name_job">
                <div class="name">{{auth()->user()->name}}</div>
                <div class="job">Software Engineer</div>
            </div>
        </div>
@endsection --}}

   


@section('container')
<div class="home_content continer mscroll">
    <div class="text col-md ml-1">
        {{-- Profile --}}
        <div style=""><?=$title?></div>
    </div>
    <div class="row ml-1 mt-5">
        <div class="col-md-6">
            <div class="imp">
              @foreach ($profiles as $p)
              
                <img src="{{url('Assets/img/')}}/{{ $p->image }}" alt="" srcset="" class="float-left" style="width:100px">
              
              @endforeach
            </div>
        </div>
        <div class="col-md-6">
            <div class="h2">{{$p->username}}</div>
            <div class="job">{{$p->alamat}}</div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <a href="{{url('profile/editprofile')}}" class="btn btn-outline-dark btn-sm" type="button">Edit Profile</a>
                    {{-- <button class="btn btn-outline-dark btn-sm" type="button">...</button> --}}
                   
                        <button class="btn btn-outline-dark btn-sm " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          ...
                        </button>
                        <div class="dropdown-menu mt-2" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5 p-2">
        <div class="col-md-12">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active tsecondary" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Articles (<?=$total?>)</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link tsecondary" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Liked article (1)</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link tsecondary" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">About</a>
                </li>
            </ul>
            <hr>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row p-5">
                      @foreach ($content as $c)
                      <div class="col-md-8">
                        <div class="h3">{{ $c->judul }}</div>
                        <p class="text-justify tsecondary"> <?= $c->description?></p>
                        <div class="row">
                          <div class="col-md-8">
                            <p class="tsecondary">
                              {{ substr($c->created_at,0,11) }}
                            </p>
                          </div>
                          <div class="col-md-4">
                            <div class="h4 float-right">
                              <i class='bx bx-right-arrow-alt'></i>
                              <i class='bx bxs-chevron-down-circle' id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                              <div class="dropdown-menu mt-2" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Update</a>
                                <a class="dropdown-item" href="#">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mt-2">
                        <img class="img-thumbnail" src="{{url('data_file')}}/{{ $c->cover }}" alt="Card image cap" style="height:12rem;width:12rem;object-fit: cover;">
                      </div>
                      @endforeach
                    </div>
                   
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://laravelnews.imgix.net/images/laravel-featured.png?ixlib=php-3.3.1" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Read more details</a>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quidem incidunt ipsum quo eius minima, animi tempore, harum expedita, mollitia ex eum excepturi eaque cumque minus at cupiditate laboriosam ratione.</div>
              </div>
        </div>
    </div>
    </div>
</div>
@endsection