@extends('layouts.app')

@section('title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit')
@section('meta_description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit')

@section('content')

<div class="services-area">
	<div class="container">

		<div class="row d-flex justify-content-center">
			<div class="col-lg-8">
				<div class="section-tittle text-center mb-80 mt-80">
					<h2>Our Latest Articles​</h2>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="blog_area section-paddingr">
<div class="container">
<div class="row">
	<div class="col-lg-8 mb-5 mb-lg-0">
		<div class="blog_left_sidebar">

			@foreach ($posts as $post)
				<article class="blog_item">
					<div class="blog_item_img">
						<img class="card-img rounded-0" src="{{ Voyager::image( $post->thumbnail('blog') )}}" alt="">
						<div class="blog_item_date">
							<h3>{{ $post->created_at->format('d') }}</h3>
							<p>{{ $post->created_at->format('M') }}</p>
						</div>
					</div>
					<div class="blog_details">
						<a class="d-inline-block" href="/posts/{{ $post->slug }}">
							<h2>{{ $post->title }}</h2>
						</a>
						<p>{{ $post->excerpt }}</p>
						<ul class="blog-info-link">
							<li><a href="/category/{{ $post->category->slug }}"><i class="fa fa-flag"></i> {{ $post->category->name }}</a></li>
						</ul>
						<div class="pull-right">
							<button onclick="location.href='/posts/{{ $post->slug }}'" class="genric-btn primary-border radius">Read more</button>
						</div>
						<div class="clearfix"></div>
					</div>
				</article>
			@endforeach

			<div class="blog-pagination justify-content-center d-flex">
				{{ $posts->links() }}
			</div>

		</div>
	</div>

	<div class="col-lg-4">
		<div class="blog_right_sidebar">

			<aside class="single_sidebar_widget search_widget">
				<h4 class="widget_title">Search Posts</h4>
				{{ Form::open(array('route' => 'posts.search_form')) }}
				{{ Form::token() }}
				<div class="form-group">
					<div class="input-group mb-3">
						{{ Form::text('keyword', null, array('class' => 'form-control keyword-field', 'placeholder' => 'Search Keyword')) }}
					</div>
					<div class="keyword-error">Please enter a valid keyword.</div>
				</div>
				{{ Form::submit('Search', array('class' => 'button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn search-button')) }}
				{{ Form::close() }}
			</aside>

			<aside class="single_sidebar_widget post_category_widget">
				<h4 class="widget_title">Category</h4>
				<ul class="list cat-list">
					@foreach ($categories as $category)
						<li>
							<a href="/category/{{ $category->slug }}" class="d-flex">
								<p>{{ $category->name }}</p>
								<p style="margin-left: 10px;">({{ $category->posts_count }})</p>
							</a>
						</li>
                	@endforeach
				</ul>
			</aside>

			<aside class="single_sidebar_widget popular_post_widget">
			<h3 class="widget_title">Featured Posts</h3>
				@foreach ($populars as $popular)
					<div class="media post_item">
						<img src="{{ Voyager::image( $popular->thumbnail('cropped') )}}" alt="{{ $popular->title }}" />
						<div class="media-body">
						<a href="/posts/{{ $popular->slug }}">
							<h3>{{ strlen($popular->excerpt) > 25 ? substr($popular->excerpt,0,25)."..." : $popular->excerpt }}</h3>
						</a>
						<p>{{ $popular->created_at->format('M d, Y') }}</p>
						</div>
					</div>
				@endforeach
			</aside>

			<aside class="single_sidebar_widget newsletter_widget">
			<h4 class="widget_title">Newsletter</h4>
				{{ Form::open(array('route' => 'pages.newsletterSubmit', 'id' => 'sidebarNewsletter', 'novalidate' => 'true')) }}
				{{ Form::token() }}

				<div class="form-group">
					{{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Email Address')) }}
				 </div>
				{{ Form::submit('Subscribe', array('class' => 'button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn')) }}
				<div class="mt-10" id="success"></div>
				<div class="mt-10" id="error"></div>
				{{ Form::close() }}
			</aside>

		</div>
	</div>

</div>
</div>
</section>

@endsection

@section('scripts')
	
	<script type="text/javascript">
		jQuery(document).ready(function($){
			$('.search_widget form').submit(function() {
			    if ($.trim($(".keyword-field").val()) === "") {
			        $('.keyword-error').slideDown('slow');
			    return false;
			    }
			});
		});
		
	</script>

@endsection