<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>projecto final </title>
    <link href="styles/bus.css" rel="stylesheet" type="text/css">
    <script language="javaScript">

function procesar(asiento) {
               
   var elem = document.getElementById('totalPuesto');
   var bntid ='btn'+asiento;
   var btn = document.getElementById(bntid);
   //alert(bntid);
  var puesto=elem.value  + " , " +  asiento  ;
   elem.value = puesto  ;
  
   btn.style.backgroundColor="red";


             }
              </script>
    <?php
 include 'clases/bd.php';
 conmysql();
 //consulta();

 
 ?>
  </head>
  <body >
    <br>
    <br>
    
    <center>
    <h1 class="titulo">venta de tickets</h1>
            </center>
            <br>



<div class ="padre">
 <div class ="bus">
   
 

  <?php


  for($i=1 ; $i<20;$i++){
      if($i<10){

        echo(" <div class='fila2'>");
        echo(" <a class='boton1'  onclick='procesar($i)' id='btn$i'> $i </a>");
        $id='btn'.($i+1);
        echo(" <a class='boton1' onclick='procesar($i+1)' id='$id' >  " . ($i+1) .  " </a>");
        echo(" </div>");
        echo("<br>");
        $i=$i+1;
       

      }
      else{ 
    echo(" <div class='fila2'>");
    echo(" <a class='boton2'  onclick='procesar($i)' id='btn$i'> $i </a>");
    $id='btn'.($i+1);
    echo(" <a class='boton2'  onclick='procesar($i+1)' id='$id'>". ($i+1) .  " </a>");
    echo(" </div>");
    echo("<br>");
    $i=$i+1;
  }
}


for($i=21; $i<26 ; $i++){

    echo(" <a class='boton3'  onclick='procesar($i)' id='btn$i'> $i </a>");
   
}
  ?>
  
</div> 
  




</div>
<!-- formulario copiado desde boostrap -->

<br>
<br>
<br>
<br>
<div class="formulario">
  <h2>INGRESA LA INFORMACION</h2>
<form name="formulario" action="index.php" method="POST" width=20px >
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Nombre</label>
    <div class="col-sm-9">
      <input  class="form-control" name="nombre" placeholder="Nombre" id="nombre" >
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Tipo de documento</label>

    <div class="col-sm-9">
     
  <select  name="tipoDocumento"  id="tipoDocumento">
   <option selected value="NINGUNO"   > Elige una opción </option>
       
       <option value="1">Cedula</option> 
       <option value="2">Targeta de identidad</option> 
       <option value="3">Pasaporte</option> 
 
   </select>
   </div>
</div>


<div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">ID Documento</label>
    <div class="col-sm-9">
      <input  class="form-control" id="idDocumento" name="idDocumento" placeholder="ID Documento">
    </div>
  </div>


<div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Destino</label>

    <div class="col-sm-9">
     
  <select name="destino" id="destino">
   <option selected value="null"  > Elige una opción </option>
      
       <option value="CALI">CALI</option> 
       <option value="MEDELLIN">MEDELLIN</option> 
       <option value="BOGOTA">BOGOTA</option> 
       <option value="TUMACO">TUMACO</option> 
       <option value="PUTUMAYO">PUTUMAYO</option> 
      
  
   </select>
   </div>
</div>

<div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Asiento</label>
    <div class="col-sm-9">
      <input name="totalPuesto" class="form-control" id="totalPuesto" placeholder="Total puesto">
    </div>
  </div>
  <br>
<center>
 
  <p><button class="boton_enviar" type="button" onclick="pregunta()">imprimir</button></p>
<
</center>
</form>


<!--fin formulario-->
</div>

<?php


//nuevoTicket($id , $tdoc , $tnumdoc , $destino , $num_peaje , $fecha)
/*

  $nombre = $_POST['nombre'];
  //echo 'Hola '. $nombre;
  $tipoDocumento = $_POST['tipoDocumento'];
  //echo 'Documeto  :'. $tipoDocumento;
  $idDocumento = $_POST['idDocumento'];
 // echo 'idDocumento :'. $idDocumento;
  $destino = $_POST['destino'];
  //echo 'destino :'. $destino;
  $puesto = $_POST['totalPuesto'];
  //echo 'puesto :'. $puesto;
  $date = date('Y-m-d');
  //echo($date);
  */
  if( (isset($_POST['nombre']) && !empty($_POST['nombre'])) &&  
  (isset($_POST['tipoDocumento']) && !empty($_POST['tipoDocumento']))  &&
  (isset($_POST['idDocumento']) && !empty($_POST['idDocumento'])) &&
  (isset($_POST['destino']) && !empty($_POST['destino'])) &&
  (isset($_POST['totalPuesto']) && !empty($_POST['totalPuesto'])) 
  ){
    $nombre = $_POST['nombre'];
    //echo 'Hola '. $nombre;
    $tipoDocumento = $_POST['tipoDocumento'];
    //echo 'Documeto  :'. $tipoDocumento;
    $idDocumento = $_POST['idDocumento'];
   // echo 'idDocumento :'. $idDocumento;
    $destino = $_POST['destino'];
    //echo 'destino :'. $destino;
    $puesto = $_POST['totalPuesto'];
    //echo 'puesto :'. $puesto;
    $date = date('Y-m-d');
    //echo($date);
$precio="";
switch($destino ){

case "CALI":
  $precio="20.000";
  break;
  case "MEDELLIN":
    $precio="30.000";
    break;
    case "BOGOTA":
      $precio="50.000";
      break;
      case "PUTUMAYO":
        $precio="34.000";
        break;
        case "TUMACO":
          $precio="18.000";
          break;
}


  

    nuevoTicket(("0000"+rand(5, 15))  ,  (int) $tipoDocumento  ,  $idDocumento  , $destino , $puesto , $precio );
  }





?>
<br>
<script language="JavaScript">

function pregunta(){

  var puesto = document.getElementById('totalPuesto');
  var nombre = document.getElementById('nombre');
  var documento = document.getElementById('idDocumento');
  var destino = document.getElementById('destino');
  var precio="";
switch(destino.value ){

case "CALI":
precio="20.000";
  break;
  case "MEDELLIN":
    precio="30.000";
    break;
    case "BOGOTA":
      precio="50.000";
      break;
      case "PUTUMAYO":
        precio="34.000";
        break;
        case "TUMACO":
          precio="18.000";
          break;
}
//validacio 
if(puesto.value!=""){

  var info="\n" + "Nombre : " + nombre.value + "\n" +
   "Documento :" + documento.value + "\n" + "Destino :" + destino.value + "\n"  + "puesto :" + puesto.value;
    if (confirm('infromacion correcta?' + info  +"\n" +"precio :" + precio)){
      
       document.formulario.submit()
    }
}
else{
  alert("algunos de los campos estan vacios");
}
  
}
</script>




  <form class="f2"  action="index.php" method="POST">
  <center><p class="txtf2">BUSQUEDA POR ID</p></center>
    <input class="form-control mr-sm-2" type="search" placeholder="Buscar por id" aria-label="Search" name="ticket">
   <center> <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUSCAR</button></center>

  </form>
</nav>




  <form class="f2"  action="index.php" method="POST" >
  <center><p class="txtf2">BUSQUEDA POR DOCUMENTO</p></center>
  <input class="form-control mr-sm-2" type="search" placeholder="Buscar por documento" aria-label="Search" name="searchdocumeto">
    <center><button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUSCAR</button></center>

  </form>

  

<br>
<?php

//consulta de ticket por id
if( (isset($_POST['ticket']) && !empty($_POST['ticket']))){

  $ticket = $_POST['ticket'];
  //echo($ticket);
  consulta($ticket);

}
if( (isset($_POST['searchdocumeto']) && !empty($_POST['searchdocumeto']))){

  $ticket = $_POST['searchdocumeto'];
 // echo($ticket);
  consulta2($ticket);

}


?>





  </body>
</html>