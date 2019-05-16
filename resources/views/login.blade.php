@extends('layouts.blue_master')

@section('content')
<div class="container-login">
	<h1 class="text-center title aero-font">Hola, ¿qué quieres hacer?</h1>
	<br>
	<div class="row">
		<div class="col-sm-6 bg-purple">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="text-center">Registrarme</h2>
				</div>
				<div class="col-sm-12">
					<div class="form-group">
						<label for="">Nombre</label>
						<input type="text" class="form-control no-round" value="">
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group">
						<label for="">Correo</label>
						<input type="email" class="form-control no-round" value="">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="">Contraseña</label>
						<input type="password" class="form-control no-round" value="">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="">Confirmar Contraseña</label>
						<input type="password" class="form-control no-round" value="">
					</div>
				</div>
				<br>
				<br>
				<div class="col-sm-12">
					<div class="form-group text-center">
							<a href="#" class="btn-app btn-white">Registrar</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 bg-white">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="text-center">Registrarme</h2>
				</div>
				<div class="col-sm-12">
					<div class="form-group">
						<label for="">Correo</label>
						<input type="email" class="form-control no-round" value="">
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group">
						<label for="">Contraseña</label>
						<input type="password" class="form-control no-round" value="">
					</div>
				</div>
				<div class="col-sm-8 offset-sm-2">
					<img style="height:50px; max-width: 100%; display:block; margin: 15px auto;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqwRCaTaJtTlQyNkZj4PqLuDFYtR6aY3MbV73Wc70ukBf3mvv7" alt="">
				</div>
				<br>
				<br>
				<div class="col-sm-12">
					<div class="form-group text-center">
							<a href="#" class="btn-app btn-purple">Entrar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop