<?php
 

  
 $user = "root";
 $pass = "";
 $host = "localhost";

    $connection = mysqli_connect($host, $user, $pass); 
  

function conmysql(){
    
 
    GLOBAL $connection;
    

    if( $connection) 
        {
          
            //echo "Hemos conectado al servidor <br>" ;
        }
  else
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
          
        }


        $datab = "tickets";
        $db = mysqli_select_db($connection,$datab);
        if (!$db)
{
echo "No se ha podido encontrar la Tabla";
}
else
{
//echo "Tabla seleccionada" ;
}




}


function consulta($id){
    
    GLOBAL $connection;

    $consulta = "SELECT * FROM  pasajes where id= $id";
    $result = mysqli_query($connection,$consulta);
    if(!$result) 
    {
        echo "No se ha podido realizar la consulta";
    }
    echo("<div class='tablee'>");
    echo "<table border='1' class='table table-bordered table-dark'>";

    echo" <th>ID</th>";
    echo" <th>TIPO DOC</th>";
    echo" <th>ID DOCUMENTO</th>";
    echo" <th>DESTINO</th>";
    echo" <th>ASIENTO</th>";
    echo" <th>FECHA</th>";
    echo" <th>VALOR</th>";

    
    while ($colum = mysqli_fetch_array($result))
    {
       echo "<tr>";
       echo "<td><center>" . $colum['id']. "</td></center>";
       echo "<td><center>" . $colum['tdoc'] . "</td></center>";
       echo "<td><center>" . $colum['numdoc'] . "</td></center>";
       echo "<td><center>" . $colum['destino'] . "</td></center>";
       echo "<td><center>" . $colum['num_pasaje'] . "</td></center>";
       echo "<td><center>" . $colum['fecha'] . "</td></center>";
       echo "<td><center>" . $colum['valor'] . "</td></center>";
       echo "</tr>";
   }
   echo "</table>";
   echo("</div>");
}

function consulta2($documeto){
    
    GLOBAL $connection;

    $consulta = "SELECT * FROM  pasajes where numdoc= $documeto";
    $result = mysqli_query($connection,$consulta);
    if(!$result) 
    {
        echo "No se ha podido realizar la consulta";
    }
    echo("<div class='tablee'>");
    echo "<table border='1' class='table table-bordered table-dark'>";

    echo" <th>ID</th>";
    echo" <th>TIPO DOC</th>";
    echo" <th>ID DOCUMENTO</th>";
    echo" <th>DESTINO</th>";
    echo" <th>ASIENTO</th>";
    echo" <th>FECHA</th>";
    echo" <th>VALOR</th>";

    
    while ($colum = mysqli_fetch_array($result))
    {
       echo "<tr>";
       echo "<td><center>" . $colum['id']. "</td></center>";
       echo "<td><center>" . $colum['tdoc'] . "</td></center>";
       echo "<td><center>" . $colum['numdoc'] . "</td></center>";
       echo "<td><center>" . $colum['destino'] . "</td></center>";
       echo "<td><center>" . $colum['num_pasaje'] . "</td></center>";
       echo "<td><center>" . $colum['fecha'] . "</td></center>";
       echo "<td><center>" . $colum['valor'] . "</td></center>";
       echo "</tr>";
   }
   echo "</table>";
   echo("</div>");
}

function nuevoTicket($id , $tdoc , $numdoc , $destino , $num_peaje , $precio ){
    GLOBAL $connection;

$idd="1000" . $id;
    
   // $sql ="INSERT INTO pasajes( id , tdoc , numdoc , destino , num_pasaje , fecha) VALUES ($id , $tdoc , $numdoc , $destino , $num_peaje , '' )";
  $sql ="INSERT INTO `pasajes`(`id`, `tdoc`, `numdoc`, `destino`, `num_pasaje`, `fecha` , `valor`) VALUES ($idd , $tdoc , $numdoc  , '$destino' , $num_peaje  ,CURRENT_TIMESTAMP , ' $precio'  )";

    if (mysqli_query($connection, $sql)) {
        echo "";
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
  }
}

?>