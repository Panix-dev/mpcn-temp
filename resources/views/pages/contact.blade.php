@extends('layouts.app')

@section('title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit')
@section('meta_description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit')

@section('content')

<div class="services-area">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-lg-8">
				<div class="section-tittle text-center mb-80 mt-80">
					<h2>Contact Us​</h2>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="contact-title">Get in Touch</h2>
			</div>

			<div class="col-lg-8">
				{{ Form::open(array('route' => 'pages.contactSubmit', 'class' => 'form-contact contact_form', 'id' => 'contactForm', 'novalidate' => 'novalidate')) }}
				{{ Form::token() }}

				<div id="success" class="alert alert-success">Thank you <i></i>. Your message has been sent successfully from <b></b></div>

				<div class="row">
					<div class="col-12">
						<div class="form-group">
							{{ Form::textarea('message', null, array('class' => 'form-control w-100', 'id' => 'message', 'cols' => '30', 'rows' => '9', 'placeholder' => ' Enter Message')) }}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{{ Form::text('name', null, array('class' => 'form-control valid', 'id' => 'name', 'placeholder' => 'Enter your Name')) }}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{{ Form::email('email', null, array('class' => 'form-control valid', 'id' => 'email', 'placeholder' => 'Enter your Email')) }}
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							{{ Form::text('subject', null, array('class' => 'form-control', 'id' => 'subject', 'placeholder' => 'Enter a Subject')) }}
						</div>
					</div>
				</div>

				<div class="form-group mt-3">
					{{ Form::submit('Send Message', array('class' => 'button button-contactForm boxed-btn')) }}
				</div>

				{{ Form::close() }}
			</div>

			<div class="col-lg-3 offset-lg-1">

				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-home"></i></span>
					<div class="media-body">
						<h3>Athens, Greece.</h3>
						<p>Address here, 91770</p>
					</div>
				</div>

				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-tablet"></i></span>
					<div class="media-body">
						<h3>+30 123 45 67</h3>
						<p>Mon to Fri 9am to 6pm</p>
					</div>
				</div>

				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-email"></i></span>
					<div class="media-body">
						<h3>support@mpcn.com</h3>
						<p>Send us your query anytime!</p>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

@endsection