
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$coso = ['hola', 'mundo', 'facu', 'Jhonny'];
$myVar = 'Jhonny';

$long = count($coso);
for( $i =0; $i < $long; $i++ ){
    if($myVar == $coso[$i]){
        $rta = $coso[$i];
    }else{
        $rta = 'siga particiapando';
    }
}
echo $rta;
?>
</body>
</html>