<html>
<head>
    <title>Portal Cero</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header id="header">
	<div class="navbar navbar-fixed-left">
		<div class="navbar-inner">
			<div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			        <i class="material-icons">menu</i>
		        </button>
		        <a class="brand" href="/">
		        	<img src="{{ asset('images/logo_PortalCero.png') }} " alt="">
		        </a>
		        <div class="nav-collapse collapse">
		        	<ul>
		        		<li class="login-link text-center">
		        			<a data-toggle="modal" data-target="#loginModal">
		        				<img src="{{ asset('images/icono_miperfil.png') }}" alt="">
			        			<span>Iniciar Sesión / <br> Registrarte</span>
			        		</a>
		        		</li>
		        		<li><a href="{{ url('cart') }}"><img src="{{ asset('images/icono_tienda.png') }}" alt=""> Carrito</a></li>
		        		<li><a href="#"><img src="{{ asset('images/icono_creadores.png') }}" alt=""> Creadores</a></li>
		        		<li><a href="{{ url('designers') }}"><img src="{{ asset('images/icono_disenadores.png') }}" alt=""> Diseñadores</a></li>
		        		<li><a href="#"><img src="{{asset('images/icono_aliados.png') }}" alt=""> Aliados</a></li>
		        		<li><a href="#"><img src="{{asset('images/icono_competencias.png') }}" alt=""> Competencias</a></li>
		        		<li><a href="#"><img src="{{asset('images/icono_dudas.png') }}" alt=""> Dudas</a></li>
		        		<li><a href="#"><img src="{{asset('images/icono_nbosotros.png') }}" alt=""> Nosotros</a></li>
		        		<li><a class="close close-menu" data-toggle="collapse" data-target=".nav-collapse"><i class="material-icons">clear</i></a></li>
		        	</ul>
		        </div>
		        <div class="menu float-right">
		        	<ul>
		        		<li><a href="{{ url('/') }}" class="active">Inicio</a></li>
		        		<li><a href="{{ url('universes') }}">Universos</a></li>
		        		<li><a href="">Tienda</a></li>
		        		<li><a href="">Contacto</a></li>
		        		<li><a href="{{ url('profile') }}" class="no-padding"><img src="{{ asset('images/icono_miperfil_home.png') }}" alt=""></a></li>
		        		<li><a class="no-padding" data-toggle="modal" data-target="#loginModal"><img src="{{ asset('images/icono_carrito_home.png') }}" alt=""></a></li>
		        	</ul>
		        </div>
			</div>
		</div>
	</div>
</header>
<div class="main">
    @yield('content')
</body>
<div class="modal" id="loginModal">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="opacity: 1; color: #fff; margin-right: 50px; margin-top: 50px; font-size: 3em;">
          <span aria-hidden="true">&times;</span>
  </button>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      	<h2 class="text-center aero-font" style="color: #fff;">Hola, ¿Que quieres hacer?</h2>
      	<br>
        <div class="row">
        	<div class="col-sm-6 rbl">
        		<h2 class="text-center aero-font">Registrarme</h2>
                <hr style="border-color: #fff; margin-top: 0.6rem; margin-bottom: 1.4rem; border: 0;border-top: 3px solid #fff;width: 30%;">
    			<div class="form-group">
    				<label for="">Nombre</label>
    				<input type="text" class="form-control no-corner-radius">
    			</div>
    			<div class="form-group">
    				<label for="">Correo</label>
    				<input type="text" class="form-control no-corner-radius">
    			</div>
    			<div class="form-group" style="width:48%; float:left;">
    				<label for="">Contraseña</label>
    				<input type="text" class="form-control no-corner-radius">
    			</div>
    			<div class="form-group" style="width:48%; float:right;">
    				<label for="">Confirmar Contraseña</label>
    				<input type="text" class="form-control no-corner-radius">
    			</div>
    			<br>
    			<p class="text-center">
    				<a href="" class="btn btn-app btn-white rtr rbl double-padding">Registrar</a>
    			</p>
        	</div>
        	<div class="col-sm-6 white-box">
        		<h2 class="text-center aero-font">Inicar Sesión</h2>
        		<hr style="border-color: #fff; margin-top: 0.6rem; margin-bottom: 1.4rem; border: 0;border-top: 3px solid #6409e3;width: 30%;">
    			<div class="form-group">
    				<label for="">Correo Electronico</label>
    				<input type="text" style="border:4px solid #7600eb;"class="form-control no-corner-radius">
    			</div>
    			<div class="form-group">
    				<label for="">Contraseña</label>
    				<input type="text" style="border:4px solid #7600eb;"class="form-control no-corner-radius">
    			</div>
                <br>
                <p class="text-center">
                    <a href="" class=""><img src="{{asset('images/google_btn.png')}}" style="height: 40px;" alt=""></a>
                </p>
    			<p class="text-center" style="margin-bottom: 22px;">
    				<a href="" class="btn btn-app btn-purple rtr rbl double-padding">Entrar</a>
    			</p>
        	</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){

    $('.btn-navbar').click(function(){
        $(this).hide();
    })

    $('.close-menu').click(function(){
        $('.btn-navbar').show();
    })

    $(window).scroll(function() {
        if ($(document).scrollTop() > 100) {
            $('.navbar').addClass('navbar-black');
        }
        else {
            $('.navbar').removeClass('navbar-black');
        }
    });

  })
    
</script>
</html>
