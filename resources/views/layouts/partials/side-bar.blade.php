<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
      <a href="https://www.creative-tim.com" class="simple-text logo-mini">
        <div class="logo-image-small">
          <img src="../assets/img/logo-small.png">
          
        </div>
        
      </a>
      <a href="https://www.creative-tim.com" class="simple-text logo-normal">
        {{ config('app.name') }}
        <!-- <div class="logo-image-big">
          <img src="../assets/img/logo-big.png">
        </div> -->
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li @if(Route::currentRouteName() == 'home.index') class="active" @endif >
          <a href="{{ route('home.index') }}">
            <i class="nc-icon nc-bank"></i>
            <p>Incio</p>
          </a>
        </li>
        <li @if(Route::currentRouteName() == 'productos.index') class="active" @endif>
          <a href="{{ route('productos.index') }}">
            <i class="nc-icon nc-basket"></i>
            <p>Carta</p>
          </a>
        </li>
        <li>
          <a href="{{ route('clientes.index') }}">
            <i class="nc-icon nc-money-coins"></i>
            <p>Promociones</p>
          </a>
        </li>
        <li>
          <a href="{{ route('clientes.index') }}">
            <i class="nc-icon nc-delivery-fast"></i>
            <p>Delivery</p>
          </a>
        </li>
        <li>
          <li>
            <a href="{{ route('clientes.index') }}">
              <i class="nc-icon nc-calendar-60"></i>
              <p>Reserva</p>
            </a>
          </li>
          <li>
          <a href="{{ route('clientes.index') }}">
            <i class="nc-icon nc-user-run"></i>
            <p>Registro</p>
          </a>
        </li>
      </ul>
    </div>
  </div>