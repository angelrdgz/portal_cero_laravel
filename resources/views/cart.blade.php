@extends('layouts.master')

@section('content')
<div class="container-cart">
	<div class="row">
		<div class="col-sm-7 bg-purple rbl">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="aero-font">
						<img src="{{asset('images/icono_tienda.png')}}" style="width:120px;" alt="">Mi carrito</h2>
					<br>
					<table class="table">
						<thead>
							<tr class="text-white">
								<th></th>
								<th>Producto</th>
								<th>Cantidad</th>
								<th>Precio</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@if(Cart::count() == 0)
							<tr>
								<td colspan="5" class="text-center text-white"><b>Carrito Vacio</b></td>
							</tr>
							@else

							@foreach(Cart::content() as $item)
							<tr>
								<td>
									<img style="width:80px;" class="rtl rtr rbl rbr" src="https://5.imimg.com/data5/XR/BA/MY-30093235/mens-blank-t-shirt-250x250.jpg" alt="">
								</td>
								<td style="vertical-align: middle;" class="text-white"><strong>{{$item->name}}</strong></td>
								<td style="vertical-align: middle;">
									<a href=""><i class="text-white">-</i></a>
									<input type="text" value="{{$item->qty}}" style="border: 1px solid #fff; background:transparent; color:#fff; border-radius: 10px; height:45px;width: 80px; text-align:center; margin: 0 10px; font-size:1.3em;" name="">
									<a href=""><i class="text-white">+</i></a>
								</td>
								<td class="text-center text-white" style="vertical-align: middle;">${{$item->price}}</td>
								<td style="vertical-align: middle;">
									<i class="text-center text-white">X</i>
								</td>
							</tr>
							 <?php $total +=  $item->price * $item->qty; ?>
							@endforeach
							@endif
							<tr>
								<td colspan=3>
									<div class="form-group row">
										<label for="staticEmail" class="col-sm-4 col-form-label">Código de descuento: </label>
										<div class="col-sm-6">
											<div class="input-group mb-2">
												<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="">
												<div class="input-group-append">
													<div class="input-group-text">Aplicar</div>
												</div>
											</div>
										</div>
									</div>
								</td>
								<td colspan="2">
									<h4 class="text-center">Subtotal: {{$total}}</h4>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-sm-5 bg-white rtr">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="">1. Dirección de envio</h2>
					<small>1.- Dirección de envio / 2.- Metodo de envio/3.- Método de pago/4.- Confirmación</small>
				</div>
				<div class="col-sm-12" style="margin-top:20px;">
					<div class="form-group">
						<label for="">Correo</label>
						<label for="" class="float-right">Bienvenido, <a href="#">@if(Auth::check()){{Auth::user()->name}} @else Invitado @endif</a></label>
						<input type="email" class="form-control" value="">
					</div>
				</div>
				<div class="col-auto">
					<div class="form-check mb-2">
						<input class="form-check-input" type="checkbox" id="autoSizingCheck">
						<label class="form-check-label" for="autoSizingCheck">
							Usar datos personales
						</label>
					</div>
				</div>
				<div class="col-sm-12">
					<h5>Dirección de Envio</h5>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<input type="password" class="form-control no-round" placeholder="Nombre">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<input type="password" class="form-control no-round" placeholder="Apellidos">
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group">
						<input type="password" class="form-control no-round" placeholder="Dirección">
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group">
						<input type="password" class="form-control no-round" placeholder="Apartamento, Número Interior, Número Exterior">
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group">
						<input type="password" class="form-control no-round" placeholder="Ciudad">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<input type="password" class="form-control no-round" placeholder="Pais">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<input type="password" class="form-control no-round" placeholder="Estado">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<input type="password" class="form-control no-round" placeholder="Código Postal">
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group">
						<input type="password" class="form-control no-round" placeholder="Teléfono">
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-check mb-2">
						<input class="form-check-input" type="checkbox" id="autoSizingCheck">
						<label class="form-check-label" for="autoSizingCheck">
							Usar datos personales
						</label>
					</div>
				</div>
				<br>
				<div class="col-sm-12">
					<div class="form-group text-right">
						<a href="#" class="btn-app btn-purple">Continuar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop