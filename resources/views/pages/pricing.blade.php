@extends('layouts.app')

@section('title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit')
@section('meta_description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit')

@section('content')

<div class="services-area">

	<section class="best-pricing best-pricing2 pricing-padding2">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-6 col-md-8">
					<div class="section-tittle text-center mb-80 mt-80">
						<h2>Choose The Best Package For Your Case.</h2>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="pricing-card-area">
		<div class="container">
			<div class="row">

				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-card text-center mb-30">
						<div class="card-top">
							<span>Silver</span>
							<h4>&#163;{{ setting('site.silver_package_price') }} <span>/ project</span></h4>
						</div>
						<div class="card-bottom">
							<ul>
								<li>Lorem ipsum dolor sit amet</li>
								<li>Lorem ipsum dolor sit amet</li>
								<li>Lorem ipsum dolor sit amet</li>
								<li>Lorem ipsum dolor sit amet</li>
								<li>24/7 support</li>
							</ul>
							<a href="#" class="btn card-btn1">Get Started</a>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-card  text-center mb-30">
						<div class="card-top">
							<span>Gold</span>
							<h4>&#163;{{ setting('site.gold_package_price') }} <span>/ project</span></h4>
						</div>
						<div class="card-bottom">
							<ul>
								<li>Lorem ipsum dolor sit amet</li>
								<li>Lorem ipsum dolor sit amet</li>
								<li>Lorem ipsum dolor sit amet</li>
								<li>Lorem ipsum dolor sit amet</li>
								<li>24/7 support</li>
							</ul>
							<a href="#" class="btn card-btn1">Get Started</a>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-card text-center mb-30">
						<div class="card-top">
							<span>Platinum</span>
							<h4>&#163;{{ setting('site.platinum_package_price') }} <span>/ project</span></h4>
						</div>
						<div class="card-bottom">
							<ul>
								<li>Lorem ipsum dolor sit amet</li>
								<li>Lorem ipsum dolor sit amet</li>
								<li>Lorem ipsum dolor sit amet</li>
								<li>Lorem ipsum dolor sit amet</li>
								<li>24/7 support</li>
							</ul>
							<a href="#" class="btn card-btn1">Get Started</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>

@endsection