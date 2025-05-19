<?php
// - - Introducción a PHP
/* 
1- Investigar qué significa que PHP sea un lenguaje del lado del servidor.
Quiere decir que el código de PHP sólo se ejecuta en el servidor, no en el cliente. Esto permite mayor privacidad y seguridad sobre la información que maneja el servidor en sí.

2- Escribir un comentario explicando para qué sirve PHP.
Similar a JS. Es una parte dinámica de la página web que puede comunicarse con el servidor, hacer formularios, Etc.
Se diferencian principalmente por cómo funciona. PHP al ejecutarse en el servidor es más seguro, y eso lo hace capaz de conectarse directamente con una base de datos. Aparte se suele usar para cargar los datos de una página principalmente, después para cosas interactivas se suele usar JS.

Más concretamente, PHP se usa para la gestión de formularios, comunicarse con bases de datos, autenticación/sesiones, APIs y automatización de tareas(como enviar un mail).

3- Buscar ejemplos de sitios conocidos que usan PHP.
* Wordpress.
* Wikipedia.
* Facebook.
* Tumblr.

4- Instalar XAMPP o similar y ejecutar un archivo PHP con el texto Hola mundo.
*/

echo "hola mundo!<br>";
?>

<?php
// - - Ejercicios de sintáxis básica
// 1. Escribir un script que muestre tu nombre usando echo.
echo "Quimey Ocampo<br>";

// 2. Crear un archivo PHP con tres instrucciones simples (echo, comentario, variable).

$prof = "Martinez";

echo "Hola $prof!<br>";

// 4. Probar qué sucede si omitís el punto y coma.
?>


<?php
// 1. Crear tres variables: nombre, edad y ciudad.
$nombre = "Quimo";
$edad = 18;
$ciudad = "Buenos Aires";

// 2. Mostrar un mensaje usando esas variables.
echo "Hola! Me llamo $nombre, tengo $edad años y vivo en $ciudad.<br>";

// 3. Cambiar el valor de una variable y volver a mostrar el mensaje.
$nombre = "Quimey D. Leguizamón Ocampo";
echo "Hola! Me llamo $nombre, tengo $edad años y vivo en $ciudad.<br>";

// 4. Concatenar dos variables en un solo echo.
$saludo = "Bienvenido, ";

echo "<br>",$saludo,$prof;
?>