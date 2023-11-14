<!-- Sign In Modal Başlangıç -->
		<div class="modal fade custom-modal" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
			<div class="modal-dialog custom-modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header text-center">
						<h5 class="modal-title mx-auto" id="registerModalLabel">Sign In</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; right: 20px; top: 20px;">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="POST" action="add_user.php" id="registerForm">
							<div class="container">
								<div class="form-group mt-2">
									<label for="fullName">Full Name</label>
									<input type="text" class="form-control" id="fullName" name="fullname" placeholder="Enter your full name" required>
									<div class="error-message" id="fullNameError" style="color:red;"></div> <!-- Red error message -->
								</div>

								<div class="form-group mt-4">
									<label for="email">Email Address</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
									<div class="error-message" id="emailError" style="color:red;"></div> <!-- Red error message -->
									<div id="emailWarning" style="color: red;"></div> <!-- Email warning message -->
								</div>

								<div class="form-group mt-4">
									<label for="password">Password</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
									<div class="error-message" id="passwordError" style="color:red;"></div> <!-- Red error message -->
								</div>


								 <!-- Password Confirmation Input -->
								<div class="form-group mt-4">
									<label for="passwordConfirm">Confirm Password</label>
									<input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" placeholder="Confirm your password" required>
									<div class="error-message" id="passwordConfirmError" style="color:red;"></div>
								</div>

								<div class="form-check mt-2">
									<input type="checkbox" class="form-check-input" id="termsCheckbox">
									<label class="form-check-label" for="termsCheckbox">I agree with the <a href="#">terms and conditions.</a></label>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary modal-login-button" id="registerButton">Sign In</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Sign In Modal Bitiş -->
