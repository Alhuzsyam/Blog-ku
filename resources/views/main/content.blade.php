@extends('main/main')
@section('cntent')
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
     <div class="container">
      <a class="navbar-brand" href="#">Blogku</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/login')}}">Login</a>
          </li>
          <!-- <li class="nav-item"> -->
            <!-- <a class="btn btn-primary tombol" href="#">Join us</a> -->
          <!-- </li> -->
        </ul>
      </div>
     </div>
    </nav>
    <!-- Akhir navbar -->

    <!-- Awal jumbotron -->
    <div class="jumbotrons jumbotron  jumbotron-fluid">
        <div class=" titlehead container mt-5">
         <div class="row">
           <div class="col-md-6">
            <h1 class="display-4" style="font-weight: 800;">Blogku</h1>
            <p class="lead">Temukan dan tulis artikel kalian</p>
            <a href="{{url('/register')}}" class="tombol btn">let's join us <i class="fas fa-arrow-right"></i></a>
           </div>
           <div class="col-md-6">
            <img src="{{url('assets/img/actor.png')}}" style="width: 400px;" alt="" srcset="">
           </div>
         </div>
        </div>
      </div>
      <!-- akhir jumbotron -->
      <!-- info panel -->
      <div class="container">
        <div class="row  d-flex justify-content-center">
          <div class="col-lg-6 info-panel d-none d-md-flex">
            <div class="owl-carousel owl-theme">
            <div class="row mt-2">
                @foreach($users as $u)
              <div class="col-lg">
                <div class="item d-flex" style="width:50px;">
                  <img src="{{url('assets/img/')}}/{{$u->image}}" alt="person" class="img-thumbnail" style="object-fit: cover;height:60px !important;">
                </div>
              </div>
              @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- batas info panel -->
  
      <!-- trending  -->
      <section>
        <div class="container p-5">
          <h2 class="display-6 mb-3">Trending Artikles</h2>
          <div class="owl-carousel owl-theme">
          <div class="row">
            <div class="col-md">
              <div class="row">
               @foreach($content as $c)
                <div class="col-md">
                  <div class="row">
                    <div class="col-md-4">
                     <img src="{{url('data_file/')}}/{{$c->cover}}" alt="" srcset="" class="img-thumbnail" style="height:8rem;width:12rem;object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                      <div class="h6">
                        {{$c->Judul}}
                      </div>
                      <div class="h4 mt-3">
                        <a href="{{url('/content/detail/')}}/{{$c->id}}" class="tombol btn btn-sm">More detail <i class="fas fa-arrow-right"></i></a>
                      </div>
  
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
          </div>
        </div>
      </section>
      <!-- Batas trending -->
      <!-- Random -->
      <section>
        <div class="container">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row">
                  <div class="col-md-3">
                  <hr>
                      <p>
                      Recomanded topic
                      </p>
                      <div class="row">
                      <div class="col-md-2">
                          <a href="" class="badge badge-secondary">Music</a>
                      </div>
                      <div class="col-md-2">
                          <a href="" class="badge badge-secondary">Sport</a>
                      </div>
                      <div class="col-md-2">
                          <a href="" class="badge badge-secondary">Tecnology</a>
                      </div>
                      </div>
                  </div>
                  <div class="col-md-9">
                      @foreach($articles as $c)
                      <div class="row">
                          <div class="col-md-8">
                          <div class="h3">{{$c->Judul}}</div>
                          <p class="text-justify tsecondary">{{$c->description}}</p>
                          <div class="row">
                              <div class="col-md-8">
                              <p class="tsecondary">
                                  {{substr($c->created_at,0,11)}}
                              </p>
                              </div>
                              <div class="col-md-4">
                              <div class="h4 float-right">
                                  <!-- <i class='bx bx-right-arrow-alt'></i> -->
                                  <a href="{{url('/content/detail/')}}/{{$c->id}}" class="btn btn-sm tombol"><i class="fas fa-arrow-right"></i></a>
                              </div>
                              </div>
                          </div>
                          </div>
                          <div class="col-md-4 mt-2">
                          <img class="img-thumbnail" src="{{url('data_file/')}}/{{$c->cover}}" alt="Card image cap" style="height:12rem;width:12rem;object-fit: cover;">
                          </div>
                      </div>
                      @endforeach
                  </div>
            </div>
        </div>
        </div>
      </section>
@endsection