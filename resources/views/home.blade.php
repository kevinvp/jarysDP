 @include('header')
	<body>
		{{--@include('navigation')--}}
		
		<div class="container">
			<div class="row">
				<div class="col-md-12 site-logo-container">
					<img src="../public/img/jarysdp.png" class="site-logo"/>
				</div>
				<div class="col-md-12 home-menu">
					<div class="col-md-6">
						<div class="home-menu-btn digitalPrinting">
							<h1><a href="{{ URL::to('digitalPrinting') }}">Digital Printing</a></h1>
						</div>
					</div>
					<div class="col-md-6">
						<div class="home-menu-btn xxl">
							<h1><a href="{{ URL::to('xxl') }}">XXL</a></h1>
						</div>
					</div>
					<div class="col-md-6">
						<div class="home-menu-btn offset">
							<h1><a href="{{ URL::to('offset') }}">Offset</a></h1>
						</div>
					</div>
					<div class="col-md-6">
						<div class="home-menu-btn web2print">
							<h1><a href="{{ URL::to('web2print') }}">Web 2 Print</a></h1>
						</div>
					</div>
					<div class="col-md-6">
						<div class="home-menu-btn packaging">
							<h1><a href="{{ URL::to('packaging') }}">Packaging</a></h1>
						</div>
					</div>
					<div class="col-md-6">
						<div class="home-menu-btn creative">
							<h1><a href="{{ URL::to('creative') }}">Creative</a></h1>
						</div>
					</div>
				</div><!--/.col-xs-12.col-sm-9-->
			</div><!--/row-->
		</div>
			
		@include('footer')
			
