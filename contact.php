<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<!-- 
THEME: Constra - Construction Html5 Template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/constra-construction-template/
DEMO: https://demo.themefisher.com/constra/
GITHUB: https://github.com/themefisher/Constra-Bootstrap-Construction-Template

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->

<!DOCTYPE html>
<html lang="es">
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T79HS2X9');</script>
<!-- End Google Tag Manager -->
<head>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>


  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Refacciones Fabela</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Refaccines para maquinaria pesada original y de remplazo">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name=author content="Refacciones Fabela">
  <meta name=generator content="Refacciones Fabela v1.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="css/style.css">


</head>
<script>
  function validarFormulario() {
      var nombre = document.getElementById('nombre').value;
      var correo = document.getElementById('correo').value;
      var telefono = document.getElementById('telefono').value;

      // Validaciones básicas
      if (nombre === '' || correo === '' || telefono === '') {
          alert('Por favor, completa todos los campos.');
          return false;
      }

      // Validación de correo electrónico
      var regexCorreo = /^\S+@\S+\.\S+$/;
      if (!regexCorreo.test(correo)) {
          alert('Por favor, ingresa un correo electrónico válido.');
          return false;
      }

      // Validación de número de teléfono (solo números)
      var regexTelefono = /^\d+$/;
      if (!regexTelefono.test(telefono)) {
          alert('Por favor, ingresa un número de teléfono válido.');
          return false;
      }

   

    if (esHumano === false) {
        alert("Confirma que heres humano.");
        return false; // Evita que el formulario se envíe
    }

      return true;
  }
</script>
<script>
    // Función para mostrar el mensaje flotante
    function mostrarMensajeFlotante(mensaje) {
        var mensajeFlotante = document.getElementById('mensaje-flotante');
        mensajeFlotante.innerHTML = mensaje;
        mensajeFlotante.style.display = 'block';

        // Cierra el mensaje después de 5 segundos (puedes ajustar el tiempo)
        setTimeout(function () {
            mensajeFlotante.style.display = 'none';
        }, 5000);
    }

    // Función para cerrar el mensaje
    function cerrarMensaje() {
        document.getElementById('mensaje-flotante').style.display = 'none';
    }

    // Muestra el mensaje si la URL contiene 'success=1'
    window.onload = function () {
        if (window.location.search.includes('success=1')) {
            mostrarMensajeFlotante('<span  class="cerrar-mensaje" onclick="cerrarMensaje()">El registro se ha insertado correctamente.</span>');
        }
    };
</script>




<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T79HS2X9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <div class="body-inner">

    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">Sierra de Ixtlan 501, Col. Benito Juárez, Toluca, Estado de México</p>
                    </li>
                </ul>
              </div>
              <!--/ Top info end -->
  
              <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                  <li>
                    <a title="Facebook" href="https://www.facebook.com/RefaccionesFabela" target="_blank" >
                        <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                    </a>                     
                    <a title="Instagram" href="https://www.instagram.com/refaccionesfabelamp/" target="_blank" >
                        <span class="social-icon"><i class="fab fa-instagram"></i></span>                          
                    </a>
                   
                  </li>
                </ul>
              </div>
              <!--/ Top social end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
<!-- Header start -->
<header id="header" class="header-one">
  <div class="bg-white">
    <div class="container">
      <div class="logo-area">
        <div class="row align-items-center">
          <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">                
                <img loading="lazy" src="images/logo.png"   alt="Refacciones Fabela">                
          </div><!-- logo end -->

          <div class="col-lg-9 header-right">
              <ul class="top-info-box">
                <li>
                  <div class="info-box">
                    <div class="info-box-content">
                        <p class="info-box-title">Llámanos</p>
                        <p class="info-box-subtitle">(722) 2-72-44-97</p>                         
                    </div>
                  </div>
                </li>
                <li>
                  
                  <div class="info-box">
                    <div class="info-box-content">
                        <p class="info-box-title">Envíenos un correo electrónico</p>
                        <p class="info-box-subtitle">ventas@refacccionesfabela.com.mx</p>
                    </div>
                  </div>
                </li>                 
                <li class="header-get-a-quote">
                  <a class="btn btn-primary" href="https://api.whatsapp.com/send?phone=7221787846"  target="_blank">Cotizar <i class="fab fa-whatsapp text-center"></i></a>
                </li>
              </ul><!-- Ul end -->
          </div><!-- header right end -->
        </div><!-- logo area end -->

    </div><!-- Row end -->
    </div><!-- Container end -->
  </div>

  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>

                   <!--   
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Compañia <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Sobre Nosotros</a></li>
                            <li><a href="team.html">Nuestra Gente</a></li>
                             <li><a href="testimonials.html">Testimonios</a></li>
                            <li><a href="#">Preguntas más frecuentes</a></li>
                             <li><a href="pricing.html">Precios</a></li>
                          </ul>
                      </li>
              
                   
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Servicios <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="services.html">Venta de refacciones</a></li>
                          <li><a href="service-single.html">Venta de refacciones usadas</a></li>
                        </ul>
                    </li>
            
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Features <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="typography.html">Typography</a></li>
                          <li><a href="404.html">404</a></li>
                          <li class="dropdown-submenu">
                              <a href="#!" class="dropdown-toggle" data-toggle="dropdown">Parent Menu</a>
                              <ul class="dropdown-menu">
                                <li><a href="#!">Child Menu 1</a></li>
                                <li><a href="#!">Child Menu 2</a></li>
                                <li><a href="#!">Child Menu 3</a></li>
                              </ul>
                          </li>
                        </ul>
                    </li>
            
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">News <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="news-left-sidebar.html">News Left Sidebar</a></li>
                          <li><a href="news-right-sidebar.html">News Right Sidebar</a></li>
                          <li><a href="news-single.html">News Single</a></li>
                        </ul>
                    </li>
            -->
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contáctanos</a></li>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->

        <div class="nav-search">
          <span id="search"><i class="fa fa-search"></i></span>
        </div><!-- Search end -->

        <div class="search-block" style="display: none;">
          <label for="search-field" class="w-100 mb-0">
            <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
          </label>
          <span class="search-close">&times;</span>
        </div><!-- Site search end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>
<!--/ Header end -->
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Contacto</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="index.html">Inico</a></li>
                      <li class="breadcrumb-item"><a href="index.html">Nosotros</a></li>
                      <li class="breadcrumb-item active" aria-current="page">contacto</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<div id="mensaje-flotante" class="mensaje-flotante"></div>

<section id="main-container" class="main-container">
  <div class="container">

    <div class="row text-center">
      <div class="col-12">
        <h2 class="section-title">LLEGAR A NUESTRA SUCURSAL</h2>
        <h3 class="section-sub-title">ENCUENTRA NUESTRA UBICACIÓN</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fas fa-map-marker-alt mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Visite nuestra tienda</h4>
            <p>Sierra de Ixtlan 501, Col. Benito Juárez, Toluca, Estado de México</p>
          </div>
        </div>
      </div><!-- Col 1 end -->

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-envelope mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Correo electrónico</h4>
            <p>ventas@refacionesfabela.com.mx</p>
          </div>
        </div>
      </div><!-- Col 2 end -->

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-phone-square mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Teléfono</h4>
            <p>(722) 2-72-44-97</p>
          </div>
        </div>
      </div><!-- Col 3 end -->

    </div><!-- 1st row end -->

    <div class="gap-60"></div>

    <div class="google-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1883.1842953944697!2d-99.64178444213375!3d19.266330828738703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd89820e964f67%3A0x361c5f1ce1fdc97f!2sRefacciones+Fabela!5e0!3m2!1ses-419!2smx!4v1507076925396" width="100%;" height="500px"  frameborder="0" style="border:0; margin-top: 30px; border-radius: 20px;" allowfullscreen></iframe>    </div>

    <div class="gap-40"></div>

    <div class="row">
      <div class="col-md-12">
        <h3 class="column-title">Dejanos tu mensaje y con gusto nos comunicámos</h3>
        <!-- contact form works with formspree.io  -->
        <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->






        <form action="procesar_formulario.php" method="post" onsubmit="return validarFormulario()" role="form">
          <div class="error-container"></div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Nombre</label>
                <input class="form-control form-control-name" type="text" id="nombre" name="nombre"  placeholder="Nombre" type="text" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Correo</label>
                <input class="form-control form-control-email" id="correo" name="correo" placeholder="Correo" type="email"
                  required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Teléfono</label>
                <input class="form-control form-control-subject" id="telefono" name="telefono" placeholder="Teléfono" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Mensaje</label>
            <textarea class="form-control form-control-message" id="mensaje" name="mensaje" placeholder="Mensaje" rows="10"
              required></textarea>
          </div>

          <div class="form-group">
            <label>¿Eres humano?</label>
            <input  class="form-control form-control-message" type="checkbox" id="esHumano" name="esHumano" required>
            
          </div>
          <div class="text-right"><br>
            <button class="btn btn-primary solid blank" type="submit">Enviar mensaje</button>
          </div>

        
        </form>
      </div>

    </div><!-- Content row -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->

<footer id="footer" class="footer bg-overlay">
  <div class="footer-main">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-4 col-md-6 footer-widget footer-about">
          <h3 class="widget-title">SOBRE NOSOTROS</h3>
          <img loading="lazy" width="200px" class="footer-logo" src="images/logo.png" alt="Constra">
          <p>"Experiencia, excelencia y calidad en refacciones para maquinaria pesada".
            Donde podrá encontrar la más amplia gama de servicios, productos originales y de reemplazo para maquinaria pesada de la más alta calidad.</p>
          <div class="footer-social">
            <ul>

            
              <li><a href="https://www.facebook.com/RefaccionesFabela/" target="_blank" aria-label="Facebook"><i
                    class="fab fa-facebook-f"></i></a></li>
              
              <li><a href="https://www.instagram.com/refaccionesfabelamp/" aria-label="Instagram"><i
                    class="fab fa-instagram"></i></a></li>
             
            </ul>
          </div><!-- Footer social end -->
        </div><!-- Col end -->

        <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
          <h3 class="widget-title">Horarios de atención </h3>
          <div class="working-hours">
            Trabajamos de Lunes a Sábado, excepto días festivos.
            <br><br> Lunes a Viernes: <span class="text-right">09:00 - 18:00 </span>
            <br> Sábado: <span class="text-right">09:00 - 14:00</span>             
          </div>
        </div><!-- Col end -->

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
          <h3 class="widget-title">Contáctanos</h3>
          <ul class="list-arrow">
          
            <li>(722)2-72-44-97</li>
            <li>(722)2-80-10-89</li>
            <li>(722)3-18-82-71</li>
            <li>ventas@refaccionesfabela.com.mx</li>
            <li>facturas@refaccionesfabela.com.mx</li>            
          </ul>
        </div><!-- Col end -->
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Footer main end -->

  <div class="copyright">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12">
          <div class="copyright-info">
            <span>Copyright &copy; <script>
                document.write(new Date().getFullYear())
              </script>, Refacciones Fabela</span>
          </div>
        </div>

       
      </div><!-- Row end -->

      <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
        <button class="btn btn-primary" title="Back to Top">
          <i class="fa fa-angle-double-up"></i>
        </button>
      </div>

    </div><!-- Container end -->
  </div><!-- Copyright end -->
</footer><!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="plugins/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="js/script.js"></script>

  </div><!-- Body inner end -->
  </body>

  </html>