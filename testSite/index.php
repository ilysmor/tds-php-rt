<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
test avec accent été
100% statique <br>
    <a href="?nb=4">Affichage de 4 Hello</a><br>
    <a href="?nb=13">Affichage de 13 Hello</a><br>
    <a href="?nb=17">Affichage de 17 Hello</a><br>
    
<form>
    <label for="nb">Nombre :</label>
    <input id="nb" name="nb" type="number" max="200"></input>
    
</form>
<?php 
$texte="Hello World ( dynamique )<br>";
$i=0;
$max=$_GET["nb"];
$max=min(200,$max);

    
while($i<$max) {
    $color="color:hotpink;";
    if ($i%2==0) 
        $color="color:pink;";

    
    echo "<span style='{$color}font-size:{$i}pt;'>{$texte}</span>";
    $i++;
}

?>

</body>
</html>