<header>
	<div class="header-area header-transparrent ">
		<div class="main-header header-sticky">
			<div class="container">
				<div class="row align-items-center">

					<div class="col-xl-2 col-lg-2 col-md-2">
						<div class="logo">
							<a href="/"><img src="{{ asset('img/logo/logo.png') }}" alt="{{ setting('site.title') }}"></a>
							
						</div>
					</div>
					<div class="col-xl-10 col-lg-10 col-md-10">

						<div class="main-menu f-right d-none d-lg-block">
							<nav>
								<ul id="navigation">
									{{(menu('main','partials._navbarItem'))}}
								</ul>
							</nav>
						</div>
					</div>

					<div class="col-12">
						<div class="mobile_menu d-block d-lg-none"></div>
					</div>

				</div>
			</div>
		</div>
	</div>
</header>