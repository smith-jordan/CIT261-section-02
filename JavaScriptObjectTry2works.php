<!DOCTYPE HTML>
<html lang="en-us">
<head>
<meta charset="utf-8">
<title>Odd Sum</title>
<script type="text/javascript">

 var Cube = {
  Width : 15,
  Height : 30,
  Depth : 6
};

function cubeVolume(){
 var volume = (Cube.Width*Cube.Height*Cube.Depth);

document.write("volume is " + volume + " cm");
}


</script>
 </head>
 <body>
<p>Click here to see the volume of a cube that is 30 cm heigh, 6 cm deep and 15 cm wide:</p> 
<button type="button" onclick="cubeVolume()">Click Here</button>
</body>
</html>