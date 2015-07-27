<hr/>

<div class="row">
	<div class="col-md-9 col-md-offset-1 centered">
		<div class="col-md-3">
			<ul class="nav nav-pills nav-stacked footer {{ $topic }}">
				<li>
					<a href="{{ URL::to('/downloads') }}">Downloads</a>
				</li>
			</ul>
		</div>
		<div class="col-md-3">
			<ul class="nav nav-pills nav-stacked footer {{ $topic }}">
				<li>
					<a href="#">Login</a>
				</li>
			</ul>
		</div>
		<div class="col-md-3">
			<ul class="nav nav-pills nav-stacked footer {{ $topic }}">
				<li>
					<a href="{{ URL::to('/contacts') }}">Contact</a>
				</li>
			</ul>
		</div>
		<div class="col-md-3">
			<ul class="nav nav-pills nav-stacked footer {{ $topic }}">
				<li>
					<a href="{{ URL::to('/') }}">Home</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<footer>
	<p>
		&copy; Jary's Digital Printing 2015
	</p>
</footer>

</div><!--/.container-->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
{!! HTML::script('js/bootstrap.min.js') !!}
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
{!! HTML::script('js/ie10-viewport-bug-workaround.js') !!}

{!! HTML::script('js/offcanvas') !!}
</body>
</html>