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


      <!-- about section start -->
      <div class="about_section_hakkimizda layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <div class="about_taital">Hakkımızda</div>
                     <p class="about_text">Biz, yemek tutkunları ve teknoloji severlerinden oluşan bir ekip olarak, yemek deneyimini daha keyifli ve erişilebilir kılmak için buradayız. Lezzetli yemeklerin, aile toplantılarının veya sadece özel anların tadını çıkartırken, yemek siparişi sürecini daha hızlı ve sorunsuz hale getirmeyi hedefliyoruz.</p>
                     <p class="about_text">Misyonumuz, taze ve lezzetli yemekleri sizlere sunarken, teknolojinin gücünü kullanarak bu deneyimi daha da özel kılmaktır. Restoranlarla işbirliği yaparak çeşitliliği arttırıyor ve her damak zevkine uygun seçenekler sunuyoruz.</p>
					 <p class="about_text">Ekibimiz, her siparişi büyük bir titizlikle yönetir ve teslimat süreçlerini optimize eder. Sizin için yemeklerinizi seçerken ve hazırlarken, sadece kaliteyi değil, aynı zamanda güvenliği de ön planda tutarız.</p>
					 <p class="about_text">Gelişmiş teknolojimiz ve kullanıcı dostu platformumuz sayesinde, yemek siparişi vermek artık daha kolay ve pratik hale geldi. Her an ulaşabileceğiniz müşteri hizmetleri ekibimiz, herhangi bir sorunuz veya talebiniz için burada.</p>
					 <p class="about_text">Bizimle yemek siparişi vererek, lezzetin ve kolaylığın tadını çıkartabilirsiniz. Siz değerli müşterilerimiz sayesinde her gün daha da büyüyor ve gelişiyoruz. Teşekkür ederiz, bizimle olduğunuz için.</p>
					 <p class="about_text">Bize katılın, lezzetin tadını çıkartın.</p>

                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img"><img src="{{asset('assets')}}/images/hakkimizda_sayfasi.jpg"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->



      @include('sablon._footer')


   </body>

</html>
