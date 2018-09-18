<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
        // Obtener cada línea en un array:
         $aLineas = file("index.html");
         ?>
<textarea name="name" rows="8" cols="80">
         <?php
        print_r($aLineas);
        ?>
        </textarea>
        <?php
        echo "<p>CONTENIDO DEL ARCHIVO</p>";
        echo "<p>=====================</p>";
        // Mostrar el contenido del archivo:
        foreach( $aLineas as $linea )

         array_splice($aLineas, 2, 1);
         ?>
 <textarea name="name" rows="8" cols="80">
         <?php
        print_r($aLineas);
        // Abrir el archivo:
        ?>
</textarea>
        <?php
         $archivo = fopen("index.html", "w+b");
        // Guardar los cambios en el archivo:
         foreach( $aLineas as $linea )
             fwrite($archivo, $linea);
        echo "<p>CONTENIDO DEL ARCHIVO</p>";
        echo "<p>=====================</p>";
        // Mostrar el contenido del archivo:
        foreach( $aLineas as $linea )
            echo $linea."<br/ >";
         fclose($archivo);
    ?>

  </body>
</html>
