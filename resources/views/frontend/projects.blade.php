<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset("css/style.css")}}">
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
      <div class="col-md-2"></div>
      <div class="col-md-8 text-center">
        <h3>Web development Projects</h3>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
  <div class="container-fluid" style="margin:30px 0px 0px 0px;padding: 0;height: 20vh;">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-4 text-center">
        <div class="card">
          <div class="card-header">
            Hospital Management System
          </div>
          <div class="card-body">
            <img src="{{asset('images/hms.png')}}" alt="hms" height="150px" width="300px">
          </div>
          <div class="card-footer">
            <p>This is a demo Hospital Management Project</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 text-center">
        <div class="card">
          <div class="card-header">
            NGO Portal System
          </div>
          <div class="card-body">
            <img src="{{asset('images/ngo.png')}}" alt="project" height="150px" width="300px">
          </div>
          <div class="card-footer">
            <p>This is a demo NGO portal System Project.</p>
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
</body>
</html>