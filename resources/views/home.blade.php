 @include('header')
	<body>
		@include('navigation')
		
		<div class="container">
			<div class="row row-offcanvas row-offcanvas-right">
				<div class="col-xs-12 col-sm-9">
					<p class="pull-right visible-xs">
						<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
					</p>
					<div class="jumbotron">
						<h1>Home</h1>
					</div>
					<div class="row top-row">
						<div class="col-xs-12 col-md-6 col-top-left">
							<h2>Digitaal Drukwerk</h2>
							<p>Digitaal drukken betekent dat wij rechtstreeks van PC/MAC bestanden printen op digitale productie persen en dit zonder gebruik te maken van film of drukplaten. De grote toegevoegde waarde van digitaal drukken bestaat er in dat er gepersonaliseerde elementen opgenomen kunnen worden op elk drukvel. Ook kleine oplagen en print on demand (POD) zijn uitermate geschikt om digitaal gedrukt te worden.</p>
						</div><!--/.col-xs-6.col-lg-4-->
						<div class="col-xs-12 col-md-6 col-top-right">
							<h2>Toepassingen</h2>
							<ul>
								<li><span class='glyphicon glyphicon-chevron-right'></span><a href='#'>Folders en brochures</a></li>
								<li><span class=''></span><a href='#'>Prijslijsten</a></li>
								<li><span class='glyphicon glyphicon-triangle-right'></span><a href='#'>Nieuwsbrieven</a></li>
								<li><a href='#'>Visitekaartjes</a></li>
								<li><a href='#'>Les- en cursusmateriaal</a></li>
								<li><a href='#'>Uitnodigingen</a></li>
								<li><a href='#'>Verhuisberichten</a></li>
								<li><a href='#'>Catalogussen</a></li>
								<li><a href='#'>Geboortekaartjes</a></li>
								<li><a href='#'>Gepersonaliseerde Mailings</a></li>
								<li><a href='#'>Jaarverslagen</a></li>
							</ul>
						</div><!--/.col-xs-6.col-lg-4-->
					</div>
					<div class='row bottom-row'>
						<div class="col-xs-12 col-md-6 col-bottom-left">
							<h2>Waarom digitaal?</h2>
							<p>De vraag naar betaalbaar en kwalitatief hoogwaardig drukwerk in kleinere oplages, al dan niet gepersonaliseerd, blijft sterk stijgen. Steeds meer bedrijven maken hier gebruik van en zien de vele mogelijkheden. Digitaal drukken is daarom ook uitermate geschikt voor kleinere oplagen, ad-hoc producties, drukwerk dat actueel moet zijn of mutatiegevoelig is.<br/> Met ons performant machinepark en onze oplossingen komen wij te gemoed aan deze verzuchtingen.</p>
						</div><!--/.col-xs-6.col-lg-4-->
						<!--http://www.easylaravelbook.com/blog/2015/02/09/creating-a-contact-form-in-laravel-5-using-the-form-request-feature/-->
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
			
			@include('footer');
			
