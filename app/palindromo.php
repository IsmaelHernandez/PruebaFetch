<html>
  <head>
    <title>
     Example  Palidromo
  </title>
 </head>
<body>

<!-- iniciamos creando el formulario donde pondremos la caja de texto que vamos a analizar -->

<form id="miform" name="miform" method="post" action="palindromo.php">
  
      <label size= "6" color ="blue"> <b><i>
         Escriba Una Palabra
      </i></b></label>
      <br>
   <input type="text" value="" name="palabra">
      <br><br>
   <input type="submit" value="Analizar Cadena" name="analizar">
   </form>

 <?php  //iniciamos el bloque donde crearemos el analisis de los datos con instrucciones de php

        if(isset($_POST['analizar'])) //indicamos a la pagina que cuando se de click en el boton ejecutara el codigo que se encuentra dentro
        {
          $cadena= $_POST['palabra'];     // la variable $cadena recibe el valor que hay en la caja de texto del formulario con el nombre "palabra"
          $long_cadena =strlen($cadena); //la variable $long_cadena mide el tama�o de la palabra en caracteres por ejemplo: strlen(hola) nos devolvera un 4, que es el tama�o de la palabra

          $i=1;                         // declaramos e inicializamos la variable $i con un valor de 1, esta variable la usaremos en el ciclo while
          $cad2='';                    // declaramos la variable $cad2 y le asignamos valor vacio, esta la ocuparemos para recoger los datos de el parceo de la variable $cadena
        while ($i<=$long_cadena)    //creamos un ciclo while que condiciona las veces que repetira las instrucciones contenidas dentro de el, que va de 1 hasta lo que mida $long_cadena
        {
          $desc=($long_cadena)-$i;    // creamos la variable $desc (para mi significa descontar) y le asignamos la operacion ($long_cadena) - 1,  es decir $desc =(4)-1, $desc =3
          $cad=substr($cadena,$desc,1); //con "substr" sacamos una subcadena de texto de una cadena indicado por posicion, es decir($cadena,$desc,1), seria algo asi (hola,3,1)= "a"
          $cad2=$cad2.$cad;            // se hace una concatenacion $cad2=$cad2.$cad, es decir por cada vuelta del ciclo ira pegando las letras obtenidas con $cad
          $i++;                        // incrementamos uno por cada vuelta que da el ciclo
        }

        if ($cadena==$cad2)                               // una vez que el ciclo cumpla su funcion, hacemos una condicional, y comparamos los valores de $cadena con $cad2 y si es igual entonces
        {
          echo"<center>";                                   // centra los datos que se vayan a imprimir
          echo "<table> <tr><td ><b><i>"; //se crea una tabla y se le da formato al texto

            echo "La Palabra Es Palindromo";               //imprime el mensaje

          echo" </i></b></td></tr> <tr><td><b><i>" ; // concluye la primera fila de la tabla e inicia con la segunda fila
          echo"<center>";
            echo $cadena ," = ", $cad2;                    // muestra en pantalla el resultado de la operacion
          echo"</center>";
          echo" </i></b></td></tr> </table>" ;     // termina el fornato del texto y se cierra la tabla
          echo"</center>";                                 // cierra la instruccion de centrado
        }
        else                                             // en caso de que la palabra no sea palindromo  realiza lo siguiente
        {
          echo"<center>";                                 // centra los datos que se vayan a imprimir
          echo "<table> <tr><td><b><i>";  //se crea una tabla y se le da formato al texto
            echo "La Palabra No Es Palindromo";          //imprime el mensaje
          echo" </i></b></td></tr> <tr><td><b><i>" ;  // concluye la primera fila de la tabla e inicia con la segunda fila
          echo"<center>";
            echo $cadena ," != ", $cad2;                // muestra en pantalla el resultado de la operacion
          echo"</center>";
          echo" </i></b></td></tr> </table>" ;   // termina el fornato del texto y se cierra la tabla
          echo"</center>";                              // cierra la instruccion de centrado
        }
        }
   ?>


