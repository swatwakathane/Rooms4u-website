<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>About Us</title>
    <style>
    
      
      
        button {
  background: none;
  box-shadow: none;
  border: none;
  cursor: pointer;
}

button:focus,
input:focus {
  outline: 0;
}

html {
  scroll-behavior: smooth;
}

/*-------------Layout-------------*/
body {
  line-height: 1.5em;
  padding: 0;
  margin: 0;
}

section {
  height: 100vh;
}

#home {
  background-color: #ddd;
}

#about {
  background-color: #aaa;
}

#work {
  background-color: #888;
}

#contact {
  background-color: #666;
}

/*-------------Helpers-------------*/
.skew {
  transform: skew(-20deg);
}

.un-skew {
  transform: skew(20deg);
}

/*-------------Nav-------------*/
#nav-wrapper {
  overflow: hidden;
  width: 100%;
  margin: 0 auto;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 100;
}

#nav {
  background-color: #fff;
  box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
  display: flex;
  flex-direction: column;
  font-family: "Saira Semi Condensed", sans-serif;
  height: 4em;
  overflow: hidden;
}
#nav.nav-visible {
  height: 100%;
  overflow: auto;
}

.nav {
  display: flex;
  height: 4em;
  line-height: 4em;
  flex-grow: 1;
}

.nav-link,
.logo {
  padding: 0 1em;
}

span.gradient {
  background: #f857a8;
  background: -webkit-linear-gradient(45deg, #f857a8, #ff5858);
  background: linear-gradient(45deg, #f857a8, #ff5858);
  padding: 0 1em;
  position: relative;
  right: 1em;
  margin-right: auto;
}
span.gradient:hover {
  animation-name: logo-hover;
  animation-duration: 0.3s;
  animation-fill-mode: forwards;
  animation-timing-function: cubic-bezier(0.17, 0.57, 0.31, 0.85);
}

h1.logo {
  padding: 28px;
  font-weight: 300;
  font-size: 1.75em;
  line-height: 0.75em;
  color: #fff;
}

h1.logo a, a:active, a:hover, a:visited {
  text-decoration: none;
  color: #fff;
}

.nav-link {
  text-transform: uppercase;
  text-align: center;
  border-top: 0.5px solid #ddd;
}

a:link, a:visited, a:active {
  text-decoration: none;
  color: #f857a8;
}

a:hover {
  text-decoration: underline;
}

.right {
  display: flex;
  flex-direction: column;
  height: 100%;
}

.btn-nav {
  color: #f857a8;
  padding-left: 2em;
  padding-right: 2em;
}

@media (min-width: 800px) {
  #nav-wrapper {
    overflow: hidden;
  }

  #nav {
    overflow: hidden;
    flex-direction: row;
  }

  .nav-link {
    border-top: none;
  }

  .right {
    overflow: hidden;
    flex-direction: row;
    justify-content: flex-end;
    position: relative;
    left: 1.5em;
    height: auto;
  }

  .btn-nav {
    display: none;
  }

  .nav a:link.active, a:visited.active, a:active.active {
    background: #f857a8;
    background: -webkit-linear-gradient(45deg, #f857a8, #ff5858);
    background: linear-gradient(45deg, #f857a8, #ff5858);
    color: #fff;
  }

  .nav-link-span {
    transform: skew(20deg);
    display: inline-block;
  }

  .nav-link {
    transform: skew(-20deg);
    color: #777;
    text-decoration: none;
  }
  .nav-link:last-child {
    padding-right: 3em;
  }

  a:hover.nav-link:not(.active) {
    color: #444;
    background: #ddd;
    background: linear-gradient(45deg, #fff, #ddd);
  }
}
@keyframes logo-hover {
  20% {
    padding-right: 0em;
  }
  100% {
    padding-right: 5em;
  }
}
    </style>
</head>
<!-- <link rel="stylesheet"  href="css/bootstrap/bootstrap.css">
<link rel="stylesheet"  href="css/bootstrap/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="css/header.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/about.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap-grid.css"> -->
<link rel="stylesheet"  href="css/about.css">
<script src="https://kit.fontawesome.com/e938973e75.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
<body>
<header id="nav-wrapper">
    <nav id="nav">
      <div class="nav left">
        <span class="gradient skew"><h1 class="logo un-skew"><a href="index.html">ROOMS 4 U</a></h1></span>
      
      </div>
      <div class="nav right">
        <a href="index.html" class="nav-link active"><span class="nav-link-span"><span class="u-nav">Home</span></span></a>
        <a href="about.php" class="nav-link"><span class="nav-link-span"><span class="u-nav">About</span></span></a>
        <a href="postad.php" class="nav-link"><span class="nav-link-span"><span class="u-nav">Post An Add</span></span></a>
      </div>
    </nav>
  </header>
<div class="about_us_header_container">
<img src="Img/Career.jpg"  >

</div>

<div id="container_outer">

<div class="container_inline row">



<div class="container_one col-sm-12 col-md-6 col-lg-6">
    

<h2>Our Vision</h2>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

</div>

<div class="container_one col-sm-12 col-md-6 col-lg-6">

<h2>Our Mission</h2>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

</div>


</div>



</div>

</div>
</div>

<?php
include 'includes/footerNew.html'?>


<script src="Js/vendor/jquery-2.2.4.min.js"></script>    
<script src="Js/bootstrap/bootstrap.js"></script>
<script>var util = {
  mobileMenu() {
    $("#nav").toggleClass("nav-visible");
  },
  windowResize() {
    if ($(window).width() > 800) {
      $("#nav").removeClass("nav-visible");
    }
  },
  scrollEvent() {
    var scrollPosition = $(document).scrollTop();
    
    $.each(util.scrollMenuIds, function(i) {
      var link = util.scrollMenuIds[i],
          container = $(link).attr("href"),
          containerOffset = $(container).offset().top,
          containerHeight = $(container).outerHeight(),
          containerBottom = containerOffset + containerHeight;

      if (scrollPosition < containerBottom - 20 && scrollPosition >= containerOffset - 20) {
        $(link).addClass("active");
      } else {
        $(link).removeClass("active");
      }
    });
  }
};

$(document).ready(function() {
  
  util.scrollMenuIds = $("a.nav-link[href]");
  $("#menu").click(util.mobileMenu);
  $(window).resize(util.windowResize);
  $(document).scroll(util.scrollEvent);
  
});
</script>
    
</body>
</html>