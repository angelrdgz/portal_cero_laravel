@extends('layouts.master')

@section('content')
		<div class="row">
			<div class="col-sm-12">
				<div class="header-contact">
					<div class="container">

					</div>
					<h3 style="color: #fff;" class="aero-font">Contactanos</h3>
				</div>
			</div>
		</div>
		<div class="contact-body">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p class="text-center">Para enviar tu propuesta escribenos a 
                            <a href="mailto:generamoscreadores@portalcero.mx">
                                <img src="{{asset('images/contact/email.png')}}" alt="">
                                generamoscreadores@portalcero.mx
                            </a>
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="col-sm-4">
                    <div class="form-group">
                            <input type="text" class="form-control" placeholder="Correo">
                        </div>
                    </div>
                    <div class="col-sm-4">
                    <div class="form-group">
                            <select name="" id="" class="form-control">
                                <option value="" disabled>¿Que te interesa saber?</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-3 offset-sm-4">
                        <button href="" class="btn-purple btn-uncorner btn-block double-padding aero-font">enviar</button>
                    </div>
                </div>
            </div>
		</div>
		<br>
@stop