<!--http://www.easylaravelbook.com/blog/2015/02/09/creating-a-contact-form-in-laravel-5-using-the-form-request-feature/-->
@if(Session::has('message'))
	<h2>Bedankt om ons te contacteren!</h2>             	
	<div class="alert alert-info {{ $topic }}">
	{{Session::get('message')}}
	</div>
@else
	<h2>Stel uw vraag</h2>
	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
	
	{!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}
	<div class="form-group">
		{!! Form::text('name', null, 
		array('required', 
			'class'=>'form-control', 
			'placeholder'=>'Uw naam')) !!}
	</div>
	
	<div class="form-group">
		{!! Form::text('email', null, 
		array('required', 
			'class'=>'form-control', 
			'placeholder'=>'Uw e-mailadres')) !!}
	</div>
	
	<div class="form-group">
		{!! Form::textarea('message', null, 
		array('required', 
			'class'=>'form-control',
			'rows'=>'5', 
			'placeholder'=>'Uw bericht')) !!}
	</div>
	
	<div class="form-group">
		{!! Form::submit('Contacteer ons!', 
		array('class'=>'btn btn-primary')) !!}
	</div>
	{!! Form::close() !!}
@endif