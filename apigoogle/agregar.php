<?php
        include_once('db.php');
 
        $Titulo = $_POST['Titulo'];
        $Autor = $_POST['Autor'];
        $Editorial = $_POST['Editorial'];
        $Fecha = $_POST['Fecha'];
        $Categoria= $_POST['Categoria'];
        if(isset($_POST['ISBN_10'])){
            $ISBN_10 = $_POST['ISBN_10'];
        }else {$ISBN_10="";}
        if(isset($_POST['ISBN_13'])){
            $ISBN_13 = $_POST['ISBN_13'];
        }else{$ISBN_13 ="";}
        $Paginas = $_POST['Paginas'];
        $Origen = $_POST['Origen'];
        $Idioma = $_POST['Idioma'];
       
          
        if(mysql_query("INSERT INTO libros VALUES('','$Titulo','$Autor','$Editorial','$ISBN_10','$ISBN_13',' ','$Fecha','$Paginas','$Origen','$Idioma','$Categoria')"))
          echo "Agregado con exito :)";
        else
          echo "Agregado fallido :(";
?>