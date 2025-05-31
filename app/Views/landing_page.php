<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Metadatos -->
    <meta charset="utf-8">
    <meta name="author" content="Brandon Hernadez">
    <meta name="description" content="Portafolio de desarrollo web de Jane Doe">
    <meta name="keywords" content="HTML, CSS, JavaScript, React">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Titulo -->
    <title>SucuAlitas | Los mejores alimentos</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="imagenes/icono.jpg">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- CSS -->
    <link href="style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Rubik+Dirt&family=Share+Tech+Mono&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- Barra de navegacion -->
    <nav class="navbar navbar-expand-md navbar-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-toggler">
          <a class="navbar-brand" href="#">
            <img src="imagenes/icono.jpg" width="50" alt="Logo de la página web">
          </a>
          <ul class="navbar-nav d-flex justify-content-center align-items-center">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#sobre-mi">¿Quienes somos?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#proyectos">Sucursales</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testimonios">Testimonios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./factura2/Index.html" target="_blank" rel="noopener noreferrer"> facturar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contacto">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Seccion Hero -->
    <section class="hero align-items-stretch">
      <div class="hero-principal d-flex flex-column justify-content-center align-items-center">
        <img class="hero-imagen-desarrollador " src="./imagenes/icono.jpg" alt="Foto de Alitas">
        <h1>SUCUALITAS</h1>
        <h2>Bienvenidos sean todos y todas, sientanse con total libertad de explorar todo lo que tenemos para ustedes en este sitio web.</h2>
      </div>
      <div class="hero-inferior">
        <img class="hero-inferior-imagen img-fluid" src="./imagenes/alitas-papas.jpg" alt="Monitor, laptop y logos de HTML, CSS, JavaScript y React.">
      </div>
    </section>

    <!-- Sobre mi -->
    <section id="sobre-mi" class="sobre-mi seccion-oscura">
      <div class="contenedor">
        <h2 class="seccion-titulo">Quienes somos</h2>
        <p class="seccion-texto">MISIÓN:
          Que nuestros clientes vivan la experiencia WING STOP, deliciosa y divertida, ofreciéndoles nuestros productos de la más alta calidad y sabor; con personal entusiasta, altamente capacitado y excelente actitud de servicio.
          <br><br>
          VISIÓN:
          Ser la empresa líder de restaurantes sport-casual a nivel nacional, con rentabilidad y crecimiento constante, mediante la práctica de nuestros valores y procesos, con innovación e infraestructura de vanguardia; manteniendo relaciones responsables con nuestros clientes, proveedores y comunidad, así como brindar oportunidades que mejoren la calidad de vida de los colaboradores de la empresa.
        </p>
      </div>
    </section>

    <!-- Experiencia -->
    <section class="experiencia seccion-clara">
      <div class="container text-center">
        <div class="row">
          <!-- Entradas -->
          <div class="columna col-12 col-md-4">
            <i class="bi bi-egg"></i>
            <p class="experiencia-titulo">Entradas</p>
            <p>Las entradas de comida son platos que se sirven antes del plato principal, como aperitivos, y sirven para abrir el apetito. A menudo se consideran el primer plato de un menú de tres tiempos. Pueden ser frías o calientes, y pueden variar desde ensaladas y sopas hasta canapés y embutidos. </p>
            <div class="badges-contenedor">
              <span class="badge text-bg-primary">VER ENTRADAS</span>
            </div>
          </div>
          <!-- Especialidades -->
          <div class="columna col-12 col-md-4">
            <i class="bi bi-emoji-wink"></i>
            <p class="experiencia-titulo">Especialidades</p>
            <p>Las especialidades en gastronomía están diseñadas para las personas que desean perfeccionar sus técnicas culinarias, explorar la creatividad en la cocina y adquirir una comprensión más profunda de los fundamentos culinarios.</p>
            <div class="badges-contenedor">
              <span class="badge text-bg-primary">VER ESPECIALIDADES</span>
            </div>
          </div>
          <!-- Bebidas -->
          <div class="columna col-12 col-md-4">
            <i class="bi bi-cup-straw"></i>
            <p class="experiencia-titulo">Bebidas</p>
            <p>Las bebidas que se consumen durante una comida, como agua, refrescos, vino o cerveza, son aquellas que se beben para hidratarse y/o complementar el sabor de la comida</p>
            <div class="badges-contenedor">
              <span class="badge text-bg-primary">VER BEBIDAS</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Sucursales -->
    <section id="proyectos" class="proyectos-recientes seccion-clara d-flex flex-column">
      <h2 class="seccion-titulo texto-negro">Sucursales</h2>
      <h3 class="seccion-descripcion">Visita y conoce todas las sucursales que Sucualitas tiene para ti y tu familia.</h3>
      <!-- Galeria de Sucursales -->
      <div class="container text-center proyectos-contenedor">
        <div class="row">
          <!-- Sucursal1 1 -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="proyecto">
              <img src="imagenes/restaurante1.jpg" alt="Proyecto 1">
              <div class="overlay">
                <p>Condesa</p>
                <div class="iconos-contenedor">
                  <a href="https://github.com/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-geo-alt-fill"></i>
                  </a>
                  <a href="https://www.freecodecamp.org/espanol/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-laptop"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Sucursal 2 -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="proyecto">
              <img src="imagenes/restaurante2.avif" alt="Proyecto 1">
              <div class="overlay">
                <p>Insurgentes</p>
                <div class="iconos-contenedor">
                  <a href="https://github.com/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-geo-alt-fill"></i>
                  </a>
                  <a href="https://www.freecodecamp.org/espanol/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-laptop"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Sucursal 3 -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="proyecto">
              <img src="imagenes/restaurante3.webp" alt="Proyecto 1">
              <div class="overlay">
                <p>Polanco</p>
                <div class="iconos-contenedor">
                  <a href="https://github.com/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-geo-alt-fill"></i>
                  </a>
                  <a href="https://www.freecodecamp.org/espanol/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-laptop"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Sucursal 4 -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="proyecto">
              <img src="imagenes/restaurante4.jpg" alt="Proyecto 1">
              <div class="overlay">
                <p>Xochimilco</p>
                <div class="iconos-contenedor">
                  <a href="https://github.com/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-geo-alt-fill"></i>
                  </a>
                  <a href="https://www.freecodecamp.org/espanol/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-laptop"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Proyecto 5 -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="proyecto">
              <img src="imagenes/restaurante5.jpg" alt="Proyecto 1">
              <div class="overlay">
                <p>Ermita</p>
                <div class="iconos-contenedor">
                  <a href="https://github.com/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-geo-alt-fill"></i>
                  </a>
                  <a href="https://www.freecodecamp.org/espanol/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-laptop"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Proyecto 6 -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="proyecto">
              <img src="imagenes/restaurante6.jpg" alt="Proyecto 1">
              <div class="overlay">
                <p>Toreo</p>
                <div class="iconos-contenedor">
                  <a href="https://github.com/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-geo-alt-fill"></i>
                  </a>
                  <a href="https://www.freecodecamp.org/espanol/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-laptop"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="" target="_blank" rel="noopener noreferrer">
        <button type="button" class="btn btn-info">
          Ver más sucursales
          <i class="bi bi-arrow-right-circle-fill"></i>
        </button>
      </a>
    </section>

    <!-- Articulos -->
    <section class="articulos justify-content-start">
      <h2 class="seccion-titulo texto-negro">Preguntas frecuentes</h2>
      <div class="card">
        <div class="card-header">
          Más frecuentes
        </div>
        <ul class="list-group list-group-flush">
          <a href="" target="_blank" rel="noopener noreferrer">
            <li class="list-group-item">
              ¿Aceptan mascotas dentro de los establecimientos?
            </li>
          </a>
          <a href="" target="_blank" rel="noopener noreferrer">
            <li class="list-group-item">
              ¿Cómo puedo facturar lo que consumi?
            </li>
          </a>
          <a href="" target="_blank" rel="noopener noreferrer">
            <li class="list-group-item">
              ¿Tienen servicio a domicilio?
            </li>
          </a>
          <a href="" target="_blank" rel="noopener noreferrer">
            <li class="list-group-item">
              ¿Cuales son sus promociones y que días aplican?
            </li>
          </a>
          <a href="" target="_blank" rel="noopener noreferrer">
            <li class="list-group-item">
              ¿Puedo postularme para trabajar con ustedes?
            </li>
          </a>
        </ul>
      </div>
      <a href="" target="_blank" rel="noopener noreferrer">
        <button type="button" class="btn btn-info">
          Ver más preguntas
          <i class="bi bi-arrow-right-circle-fill"></i>
        </button>
      </a>
    </section>

    <!-- Testimonios -->
    <section id="testimonios" class="testimonios seccion-clara">
      <h2 class="seccion-titulo">Reseñas</h2>
      <h3 class="seccion-descripcion">Estos son algunos comentarios de nuestros clientes.</h3>
      
      <!-- Carrusel -->
      <div id="testimonios-carrusel" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <img class="testimonio-imagen rounded-circle" src="imagenes/cliente1.svg" alt="Foto de Gino">
              <p class="testimonio-texto">Definitivamente uno de los mejores lugares a los que he ido a comer, el lugar muy limpio, la atención 10/10, y la comida sumamente rica, lo recomiendo ampliamente.</p>
              <div class="testimonio-info">
                <p class="cliente">instagram</p>
                <p class="cargo">Jungkook</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <img class="testimonio-imagen rounded-circle" src="imagenes/cliente2.svg" alt="Foto de Nora">
              <p class="testimonio-texto">Las mejores alitas que he provado muy recomendadas, fui el viernes con unos amigos para ver el futbol y tenían una promoción con bebidas y comida, excelente volveremos a ir!</p>
              <div class="testimonio-info">
                <p class="cliente">instagram</p>
                <p class="cargo">👑BABY QUEEN🤤</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <img class="testimonio-imagen rounded-circle" src="imagenes/cliente3.svg" alt="Foto de Leonardo">
              <p class="testimonio-texto">Excelente opción para una cerveza con amigos
              Varias veces he ido. Limpio, tranquilo, muy buena atención, servicio rápido. La cerveza con clamato, en el tarro de casi 900 ml y pico, muy muy bueno. Las alitas barbecue, son de los más recomendables.
              </p>
              <div class="testimonio-info">
                <p class="cliente">instagram</p>
                <p class="cargo">_.Bubblegum._._</p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#testimonios-carrusel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonios-carrusel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
      </div>
    </section>

    <!-- Contacto -->
    <section id="contacto" class="contacto seccion-oscura">
      <div class="container">
        <div class="container text-center rectangulo d-flex justify-content-evenly">
          <div class="row">
            <div class="col-12 col-md-4 seccion-titulo">
              ¡Hablemos!
            </div>
            <div class="col-12 col-md-4 descripcion">
              Estamos para ayudarte y brindarte el mejor servicio, si necesitas algo que no hayas podido encotrar en nuestra página, ponte en contacto con nosotros.
            </div>
            <div class="col-12 col-md-4">
              <a href="mailto:janedoe@micorreo.com">
                <button type="button">  
                  Contacto
                  <i class="bi bi-envelope-check-fill"></i>
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Pie de pagina (footer) -->
    <footer class="seccion-oscura d-flex flex-column align-items-center justify-content-center"> 
      <img class="footer-logo" src="imagenes/icono-blanco.svg" alt="Logo del portafolio">
      <p class="footer-texto text-center">Sigamos creando buenos momentos.<br>Sigamos creando sonrisas.</p>
      <div class="iconos-redes-sociales d-flex flex-wrap align-items-center justify-content-center">
        <a href="https://twitter.com/freecodecampES" target="_blank" rel="noopener noreferrer">
          <i class="bi bi-twitter"></i>
        </a>
        <a href="https://github.com/freeCodeCamp/freeCodeCamp" target="_blank" rel="noopener noreferrer">
          <i class="bi bi-facebook"></i>
        </a>
        <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer">
          <i class="bi bi-linkedin"></i>
        </a>
        <a href="https://www.instagram.com/freecodecamp/" target="_blank" rel="noopener noreferrer">
          <i class="bi bi-instagram"></i>
        </a>
        <a href="mailto:janedoe@micorreo.com" target="_blank" rel="noopener noreferrer">
          <i class="bi bi-envelope"></i>
        </a>
      </div>
      <div class="derechos-de-autor">Creado por (2025) &#169;</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>