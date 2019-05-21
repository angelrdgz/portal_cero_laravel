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
	<form method="POST" id="updateProfileForm" action="{{action('WelcomeController@updateProfile')}}">
           @csrf		
           <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Nombre/Seudónimo</label>
					<input type="text" name="name" class="form-control" value="{{Auth::user()->name}}" id="exampleInputEmail1" >
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Correo</label>
					<input type="email" name="email" value="{{Auth::user()->email}}" class="form-control">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Contraseña actual</label>
					<input type="text" name="password" class="form-control">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Cumpleaños</label>
					<br>
					<div style="display: flex; justify-content: space-between;">
						<select name="day" style="width: 30.3%;" id="" class="form-control no-corner-radius">
							@for($i=1; $i < 31; $i++)
							 <option value="{{$i < 10 ? '0'.$i:$i}}" {{$birthday[2] == $i ? 'selected':''}}>{{$i}}</option>
							@endfor
						</select>
						<select name="month" style="width: 30.3%;" id="" class="form-control no-corner-radius">
							@for($i=1; $i < count($months); $i++)
							 <option value="{{$i < 10 ? '0'.$i:$i}}" {{$birthday[1] == $i ? 'selected':''}}>{{$months[$i]}}</option>
							@endfor
						</select>
						<select name="year" style="width: 30.3%;" id="" class="form-control no-corner-radius">
							@for($i=1980; $i < 2010; $i++)
							 <option value="{{$i}}" {{$birthday[0] == $i ? 'selected':''}}>{{$i}}</option>
							@endfor
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Sexo</label>
					<select name="genere" id="" class="form-control no-corner-radius">
							@foreach($generes as $genere)
							 <option value="{{$genere->id}}" {{Auth::user()->genere_id == $genere->id ? 'selected':''}}>{{$genere->name}}</option>
							@endforeach
						</select>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Nueva contraseña</label>
					<input type="text" name="confirm_password" class="form-control">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<label for="">Estoy interesado en</label>
			</div>
			@for($i = 0; $i < count($interests); $i++)
			 @if($i == 0)
			  <div class="col-sm-3">
				<div class="form-check">
					<input class="form-check-input" name="interests[]" {{in_array($interests[$i]->id, Auth::user()->interest_ids) == true ? 'checked':'' }} value="{{$interests[$i]->id}}" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						{{$interests[$i]->name}}
					</span>
				</div>
			 @elseif($i == 6)
				<div class="form-check">
					<input class="form-check-input" name="interests[]" {{in_array($interests[$i]->id, Auth::user()->interest_ids) == true ? 'checked':'' }} value="{{$interests[$i]->id}}" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						{{$interests[$i]->name}}
					</span>
				</div>
			</div>
			<div class="col-sm-3">
			 @elseif($i == 13)
			 <div class="form-check">
					<input class="form-check-input" name="interests[]" {{in_array($interests[$i]->id, Auth::user()->interest_ids) == true ? 'checked':'' }} value="{{$interests[$i]->id}}" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						{{$interests[$i]->name}}
					</span>
				</div>
			</div>
			<div class="col-sm-3">
			 @elseif($i == 20)
			 <div class="form-check">
					<input class="form-check-input" name="interests[]" {{in_array($interests[$i]->id, Auth::user()->interest_ids) == true ? 'checked':'' }} value="{{$interests[$i]->id}}" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						{{$interests[$i]->name}}
					</span>
				</div>
			</div>
			 @else
			  <div class="form-check">
					<input class="form-check-input" name="interests[]" {{in_array($interests[$i]->id, Auth::user()->interest_ids) == true ? 'checked':'' }} value="{{$interests[$i]->id}}" type="checkbox" id="gridCheck1">
					<span class="form-check-label" for="gridCheck1">
						{{$interests[$i]->name}}
					</span>
				</div>
			 @endif
			@endfor
		</div>
		</form>
	</div>
	<div class="append">
		<button class="btn btn-purple" onClick="$('#updateProfileForm').submit()">Guardar cambios</button>
	</div>

</div>
@stop