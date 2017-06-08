
<?php
session_start();
$query = $_POST['nameBook'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>API GOOGLE BOOKS</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
    input  {font-family: Arial; font-size: 12pt; background: transparent;}
</style>
</head>
<body class="<?php if(!isset($_GET['view'])) { echo 'default'; } else { echo $_GET['view']; } ?>">
<div   class="container">
    <div class="main">
    <?php
    error_reporting(E_ALL);
     
    $v = isset($_GET['v']) ? $_GET['v'] : '1';
    $key = isset($_GET['key']) ? $_GET['key'] : 'AIzaSyCDjCQnJs3aANXFpsnxUdEIYPiyPJsfQEU';  
    $ip = isset($_GET['ip']) ? $_GET['ip'] : $_SERVER['REMOTE_ADDR'];    
    $type = isset($_GET['type']) ? $_GET['type'] : 'all';   
    $start = isset($_GET['start']) ? $_GET['start'] : 1;    
    $limit = isset($_GET['limit']) ? $_GET['limit'] : '3'; 
    $params = 'q='.urlencode($query).'&startIndex='.$start.'&maxResults='.$limit;     
    $url = 'https://www.googleapis.com/books/v'.$v.'/volumes?key='.$key.'&userIp='.$ip.'&'.$params.'';   
    $request = file_get_contents($url);
    $data = json_decode($request,true);
    $totalItems = $data['totalItems']; 

    if ($totalItems > 0) {
        ?>
<div id="contenido">
        <?php  for($i=0;$i < count($data['items']);++$i)  { 
                 $jdata = $data['items'][$i]; ?>

                <?php echo " <form id ='myForm$i'  accion=' ' method='post'>"?>
        
           <div> 
                                        <?php //Imagen?>
                     <?php if(isset($jdata['volumeInfo']['imageLinks'])) { ?>
                       <img src="<?php echo rawurldecode($jdata['volumeInfo']['imageLinks']['smallThumbnail']); ?>" /> <br>
                    <?php } else { ?> 
                        <img src="img/libro2.png"/> <br>
                    <?php } ?>
                                        <?php //titulo?>
                     <?php if(isset($jdata['volumeInfo']['title'])) { ?>
                             Titulo: <?php $Titulo=$jdata['volumeInfo']['title'];
                             echo "<input  size='40' type='text' name='Titulo' value='$Titulo'  > <br>" ; ?>

                    <?php } else { ?> 
                        Titulo: <?php $Titulo=isset($jdata['volumeInfo']['title']);
                             echo "<input style='border:none' type='text' name='Titulo' value=' ' readonly > <br>" ; ?>
                    <?php } ?>

                                        <?php // Autor?>
                    <?php if(isset($jdata['volumeInfo']['authors'])) { ?>
                        Autor: <?php $Autor=$jdata['volumeInfo']['authors'][0]; 
                        echo "<input style='border:none' type='text' name='Autor' value='$Autor' readonly > <br>" ;?>

                    <?php } else { ?> 
                        Autor: <?php $Autor=isset($jdata['volumeInfo']['authors'][0]); 
                        echo "<input style='border:none' type='text' name='Autor' value=' ' readonly > <br>" ;?>
                    <?php } ?>

                                          <?php // Editorial?>
                    <?php if(isset($jdata['volumeInfo']['publisher'])) { ?>
                         Editorial: <?php $Editorial = $jdata['volumeInfo']['publisher']; 
                         echo "<input style='border:none' type='text' name='Editorial' value='$Editorial' readonly > <br>" ;?>
                    <?php } else { ?> 
                         Editorial: <?php $Editorial = isset($jdata['volumeInfo']['publisher']); 
                         echo "<input style='border:none' type='text' name='Editorial' value=' ' readonly > <br>" ;?>
                    <?php } ?>

                                         <?php // Fecha?>
                    <?php if(isset($jdata['volumeInfo']['publishedDate'])) { ?>
                         Fecha: <?php $Fecha = $jdata['volumeInfo']['publishedDate']; 
                         echo "<input style='border:none' type='text' name='Fecha' value='$Fecha' readonly > <br>" ;?>
                    <?php } else { ?> 
                         Fecha: <?php $Fecha = isset($jdata['volumeInfo']['publishedDate']); 
                         echo "<input style='border:none' type='text' name='Fecha' value=' ' readonly > <br>" ;?>
                    <?php } ?>

                                        <?php // clasificacion?>
                    <?php if(isset($jdata['volumeInfo']['categories'])) { ?>
                         Clasificion: <?php $Categoria = strtolower($jdata['volumeInfo']['categories'][0]); 
                         echo "<input style='border:none' type='text' name='Categoria' value='$Categoria' readonly > <br>" ;?>
                    <?php } else { ?> 
                         Clasificacion: <?php $Categoria = isset($jdata['volumeInfo']['categories'][0]); 
                         echo "<input style='border:none' type='text' name='Categoria' value=' ' readonly > <br>" ;?>
                    <?php } ?>

                                         <?php // ISBN?>
                    <?php if(isset($jdata['volumeInfo']['categories'])) { ?>
                         <?php $ISBN = $jdata['volumeInfo']['industryIdentifiers'][0]['identifier']; 
                            if(strlen($ISBN) == 10){
                                echo "ISBN:<input style='border:none' type='text' name='ISBN_10' value='$ISBN' readonly > <br>" ;
                         }else{ echo "ISBN:<input style='border:none' type='text' name='ISBN_13' value='$ISBN' readonly > <br>" ;}
                        ?>
                    <?php } else { ?> 
                         ISBN: <?php $ISBN= isset($jdata['volumeInfo']['industryIdentifiers'][0]['identifier']); 
                         echo "<input style='border:none' type='text' name='ISBN' value=' ' readonly > <br>" ;?>
                    <?php } ?>

                                        <?php //paginas?>
                    <?php if(isset($jdata['volumeInfo']['pageCount'])) { ?>
                         Paginas: <?php $paginas = $jdata['volumeInfo']['pageCount']; 
                         echo "<input style='border:none' type='text' name='Paginas' value='$paginas' readonly > <br>" ;?>
                    <?php } else { ?> 
                         Paginas: <?php $paginas= isset($jdata['volumeInfo']['pageCount']); 
                         echo "<input style='border:none' type='text' name='Paginas' value=' ' readonly > <br>" ;?>
                    <?php } ?>

                                         <?php //Lugar de origen?>
                    <?php if(isset($jdata['accessInfo']['country'])) { ?>
                         Lugar de Origen: <?php $Origen = $jdata['accessInfo']['country']; 
                         echo "<input style='border:none' type='text' name='Origen' value='$Origen' readonly > <br>" ;?>
                    <?php } else { ?> 
                         Lugar de Origen: <?php $Origen= isset($jdata['accessInfo']['country']); 
                         echo "<input style='border:none' type='text' name='Origen' value=' ' readonly > <br>" ;?>
                    <?php } ?>

                                            <?php //idioma?>
                    <?php if(isset($jdata['volumeInfo']['language'])) { ?>
                         Idioma: <?php $Idioma = $jdata['volumeInfo']['language']; 
                         echo "<input style='border:none' type='text' name='Idioma' value='$Idioma' readonly > <br>" ;?>
                    <?php } else { ?> 
                         Idioma: <?php $Idioma= isset($jdata['volumeInfo']['language']); 
                         echo "<input style='border:none' type='text' name='Idioma' value=' ' readonly > <br>" ;?>
                    <?php } ?>

                   
                     <?php echo   "<td><br><input type='submit' id='enviar$i' name='chek' value='Agregar' formaction='agregar.php' ></td>"?>
                     <?php  echo"<span id='result$i'></span><br>"?>
                            
            </div>
            <?php echo "</form>" ?> 
        <?php } ?>
</div>
        <?php } else { ?>
        no more results
        <?php } ?> 
       
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
<script src="my_script.js" type="text/javascript"></script>
</body>
</html>