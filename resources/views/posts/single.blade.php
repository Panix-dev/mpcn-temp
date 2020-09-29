@extends('layouts.app')

<?php $titleTag = htmlspecialchars($post->seo_title); ?>
<?php $descriptionTag = htmlspecialchars($post->meta_description); ?>

@section('title', "$titleTag")
@section('meta_description', "$descriptionTag")

<?php $cur_url = Request::url(); ?>
@section('og_url', "$cur_url")
@section('og_title', "$titleTag")
@section('og_description', "$descriptionTag")

@section('content')

<section class="page-title page-title-large-center image-bg overlay parallax services-area">
	<div class="background-content visible" style="background-image: url('{{ Voyager::image( $post->image ) }}'); background-position: 50% 50%; background-size: cover; transform: translate3d(0px, 0px, 0px);">
		<div class="background-overlay"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-sm-12 offset-lg-2 text-center">
				<p class="header-single-meta mb8 uppercase display-inline top-subtitle">
					{{ $post->created_at->format('M d, Y') }}<span class="hide-xs"><span class="dot-divider"></span> {{ $post->category->name }}</span>
				</p>
				<h1 class="heading-title">{{ $post->title }}</h1>
				<p class="lead mb0"></p>
				<ol class="breadcrumb breadcrumb-style">
					<li><a href="/" class="home-link" rel="home">Home</a></li>
					<li><a href="{{ route('posts.index') }}">Blog</a></li>
					<li class="active">{{ $post->title }}</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<section class="blog_area single-post-area">
<div class="container">
<div class="row">
	<div class="col-lg-8 posts-list">

		<div class="single-post">
			<div class="blog_details">
				<div class="post_body">{!! $post->body !!}</div>
				<ul class="blog-info-link mt-3 mb-4">
					<li><a href="/category/{{ $post->category->slug }}"><i class="fa fa-flag"></i> {{ $post->category->name }}</a></li>
					<li><i class="fa fa-clock"></i> {{ $post->created_at->format('M d, Y') }}</li>
				</ul>
			</div>
		</div> {{-- END OF single-post --}}

		<div class="blog-author">
			<div class="media align-items-center">
				<img src="{{ Voyager::image( $user->avatar ) }}" alt="{{ $user->name }}">
				<div class="media-body">
					<h4>{{ $user->name }}</h4>
					<p>{{ $user->bio }}</p>
				</div>
			</div>
		</div>

		<hr>

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
			<form action="#">
			<div class="form-group">
			<input type="email" class="form-control" onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Enter email'" placeholder='Enter email' required data-cf-modified-46b223ce74c34c00f80261d6-="">
			 </div>
			<button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Subscribe</button>
			</form>
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