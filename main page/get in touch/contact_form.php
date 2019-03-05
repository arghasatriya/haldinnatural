<div id="contact-section">
	<div class="container">
		<div class="clear-fix contact-address-content">

				<!-- Contact Form -->
			<div class="send-message">

				<form class="contact-form validate-form mt-50" autocomplete="off" method="post">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="wrap-input100 validate-input" data-validate = "Enter your first name">
								<input type="text" class="input" placeholder="First Name" name="Fname">
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="wrap-input100 validate-input" data-validate = "Enter your last name">
								<input type="text" class="input" placeholder="Last Name" name="Lname">
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
								<input type="email" class="input" placeholder="Email" name="email">
							</div>
						</div>
					</div> <!-- /.row -->

					<div class="wrap-input100 validate-input" data-validate = "Please fill the Subject">
						<input type="text" class="input" placeholder="Subject" name="sub">
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Put your message">
						<textarea class="input" placeholder="Message" name="message"></textarea>
					</div>


					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<button href="#myModal" value="submit" class="main-btn" style="text-transform: capitalize;" data-toggle="modal">Send message</button>
						</div>
					</div>

					<div id="myModal" class="modal fade">
						<div class="modal-dialog modal-confirm">
							<div class="modal-content">
								<div class="modal-header">
									<div class="icon-box">
										<i class="material-icons">
											<img src="./img/preload/logo-haldin2x.png">
										</i>
									</div>				
									<h4 class="modal-title">Thank You!</h4>	
								</div>

								<div class="modal-body">
									<p class="text-center">Your message has been sent successfully 🙂</p>
								</div>

								<div class="modal-footer">
									<button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
								</div>
							</div>
						</div>
					</div> 

					<div id="dropDownSelect1"></div>
				</form>
			</div>
		</div>
	</div>
</div>

