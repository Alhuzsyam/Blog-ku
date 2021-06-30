<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- BOX Icon CDN -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    {{-- bootstrap cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    {{-- my style --}}
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
</head>
<body>
    <div class="container">
        <div class="row content">
            <div class="col-lg-6  imgback">
                <div class="col-md-12 mt-5 mb-5">
                    <div class="logo_name h4 textwhite">
                        <i class='bx bx-network-chart' ></i> BlogKu
                    </div>
                </div>
                <div class="col-md-11 textgray">
                    <h1 class="text-justify"># Sign in to write the best article</h1>
                </div>
                <br>
                <div class="col-md-6 textgray mt-4">
                    <p class="text-justify">If you don't have an account You can <a href="{{url('register')}}" class="link_name" style="text-decoration: none">Register here!</a></p>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-10">
                            <img src="{{url('assets/img/person.png')}}" alt="img" class="person bx-tada" srcset="" style="margin-top: -60px;">
                        </div>
                        <div class="col-md-2">
                            <img src="{{url('assets/img/dog.png')}}" alt="img" class="dog bx-tada"  srcset="" >
                        </div>
                    </div>
                </div>
            </div>
         @yield('login_form')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>