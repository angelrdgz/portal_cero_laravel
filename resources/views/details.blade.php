@extends('layouts.master')

@section('content')
<div class="details-box">
	<div class="left-box"></div>
	<div class="right-box">
		<div class="content">
			<ul class="breadcrums">
				<li class="link">Inicio</li>
				<li class="link">Universos</li>
				<li class="link">League</li>
				<li>legends</li>
			</ul>
			<h2 class="title aero-font">League of legends</h2>
			<p class="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae ratione, doloremque placeat neque.</p>
			<div class="row">
				<div class="col-sm-12">
					<div class="box-submenu">
						<ul class="float-left">
							<li><img src="{{ asset('images/icono_escrito.png') }}" alt=""></li>
							<li><img src="{{ asset('images/icono_imagen.png') }}" alt=""></li>
							<li><img src="{{ asset('images/icono_video.png') }}" alt=""></li>
							<li><img src="{{ asset('images/icono_musica.png') }}" alt=""></li>
							<li><img src="{{ asset('images/icono_game.png') }}" alt=""></li>
							<li><img src="{{ asset('images/icono_productos.png') }}" alt=""></li>
						</ul>
						<a href="" class="float-right btn-uncorner">Mas universos</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4"><div class="gray-box"></div></div>
				<div class="col-sm-4"><div class="gray-box"></div></div>
				<div class="col-sm-4"><div class="gray-box"></div></div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm-4"><div class="gray-box"></div></div>
				<div class="col-sm-4"><div class="gray-box"></div></div>
				<div class="col-sm-4"><div class="gray-box"></div></div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm-4"><div class="gray-box"></div></div>
				<div class="col-sm-4"><div class="gray-box"></div></div>
				<div class="col-sm-4"><div class="gray-box"></div></div>
			</div>
		</div>
	</div>
</div>
@stop