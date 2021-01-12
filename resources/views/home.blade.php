@extends("templates.main")
@section("title", "LES VOLONTAIRES ALGÉRIENS")
@section("content")
	 <!--*************** accueil ***************-->
    <div class="container-fluid" id="accueil" data-aos="zoom-in" data-aos-duration="1500">
        <div class="row">
            <div class="col-md-12 accueil">
                <h1 class="bigtitre"> LES VOLONTAIRES ALGÉRIENS </h1>
                <p class="soustitre"> La Plateforme Du Changement </p>
                <div class="reseaux">
                    <a href="https://web.facebook.com/aufinternational?_rdc=1&_rdr"><span class="rs" style="color: white; font-size: 2.5em;margin-right: 5%; "><i class="fab fa-facebook-f"></i></span></a>
                    <a href="https://www.auf.org"><span class="rs2"><img src="resources/images/website.svg" style="width: 60px;height: 50px;margin-top: -10px;"></span></a>
                    <a href=""><span class="rs1"style="color: white; font-size: 2.5em;margin-left:5%;"><i class="fab fa-youtube"></i></span></a>
                </div>
                <div class="arow">
                   <a href="#nous"><span style="color: white; font-size: 5em;"><i class="fas fa-angle-up"></i></span></a>
                </div>
            </div>
        </div>
    </div>
    <!--*************** Qui somme nous ?  ***************-->
    <div class="container-fluid" id="nous" style="margin-bottom: 20%;">
        <div class="row">
            <div class="col-md-12">
                <h1 class="titre"> Qui nous sommes </h1>
                <div class="container" style="background-color: #a8092f;">
                    <div class="row">
                      <div class="col-md-7 col-12 web" data-aos="fade-down" data-aos-duration="1800">
                        <video id="video-bg-elem" controls loop class="video" src="resources/images/video.mp4">
                          <!-- <source src="resources/images/video.mp4" type="video/mp4"> -->
                        </video> 
                      </div> 
                      <div class="col-md-5 col-12 gauche" data-aos="fade-down" data-aos-duration="1500">
                        <p class="discription">AUF est l’agence universitaire de la francophonie qui regroupe différents établissement utilisant la langue françaises dans 119 pays, crée il y a près de 60ans et qui a pour but d’agir pour une francophonie universitaires solidaire engagée dans le développement économiques, social et culturel des sociétés, ainsi qu’elle accompagne les établissements d’enseignement supérieur.
                          <br>AUF est présente dans presque partout dans le monde y compris l’Algérie
                          <br>Elle utilise des projets structurants pour une amélioration concrète de l’enseignement supérieur pour but de fournir la solidarité entre les établissements d’enseignement supérieur et de recherche.
                          
                          <br>Pour plus d’infos, consultez notre site !
                          </p>
                      </div>
                      <div class="col-md-7 col-12 droite" data-aos="fade-down" data-aos-duration="1800">
                        <video id="video-bg-elem" preload="auto" autoplay="true" loop="loop" muted="muted" class="video" src="resources/images/video.mp4">

                        </video> 
                      </div> 
                      <div class="col-12 col-md-12">
                        <a id="lireplus" href="https://www.auf.org/a-propos/qui-nous-sommes/"> Voir plus <span style="color: white;"><i class="fas fa-long-arrow-alt-right"></i></span></a>
                      </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--*************** formulaire  ***************-->
    <div class="container" id="formulaire" data-aos="flip-right" data-aos-duration="1900">
        <div class="row">
            <div class="col-md-12" id="titleform">
                <h2 class="title2">Formulaire d'inscription à la plateforme</h2>
            </div>
            <div class="col-md-12" class="formbox">
              @livewire("register")
            </div>
        </div>
    </div>
@endsection