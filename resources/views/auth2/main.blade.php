<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- BOX Icon CDN -->
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     {{-- bootstrap cdn --}}
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     {{-- my style --}}
     <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-md-5 p-5 ">
                <div class="m-5 d-none d-md-flex">
                    <div class="h3 logo_name textwhite"> <i class='bx bx-network-chart' ></i>BlogKu</div>
                </div>
                <div class="m-5 d-none d-md-flex">
                    <div class="h2 logo_name  textwhite"># Sign in to write the best article</div>
                </div>
                <div class="m-5 mt-0 d-none d-md-flex" >
                    <div class="h6 logo_name textwhite" style="margin-top: -50px;">If you don't have an account <br> <span class="link_name">You can Register here!</span> </div>
                </div>
                <div class="row d-none d-md-flex">
                    <div class="col-md-6 floa">
                        {{-- <img src="person.png" alt="" srcset="" style="width: 290px;"> --}}
                        <img src="{{url('assets/img/person.png')}}" alt="img" class="person bx-tada" srcset="" style="width: 290px; float:left">
                    </div>
                    <div class="col-md-6 p-5 mt-5">
                        <img src="{{url('assets/img/dog.png')}}" alt="img" class="person bx-tada" srcset="" style="width: 170px; float:right">
                        {{-- <img src="dog.png" alt="" srcset="" style="width: 100px;"> --}}
                    </div>
                </div>
            </div>
            @yield('login_form')
        </div>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>