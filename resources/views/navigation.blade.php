<nav class="navbar navbar-fixed-top navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ URL::to('/') }}">Jary's Digital Printing</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="{{ URL::to('digitalPrinting') }}">Digital Printing</a></li>
						<li><a href="{{ URL::to('xxl') }}">XXL</a></li>
						<li><a href="{{ URL::to('offset') }}">Offset</a></li>
						<li><a href="{{ URL::to('web2print') }}">Web 2 Print</a></li>
						<li><a href="{{ URL::to('packaging') }}">Packaging</a></li>
						<li><a href="{{ URL::to('creative') }}">Creative</a></li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div><!-- /.container -->
		</nav><!-- /.navbar -->