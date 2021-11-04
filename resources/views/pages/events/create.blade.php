@extends('pages.home')
@section('toolbar_title','Crear Evento')
@section('toolbar_subtitle',' Formulario para Crear Evento')
@section('toolbar_actions')
    @include('pages.projects.toolbar_actions')
@endsection
@section('container')



    <div class="row">
        <form action="{{ route('guardarEvento')}}" method="POST" class="form">
        @csrf
        <div class="form-group" style="margin-bottom:1rem;">
                <label for="">Nombre del Evento:</label>
                <input  required name= "name" type="text" class="form-control" placeholder=" Escribir Nombre del evento">
            </div>
            <div class="form-group" style="margin-bottom: 1rem;">
                <label for="">Productor:</label>
                <input input  required name= "productor" type="text" class="form-control" placeholder="Escribir Productor">
            </div>
            <div class="form-group" style="margin-bottom: 1rem;">
                <label for="">Artista:</label>
                <input  input required name="artista" type="text" class="form-control" placeholder="Escribir Artista">
            </div>
            <div class="form-group">
                <label for="">Hotel:</label>
                <input  input required name="hotel" type="text" class="form-control" placeholder="Escribir Hotel">
             </div>
            <div class="form-group" style="margin-bottom:1rem;">
                <label for="">Fecha de Inicio:</label>
                <input  required name= "fecha_inicio" type="date" class="form-control" >
            </div>
            <div class="form-group" style="margin-bottom: 1rem;">
                <label for="">Fecha de termino:</label>
                <input input  required name= "fecha_fin" type="date" class="form-control">
            </div>
            <div class="form-group" style="margin-bottom: 1rem;">
                <label for="">Status:</label>
                <input  input required name="status" type="text" class="form-control" placeholder="Escribir status">
            </div>
            </div>
            <div class="form-group" style="margin-bottom: 1rem;">
                <label for="">Opciones </label>
                <input  input required name="status" type="text" class="form-control" placeholder="Escribir status">
            </div>
           
            <button type="submit" style="margin-top: 1rem;" class="btn btn-danger">Guardar información</button>
        </form>
    </div>
    <h2>
</body>

</html>
@endsection

