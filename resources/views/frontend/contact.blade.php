<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <style>
        body{
            background-image: url('{{asset('images/contact.jpg')}}');
            background-repeat:no-repeat;
            background-size:cover;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>>
</head>
<body>
    <header>
        <nav class="style-nav">
            <div class="navbar">
              <div class="logo">
                <!--- <img src="images/logo.png" alt="">--->
              </div>
              <ul class="menu">
                <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{URL::to('/projects')}}">Projects</a></li>
                <li><a href="{{URL::to('/about')}}">About</a></li>
                <li><a href="{{URL::to('/contact')}}">Contact</a></li>
              </ul>
            </div>
          </nav>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header">
                        <h3>Personal Information</h3>
                    </div>
                    <div class="card-body">
                        <p>mobile: +8801303653859</p>
                        <p>email: indrojit70@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>