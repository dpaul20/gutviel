@extends('layouts.app')

@section('contenedor')
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="rg-contenedor">
    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 ppal">
        <div class="form-contacto">
            <div class=" tituloAzul">
                <h5 class="subtitulo">CONTACTENOS</h5>
            </div>
            <form id="formContacto">

                <div class="form-group">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>

                <div class="form-group">
                    <label for="inputAddress">Nombre</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Consulta</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" ></textarea>
                </div>


                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>

        </div>
        

    </div>
</div>
</div>

@endsection
