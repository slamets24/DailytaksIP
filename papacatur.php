<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

 <table border="1">   
    <?php 


for ($i=1; $i <= 8 ; $i++) { 
    echo "<tr>";
    for ($j=1; $j <= 8 ; $j++) { 

    if($i == $j OR $i %2 != 0 AND $j %2 != 0){
      echo "<td> </td>";
    }
    elseif($i %2 == 0 AND $j %2 != 0){
      echo "<td>#</td>";
    }
    elseif($i %2 != 0 AND $j %2 ==0){
      echo "<td>#</td>";
    }elseif($i %2 == 0 AND $j %2 == 0){
      echo "<td> </td>";
    }else{
      echo "ERROR BOZZ";
    }   
    }
  echo "</tr>";
}




 ?>

 </table>
  </body>
</html>