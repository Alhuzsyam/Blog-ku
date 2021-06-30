<!doctype html>
<html lang="en">
  <head>
    <!-- owl corousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- font awesome -->
    <link rel="stylesheet" href="{{url('assets/css/fontawesome/css/all.min.css')}}">
    <!-- Mycss -->
    <link rel="stylesheet" href="{{url('assets/css/cssku.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
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
                      <a href="" class="tombol btn btn-sm">More detail <i class="fas fa-arrow-right"></i></a>
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
                                <a href="" class="btn btn-sm tombol"><i class="fas fa-arrow-right"></i></a>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- owl -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <script>
     $('.owl-carousel').owlCarousel({
      margin:10,
      loop:false,
      autoWidth:true,
      items:4,
      autoplay:true,
      autoplayTimeout:1000,
      autoplayHoverPause:true
    });
    </script>
  </body>
</html>