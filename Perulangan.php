<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php

function perulangan($perulangan){
  
  for ($i=1; $i <= $perulangan ; $i++) { 
	
	if ($i %3 == 0 && $i %2 != 0) {
		echo $i." I love You {>  <br>";
	}elseif ($i %2 != 0) {
		echo $i." Santai <br>";
	}elseif($i %2 == 0){
		echo $i." Berkualitas <br>";
	}else{
    echo "ERROR BOZZZ";
  }
  }
}

echo perulangan(20);

 ?> 
  </body>
</html>