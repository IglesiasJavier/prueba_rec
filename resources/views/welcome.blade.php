<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">

<title>BLOG</title>


<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
<link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<!-- CSS Files -->
<link id="pagestyle" href="{{asset('/assets/css/material-dashboard.css?v=3.0.4')}}" rel="stylesheet" />
</head>

<body class="bg-gray-200"> 
    <div id="app">
      <router-view></router-view>
      {{-- 
        <main-nav-component></main-nav-component>
            <main class="main-content  mt-0">
              <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80');">
                <span class="mask bg-gradient-dark opacity-6"></span>
                <router-view></router-view>
                <main-footer-component></main-footer-component>
              </div> 
       
    </main> --}}
</div> 
    <script src="{{ asset('js/app.js') }}" async defer></script>
  </body>
</html>
