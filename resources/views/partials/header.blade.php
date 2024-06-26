<!-- <div class="row">
  <div class="col-sm-4">.col-sm-4</div>
  <div class="col-sm-8">.col-sm-8</div>
</div> -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top scrolling-navbar">
    <a class="navbar-brand" href="{{ route('producto.index') }}">
        <img src="/img/svg/undraw_mobile_web_2g8b.svg" width="50" height="50" class="d-inline-block align-center"
            alt="">
        Dogsi tú mascota tú familia</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	  		<!-- Categorias  -->
    <ul class="navbar-nav mr-auto">

	@if(Session::has('subcategorias')) 
	
	@foreach(Session::get('subcategorias') as $subcategoria)

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		{{$subcategoria->nombre}}CCC
        </a>
        <div class="dropdown-menu  bg-primary" aria-labelledby="navbarDropdown">

          
          <div class="container-fluid">

			  

@foreach($subcategoria->subCategoriasProducto->chunk(3) as $chunk)
    <div class="row">

        @foreach($chunk as $ssubcategoria)
		 <div class="col-md-3 float-left"  >
		      <ul class="nav flex-column">

                <li class="nav-item">
                  <a class="nav-link" href="{{route('producto.catalogo',['id_sub_categoria_producto' => $ssubcategoria->id_subcategoria_producto])}}">{{$ssubcategoria->nombre}}XXXX</a>
                </li>
			
              </ul>
            </div>
		

			@endforeach
		<div class="col-md-3">
                <a href="">
                  <img src="https://dummyimage.com/200x100/ccc/000&text=image+link" alt="" class="img-fluid">
                </a>
                <p class="text-white"><span class="text-uppercase text-white">{{$subcategoria->nombre}}</span></p>

				

		</div>
		
    </div>
	@endforeach


		  </div>

        </div>
	  </li>
	  @endforeach
	   @endif


	  <li class="nav-item">
      <a class="nav-link  js-scroll-trigger" href="#footer">Contactos</a>
	  </li>
	  


	</ul>
					<!-- FIN  Categorias  -->
	<!-- CARRO DE COMPRAS  -->

					<ul class="navbar-nav mr-auto">
				<!--       <li class="nav-item active"> -->
				<!--         <a class="nav-link" href="{{route('producto.index')}}">Home <span class="sr-only">(current)</span></a> -->
				<!--       </li> -->
				<li class="nav-item"><a class="nav-link"
					href="{{route('producto.shopingCart')}}"> <i
						class="fas fa-shopping-cart "><span
						class="badge badge-pill badge-primary">{{Session::has('cart')?
							Session::get('cart')->totalQty:''}}</span></i> <span class="palabraCarrito"> Carrito</span> 

				</a></li>
				<li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
					href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false"> <i class="fas fa-user"></i>
						Cuenta de Usuario
				</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						@if(Auth::check()) <a class="dropdown-item"
							href="{{route('users.profile')}}">Perfil Usuario</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="{{route('users.logout')}}">Cerrar
							Sesion</a> @else <a class="dropdown-item"
							href="{{route('users.signup')}}">Registrarse</a> <a
							class="dropdown-item" href="{{route('users.signin')}}">Iniciar
							Sesion</a> @endif


					</div></li>
					<li>
					@if(session()->has('message'))
    <div class="alert alert-success" style="font-size:12px">
        {{ session()->get('message') }}
    </div>
@endif
				</li>
			</ul>
	<!-- FIN CARRO DE COMPRAS  -->


				<!-- Social Icon  -->
				<ul class="navbar-nav nav-flex-icons">
				<li class="nav-item"><a class="nav-link"><i
						class="fab fa-facebook-f"></i></a></li>

				<li class="nav-item">
				<a href="https://api.whatsapp.com/send?phone=593998849028&text=Hola DOGSI!%20Necesito%20preguntar%20acerca%20de:" 
target="_blank"
class="nav-link"><img src="{{asset('./img/wthasp.jpg')}}" with='25' height='25'/></a>
				</li>
<!-- 				<li class="nav-item"><a class="nav-link"><i class="fab fa-instagram"></i></a> -->
				</li>
			</ul>
					<!--  FIN Social Icon  -->
     <form class="form-inline my-2 my-lg-0" action="/catalogo" method="get">
      <input class="form-control mr-sm-2" type="search"   name="search"  placeholder="Buscar Productos" aria-label="Buscar Productos">
      <button class=" fas fa-search botonBuscar" type="submit"></button>
    </form> 
  </div>
</nav>