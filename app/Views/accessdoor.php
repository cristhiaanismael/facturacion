<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Metadatos -->
    <meta charset="utf-8">
    <meta name="author" content="Brandon Hernadez">
    <meta name="description" content="Portafolio de desarrollo web de Brandon Hernadez">
    <meta name="keywords" content="HTML, CSS, JavaScript, React">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Titulo -->
    <title>Sucualitas-Formulario de Ticket</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('imagenes/iconook.jpg') ?>">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- CSS -->
    <link href="<?= base_url('public/css/stylesaccess.css') ?>" rel="stylesheet">
</head>

<body>
    <img src="<?= base_url('imagenes/iconook.jpg') ?>" alt="Logo principal" class="imagen-responsiva">
    <div class="form-container">
        <h2>Registro de Ticket</h2>
        <form id="ticketForm">
            <label for="ticketNumber">Número de Ticket: <i class="bi bi-ticket"></i></label>
            <input type="text" id="ticketNumber" name="ticketNumber" required placeholder="ejem: F:160784165SDAS">

            <label for="amount">Monto Total:<i class="bi bi-currency-dollar"></i></label>
            <input type="number" id="monto" name="monto" placeholder="Ej. 100.00" step="0.01" min="0" required>


            <label for="purchaseDate">Fecha de Compra: <i class="bi bi-calendar"></i></label>
            <input type="date" id="fecha" name="fecha" required>

            <br>
            <button type="button" onclick="validarYEnviar()">Registrar Ticket</button>

            <p id="mensaje" class="error"></p>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script src="../accessdoor/script.js"></script>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            //va esperara a ejecutarse hasta que el dom este creado y cargado al 100%
            $.ajax({
                url: './sucursal/', // Ajusta esta ruta según tu configuración
                type: 'GET',
                dataType: 'json',
                success: function (response) {
                    console.log(response);
                    ///hacer/programar lo que queremos


                },
                error: function (xhr, status, error) {
                    console.error("Error en la petición AJAX:", error);
                }
            });


        });





        function validarYEnviar() {
            // Obtener valores del formulario
            const ticket = $('#ticketNumber').val().trim();
            const monto = $('#monto').val().trim();
            const fecha = $('#fecha').val();

            // Validar campos vacíos
            if (!ticket || !monto || !fecha) {
                $('#mensaje').text('Todos los campos son obligatorios').css('color', 'red');
                return;
            }

            // Enviar por AJAX
            $.ajax({
                url: './verificar_ticket', // Reemplaza con tu ruta real
                method: 'POST',
                dataType: 'json',
                data: {
                    ticketNumber: ticket,
                    monto: monto,
                    fecha: fecha
                },
                success: function (response) {
                    if (response.status === 'success') {
                        $('#mensaje').text('Ticket registrado correctamente').css('color', 'green');
                        $('#ticketForm')[0].reset();
                    } else {
                        $('#mensaje').text(response.msj || 'No se pudo registrar el ticket').css('color', 'red');
                    }
                },
                error: function (xhr, status, error) {
                    $('#mensaje').text('Error al procesar la solicitud: ' + error).css('color', 'red');
                }
            });
        }
    </script>




</body>

</html>