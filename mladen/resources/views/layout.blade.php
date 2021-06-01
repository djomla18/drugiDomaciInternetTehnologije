<!doctype html>

<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.js"
integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
crossorigin="anonymous"></script>

<script src="/js/scripts.js"></script>
</head>

<body>
    
    <ul class="nav bg-info p-3 justify-content-end">
        <li class="nav-item m-2">
            <a class="btn btn-info " href="http://127.0.0.1:8000/utakmice">Utakmice</a>
        </li>
        <li class="nav-item m-2">
            <a class="btn btn-info" href="http://127.0.0.1:8000/stadioni">Stadioni</a>
        </li>
    </ul>
    <br>
    <div class="container">
   <div id="main" class="row">
           @yield('content')
   </div>
 
</div>

</body>

</html>