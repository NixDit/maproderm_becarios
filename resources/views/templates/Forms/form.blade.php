<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/forms.css">
    <title>Login</title>
</head>
<body>
      <div class="login-container">
          <div class="login-info-container">
            <h1 class="title">Bienvenido</h1>
            <div class="social-login">
                <div class="social-login-element">
                    <a class="menu-link py-3" href="{{route('formulario')}}">
                    <span class="menu-title">Registrarme</span>
                    </a>
                </div>
                <div class="social-login-element">
                    <a class="menu-link py-3" href="{{route('registrado')}}">
                    <span class="menu-title">Ya estoy Registrado</span>
                    </a>
                </div>
            </div>

            <p>Rellene su informacion correcta</p> <br>
            <br>
            <br>
            <form action="{{route('guardarUsuario')}}" method="POST" class="inputs-container">
                @csrf
                <input required name="name" type="text" class="input" placeholder="Escribir nombre(s)"><br>
                <input required name="apellidos" type="text" class="input" placeholder="Escribir apellidos"><br>
                <input required name="fecha_nacimiento" type="text" id="fecha_nacimiento"class="input"placeholder="Escriba su fecha de nacimiento"><br>
                <input required name="email" type="text" id="email"class="input"placeholder="Correo"><br>
                <input required name="event_id" class="input" type="text" placeholder="Evento"><br>
                <input required name="whatsapp" type="text" id="whatsapp" class="input" placeholder="Escribir watsaap"><br>
                <input required name="facebook" type="text" class="input" placeholder="Escriba su facebook"><br>
                <input required name="instagram" type="text" class="input" placeholder="Escriba su instagram"><br>
                <input required name="ciudad" type="text" class="input" placeholder="Escriba su ciudad"><br>

                <div class="mb-10">
                    <!--begin::Label-->
                    <label class="form-label fw-bold">Profesion:</label>
                    <!--end::Label-->
                    <!--begin::Options-->
                    <div class="d-flex">
                        <!--begin::Options-->
                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                            <input class="form-check-input" type="checkbox" value="1" />
                            <span class="form-check-label">Estetica</span>
                        </label>
                        <!--end::Options-->
                        <!--begin::Options-->
                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                            <span class="form-check-label">Academia</span>
                        </label>
                        <!--end::Options-->
                        <!--begin::Options-->
                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                            <span class="form-check-label">Studio</span>
                        </label>
                        <!--end::Options-->
                        <!--begin::Options-->
                        <br>
                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                        <span class="form-check-label">Otros</span>
                        </label>
                        <!--end::Options-->
                        <input required name="profesion" type="text" class="form-control" placeholder="Escriba su profesión">
                    </div>
                    <!--end::Options-->
                </div>
                <br>
                <div class="form-group" style="margin-bottom: 1rem;">
                    <label for="">Comercializa alguna marca de cosméticos, cuál?:</label><br>
                    <input required name="comercializa" type="text" class="form-control" placeholder="*">
                </div>
                <br>
                <div class="mb-10">
                    <!--begin::Label-->
                    <label class="form-label fw-bold">¿Que informacion te gustaria recibir:</label>
                    <!--end::Label-->
                    <!--begin::Options-->
                    <div class="d-flex">
                        <!--begin::Options-->
                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                            <input class="form-check-input" type="checkbox" value="1" />
                            <span class="form-check-label">Distribuicion</span>
                        </label>
                        <!--end::Options-->
                        <!--begin::Options-->
                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                            <span class="form-check-label">Maquila</span>
                        </label>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                            <span class="form-check-label">Acepto los términos y condiciones</span>
                        </label>

                    </div>
                </div>
                <br>
                <button class="btn" type="submit">Enviar</button>
                <br>


            </form>
            <br>
            <br>
            <br>
            <div>
            <a href="{{route('indexprincipal')}}">
                <button>cancelar</button></a>


                </div>
</body>
<script src='{{ asset('js/jquery.js?v='.rand()) }}'></script>
<script src='{{ asset('inputmask/inputmask/dist/jquery.inputmask.js?v='.rand()) }}'></script>
<script>
    $(document).ready(function(){
        var email = document.getElementById('email'); // la palabra email debe ser 'email', porque si lo dejas sin las comillas, es como si le pasaras una variable
        var email = $('#email') // esta forma es con Jquery, hacen lo mismo
         // console.log("email desde consola =>",email); // Con esta funcion imprimes valores en la consola del navegador para poder verificar los datos que estas manejando

        $('#email').inputmask({ // De esta forma ya le pasas el elemento mediante Jquery, ya que el Jquery lo usa inputmask
            mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
            greedy: false,
            onBeforePaste: function (pastedValue, opts) {
                pastedValue = pastedValue.toLowerCase();
                return pastedValue.replace("mailto:", "");
            },
            definitions: {
               '*': {
                   validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~\-]",
                   casing: "lower"
                }
            }
        }); // Con esto ya deberia funcionar, vamos a revisar si no da erro r en la consola del navegador
    })
</script>
<script>
    $(document).ready(function(){
        var fecha_nacimiento = document.getElementById('fecha_nacimiento'); // la palabra email debe ser 'email', porque si lo dejas sin las comillas, es como si le pasaras una variable
        var fecha_nacimiento = $('#fecha_nacimiento')

        $('#fecha_nacimiento').inputmask({
            "mask" : "99/99/9999"
       });
    })
</script>
<script>
    $(document).ready(function(){
        var whatsapp = document.getElementById('whatsapp'); // la palabra email debe ser 'email', porque si lo dejas sin las comillas, es como si le pasaras una variable
        var whatsapp = $('#whatsapp')
       $('#whatsapp').inputmask({
         "mask" : "(999) 999-9999"
        });
    })
</script>
</html>

