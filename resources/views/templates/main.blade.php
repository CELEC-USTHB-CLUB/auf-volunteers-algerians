<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="site ooficiel..." /> <!--ce qui saffiche sur la barre de recherche de google-->

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="shorcut icone" href="resources/images/AUF.svg" style="height: 32px;width: 32px;" >  
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> 
    <script src="https://kit.fontawesome.com/27e5e9f5bc.js" crossorigin="anonymous"></script> <!--pour avoir les log des boutons-->
    <link rel="stylesheet" href="{{url('resources/css/style.css')}}">
    @livewireStyles
    
    <title>AUF @yield("title")</title>
  </head>
  <body>
    <!--*************** NavBar ***************-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#"><img src="resources/images/AUF.jpg" ></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
           <li class="nav-item ">
              <a class="nav-link" href="#accueil" style="color:black; font-weight: 500; margin-left: 10px;"> Accueil <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#nous" style="color: black; font-weight: 500; margin-left: 10px;"> Qui sommes-nous ? </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#formulaire" style="color: black; font-weight: 500; margin-left: 10px;"> S'inscrire </a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact" style="color: black; font-weight: 500; margin-left: 10px;"> Nous-Contacter</a>
            </li>
          </ul>
        </div>
    </nav>

    @yield("content")

    <footer id="contact" container-fluid >
      <div class="row footer" data-aos="fade-left" data-aos-duration="1500">
          <div class="col-sm-6" >
              <div class="logo">
                <img src="resources/images/AUF.svg">
                
              </div>
          
              <div class="media">
                  <a href="https://web.facebook.com/aufinternational?_rdc=1&_rdr"> <i class="fab fa-facebook"></i></a>
                  <a href="https://www.linkedin.com/company/auf"> <i class="fab fa-linkedin-in"></i></a>
                  <a href="https://twitter.com/auf_org"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.youtube.com/user/planeteauf" target="blank"> <i class="fab fa-youtube"></i> </a>
                  <a href="https://www.auf.org"><i class="fab fa-internet-explorer"></i></a>
              </div>
      </div>
      <div class="col-sm-6" id="contact" data-aos="fade-right" data-aos-duration="1800">
      @livewire("contact")
    </div>
  </footer>

    


    

     
  <!-- Optional JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script>
    AOS.init();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  @livewireScripts
  @stack("scripts")
</body>
</html>