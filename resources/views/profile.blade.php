@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="header-profile">
			<div class="container">
				<i class="material-icons">photo_camera</i>
				<p class="text-center text-white">
					<b>Agrega foto de portada</b>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="purple-bar bg-purple">
	<div class="aside">
		<div class="box">
			<i class="material-icons">photo_camera</i>
			<p class="text-center text-white">
				<b>Agrega foto de perfil</b>
			</p>
		</div>
	</div>
	<div class="body">
		<ul>
			<li class="active"><a href="">Mis datos</a></li>
			<li><a href="">Mi dirección</a></li>
			<li><a href="">Mis pedidos o compras</a></li>
			<li><a href="">Mis favoritos</a></li>
		</ul>
	</div>
	<div class="append"></div>
</div>
<div class="white-body">
	<div class="aside">
		<ul>
			<li class="active"><a href="">Perfil de usuario</a></li>
			<li><a href="">Me gustaría ser creador</a></li>
			<li><a href="">Me gustaría ser diseñador</a></li>
			<li><a href="">Me gustaría ser aliado</a></li>
		</ul>
	</div>
	<div class="body">
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Nombre/Seudónimo</label>
					<input type="text" class="form-control" id="exampleInputEmail1" >
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Correo</label>
					<input type="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Contraseña actual</label>
					<input type="text" class="form-control">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Cumpleaños</label>
					<br>
					<div style="display: flex; justify-content: space-between;">
						<select name="" style="width: 30.3%;" id="" class="form-control no-corner-radius"></select>
						<select name="" style="width: 30.3%;" id="" class="form-control no-corner-radius"></select>
						<select name="" style="width: 30.3%;" id="" class="form-control no-corner-radius"></select>
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Sexo</label>
					<input type="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Nueva contraseña</label>
					<input type="text" class="form-control">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<label for="">Estoy interesado en</label>
			</div>
			<div class="col-sm-3">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						Comics
					</span>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						Ilustración
					</span>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						Cuentos
					</span>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						Novelas
					</span>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						Videos / Animaciones
					</span>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						Música
					</span>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						Videojuegos
					</span>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						Aventura
					</span>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						Acción
					</span>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						Comedia
					</span>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						Drama
					</span>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						Románticos
					</span>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						Horror
					</span>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						Suspenso
					</span>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						Art toys
					</span>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						Posters
					</span>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						Ropa
					</span>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						Accesorios
					</span>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						Cosas para la escuela
					</span>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						Cosas para mi cuarto
					</span>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						Cosas para regalar
					</span>
				</div>
			</div>
		</div>
	</div>
	<div class="append">
		<a href="" class="btn btn-purple">Guardar cambios</a>
	</div>
</div>
@stop