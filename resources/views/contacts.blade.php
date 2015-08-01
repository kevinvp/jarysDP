@extends('master')

@section('topLeft')
	<div class="col-xs-12 col-md-6 col-top-left">
		<h2>Adres</h2>
		<p>
			Jary’s Digital Printing<br/>
			Guido Gezellestraat 5<br/>
			2630 Aartselaar
		</p>
		<p>
			0032 (0)3 870 63 93
			
			<ul>
				<li><a href='mailto:"printing@jarys.be"'>printing@jarys.be</a></li>
				<li><a href='http://www.jarys.be'>www.jarys.be</a></li>
				<li><a href='http://www.2bprinted.be'>www.2bprinted.be</a></li>
				<li><a href='http://login.2bprinted.be'>login.2bprinted.be</a></li>
				<li><a href='http://www.uwclubblad.be'>www.uwclubblad.be</a></li>
				<li><a href='http://www.doorschrijf.be'>www.doorschrijf.be</a></li>
			</ul>
		</p>
	</div><!--/.col-xs-6.col-lg-4-->
@stop

@section('topRight')
	<div class="col-xs-12 col-md-6 col-top-right">
		<h2>Route</h2>
		<iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5007.106530201673!2d4.387613101212426!3d51.13514778848258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xa9f88cb9c4a31c5a!2sJary&#39;s+Digital+Printing!5e0!3m2!1snl!2sbe!4v1436101288049" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div><!--/.col-xs-6.col-lg-4-->
@stop

@section('bottomLeft')
	<div class="col-xs-12 col-md-6 col-bottom-left">
		<h2>Openingsuren</h2>
		<table>
			<tr><td class="day">Maandag</td><td>9u tot 17u30</td></tr>
			<tr><td class="day">Dinsdag</td><td>9u tot 17u30</td></tr>
			<tr><td class="day">Woensdag</td><td>9u tot 17u30</td></tr>
			<tr><td class="day">Donderdag</td><td>9u tot 17u30</td></tr>
			<tr><td class="day">Vrijdag</td><td>9u tot 17u30</td></tr>
			<tr><td class="day">Zaterdag</td><td>Gesloten</td></tr>
			<tr><td class="day">Zondag</td><td>Gesloten</td></tr>
		</table>
		Verlof 25 juli tot 17 augustus gesloten ...
	</div><!--/.col-xs-6.col-lg-4-->
@stop