<!DOCTYPE html>
<html>
<head>
  <title>Tabla de usuarios</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/usertable.css"/>
</head>
<div>
    <h1 class="title">TABLA DE USUARIOS</h1>
</div>
<table class="table">
    <thead>
        <tr>
         <th>ID</th>
         <th>Evento</th>
         <th>Nombre</th>
         <th>Apellidos</th>
         <th>Correo</th>
         <th>Fecha_nacimiento</th>
        <th>whatsapp</th>
        <th>Facebook</th>
        <th>Instagram</th>
        <th>Ciudad</th>
        <th>Profesion</th>
        <th>Comercializa</th>
        <th>Informacion</th>
        </tr>
    </thead>
    <tbody>
        <!-- Para que te imprima una fila por cada registro, debes generar un <tr> por cada iteracion del foreach -->
        @foreach ($usuarios as $usuario)
            <!-- Los <tr> indican 1 fila de la tabla -->
            <tr>
                <!-- Dentro de cada <tr> deben ir los <td> que son los table-data o datos a imprimir en la tabla -->
                <!-- En esta parte debes imprimir los valores con dobles llaves -->
                <td>{{ $usuario->id}} </td>
                <td>{{$usuario->event_id}}</td>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->apellidos}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->fecha_nacimiento}}</td> <!-- Si los dejas asi te va a imprimir el texto, no el valor de la variable -->
                <td>{{$usuario->whatsapp}}</td>
                <td>{{$usuario->facebook}}</td>
                <td>{{$usuario->instagram}}</td>
                <td>{{$usuario->ciudad}}</td>
                <td>{{$usuario->profesion}}</td>
                <td>{{$usuario->comercializa}}</td>
                <td>{{$usuario->info_requiere}}</td>
            </tr>
        @endforeach
    </tbody>
  </table>

</body>
</html>
