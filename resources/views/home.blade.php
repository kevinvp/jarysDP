 @include('header')
	<body>
		@include('navigation')
		
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="col-sm-12 col-md-5 home-menu-btn digitalPrinting">
						<h1><a href="{{ URL::to('digitalPrinting') }}">Digital Printing</a></h1>
					</div>
					<div class="col-sm-11 col-md-5 home-menu-btn xxl">
						<h1><a href="{{ URL::to('xxl') }}">XXL</a></h1>
					</div>
					<div class="col-sm-11 col-md-5 home-menu-btn offset">
						<h1><a href="{{ URL::to('offset') }}">Offset</a></h1>
					</div>
					<div class="col-sm-11 col-md-5 home-menu-btn web2print">
						<h1><a href="{{ URL::to('web2print') }}">Web 2 Print</a></h1>
					</div>
					<div class="col-sm-11 col-md-5 home-menu-btn packaging">
						<h1><a href="{{ URL::to('packaging') }}">Packaging</a></h1>
					</div>
					<div class="col-sm-11 col-md-5 home-menu-btn creative">
						<h1><a href="{{ URL::to('creative') }}">Creative</a></h1>
					</div>
				</div><!--/.col-xs-12.col-sm-9-->
			</div><!--/row-->
			
			@include('footer')
			
