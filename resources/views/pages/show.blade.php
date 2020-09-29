@extends('layouts.app')

<?php $titleTag = htmlspecialchars($page->seo_title); ?>
<?php $descriptionTag = htmlspecialchars($page->meta_description); ?>

@section('title', "$titleTag")
@section('meta_description', "$descriptionTag")

<?php $cur_url = Request::url(); ?>
@section('og_url', "$cur_url")
@section('og_title', "$titleTag")
@section('og_description', "$descriptionTag")

@section('content')

<div class="services-area">
	<div class="container container-page">
		<div class="row d-flex justify-content-center">
			<div class="col-lg-8">
				<div class="section-tittle text-center mb-80 mt-80">
					<h1>{{ $page->title }}</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="sample-text-area">
	<div class="container container-page">
		@if($page->image)
			<div class="page_img_section">
				<img class="card-img rounded-0" src="{{ Voyager::image( $page->image )}}" alt="{{ $page->title }}">
			</div>
		@endif
		{!! $page->body !!}
	</div>
</section>

@endsection