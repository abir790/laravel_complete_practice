
<?php 
foreach ($User as $value) {
	//echo "string" . $value->name;
	//dd($value->Vdim->vne);
//	echo $value->Vdim->vne;
}

//echo $User->Vdim->vne;   //  ono to one er khetre join table er j kono akta name single vabe show kora jay but one to many te join table er sob gulo value aksathe print korte hoy but belongsTo te join er single value show kora jay

echo $User->name;

echo $User->Vdim;
// echo $User->Vdim->vne   // one to one hole foreach lagto na, direct User->Vdim->vne holei hoto
foreach ($User->Vdim as $v) {   // one to one hole foreach lagto na, direct User->Vdim->vne holei hoto
	echo $v->vne;
}

@foreach ($variable as $value)
	# code...
@endforeach

?>