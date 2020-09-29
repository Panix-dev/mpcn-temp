<footer>
	<div class="footer-main">
		<div class="footer-area footer-padding">
			<div class="container container-footer">
				<div class="row justify-content-between">
					<div class="col-lg-3 col-md-4 col-sm-8">
						<div class="single-footer-caption mb-30">
							<div class="footer-logo">
								<a href="index-2.html"><img src="{{ asset('img/logo/logo2_footer.png') }}" alt=""></a>
							</div>
							<div class="footer-tittle">
								<div class="footer-pera">
									<p class="info1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt eiusmod tempor incididunt.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-5">
						<div class="single-footer-caption mb-50">
							<div class="footer-tittle">
								<h4>Quick Links</h4>
								<ul>
									<li><a href="/">Home</a></li>
									<li><a href="{{ route('pages.about') }}">About</a></li>
									<li><a href="{{ route('pages.productions') }}">Productions</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-7">
						<div class="single-footer-caption mb-50">
							<div class="footer-tittle">
								<h4>Support</h4>
								<ul>
									<li><a href="{{ route('pages.contact') }}">Report a Bug</a></li>
									<li><a href="/privacy-policy">Privacy Policy</a></li>
									<li><a href="/terms-and-conditions">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-8">
						<div class="single-footer-caption mb-50">
							<div class="footer-tittle">
								<h4>Newsletter</h4>
								<div class="footer-pera footer-pera2">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
								</div>

								<div class="footer-form">
									<div id="mc_embed_signup">

										{{ Form::open(array('route' => 'pages.newsletterSubmit', 'class' => 'subscribe_form relative mail_part', 'novalidate' => 'true')) }}
										{{ Form::token() }}
										{{ Form::email('email', null, array('class' => 'placeholder hide-on-focus', 'id' => 'newsletter-form-email', 'placeholder' => 'Email Address')) }}

										<div class="form-icon">
										
											<button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm"><img src="{{ asset('img/shape/form_icon.png') }}" alt=""></button>
										</div>
										<div class="mt-10" id="success"></div>
										<div class="mt-10" id="error"></div>
										{{ Form::close() }}
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row align-items-center">
					<div class="col-xl-12 ">
						<div class="footer-copy-right">
							<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All rights reserved | Made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://pagapiou.com/" target="_blank">Panos Agapiou</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>