<?php
echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<title>Menu de Opciones</title>";
echo "<style>
  body {
    font-family: Arial, sans-serif;
    text-align: center;
    background-image: url('training-web.webp'); /* agregar la ruta del archivo de fondo */
    background-size: cover; /* ajustar el tamaño del fondo */
    background-position: center; /* centrar el fondo */
  }
.uptamca {
    font-size: 48px;
    font-weight: bold;
    color: #0000ff; /* cambiar el color del texto a azul */
    text-shadow: 2px 2px #ccc;
  }
.menu {
    background-color: #D2B48C; /* cambiar el color de fondo de la barra de navegación a mostaza */
    padding: 10px;
    text-align: center;
    border-bottom: 2px solid #ffffff; /* agregar un borde inferior blanco */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* agregar una sombra */
    background-image: linear-gradient(to bottom, #D2B48C, #A0522D); /* agregar un gradiente de mostaza a un tono más oscuro */
    animation: animate 3s ease-in-out infinite; /* agregar animación */
  }
  @keyframes animate {
    0% {
      background-position: 0% 50%;
    }
    50% {
      background-position: 100% 50%;
    }
    100% {
      background-position: 0% 50%;
    }
  }
.menu ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: space-between;
  }
.menu li {
    margin-right: 20px;
  }
.menu a {
    color: #ffffff; /* cambiar el color del texto a blanco */
    text-decoration: none;
  }
.menu a:hover {
    background-color: #A0522D; /* cambiar el color de fondo de los enlaces al pasar el mouse */
    color: #ffffff; /* cambiar el color del texto de los enlaces al pasar el mouse */
  }
.imagen {
    width: 400px; /* aumenta el ancho de la imagen */
    height: 400px; /* aumenta el alto de la imagen */
    margin: 20px; /* ajusta el margen según sea necesario */
  }
</style>";
echo "</head>";
echo "<body>";
echo "<div class='uptamca'>UPTAMCA</div>";
echo "<nav class='menu'>";
echo "<ul>";
echo "<li><a href='modelo/formulario.php'>Cargar</a></li>";
echo "<li><a href='modelo/listar.php'>Listar</a></li>";
echo "<li><a href='modelo/buscar.php'>Búsqueda</a></li>";
echo "</ul>";
echo "</nav>";
echo "<img class='imagen' src='logo1.jpg' alt=''>";
echo "</body>";
echo "</html>";
?>