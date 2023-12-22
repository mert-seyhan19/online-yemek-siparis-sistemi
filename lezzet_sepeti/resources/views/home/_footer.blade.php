@php
  $setting = \App\Http\Controllers\SayfalarControl::getsetting()
@endphp



<!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h3 class="useful_text">Hakkımızda</h3>
                  <p class="footer_text">Lezzet Sepeti Yemek Sipariş, yemek tutkunlarına en sevdiği lezzetleri kolayca ulaştırma amacıyla yola çıktı. İster evinizde ister iş yerinizde olun, sadece birkaç tıklama uzaklığınızda en iyi yemekleri sunuyoruz.</p>
               </div>


			        <div class="col-lg-3 col-sm-6 text-center">
                  <h3 class="useful_text">Yemek Menüleri</h3>
                  <div class="footer_menu">
                     <ul>
                        <li><a href="http://localhost/lezzet_sepeti/kebaplar.html">Kebaplar</a></li>
                        <li><a href="http://localhost/lezzet_sepeti/pizzalar.html">Pizzalar</a></li>
                        <li><a href="http://localhost/lezzet_sepeti/pideler.html">Pideler</a></li>
                        <li><a href="http://localhost/lezzet_sepeti/tatlilar.html">Tatlılar</a></li>
                        <li><a href="http://localhost/lezzet_sepeti/icecekler.html">İçecekler</a></li>
                     </ul>
                  </div>
               </div>

               <div class="col-lg-3 col-sm-6 text-center">
                   <h3 class="useful_text">Sosyal Medya</h3>
                   <div class="footer_menu">
                      <ul>
                          @if ($setting->facebook != null) <li><a href="{{$setting->facebook}}" target="blank"><img src="{{asset('assets')}}/images/facebook.png" height="50" width="50" class="mb-3"></a></li> @endif
                          @if ($setting->instagram != null) <li><a href="{{$setting->instagram}}" target="blank"><img src="{{asset('assets')}}/images/instagram.jpg" height="30" width="30" class="mb-3"></a></li> @endif
                          @if ($setting->twitter != null) <li><a href="{{$setting->twitter}}" target="blank"><img src="{{asset('assets')}}/images/twitter.png" height="30" width="30"></a></li> @endif

                      </ul>
                   </div>
                </div>

               <div class="col-lg-3 col-sm-6">
                  <h1 class="useful_text">İletişim</h1>
                  <div class="location_text">
                     <ul>
                       <li>
                          <a href="#">
                          <i class="fas fa-building" aria-hidden="true"></i><span class="padding_left_10">Şirket Adı : {{$setting->company}}</span>
                          </a>
                       </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_10">Adres : {{$setting->address}}</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">Telefon Numarası : {{$setting->phone}}</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">Fax : {{$setting->fax}}</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">Email : lezzetsepeti@gmail.com</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->


      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2023 Tüm Hakları Saklıdır | {{ $setting->company }}</p>
         </div>
      </div>
      <!-- copyright section end -->


      <!-- Javascript files-->
      <script src="{{asset('assets')}}/js/jquery.min.js"></script>
      <script src="{{asset('assets')}}/js/popper.min.js"></script>
      <script src="{{asset('assets')}}/js/bootstrap.bundle.min.js"></script>
      <script src="{{asset('assets')}}/js/jquery-3.0.0.min.js"></script>
      <script src="{{asset('assets')}}/js/plugin.js"></script>
	  <!-- sidebar -->
      <script src="{{asset('assets')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="{{asset('assets')}}/js/custom.js"></script>
