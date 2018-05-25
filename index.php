<?php

?>
<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Francois+One|Gothic+A1" rel="stylesheet">  
</head>
<body>
            <!-- navbar -->
         <nav class="navbar fixed-top navbar-expand-lg">
            <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand">
                        <img src="aset/logo2.png" alt="logo" style="width:100px;" id="brandlog">
                    </a>
                <div class="collapse navbar-collapse " id="menu">
                        <ul class="nav navbar-nav ml-auto" >
                            <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#jenis">Bus</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#angkel">Angkel</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#aboutus">AboutUS</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#contacts">Contacts</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="masukUser.php" target="blank">Login</a>
                            </li>
                        </ul>

                </div>
            </div>
        </nav>

          <!-- Tampilan home   -->
        <div class="container-fluid" id="home">
            <div class="container" >
                <div class="row" >
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12"  id="judul">
                         <h1 style="text-align :center; color : white;">ANGKEL</h1>
                         <h2 style="text-align :center; color : white;">Angkutan & Bengkel</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- tampilan jenis bus -->
        <div class="container-fluid" id="jenis">
            <div class="container" >
            <h1 style="text-align :center">Jenis Bus</h1>
                <div class="row" >
                    <div class="col center " id="cardjenis">
                        <div class="card kartu2" style="width:300px; height:400px;">
                                <img class="card-img-top" src="aset/jajal2.png" alt="Card image" style="width:100%">
                                <div class="card-body">
                                <h4 class="card-title" style="text-align :center">Bus Kecil</h4>
                                <p class="card-text" style="text-align :justify">Bus yang memiliki kapasitas 30 orang dan bus ini di peruntukkan untuk taruna dan anggota kepolisian</p>
                                </div>
                        </div>
                    </div>
                        <div class="col center" id="cardjenis">
                            <div class="card kartu2" style="width:300px; height:400px;" >
                                <img class="card-img-top" src="aset/jajal2.png" alt="Card image" style="width:100%">
                                <div class="card-body">
                                <h4 class="card-title" style="text-align :center">Bus Besar</h4>
                                <p class="card-text" style="text-align :justify">Bus yang memiliki kapasitas 60 orang dan bus ini di peruntukkan untuk taruna dan anggota kepolisian</p>
                                </div>
                            </div>
                        </div>
                        <div class="col center" id="cardjenis">
                            <div class="card kartu2" style="width:300px; height:400px;" >
                                <img class="card-img-top" src="aset/jajal.png" alt="Card image" style="width:100%">
                                <div class="card-body">
                                <h4 class="card-title" style="text-align :center" >Bus Eksekutif</h4>
                                <p class="card-text" style="text-align :justify">Bus yang memiliki kapasitas 40 orang dan bus ini di peruntukkan untuk para petinggi akpol</p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

       

        <!-- TAMPILAN ANGKEL -->
        <div class="container-fluid" id="angkel">
            <div class="container" >
            <h1 style="text-align :center">Angkel</h1>
                <div class="row mx-auto" >
                    <div class="col center" id="cardangekl">
                        <div class="card kartu2" style="width:400px; height:450px;" >
                            <img class="card-img-top" src="aset/angkutan.jpg" alt="Card image" style="width:100%">
                            <div class="card-body text-center">
                            <h4 class="card-title" style="text-align :center">Angkutan</h4>
                            <p class="card-text"  style="text-align :center">Pemesanan angkutan</p>
                            <a href="pesanuser.php" class="btn btn-primary center-block">Pesan</a>
                            </div>
                        </div>
                    </div>
                        <div class="col center" id="cardangekl">
                            <div class="card kartu2" style="width:400px; height:450px;" >
                                <img class="card-img-top" src="aset/bengkel.jpg" alt="Card image" style="width:100%">
                                <div class="card-body text-center">
                                <h4 class="card-title" style="text-align :center">Bengkel</h4>
                                <p class="card-text"  style="text-align :center">Laporan kerusakan angkutan</p>
                                <a href="#" class="btn btn-primary">Lapor</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <!-- Tampilan aboutUS -->
        <div class="container-fluid" id="aboutus">
            <div class="container" >
            <h1 style="text-align :center">About US</h1>
                <div class="row" >
                    <div class="col center" id="cardaboutus">
                        <div class="card kartu2" style="width:400px;">
                                <img class="card-img-top mx-auto" src="aset/icon1.png" alt="Card image" style="width:100px ;  height:100px;">
                                <div class="card-body">
                                <h4 class="card-title" style="text-align :center">Angkutan</h4>
                                <p class="card-text" style="text-align :justify">Kami menyediakan angkutan untuk digunkan untuk keperluan tranportasi di lingkungan Akademi Kepolisian</p>
                                </div>
                        </div>
                    </div>
                        <div class="col center" id="cardaboutus">
                            <div class="card kartu2" style="width:400px" >
                                <img class="card-img-top mx-auto" src="aset/icon2.png" alt="Card image" style="width:100px ;  height:100px;">
                                <div class="card-body">
                                <h4 class="card-title"  style="text-align :center">Bengkel</h4>
                                <p class="card-text" style="text-align :justify">Kami menerima laporan kerusakan kendaraanyang digunakan untuk angkutan di Akademi Kepolisaian</p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    
        <!-- Tampilan contact -->

        <div class="container-fluid" id="contacts">
            <div class="container" id="">
                <div class="row" >
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1 style="text-align :center"  >Contacts</h1>
                    </div>
                </div>
            </div>
        </div>



</body>
</html>
<script>
	$(document).ready(function(){       
	 var scroll_start = 0;
   var startchange = $('#jenis');
    var offset = startchange.offset();
     if (startchange.length){
    $(document).scroll(function() { 
       scroll_start = $(this).scrollTop();
       if(scroll_start > offset.top) {
           $(".navbar").css('background-color', '#ffb133');
           $("#brandlog").attr('src', 'aset/logo3.png');
        } else {
           $('.navbar').css('background', 'transparent');
           $("#brandlog").attr('src', 'aset/logo2.png');
        }
    });
     }
 });
 </script>

 

<script>
$( document ).ready(function() {
  //Page scrolling
  $('a.navbar-brand, a.nav-link, .footer-nav-link, .tomup').click(function(){
    var $link = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($link.attr('href')).offset().top - 50)
    }, 1250);

  });

  // Highlight the top nav as scrolling occurs
  $('body').scrollspy({
    target: ".navbar",
    offset: 51
  });
});
</script>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
  
}

</script>