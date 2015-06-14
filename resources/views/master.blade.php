 @include('header')
	<body>
		@include('navigation')
		
		<div class="container {{ $topic }}">
			<div class="row row-offcanvas row-offcanvas-right">
				<div class="col-xs-12 col-sm-9">
					<p class="pull-right visible-xs">
						<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
					</p>
					<div class="jumbotron">
						<h1>{{ $title }}</h1>
					</div>
					<div class="row top-row">
						@yield('topLeft')
						@yield('topRight')
					</div>
					<div class='row bottom-row'>
						@yield('bottomLeft')
						<div class="col-xs-12 col-md-6 col-bottom-right">
							@include('contact')
						</div><!--/.col-xs-6.col-lg-4-->
					</div><!--/row-->
				</div><!--/.col-xs-12.col-sm-9-->
				
				<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
					<div class="row examples-info">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vulputate odio nec nisi malesuada luctus. Donec tincidunt ut est a consectetur. Curabitur porta, urna vitae tempor luctus, turpis nisi venenatis augue, at sodales nibh elit quis ligula. Donec vitae molestie elit. Aliquam vel aliquet lorem. Etiam quis quam sit amet velit eleifend hendrerit. Aliquam erat volutpat. Aenean egestas odio sit amet est venenatis accumsan. Sed vestibulum quam non scelerisque pharetra.
					</div>
					<div class='row examples'>
						Vestibulum id tortor sit amet velit luctus gravida eget ut felis. Duis a mollis nisl, at tristique odio. Nunc cursus quam augue, vel accumsan nisl luctus quis. Mauris id sapien vehicula, sollicitudin augue accumsan, posuere nisl. Suspendisse semper leo eget aliquet hendrerit. Donec suscipit felis aliquam, auctor odio nec, cursus magna. Nullam in est tortor. Fusce eget est sit amet lorem maximus facilisis. Duis commodo ligula et felis lobortis dapibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis est enim, finibus quis lobortis fringilla, suscipit non mauris.
						In semper eu urna eu lobortis. Fusce non eros at tortor facilisis posuere id eu neque. In hac habitasse platea dictumst. Curabitur a volutpat risus. Nunc eget enim efficitur, vulputate justo at, ornare turpis. Etiam et lobortis est. Integer id ex non ex porttitor pulvinar. 
					</div>
				</div><!--/.sidebar-offcanvas-->
			</div><!--/row-->
			
			@include('footer')
			
