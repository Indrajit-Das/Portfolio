<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!---<title> Simple Website Design | CodingLab </title>--->
  <link rel="stylesheet" href="{{asset("css/style.css")}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
</head>

<body>
  <header >
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
    <div class="content">
      <div class="text-content">
        <div class="text">Hello, It's Me </div>
        <div class="name">Indrajit Das.</div>
        <div class="job">
          <div class="job">
            <span>I'm a</span>
            <div id="typed-strings">
              <p>&nbsp; Web Designer.</p>
              <p>&nbsp; Web Developer.</p>
            </div>
           <span id="typed"></span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- typed.js script -->
  <script>
    $('document').ready(function(){
      var typed = new Typed('#typed',{
        stringsElement:'#typed-strings',
        backSpeed:50,
        typeSpeed:60
    });
    })
  </script>
</body>
</html>