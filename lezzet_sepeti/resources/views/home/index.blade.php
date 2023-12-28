

@extends('layouts.home')


@section('title', $setting->title)

@section('description')
    {{ $setting->description }}
@endsection

@section('keywords',$setting->keywords)

@section('author','Mert Seyhan')



@section('content')


  @include('home._slider')


<!-- about section start -->
  <div class="about_section layout_padding">
     <div class="container">
        <div class="row">
           <div class="col-md-6">
              <div class="about_taital_main">
                 <div class="about_taital">Hakkımızda</div>
                 <p class="about_text">Lezzet Sepeti Yemek Sipariş, yemek tutkunlarına en sevdiği lezzetleri kolayca ulaştırma amacıyla yola çıktı. İster evinizde ister iş yerinizde olun, sadece birkaç tıklama uzaklığınızda en iyi yemekleri sunuyoruz.</p>
                 <p class="about_text">Müşterilerimizin damak zevkine hitap eden en iyi restoranları ve yemekleri bulma konusundaki tutkumuzla, lezzetli bir yemek siparişi deneyimi sunuyoruz. Misyonumuz, her bir siparişte tatmin edici bir deneyim yaratmak ve lezzet dolu anılar biriktirmenize yardımcı olmaktır.</p>
                 <div class="read_bt"><a href="http://localhost/lezzet_sepeti/hakkimizda.html">Daha Fazlası</a></div>
              </div>
           </div>
           <div class="col-md-6">
              <div class="about_img"><img src="{{asset('assets')}}/images/hakkimizda_gorsel.jpg"></div>
           </div>
        </div>
     </div>
  </div>
  <!-- about section end -->



  <!-- gallery section start -->
  <div class="gallery_section layout_padding ">
     <div class="container ">
        <div class="row">
           <div class="col-sm-12">
              <h1 class="gallery_taital">Galeri</h1>
              <p class="gallery_text">Lezzetlerin Dansını Keşfedin! Menümüzdeki çeşitli yemekler arasında dolaşırken, damaklarınız unutulmaz bir yolculuğa çıkacak. Sevdiklerinizle paylaşmak veya kendi lezzet maceranızı başlatmak için menümüzdeki özel tatları keşfedin.</p>
           </div>
        </div>
        <div class="">
           <div class="gallery_section_2 ">
              <div class="row ">
                @foreach($slider as $rs)
                 <div class="col-md-4 center-button">
                    <div class="container_main">
                       <img src="{{ Storage::url($rs->image)}}" alt="Avatar" class="image m-2">
                       <div class="overlay">
                          <div class="text"><a href="#">{{$rs->title}}</a></div>
                       </div>
                    </div>
                     <p style="color: green; font-weight: bold; text-align: center;">{{$rs->price}} TL</p>
                     <a href="{{route('product',['id'=>$rs->id])}}" style="padding: 5px 10px; font-size: 16px; background-color: red; color: white; ">
                      Sipariş Ver
                    </a>
                 </div>
                 @endforeach


              </div>
           </div>


        </div>

     </div>
  </div>
  <!-- gallery section end -->



  <!-- services section start -->
  <div class="services_section layout_padding">
     <div class="container">
        <div class="row">
           <div class="col-sm-12">
              <h1 class="services_taital">Lezzet Sepeti</h1>
              <p class="services_text">Günün tadı, kahvenin aromasıyla güzelleşir! Hemen sipariş verin ve en sevdiğiniz kahvemizi yudumlamak için beklemeyin. Sizi lezzetli bir kahveyle karşılamak için buradayız.</p>
           </div>
        </div>
        <div class="services_section_2">
           <div class="row">
              <div class="col-lg-4 col-sm-12 col-md-4">
                 <div class="box_main active">
                    <div class="house_icon">
                       <img src="{{asset('assets')}}/images/icon1.png" class="image_1">
                       <img src="{{asset('assets')}}/images/icon1.png" class="image_2">
                    </div>
                    <h3 class="decorate_text">Espresso</h3>
                    <p class="tation_text">Sizi bir espressoyla tanıştırmak için sabırsızlanıyoruz. Yoğun aroması ve güçlü tadıyla espresso, enerjinizi artırmak için mükemmel bir seçenek. Hemen gelin ve bu eşsiz deneyimi yaşayın!</p>
                    <div class="readmore_bt"><a href="#">Read More</a></div>
                 </div>
              </div>
              <div class="col-lg-4 col-sm-12 col-md-4">
                 <div class="box_main">
                    <div class="house_icon">
                       <img src="{{asset('assets')}}/images/icon2.png" class="image_1">
                       <img src="{{asset('assets')}}/images/icon2.png" class="image_2">
                    </div>
                    <h3 class="decorate_text">Cappuccino</h3>
                    <p class="tation_text">Sizlere sıcak bir Cappuccino sunmanın heyecanını yaşıyoruz. Köpüğü ve espresso ile sütün mükemmel uyumuyla bu lezzet sizi büyüleyecek. İçmek için sabırsızlanıyoruz!</p>
                    <div class="readmore_bt"><a href="#">Read More</a></div>
                 </div>
              </div>
              <div class="col-lg-4 col-sm-12 col-md-4">
                 <div class="box_main">
                    <div class="house_icon">
                       <img src="{{asset('assets')}}/images/icon3.png" class="image_1">
                       <img src="{{asset('assets')}}/images/icon3.png" class="image_2">
                    </div>
                    <h3 class="decorate_text">Latte</h3>
                    <p class="tation_text">Rahatlatıcı bir latte ile gününüzü tamamlayın! Kremsi süt ve espresso tadının bu muhteşem buluşması, sizi şımartacak. Hemen uğrayın ve latte keyfini çıkarın.</p>
                    <div class="readmore_bt"><a href="#">Read More</a></div>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
  <!-- services section end -->


  <!-- testimonial section start -->
  <div class="client_section layout_padding">
     <div class="container">
        <div class="row">
           <div class="col-sm-12">
              <h1 class="client_taital">Yorumlar</h1>
              <p class="client_text"></p>
           </div>
        </div>
     </div>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="client_section_2">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="testimonial_section_2">
                        <h4 class="client_name_text">Ayşe<span class="quick_icon"><img src="{{asset('assets')}}/images/quick-icon.png"></span></h4>
                        <p class="customer_text">Lezzet Sepeti, yemek siparişlerini kolaylaştıran harika bir platform. Sipariş vermek sadece birkaç tıklama kadar yakın, menülerini göz atmak ve seçim yapmak çok basit. Ayrıca hızlı teslimatları sayesinde yemekler her zaman taptaze geldi. Harika bir deneyim</p>
                     </div>
                  </div>
               </div>
            </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="client_section_2">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="testimonial_section_2">
                        <h4 class="client_name_text">Ahmet<span class="quick_icon"><img src="{{asset('assets')}}/images/quick-icon.png"></span></h4>
                        <p class="customer_text">Lezzet Sepeti ile yemek siparişi vermek artık bir zevk haline geldi. Kullanıcı dostu arayüzü, geniş yemek seçenekleri ve özel teklifleri sayesinde her sipariş keyifli bir deneyim. Lezzet Sepeti'ni kullanmaktan dolayı çok mutluyum.</p>
                     </div>
                  </div>
               </div>
            </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="client_section_2">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="testimonial_section_2">
                        <h4 class="client_name_text">Haydar<span class="quick_icon"><img src="{{asset('assets')}}/images/quick-icon.png"></span></h4>
                        <p class="customer_text">Yemek siparişi vermek için Lezzet Sepeti'ni tercih ediyorum ve hiç hayal kırıklığına uğramadım. Hızlı ve güvenilir teslimatları sayesinde açlık sıkıntısını hemen çözebiliyoruz. Ayrıca özel teklifler ve kampanyalar da sürekli olarak güncelleniyor. Teşekkürler Lezzet Sepeti!</p>
                     </div>
                  </div>
               </div>
            </div>
        </div>
      </div>
    </div>
  </div>
 </div>
  <!-- testimonial section end -->


  <!-- contact section start -->
  <div class="contact_section layout_padding">
     <div class="container">
        <h1 class="contact_text">İletişim</h1>
     </div>
  </div>
  <div class="contact_section_2 layout_padding">
     <div class="container-fluid">
        <div class="row">
           <div class="col-md-6 padding_0">
              <div class="mail_section">
                 <div class="email_text">
                    <div class="form-group">
                       <input type="text" class="email-bt" placeholder="Ad" name="ad">
                    </div>
                    <div class="form-group">
                       <input type="text" class="email-bt" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                       <input type="text" class="email-bt" placeholder="Telefon Numarası" name="telno">
                    </div>
                    <div class="form-group">
                       <textarea class="massage-bt" placeholder="Mesaj" rows="5" id="comment" name="Mesaj"></textarea>
                    </div>
                    <div class="send_btn">
                       <div type="text" class="main_bt"><a href="#">Gönder</a></div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="col-md-6 padding_0">
              <div class="map-responsive">
                 <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="508" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
              </div>
           </div>
        </div>
     </div>
  </div>
  <!-- contact section end -->
@endsection
