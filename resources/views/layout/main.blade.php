<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('Assets/css/style.css') }}" />
    {{-- Tiny Mce --}}
    <script src="https://cdn.tiny.cloud/1/h26tnuo39gfb9zcm31o103n7djd198yowddx2fj6wvdyp83x/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <!-- BOX Icon CDN -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo-content">
            <div class="logo">
                <i class='bx bx-network-chart' ></i>
                <div class="logo_name">
                    BlogKu Office
                </div>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                   <i class="bx bx-search"></i>
                    <input type="text" placeholder="search...">
               
                <span class="tooltip"></span>
            </li>
            <li>
                <a href="{{url('dashboard')}}" class="{{'Dashboard' == $title ? 'bactive' : ''}}">
                    <i class="bx bx-grid-alt"></i>
                     <span class="link_name">Dashboard</span>
                 </a> 
                 <span class="tooltip"></span>
             </li>
            <li>
                <a href="{{url('profile')}}" class="{{'Profile' == $title ? 'bactive' : ''}}">
                    <i class='bx bx-user' ></i>
                     <span class="link_name">Profile</span>
                 </a> 
                 <span class="tooltip"></span>
             </li>
             <li>
                <a href="{{url('content/write')}}" class="{{'Content' == $title ? 'bactive' : ''}}">
                    <i class='bx bxs-pencil'></i>
                     <span class="link_name">Write</span>
                 </a> 
                 <span class="tooltip"></span>
             </li>
             <li>
                <a href="#">
                    <i class='bx bx-book-content' ></i>
                     <span class="link_name">Content</span>
                 </a> 
                 <span class="tooltip"></span>
             </li>
             <li>
                <a href="#">
                    <i class='bx bx-heart' ></i>
                     <span class="link_name">Saved</span>
                 </a> 
                 <span class="tooltip"></span>
             </li>
             <li>
                <a href="#">
                    <i class='bx bx-wrench'></i>
                     <span class="link_name">Setting</span>
                 </a> 
                 <span class="tooltip"></span>
             </li>
        </ul>
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
       {{-- @yield('profile_content') --}}
      {{-- logout --}}
      <a href="{{url('logout')}}" class="" style="text-decoration: none;color:white">
        <i class="bx bx-log-out" id="log_out"></i>
    </a>
 </div>
</div>
      {{-- logout --}}
    </div>
    @yield('container')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        $('.custom-file-input').on('change', function() {
         let filename = $(this).val().split('\\').pop();
         $(this).next('.custom-file-label').addClass("selected").html(filename);
        });

        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");
        let searchBtn = document.querySelector(".bx-search");
        
        btn.onclick = function(){
            sidebar.classList.toggle("active");
            
        }
        searchBtn.onclick = function(){
            sidebar.classList.toggle("active");
            
        }
        tinymce.init({
        selector: '#mytextarea'
        });
    </script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>