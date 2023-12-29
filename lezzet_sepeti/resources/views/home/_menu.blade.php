            <li class="nav-item mr-5">
							<a class="nav-link" href="{{route('index')}}"><i class="fas fa-home mr-1"></i>Anasayfa</a>
						</li>
						<li class="nav-item mr-5">
							<a class="nav-link" href="{{route('aboutus')}}"><i class="fas fa-book mr-1"></i>Hakkımızda</a>
						</li>
						<li class="nav-item mr-5 dropdown"> <!-- Dropdown sınıfını ekleyin -->
							<a class="nav-link dropdown-toggle" href="http://localhost/lezzet_sepeti/menuler.html" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-bars"></i> Menüler
							</a>
							<div class="dropdown-menu" aria-labelledby="menuDropdown"> <!-- Dropdown menüsü -->
								<a class="dropdown-item" href="http://localhost:8000/categoryproducts/1">Kebaplar</a>
								<a class="dropdown-item" href="http://localhost:8000/categoryproducts/2">Pizzalar</a>
								<a class="dropdown-item" href="http://localhost:8000/categoryproducts/3">Pideler</a>
								<a class="dropdown-item" href="http://localhost:8000/categoryproducts/4">Tatlılar</a>
								<a class="dropdown-item" href="http://localhost:8000/categoryproducts/5">İçecekler</a>
							</div>
						</li>
            <li class="nav-item mr-5">
							<a class="nav-link" href="{{route('references')}}"><i class="fas fa-book mr-1"></i>Referanslar</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('contact')}}"><i class="fas fa-envelope mr-1"></i>İletişim</a>
						</li>

            
