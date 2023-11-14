<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">


      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Lezzet Sepeti</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('assets')}}/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('assets')}}/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">


      <!-- owl stylesheets -->
      <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css">
      <link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   </head>


   <body>

      @include('sablon._header')
      @include('sablon._GirisYapModal')
      @include('sablon._KayitOlModal')


      <!-- gallery'nin başladığı bölüm -->
        <div class="gallery_section layout_padding">
           <div class="container">
              <div class="row">
                 <div class="col-sm-12">
                    <h1 class="gallery_taital">Pideler</h1>
                    <p class="gallery_text">Lezzetli pidelerimizle tanışmaya hazır mısınız? Size en taze ve enfes pideleri sunmak için buradayız!</p>
                 </div>
              </div>
              <div class="">
                 <div class="gallery_section_2">
                    <div class="row">

                       <div class="col-md-4">
                          <div class="container_main">
                             <img src="{{asset('assets')}}/images/pideler/ispanakli.jpg" alt="Avatar" class="image">
                             <div class="overlay ">
                                <div class="text"><a href="#">Ispanaklı Pide</a></div>
                             </div>
                          </div>
  							<br>
  							<div class="d-flex justify-content-center">
  								<button class="btn btn-primary">Sepete Ekle</button>
  							</div>
                       </div>

                       <div class="col-md-4">
                          <div class="container_main">
                            <img src="{{asset('assets')}}/images/pideler/karisik.jpg" alt="Avatar" class="image">
                             <div class="overlay">
                                <div class="text"><a href="#">Karışık Pide</a></div>
                             </div>
                          </div>
  							<br>
  							<div class="d-flex justify-content-center">
  								<button class="btn btn-primary">Sepete Ekle</button>
  							</div>
                       </div>

                       <div class="col-md-4">
                          <div class="container_main">
                             <img src="{{asset('assets')}}/images/pideler/kasarli.jpg" alt="Avatar" class="image">
                             <div class="overlay">
                                <div class="text"><a href="#">Kaşarlı Pide</a></div>
                             </div>
                          </div>
  							<br>
  							<div class="d-flex justify-content-center">
  								<button class="btn btn-primary">Sepete Ekle</button>
  							</div>
                       </div>
                    </div>
                 </div>

                 <div class="gallery_section_2">
                    <div class="row">
                       <div class="col-md-4">
                          <div class="container_main">
                             <img src="{{asset('assets')}}/images/pideler/kavurmali.jpg" alt="Avatar" class="image">
                             <div class="overlay">
                                <div class="text"><a href="#">Kavurmalı Pide</a></div>
                             </div>
                          </div>
  							<br>
  							<div class="d-flex justify-content-center">
  								<button class="btn btn-primary">Sepete Ekle</button>
  							</div>
                       </div>

                       <div class="col-md-4">
                          <div class="container_main">
                             <img src="{{asset('assets')}}/images/pideler/kiymali.jpg" alt="Avatar" class="image">
                             <div class="overlay">
                                <div class="overlay">
                                   <div class="text"><a href="#">Kıymalı Pide</a></div>
                                </div>
                             </div>
                          </div>
  							<br>
  								<div class="d-flex justify-content-center">
  									<button class="btn btn-primary">Sepete Ekle</button>
  								</div>
                       </div>

                       <div class="col-md-4">
                          <div class="container_main">
                             <img src="{{asset('assets')}}/images/pideler/kusbasili.jpg" alt="Avatar" class="image">
                             <div class="overlay">
                                <div class="overlay">
                                   <div class="text"><a href="#">Kuşbaşılı Pide</a></div>
                                </div>
                             </div>
                          </div>
  							<br>
  								<div class="d-flex justify-content-center">
  									<button class="btn btn-primary">Sepete Ekle</button>
  								</div>
                       </div>
                    </div>
                 </div>

                 <div class="gallery_section_2">
                    <div class="row">
                       <div class="col-md-4">
                          <div class="container_main">
                             <img src="{{asset('assets')}}/images/pideler/pastirmali.jpg" alt="Avatar" class="image">
                             <div class="overlay">
                                <div class="text"><a href="#">Pastırmalı Pide</a></div>
                             </div>
                          </div>
  							<br>
  							<div class="d-flex justify-content-center">
  								<button class="btn btn-primary">Sepete Ekle</button>
  							</div>
                       </div>

                       <div class="col-md-4">
                          <div class="container_main">
                             <img src="{{asset('assets')}}/images/pideler/sucuklu.jpg" alt="Avatar" class="image">
                             <div class="overlay">
                                <div class="text"><a href="#">Sucuklu Pide</a></div>
                             </div>
                          </div>
  							<br>
  							<div class="d-flex justify-content-center">
  								<button class="btn btn-primary">Sepete Ekle</button>
  							</div>
                       </div>

                       <div class="col-md-4">
                          <div class="container_main">
                             <img src="{{asset('assets')}}/images/pideler/patatesli.jpg" alt="Avatar" class="image">
                             <div class="overlay">
                                <div class="text"><a href="#">Patatesli Pide</a></div>
                             </div>
                          </div>
  							<br>
  							<div class="d-flex justify-content-center">
  								<button class="btn btn-primary">Sepete Ekle</button>
  							</div>
                       </div>
                    </div>
                 </div>
              </div>

           </div>
        </div>
        <!-- gallery'nin bittiği bölüm -->



      @include('sablon._footer')


   </body>

</html>
