
<?php


move_uploaded_file($_FILES['archivo']['tmp_name'],'archivo/'.$_FILES['archivo']['name']);
chmod ('archivo/'.$_FILES['archivo']['name'],0777);

move_uploaded_file($_FILES['archivo2']['tmp_name'],'archivo/'.$_FILES['archivo2']['name']);
chmod ('archivo/'.$_FILES['archivo']['name'],0777);

move_uploaded_file($_FILES['archivo3']['tmp_name'],'archivo/'.$_FILES['archivo3']['name']);
chmod ('archivo/'.$_FILES['archivo']['name'],0777);


?>





<!DOCTYPE html>
<html lang="es">

<head>
 <meta charset="UTF-8">
 <title> Slider </title>
 <link rel="stylesheet" href="estilos.css">

 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<body class="bodyy">

 <div class="contenedor">

     <input type="radio" id="1" name="imagen-slide" hidden/>
     <input type="radio" id="2" name="imagen-slide" hidden/>
     <input type="radio" id="3" name="imagen-slide" hidden/>


     <div class="slide">

         <div class="item-slide">
         <img src="<?php echo 'archivo/'.$_FILES['archivo']['name']; ?>">
         </div>

         <div class="item-slide">
         <img src="<?php echo 'archivo/'.$_FILES['archivo2']['name']; ?>">
         </div>

         <div class="item-slide">
         <img src="<?php echo 'archivo/'.$_FILES['archivo3']['name']; ?>">
         </div>


     </div>


     
     <div class="paginacion">

         <label class="paginacion-item" for="1">
             <img src="<?php echo 'archivo/'.$_FILES['archivo']['name']; ?>">
         </label>

         <label class="paginacion-item" for="2">
         <img src="<?php echo 'archivo/'.$_FILES['archivo2']['name']; ?>">
         </label>

         <label class="paginacion-item" for="3">
         <img src= "<?php echo 'archivo/'.$_FILES['archivo3']['name']; ?>" >
         </label>


     </div>



 </div>

</body>

</html>


