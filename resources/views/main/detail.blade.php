@extends('main/main')
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="#">BlogKU</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
    </div>
  </nav>
<div class="container mt-5 p-5">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      <div class="row">
          @foreach($content as $c)
          <div class="col-md-8">
              <div class="row">
               <h2>{{$c->Judul}}</h2>
               <p><?=$c->content?></p>   
               <p><?=substr($c->created_at,0,11)?></p>   
            </div>
          </div>
            <div class="col-md-4 p-5">
            <hr>
                <p>
                Recomanded topic
                </p>
                <div class="row">
                <div class="col-md-2">
                    <a href="" class="badge badge-secondary"> Music </a>
                </div>
                <div class="col-md-2">
                    <a href="" class="badge badge-secondary">Sport </a>
                </div>
                <div class="col-md-2">
                    <a href="" class="badge badge-secondary">Tecnology</a>
                </div>
                </div>
                <div class="card mt-3" style="width: 15rem;" >
                    <img src="{{url('/assets/img')}}/{{$c->image}}" class="card-img-top" alt="user" style="width: 15rem;object-fit: cover;">
                    <div class="card-body">
                      <h5 class="card-title">{{$c->username}}</h5>
                      <p class="card-text">{{$c->bio}}</p>
                      <a href="#" class="btn tombol btn-sm" style="text-transform: capitalize;">Tentang Penulis</a>
                    </div>
                </div>
            </div>
            @endforeach
      </div>
  </div>
  </div>