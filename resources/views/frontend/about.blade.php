<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
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
            <div class="col-md-1"></div>
            <div class="col-md-3">
              <img src="{{asset('images/fhf.jpg')}}" alt="picture" class="rounded-circle" width="200px" height="160px">
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6">
              <p class="mt-5">Hello, I am Indrajit Das. I am a Professional Web Designer and Developer.I have six months of experience in web development and design. I also have some experience in mobile app development.</p>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <div class="container mt-5 mb-5 text-center">
      <h3>Qualification and Certification</h3>
    </div>
    <div class="container">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#education">Education</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#training">Training</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#technology">Technology</a>
        </li>
      </ul>
    
      <!-- Tab panes -->
      <div class="tab-content">
        <div id="education" class="container tab-pane active"><br>
          <h3>BSc. in Computer Science and Engineering</h3>
          <p class="mb-2">At 2018 from North Western University, Khulna</p>
          <h3>HSC</h3>
          <p class="mb-2">At 2011 from Natunhat Public College,Jashore</p>
          <h3>SSC</h3>
          <p class="mb-2">At 2009 from Jhikargacha B.M High School, Jashore</p>
        </div>
        <div id="training" class="container tab-pane fade"><br>
          <h3>TOP-UP-IT</h3>
          <p class="mb-2">J2EE (java) training</p>
          <h3>Diploma in Web Application and Development</h3>
          <p class="mb-2">Bangladesh computer council, Khulna</p>
          <h3>Android Study Jam</h3>
          <p class="mb-2">BCC</p>
        </div>
        <div id="technology" class="container tab-pane fade"><br>
          <h3>Programming language</h3>
          <p>c</p>
          <p>java</p>
          <p>python</p>
          <h3>Web Application</h3>
          <p>HTML5</p>
          <p>CSS3</p>
          <p>Bootstrap</p>
          <p>PHP</p>
          <p>JavaScript</p>
          <p>jQuery</p>
          <p>JSON</p>
          <p>Ajax</p>
          <p>sql</p>
          <p>React(Basic)</p>
          <p>Laravel</p>
          <h3>Android</h3>
          <p>java</p>
          <p>xml</p>
        </div>
      </div>
    </div>
</body>
</html>