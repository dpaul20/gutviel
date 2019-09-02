<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  @include('layout.head')
  <body>
    <div id="Index___Web_1280"> 
    <header>
      @include('layout.header')
    </header> 
    <div id="contenido">
       @include('layout.contenido')
    </div>
    <div id="izquierda">
      @include('layout.modulos.izquierda')
    </div>
    <div id="derecha">
      @include('layout.modulos.derecha')
    </div>
    <div id="footer">
      @include('layout.footer') 
    </div>
    <div id="nav">
      @include('layout.menu') 
    </div>
  </div>
  </body>
</html>