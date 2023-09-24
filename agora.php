<html>
<head></head>
<body>
<p>Agora são
<?php
$d = new DateTime();
echo $d->format( 'H:i' );
?>
do dia
<?php
echo $d->format( 'd/m/Y' );
?>
</p>
</body>
</html>