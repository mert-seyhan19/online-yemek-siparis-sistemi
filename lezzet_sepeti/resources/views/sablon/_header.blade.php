<!--header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div style="color:white; font-size: 34px;" class="logo">Lezzet Sepeti</div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                   <ul class="navbar-nav">
						<li class="nav-item mr-5">
							<a class="nav-link" href="{{ url('/anasayfa') }}"><i class="fas fa-home mr-1"></i>Anasayfa</a>
						</li>
						<li class="nav-item mr-5">
							<a class="nav-link" href="{{ url('/hakkimizda') }}"><i class="fas fa-book mr-1"></i>Hakkımızda</a>
						</li>
						<li class="nav-item mr-5 dropdown"> <!-- Dropdown sınıfını ekleyin -->
							<a class="nav-link dropdown-toggle" href="{{ url('/menuler') }}" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-bars"></i> Menüler
							</a>
							<div class="dropdown-menu" aria-labelledby="menuDropdown"> <!-- Dropdown menüsü -->
								<a class="dropdown-item" href="{{ url('/kebaplar') }}">Kebaplar</a>
								<a class="dropdown-item" href="{{ url('/pizzalar') }}">Pizzalar</a>
								<a class="dropdown-item" href="{{ url('/pideler') }}">Pideler</a>
								<a class="dropdown-item" href="{{ url('/tatlilar') }}">Tatlılar</a>
								<a class="dropdown-item" href="{{ url('/icecekler') }}">İçecekler</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('/iletisim') }}"><i class="fas fa-envelope mr-1"></i>İletişim</a>
						</li>
					</ul>
               </div>
			   <ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<button class="btn btn-primary login-button mr-4 " data-toggle="modal" data-target="#loginModal">Giriş Yap</button>
					</li>
					<li class="nav-item">
						<button class="btn btn-primary login-button" data-toggle="modal" data-target="#registerModal">Kayıt Ol</button>
					</li>

				</ul>
            </nav>
         </div>
      </div>
      <!--header section end -->
