<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\index.css">
    <link rel="stylesheet" href="css/bootstrap.min (2).css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>requete</title>

</head>
<body>
    
        <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
          <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
          </symbol>
          <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
          </symbol>
          <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"></path>
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>
          </symbol>
          <symbol id="sun-fill" viewBox="0 0 16 16">
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
          </symbol>
        </svg>        
    <header data-bs-theme="dark">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid"  >
        <div class="image1">
            <img src ="images/logoiut.png" alt="logo iut" class="logoiut">
            <li class="nav-item" class="liste">
                <a class="btn btn-outline-info" aria-current="page" href="#" _msttexthash="111306" _msthash="8"><?php   echo $_SESSION["NomComplet"] ?></a>
              </li>
        </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" _msthidden="A" _mstaria-label="320099" _msthash="7">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div  id="navbarCollapse" class="identifien">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item" class="liste">
                <a class="btn btn-outline-info" aria-current="page" href="effetAcademique.php" _msttexthash="111306" _msthash="8">effets academique</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-danger" aria-current="page" href="changementDeFiliere.php" _msttexthash="111306" _msthash="8">changement de filiere</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-success" aria-current="page" href="poblemeDeMatricule.php" _msttexthash="111306" _msthash="8"> probleme de matricule</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-primary" aria-current="page" href="problemeDeNote.php" _msttexthash="111306" _msthash="8">probleme sur les notes </a>
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-warning" aria-current="page" href="ProblemeSurProfil.php" _msttexthash="111306" _msthash="8">probleme d'identification</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    
    <main>
    
      <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Diapositive 1" _mstaria-label="66157" _msthash="13" aria-current="true"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Diapositive 2" _mstaria-label="66313" _msthash="14" class=""></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Diapositive 3" _mstaria-label="66469" _msthash="15" class=""></button>
        </div>
        <br><br><br><br><br><br>
    
    
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
    
      <div class="container marketing">
    
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img src="images\logogi.jpg" class="placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Espace réservé" preserveAspectRatio="xMidYMid slice" focusable="false" _mstaria-label="177515" _mstHash="27"><title _mstTextHash="289328" _mstHash="28">Espace réservé</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></img>
            <h2 class="fw-normal" _msttexthash="116714" _msthash="29">Rubrique</h2>
            <p _msttexthash="19599021" _msthash="30">Un contenu d’espace réservé représentatif pour les trois colonnes de texte sous le carrousel. C’est la première colonne.</p>
            <p><a class="btn btn-secondary" href="#" _msttexthash="338507" _msthash="31">Voir les détails »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img src="images\logogi1.jpg" class="placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Espace réservé" preserveAspectRatio="xMidYMid slice" focusable="false" _mstaria-label="177515" _mstHash="32"><title _mstTextHash="289328" _mstHash="33">Espace réservé</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></img>
            <h2 class="fw-normal" _msttexthash="116714" _msthash="34">Rubrique</h2>
            <p _msttexthash="14165138" _msthash="35">Un autre élément passionnant de contenu d’espace réservé représentatif. Cette fois, nous sommes passés à la deuxième colonne.</p>
            <p><a class="btn btn-secondary" href="#" _msttexthash="338507" _msthash="36">Voir les détails »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img src="images\logogi.jpg" class="placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Espace réservé" preserveAspectRatio="xMidYMid slice" focusable="false" _mstaria-label="177515" _mstHash="37"><title _mstTextHash="289328" _mstHash="38">Espace réservé</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></img>
            <h2 class="fw-normal" _msttexthash="116714" _msthash="39">Rubrique</h2>
            <p _msttexthash="2183376" _msthash="40">Et enfin, la troisième colonne de contenu représentatif.</p>
            <p><a class="btn btn-secondary" href="#" _msttexthash="338507" _msthash="41">Voir les détails »</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    
    
        <!-- START THE FEATURETTES -->
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1" _msttexthash="1967030" _msthash="42">. <span class="text-body-secondary" _istranslated="1">Ça va vous époustoufler.</span></h2>
            <p class="lead" _msttexthash="9327097" _msthash="43">Un excellent contenu d’espace réservé pour le premier reportage ici. Imaginez une prose passionnante ici.</p>
          </div>
          <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Espace réservé : 500x500" preserveAspectRatio="xMidYMid slice" focusable="false" _mstaria-label="310505" _mstHash="44"><title _mstTextHash="289328" _mstHash="45">Espace réservé</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em" _mstTextHash="54210" _mstHash="46">500x500</text></svg>
          </div>
        </div>
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1" _msttexthash="2635191" _msthash="47">Oh oui, c’est si bon. <span class="text-body-secondary" _istranslated="1">Voyez par vous-même.</span></h2>
            <p class="lead" _msttexthash="21137545" _msthash="48">Un autre reportage ? Bien sûr. Plus de contenu d’espace réservé ici pour vous donner une idée de la façon dont cette mise en page fonctionnerait avec du contenu réel en place.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Espace réservé : 500x500" preserveAspectRatio="xMidYMid slice" focusable="false" _mstaria-label="310505" _mstHash="49"><title _mstTextHash="289328" _mstHash="50">Espace réservé</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em" _mstTextHash="54210" _mstHash="51">500x500</text></svg>
          </div>
        </div>
    
        <hr class="featurette-divider">
        <div class="row featurette">
    
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1" _msttexthash="741247" _msthash="52">Et enfin, celui-ci. <span class="text-body-secondary" _istranslated="1">Échec et mat.</span></h2>
            <p class="lead" _msttexthash="37136411" _msthash="53">Et oui, c’est le dernier bloc de contenu d’espace réservé représentatif. Encore une fois, pas vraiment destiné à être lu, simplement ici pour vous donner une meilleure idée de ce à quoi cela ressemblerait avec du contenu réel. Votre contenu.</p>
          </div>
          <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Espace réservé : 500x500" preserveAspectRatio="xMidYMid slice" focusable="false" _mstaria-label="310505" _mstHash="54"><title _mstTextHash="289328" _mstHash="55">Espace réservé</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em" _mstTextHash="54210" _mstHash="56">500x500</text></svg>
          </div>
        </div>
    
        <hr class="featurette-divider">
    
        <!-- /END THE FEATURETTES -->
    
      </div><!-- /.container -->
    </main>
    <!-- <footer >
          <div>
              <div class="bg-noir">
                  <div class="container max-w-[1220px] app-container px-4 2xl:px-0 mx-auto flex justify-between py-4 items-center text-white ">
                  <div class="flex flex-col grid min-w-[] md:grid-cols-3 lg:grid-cols-4 lg:flex-row items-stretch justify-between gap-[40px] w-full">
                  <div class="footer2">
                        <div>
                            <img alt="logo" src="images/logoiut.png" class="logoiut" width="133" height="46.27" decoding="async" data-nimg="1" loading="lazy" style="color:transparent">
                            <div class="font-light mt-2">
                              <h5>À propos de IUT de Douala</h5>
                              <p>IUT de Douala est une école de l'université de Douala. Créée par le décret présidentiel n° 93/030 du 19 janvier 1993, Elle forme dans plusieurs domaines de la technologie. Elle compte 3 Cycles : CYCLE DUT, CYCLE BTS.</p>
                                                  
                            </div>
                          </div>
                    </div>
                    <div class="footer2" >
                        <h5 class="mb-[20px]">Liens utiles</h5>
                        <ul class="flex flex-col item-start gap-[15px]">
                          <li><a href="/index.html">acceuil</a></li>
                          <li><a href="/career">institutions</a></li>
                          <li><a href="/about-us">formation et ecole</a></li>
                          <li><a href="/#">Mentions légales</a></li>
                          <li><a href="/#">Conditions générales d'utilisation</a></li>
                        </ul>
                      </div>
                      <div class="footer2">
                      <h5 class="mb-[20px]">Contact</h5>
                      <div class="flex flex-col item-start gap-[15px]">
                      <div class="flex items-center gap-[10px]">
                          <div><div><svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none" class="injected-svg" data-src="/icons/mail.svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M17 0H1C0.447715 0 0 0.447715 0 1V13C0 13.5523 0.447715 14 1 14H17C17.5523 14 18 13.5523 18 13V1C18 0.447715 17.5523 0 17 0Z" fill="white"></path><path d="M17 0.5L9 8L1 0.5" fill="#021217"></path></svg></div></div>
                          <a href="infos.iut@univ-douala.com">Iut de Douala</a>
                      </div>
                      <div class="flex items-start gap-[10px]">
                            <div><div><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="injected-svg" data-src="/icons/phone.svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M1.51089 0L5.15002 0.13169C5.91653 0.15942 6.59676 0.64346 6.89053 1.3702L7.96656 4.03213C8.217 4.65159 8.1496 5.35837 7.78693 5.91634L6.40831 8.0375C7.22454 9.2096 9.4447 11.9558 11.7955 13.5633L13.5484 12.4845C13.9939 12.2103 14.5273 12.1289 15.0314 12.2581L18.5161 13.1517C19.4429 13.3894 20.0674 14.2782 19.9942 15.2552L19.7705 18.2385C19.6919 19.2854 18.8351 20.1069 17.818 19.9887C4.39245 18.4276 -3.48056 -3e-05 1.51089 0Z" fill="white"></path></svg></div></div><a href="tel:+237652710432">(+237) 650 408 217</a>
                      </div>
                      <div class="flex items-start gap-[10px]">
                        <div>
                            <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20" fill="none" class="injected-svg" data-src="/icons/map_pin.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path d="M2.03239 13.2873L7.99999 20L13.9676 13.2873C18.5446 8.1388 14.8893 0 7.99999 0C1.11068 0 -2.54462 8.1388 2.03239 13.2873Z" fill="white"></path>
                            <path d="M8 11C9.65685 11 11 9.65685 11 8C11 6.34315 9.65685 5 8 5C6.34315 5 5 6.34315 5 8C5 9.65685 6.34315 11 8 11Z" fill="#021217"></path>
                            </svg>
                            </div>
                        </div>
                        <link target="_blank" href="https://www.google.com/maps/place/Institut+universitaire+de+technologie+de+Douala/@4.0896623,9.6982975,13z/data=!4m10!1m2!2m1!1sInstitut+universitaire+de+technologie+de+Douala!3m6!1s0x10610fd4c7fd209f:0x2d7e89b7aade18bf!8m2!3d4.092079!4d9.7364457!15sCi9JbnN0aXR1dCB1bml2ZXJzaXRhaXJlIGRlIHRlY2hub2xvZ2llIGRlIERvdWFsYZIBB2NvbGxlZ2XgAQA!16s/g/11rwq4dhf7?entry=ttu">château d'eau de ndogbong, 21422 ndog bong, Douala, Cameroun</link></div>
                        <div class="flex items-start gap-[10px]"><a target="_blank" href="#">
                        <div><div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#fff" stroke="#fff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook injected-svg" data-src="/icons/facebook.svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></div></div></a>
                          <a target="_blank" href="#"><div><div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#fff" stroke="#fff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin injected-svg" data-src="/icons/linkedin.svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg></div></div></a>
                      <a target="_blank" href="#"><div><div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#fff" stroke="#fff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter injected-svg" data-src="/icons/twitter.svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></div></div></a>
                      <a target="_blank" href=""><div><div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="injected-svg" data-src="/icons/instagram.svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="currentColor" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3Z"></path></svg></div></div></a></div></div></div>
                        <div class="footer2"><iframe title="localisationiutdouala" class="rounded-md bg-secondary-500 border-none border-white min-h-[289px] w-full h-full " src="https://www.google.com/maps/place/Institut+universitaire+de+technologie+de+Douala/@4.0896623,9.6982975,13z/data=!4m10!1m2!2m1!1sInstitut+universitaire+de+technologie+de+Douala!3m6!1s0x10610fd4c7fd209f:0x2d7e89b7aade18bf!8m2!3d4.092079!4d9.7364457!15sCi9JbnN0aXR1dCB1bml2ZXJzaXRhaXJlIGRlIHRlY2hub2xvZ2llIGRlIERvdWFsYZIBB2NvbGxlZ2XgAQA!16s%2Fg%2F11rwq4dhf7?entry=ttu"></iframe></div></div></div><div class="bg-white"></div></div></div>
                          <div class="text-center container app-container px-4 py-[14px] 2xl:px-0 mx-auto">Copyright ©2024 iut de Douala .All rights reserved</div>
                          <div class="text-center container app-container px-4 py-[14px] 2xl:px-0 mx-auto">Designed by Ben's.ABR</div>
  </footer> -->
  <?php require('footer.php') ?>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>