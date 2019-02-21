<!DOCTYPE html>
<html lang="en">
  @include('layout.head')
  <body>
    <div class="container-fluid">
      <div class="row header">
        <div class="col-md-4" id="header1">
          @include('layout.header')
        </div>
        <div class="col-md-8" id="header2"></div>        
      </div>
  <div class="row menu">
    <div class="col-md-12">
      @include('layout.menu')
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      @include('layout.modulos.slide-ofertas')
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      @include('layout.modulos.izquierda')
    </div>
    <div class="col-md-6">
      @yield('content')
    </div>
    <div class="col-md-3">
      @include('layout.modulos.form-contacto')
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      @include('layout.modulos.slide-marcas')
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      @include('layout.footer')
    </div>
  </div>
</div>
@include('layout.scripts')
  </body>
</html>