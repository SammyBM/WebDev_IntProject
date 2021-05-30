<!DOCTYPE html>
<html lang="es" class="font-Lexend">
  <head>
    <title>Ropa</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width,
 initial-scale=1"
    />
    <link
      rel="stylesheet"
      href="css/bootstrap.min.css"
      rel="stylesheet"
      media="screen"
    />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lexend&display=swap"
      rel="stylesheet"
    />
    <style type="text/css">
      .slider {
        background: url(images/fondo.jpg);
        height: 100vh;
        background-size: cover;
      }
      body {
        margin: 0px;
      }
    </style>
    <link rel="shortcut icon" href="images/icons/icon.png" />
  </head>
  <body>
    <content>
      <section class="slider d-flex justify-content-center align-items-center">
        <article class="row">
          <h1
            class="col-12 display-3 text-center text-white"
            style="margin: 0px"
          >
            Bienvenido a OS-CLOTHING
          </h1>
        </article>
      </section>
      <section class="container">
        <article
          class="mt-5 text-center font-weight-bold font-italic text-uppercase"
        >
          Primero el titulo.
        </article>
        <article class="bg-danger mt-4 text-white p-3">
          Favor de leer los términos y condiciones de la web antes de continuar
        </article>
        <div class="container">
          <div class="row mb-4">
            <article
              class="mt-4 bg-primary text-white p-4 col-sm-4 float-left mr-10"
            >
              Opciones:
              <nav class="nav nav-tabs">
                <ul class="list-unstyled">
                  <li class="nav-item mt-4">
                    <a class="nav-link active" href=""> Usuarios</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href=""> Ropa</a>
                  </li>
                  <li class="nav-item mb-4">
                    <a class="nav-link active" href=""> Accesorios</a>
                  </li>
                </ul>
              </nav>
            </article>


            <div class="mt-4 text-justify float-right mb-4 col-sm-8 p-3">
              Somos una empresa dedicada a la venta online de ropa. Nuestro
              objetivo es ofrecer la moda más actual a los mejores precios.
              Tenemos a su disposición una gran variedad de productos, los
              cuales son renovados cada temporada para dar siempre las prendas
              más trendy. Tenemos un equipo que está dedicado a satisfacer tus
              necesidades y que te contestará a tus dudas con la mayor brevedad
              posible.
              <br>
              Nuestro objetivo es ofrecer ropa de mejor calidad satisfaciendo las necesidades y gustos del mercado potencial. Vender ropa a la moda que cumpla con los requerimientos de estilo en el segmento del mercado. Analizarlas tendencias de moda existentes para determinar las perspectivas a largo plazo de la línea de ropa.
            </br>
            </div>
          </div>
        </div>
        <?php
          include("funciones/Read_tabla2_pdo.php");
          include("funciones/Read_tabla3_mysqli.php");
        ?>
      </section>
    </content>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-
J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-
Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-
wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
