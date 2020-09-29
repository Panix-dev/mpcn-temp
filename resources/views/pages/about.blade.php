@extends('layouts.app')

@section('title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit')
@section('meta_description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit')

@section('content')

	<div class="services-area">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-8">
					<div class="section-tittle text-center mb-80 mt-80">
						<h2>In just a few words!</h2>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="team-boxed">
	    <div class="container">
	        <div class="intro">
	            <h1 class="text-center">Meet our team</h1>
	        </div>
	        <div class="row people">
	        	@foreach($members as $member)
		            <div class="col-md-6 col-lg-4 item">
		                <div class="box"><img class="rounded-circle" data-bs-hover-animate="pulse" src="{{ Voyager::image( $member->thumbnail('cropped') )}}">
		                    <h3 class="name">{{ $member->name }}</h3>
		                    <p class="title">{{ $member->profession_title }}</p>
		                    <p class="description">{!! $member->body !!}</p>
		                    <div class="u-social-icons u-spacing-10 u-text-palette-5-dark-1 u-social-icons-1">
				              <a class="u-social-url" target="_blank" href="{{ $member->facebook }}">
				                <span class="u-icon u-icon-circle u-social-facebook u-social-type-logo u-icon-1">
				                  <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-ad72" class="u-svg-content"><path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg>
				                </span>
				              </a>
				              <a class="u-social-url" target="_blank" href="{{ $member->twitter }}">
				                <span class="u-icon u-icon-circle u-social-twitter u-social-type-logo u-icon-2">
				                  <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-f916" class="u-svg-content"><path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg>
				                </span>
				              </a>
				              <a class="u-social-url" target="_blank" href="{{ $member->linkedin }}">
				                <span class="u-icon u-icon-circle u-social-linkedin u-social-type-logo u-icon-4">
				                  <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-78e1" class="u-svg-content"><path d="M33.8,96.8H14.5v-58h19.3V96.8z M24.1,30.9L24.1,30.9c-6.6,0-10.8-4.5-10.8-10.1c0-5.8,4.3-10.1,10.9-10.1 S34.9,15,35.1,20.8C35.1,26.4,30.8,30.9,24.1,30.9z M103.3,96.8H84.1v-31c0-7.8-2.7-13.1-9.8-13.1c-5.3,0-8.5,3.6-9.9,7.1 c-0.6,1.3-0.6,3-0.6,4.8V97H44.5c0,0,0.3-52.6,0-58h19.3v8.2c2.6-3.9,7.2-9.6,17.4-9.6c12.7,0,22.2,8.4,22.2,26.1V96.8z"></path></svg>
				                </span>
				              </a>
				            </div>
		                </div>
		            </div>
				@endforeach
	        </div>
	    </div>
	</div>

	{{-- <section class="u-align-center u-clearfix u-section-1" id="carousel_9056">
		<img class="u-expand-resize u-expanded-width u-image u-image-1" src="//images03.nicepage.io/c461c07a441a5d220e8feb1a/6ba6351e480757c3a03abdad/fgd-min.jpg">
      	<div class="u-list u-repeater u-list-1">
		@foreach($members as $member)
			<div class="u-align-center u-container-style u-list-item u-opacity u-opacity-90 u-repeater-item u-white u-list-item-1">
	          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
	            <div alt="" class="u-image u-image-circle u-image-2">
	            	<img src="{{ Voyager::image( $member->thumbnail('cropped') )}}" alt="{{ $member->name }}" />
	            </div>
	            <h3 class="u-align-center u-custom-font u-font-oswald u-text u-text-1">{{ $member->name }}</h3>
	            <p class="u-align-center u-text u-text-palette-1-base u-text-2">{{ $member->profession_title }}</p>
	            <p class="u-align-center u-text u-text-default u-text-3">
	              {!! $member->body !!}
	            </p>
	            <div class="u-social-icons u-spacing-10 u-text-palette-5-dark-1 u-social-icons-1">
	              <a class="u-social-url" target="_blank" href="{{ $member->facebook }}">
	                <span class="u-icon u-icon-circle u-social-facebook u-social-type-logo u-icon-1">
	                  <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-ad72" class="u-svg-content"><path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg>
	                </span>
	              </a>
	              <a class="u-social-url" target="_blank" href="{{ $member->twitter }}">
	                <span class="u-icon u-icon-circle u-social-twitter u-social-type-logo u-icon-2">
	                  <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-f916" class="u-svg-content"><path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg>
	                </span>
	              </a>
	              <a class="u-social-url" target="_blank" href="{{ $member->linkedin }}">
	                <span class="u-icon u-icon-circle u-social-linkedin u-social-type-logo u-icon-4">
	                  <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-78e1" class="u-svg-content"><path d="M33.8,96.8H14.5v-58h19.3V96.8z M24.1,30.9L24.1,30.9c-6.6,0-10.8-4.5-10.8-10.1c0-5.8,4.3-10.1,10.9-10.1 S34.9,15,35.1,20.8C35.1,26.4,30.8,30.9,24.1,30.9z M103.3,96.8H84.1v-31c0-7.8-2.7-13.1-9.8-13.1c-5.3,0-8.5,3.6-9.9,7.1 c-0.6,1.3-0.6,3-0.6,4.8V97H44.5c0,0,0.3-52.6,0-58h19.3v8.2c2.6-3.9,7.2-9.6,17.4-9.6c12.7,0,22.2,8.4,22.2,26.1V96.8z"></path></svg>
	                </span>
	              </a>
	            </div>
	          </div>
	        </div>
		@endforeach
		</div>

	</section> --}}


@endsection