<!-- Giriş Yap Modal Başlangıç -->
		<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header text-center">
						<h5 class="modal-title mx-auto" id="loginModalLabel">GİRİŞ YAP</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; right: 20px; top: 20px;">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="POST" id="loginForm" action="user.php">
							<div class="form-group mt-2">
								<label for="email">Email Adresi</label>
								<input type="email" class="form-control" id="emailLogin" name="emailLogin" placeholder="Enter your email">
							</div>
							<div class="form-group mt-4">
								<label for="password">Şifre</label>
								<input type="password" class="form-control" id="passwordLogin" name="passwordLogin" placeholder="Enter your password">
							</div>
							<div class="form-check mt-3">
								<input type="checkbox" class="form-check-input" id="rememberMe">
								<label class="form-check-label" for="rememberMe">Beni Hatırla</label>
							</div>
						</form>
						<div id="loginResult"></div>
					</div>
					<div class="modal-footer">
						<button type="button" id="loginButton" class="btn btn-primary modal-login-button mt-5 mb-5">Giriş Yap</button>
					</div>
					<div class="modal-footer text-center">
						<p style="display: inline-block; margin: 0;">Hesabınız yok mu? <a href="#" id="signupLink">Sign Up</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- Giriş Yap Modal Bitiş -->
