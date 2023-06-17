<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0
  Transitional//EN" "http://wwww.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://wwww.w3.org/1999/xhtml" lang="es" xml:lang="es">

<head>
  <title> Papelería la Goma </title>
  <meta http-equiv="Content-type" conetnt="text/html; charset=UTF-8" />
  <meta name="viewport" con tent="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="../proyectopag/js/papeleria.js"></script>
  <link rel="stylesheet" type="text/css" href="../proyectopag/css/papeleria.css" />
  <link rel="icon" type="image/icon" href="../proyectopag/pape.ico" />
</head>

<body>
  <noscript>
    <p> La pagína que estas viendo requiere para su funcionamiento el uso de javascript. Si lo has deshabilitado
      intencionalmente, por favor,vuelve a activarlo."</p>
  </noscript>
  <header>
    <nav>
      <h1></h1>
      <li><a href="#">Inicio</a></li>
      <li><a href="../proyectopag/html/servicios.html">Servicios</a></li>
      <li><a href="../proyectopag/html/horarios.html">Horarios</a></li>
      <li><a href="../proyectopag/html/productos.html">Productos</a></li>
      <li><a href="../proyectopag/html/sobre.html">Sobre nosotros</a></li>
      
    </nav>
  </header>
  <main>

    <div class="flex-center">
      <div id="fondo" class="flex-center">
        <div class="glow">
          <h1>Papelería la Goma</h1>
        </div>
      </div>
    </div>

    <div class="contenido">
      <div class="articulo">
        <div class="secciones">
          <div>
            <h2>Objetivo de la Empresa</h2>
            <br>
            <p> Brindar servicio y atención de calidad a estudiantes, maestros,
              oficinistas, etc. Además de innovar en los productos y servicios que ofrecemos diariamente.
            </p>
          </div>
          <div><img src="../proyectopag/imagenes/obj.jpeg" alt=""> </div>
        </div>
      </div>
    </div>

    <div class="mapa">
      <h2>Estamos ubicados en:</h2>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3175.0898344608268!2d-99.17607652182275!3d18.84980642829224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce7610f4257f33%3A0xb8f60eb2f19b68e!2sPapeleria%20%22La%20Goma%22!5e0!3m2!1ses-419!2smx!4v1683259915012!5m2!1ses-419!2smx"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
  </main>


  <footer>
    <div class="contaco">
      <h3>Contactate con nosotros</h3>
    </div>

    <div class="social-icons-container">
      <a href="https://www.facebook.com/goma.papeleria" class="social-icon"></a>
      <a href="https://www.google.com/maps/place/Papeleria+%22La+Goma%22/@18.849721,-99.1775235,18.04z/data=!4m6!3m5!1s0x85ce7610f4257f33:0xb8f60eb2f19b68e!8m2!3d18.8509222!4d-99.1770737!16s%2Fg%2F11jx4pqbc9"
        class="social-icon"></a>
      <a href="https://api.whatsapp.com/send?phone=7773763362&text=hola,%20qu%C3%A9%20tal?" class="social-icon"></a>
    </div>

    <span class="copyright">&copy;Emiliano Aviles Sanchez, Joseph Jimenez Hernandez, Brian Pizaña Delgadillo</span><br>
    <?php
//contador del número de accesos a una página por sesión.
session_start();

if (!isset($_SESSION["count"])) {
    $_SESSION["count"] = 0;
} else {
    $_SESSION["count"]++;
}
?>


<?php
print("Hola, has accedido a esta página ");
print($_SESSION["count"]);
print(" veces.");
?>
  </footer>

</body>

</html>

