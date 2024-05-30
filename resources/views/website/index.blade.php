@extends('layouts.website')

@section('content')


<!-- Slider Start -->
<div class="container-fluid bg-contant bg-showdata">
	<div class="py-2 px-2">
		
		<div class="col-lg-12 col-md-12 col-sm-12 ">
			<section class="banner">
				<div id="carouselExampleIndicators" class="carousel slide h-100" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						@foreach (range(1,count($banners)-1) as $i)
						<li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}"></li>
						@endforeach
		
					</ol>
					<div class="carousel-inner">
						@foreach ($banners as $ban)
						@if($ban->id == $banners->max('id'))
						<div class="carousel-item active">
							@else
							<div class="carousel-item">
								@endif
		
								<img class="d-block w-100" src="{{ asset( '/storage/images/banners/'.$ban->image) }}"
									alt="First slide">
		
							</div>
							@endforeach
		
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
			</section>
		</div>

	</div>
	<div class="row">
		<div class="title-wrap">
			<h3 class="section-title">E-services</h3>			
		</div>
	</div>
	<div class="row">

			<div class="col-lg-2 col-md-2 col-sm-12 shrink" >
				<img class="card-img" src="{{ asset('assets/website/images/web/icon01.jpg') }}" alt="" class="img-fluid ">				
			</div>
			  <div class="col-lg-2 col-md-2 col-sm-12 shrink"><img class="card-img" src="{{ asset('assets/website/images/web/icon01.jpg') }}" alt="" class="img-fluid "></div>
			  <div class="col-lg-2 col-md-2 col-sm-12 shrink"><img class="card-img" src="{{ asset('assets/website/images/web/icon01.jpg') }}" alt="" class="img-fluid "></div>
			  <div class="col-lg-2 col-md-2 col-sm-12 shrink"><img class="card-img" src="{{ asset('assets/website/images/web/icon01.jpg') }}" alt="" class="img-fluid "></div>
			  <div class="col-lg-2 col-md-2 col-sm-12 shrink"><img class="card-img" src="{{ asset('assets/website/images/web/icon01.jpg') }}" alt="" class="img-fluid "></div>
			  <div class="col-lg-2 col-md-2 col-sm-12 shrink"><img class="card-img" src="{{ asset('assets/website/images/web/icon01.jpg') }}" alt="" class="img-fluid "></div>		
		 
	</div>
	
	@foreach ($cat as $cat_row)
	
	<section id="gtco-pricing" class="bg-grey">
		<div class="row pt-2"> 
			<!-- Section Title -->
				<div class="title-wrap ">
					<h3 class="section-title">{{ $cat_row->name }}</h3>			
				</div>
				<!-- End of Section Title -->
			</div>	
			
			
				 	
			<div class="section-content px-2">
			
			
				<div class="card-deck mb-3 text-center">

					@foreach ($posts->Where('category_id', $cat_row->id)->slice(0, 6) as $post)

	
					<div class="price-box card mb-4 box-shadow fadein">
						<a href="{{ route('website.posts.show', $post->id) }}">
						<div class="card-header p-4">
							<img class="card-img" src="{{asset('/storage/images/posts/thumbnail').'/'. $post->gallery->image }}" alt="" class="img-fluid ">
						</div>
						<div class="card-body p-4">
							<h5 class="text-center">{{$post->title}}</h5>
							<i class="icofont-calendar"></i> 
							<span class="text-sm text-muted text-left"> {{ date('d M Y'),strtotime($post->created_at) }}</span>
						
							<a href="#" class="btn btn-block btn-secondary btn-orange mt-4">อ่านเพิ่มเติม</a>
						</div>
						</a>
					</div>
				
					
					@endforeach
					
					
				</div>
			
		</div>
		<!-- /END PRICING -->
	</section>


{{-- 
	<div class="row  ">

		<div class="col-lg-12 col-md-12 col-sm-12 pt-2 ">
			
			<div class="title-wrap">
				<h3 class="section-title">{{ $cat_row->name }}</h3>			
			</div>
			
		</div>
	</div> --}}

	{{-- <div class="row bg-fff px-3 bg-showdata py-2"> --}}


		{{-- @foreach ($posts->Where('category_id', $cat_row->id)->slice(0, 6) as $post)

		@if ($cat_row->id == 1)
		@php
		$box_img = "box_news02.png";
		@endphp
		@endif

		@if ($cat_row->id == 2)
		@php
		$box_img = "box_news03-1.png";
		@endphp
		@endif --}}



		{{-- <div class="col-lg-2 col-md-6 pt-3 card-group">
			<div class="card mb-3 card ">
				
				<div class="card-body ">
					<a href="{{ route('website.posts.show', $post->id) }}">
						<div style="background:url({{ asset('/storage/images/posts/thumbnail').'/'. $post->gallery->image }}) top center no-repeat; background-size: contain; height:300px; z-index: -1; text-align: center;"
							class="d-flex align-items-center justify-content-center">

						</div>
					</a>
				</div>
				<div class="card-footer">
					<i class="icofont-calendar"></i> <span class="text-sm text-muted"> {{ date('d M
						Y'),strtotime($post->created_at) }}</span>
					<h5 class="card-title">{{$post->title}}</h5>

					<a href="{{ route('website.posts.show', $post->id) }}" class="read-more">
						<p class="text-body-secondary">Learn More <i class="icofont-simple-right ml-2"></i></p>
					</a>

				</div>

			</div>
		</div> --}}
	

		
		{{-- <div class="section-content">
 
			
			<div class="col-lg-2 col-md-3 col-sm-6 feature-item item ">
				<div class="my-2">
					<a href="{{ route('website.posts.show', $post->id) }}">
						
						<img class="card-img" src="{{asset('/storage/images/posts/thumbnail').'/'. $post->gallery->image }}" alt="" class="img-fluid ">
					</a>
				</div>
				<h4 class="text-center">{{$post->title}}</h4>
				<i class="icofont-calendar"></i> <span class="text-sm text-muted text-left"> {{ date('d M
					Y'),strtotime($post->created_at) }}</span>
			
		</div>

			
		</div> --}}
	

		{{-- @endforeach --}}


	{{-- </div> --}}
	<div class="row bg-fff px-5 bg-showdata py-2">
		<div class="col-lg-12 col-md-12 col-sm-12 text-lg-right ">
			<a class="" href="{{ route('website.postsall.show',$cat_row->id)}}"><span> อ่านทั้งหมด </span> <i
					class="icofont-simple-right ml-2  "></i></a>
		</div>
	</div>
	@endforeach




	<section id="gtco-pricing" class="bg-grey">
		<div class="row">
			<div class="section-content">
				 <!-- Section Title -->
				<div class="title-wrap">
					<h3 class="section-title">กลุ่มงาน</h3>			
				</div>
				<!-- End of Section Title -->
				<div class="card-deck mb-3 text-center">
					<div class="price-box card mb-4 box-shadow ">
						<div class="card-header p-4 circle">
							<img class="card-img" src="{{ asset('assets/website/images/web/work/job3-mis.jpg') }}" alt="" class="img-fluid ">
						</div>
						<div class="card-body p-4">
							<ul class="price-box-list list-unstyled mt-3 mb-2">
								<li>Unlimited Traffic</li>
								<li>Full Platform Applications</li>
								<li>Email support</li>
							</ul>
							
							
						</div>
					</div>
					<div class="price-box card mb-4 box-shadow">
						<div class="card-header p-4 circle">
							<img class="card-img" src="{{ asset('assets/website/images/web/work/job2-graphic.jpg') }}" alt="" class="img-fluid ">
						</div>
						<div class="card-body p-4">
							<ul class="price-box-list list-unstyled mt-3 mb-2">
								<li>Unlimited Traffic</li>
								<li>Full Platform Applications</li>
								<li>Email support</li>
							</ul>
							
						</div>
					</div>
					<div class="price-box card mb-4 box-shadow">
						<div class="card-header p-4 circle">
							<img class="card-img" src="{{ asset('assets/website/images/web/work/job1-network.jpg') }}" alt="" class="img-fluid ">
						</div>
						<div class="card-body p-4">
							<ul class="price-box-list list-unstyled mt-3 mb-2">
								<li>Unlimited Traffic</li>
								<li>Full Platform Applications</li>
								<li>Email support</li>
							</ul>
							
						</div>
					</div>
					<div class="price-box card mb-4 box-shadow">
						<div class="card-header p-4 circle">
							<img class="card-img" src="{{ asset('assets/website/images/web/work/job4-maintain.jpg') }}" alt="" class="img-fluid ">
						</div>
						<div class="card-body p-4">
							<ul class="price-box-list list-unstyled mt-3 mb-2">
								<li>Unlimited Traffic</li>
								<li>Full Platform Applications</li>
								<li>Email support</li>
							</ul>
							
						</div>
					</div>
					<div class="price-box card mb-4 box-shadow">
						<div class="card-header p-4 circle">
							<img class="card-img" src="{{ asset('assets/website/images/web/work/job5-traing.jpg') }}" alt="" class="img-fluid ">
						</div>
						<div class="card-body p-4">
							<ul class="price-box-list list-unstyled mt-3 mb-2">
								<li>1 Domain Free</li>
								<li>Unlimited Traffic</li>
								<li>Full Platform Applications</li>
								<li>Premium support</li>
							</ul>
							
						</div>
					</div>
					<div class="price-box card mb-4 box-shadow">
						<div class="card-header p-4 circle">
							<img class="card-img" src="{{ asset('assets/website/images/web/work/job6-website.jpg') }}" alt="" class="img-fluid ">
						</div>
						<div class="card-body p-4">
							<ul class="price-box-list list-unstyled mt-3 mb-2">
								<li>1 Domain Free</li>
								<li>Unlimited Traffic</li>
								<li>Full Platform Applications</li>
						
							</ul>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /END PRICING -->
	</section>


	
		
</div> {{-- div close contant --}}





@endsection