 @include('header')
	<body>
		{{--@include('navigation')--}}
		
		<div class="container {{ $topic }}">
			<div class="row row-offcanvas row-offcanvas-right">
				<div class="col-md-12">
					<div class="row underline">
						<div class="col-md-2"></div>
						<div class="jumbotron col-md-8">
							<h1>{{ $title }}</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<div class="navigation">
								<a href="javascript:void(0);" class="navigate-btn">navigate</a>
								<div class="nav-items">
									<ul>
										<li>
											<a href="{{ URL::to('digitalPrinting') }}" class="navigate-sub-btn dp">Digital Printing</a>
										</li>
										<li>
											<a href="{{ URL::to('xxl') }}" class="navigate-sub-btn xxl">XXL</a>
										</li>
										<li>
											<a href="{{ URL::to('offset') }}" class="navigate-sub-btn offset">Offset</a>
										</li>
										<li>
											<a href="{{ URL::to('web2print') }}" class="navigate-sub-btn w2p">Web 2 Print</a>
										</li>
										<li>
											<a href="{{ URL::to('packaging') }}" class="navigate-sub-btn pa">Packaging</a>
										</li>
										<li>
											<a href="{{ URL::to('creative') }}" class="navigate-sub-btn crea">Creative</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-8 center-block">
							<div class="center-block-content">
								<div class="row top-row">
									@yield('topLeft')
									@yield('topRight')
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="border">
										</div>
									</div>
								</div>
								<div class='row bottom-row'>
									@yield('bottomLeft')
									<div class="col-xs-12 col-md-6 col-bottom-right">
										@include('contact')
									</div><!--/.col-xs-6.col-lg-4-->
								</div><!--/row-->
							</div>
						</div>

						<div class="col-md-2">
								<div class="row examples-info gray-skin js-scroll" >
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vulputate odio nec nisi malesuada luctus. Donec tincidunt ut est a consectetur. Curabitur porta, urna vitae tempor luctus, turpis nisi venenatis augue, at sodales nibh elit quis ligula. Donec vitae molestie elit. Aliquam vel aliquet lorem. Etiam quis quam sit amet velit eleifend hendrerit. Aliquam erat volutpat. Aenean egestas odio sit amet est venenatis accumsan. Sed vestibulum quam non scelerisque pharetra.
								</div>
								<div class='row examples gray-skin js-scroll'>
									Vestibulum id tortor sit amet velit luctus gravida eget ut felis. Duis a mollis nisl, at tristique odio. Nunc cursus quam augue, vel accumsan nisl luctus quis. Mauris id sapien vehicula, sollicitudin augue accumsan, posuere nisl. Suspendisse semper leo eget aliquet hendrerit. Donec suscipit felis aliquam, auctor odio nec, cursus magna. Nullam in est tortor. Fusce eget est sit amet lorem maximus facilisis. Duis commodo ligula et felis lobortis dapibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis est enim, finibus quis lobortis fringilla, suscipit non mauris.
									In semper eu urna eu lobortis. Fusce non eros at tortor facilisis posuere id eu neque. In hac habitasse platea dictumst. Curabitur a volutpat risus. Nunc eget enim efficitur, vulputate justo at, ornare turpis. Etiam et lobortis est. Integer id ex non ex porttitor pulvinar.
								</div>
						</div>
					</div>

				</div><!--/.col-xs-12.col-sm-9-->
			</div><!--/row-->
			
			@include('footer')
			
