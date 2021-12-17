<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>photoNew</h1>
	<?php 
	if ($Photo) {
		echo "Photo data is here";
	}

           foreach ($Photo->Vdim as $value) {
            echo $value->vne;
        }

        //dd($Photo->user);

 ?>




</body>
</html>