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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">   
    <!-- CSS -->
    <link href="<?= base_url('/CSS/stylesaccess.css')?>" rel="stylesheet">
</head>
<body>
    <img src="<?= base_url('imagenes/iconook.jpg')?>" alt="Logo principal" class="imagen-responsiva">
    <div class="form-container">
    <h2>Registro de Ticket</h2>
    <form id="ticketForm">
      <label for="ticketNumber">Número de Ticket: <i class="bi bi-ticket"></i></label> 
      <input type="text" id="ticketNumber" name="ticketNumber" required placeholder="ejem: F:160784165SDAS">

      <label for="amount">Monto Total:<i class="bi bi-currency-dollar"></i></label>
      <input type="number" id="monto" name="monto" placeholder="Ej. 100.00" step="0.01" min="0" required> 
      <!-- type="number": Solo permite ingresar números. -->
      <!-- step="0.01": Permite ingresar centavos (decimales).
      min="0": No permite valores negativos.
      placeholder: Muestra un ejemplo dentro del campo.
      required: Obliga al usuario a llenar el campo antes de enviar un formulario. -->

      <label for="purchaseDate">Fecha de Compra: <i class="bi bi-calendar"></i></label>
      <input type="date" id="fecha" name="fecha" required>
      <!-- type="date": Muestra un selector de fecha (en la mayoría de los navegadores modernos).
      id y name: Identifican el campo para usarlo en formularios.
      required: Hace obligatorio llenar la fecha antes de enviar el formulario. -->
      <br>
      <button onclick="validarYEnviar()">Registrar Ticket</button>

      <p id="mensaje" class="error"></p>
  </div>
    
  <script src="../accessdoor/script.js"></script>
</body>
</html>
