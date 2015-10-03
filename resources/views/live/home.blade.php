<html>
<head>

@include('live.live_css')
</head>
<body>
<div class="container" >

	<div class="header">
		@include('live.header')
	</div>
	<div class="content">
		<div class="left-content col-lg-7 col-md-8 col-lg-offset-2 col-sm-12 ">
			<div class="ads-area">
				@include('live.ads')
			</div>

			@foreach($blogs as $blog)
			<div class="card blog-list-area">
				<div class="panel">
					<div class="panel-body ">
						<div class="img-section col-sm-4 text-left">
							<img src="11.jpg"  alt="Sample1" class="img-responsive">
						</div>
						<div class="content-section col-sm-8">
							<div class="content-section-body">
								<div class="content-section-heading">
									<p class="text-left panel-title content-heading-size"><a href="#">{{ $blog->title }}</a></p>
								</div>
								<p class="text-left">
									{!! $blog->heading !!}
								<p>
								    <span class="text-right">
										<button type="button" class="btn-outline">Read More</button>
									</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="right-content col-lg-3 col-md-4  col-sm-12 ">
		<div class="panel panel-primary text-center search-box">
			<form action="#" class="form-inline">
				<div class="panel-body">
					<div class="form-group input-group">
					<input type="text" class="form-control" id="search" placeholder="search here">
					<span class="input-group-addon search-button">Go</span>
					</div>
				</div>
			</form>
		</div>
			<div class="most-popular">
				<div class="panel">
					<div class="panel-heading">
						<div class="panel-title">
							<h4 class="">Most Popular</h4>
						</div>
					</div>
					<div class="panel-body">
						<div class="one-article">
							<div class="img-section col-sm-5"><img src="friends_qoute.jpg" alt="" class="img-responsive"></div>
							<div class="popular-heading-section col-sm-7 ">
								<p class="text-left">Here we put all the most popular articles</p>
							</div>
						</div>

						<div class="one-article">
							<div class="img-section col-sm-5"><img src="friends_qoute.jpg" alt="" class="img-responsive"></div>
							<div class="popular-heading-section col-sm-7">
								<p class="text-left">Here we put all the a popular articles</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
	@include('live.footer')
	</div>
	<div class="jsfiles">
		@include('live.live_js')
	</div>
</div>
</body>
</html>