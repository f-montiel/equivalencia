<!DOCTYPE html>
 <html>
 <head>
 	<title>Unidad de Medida de Volumen</title>
 </head>
 <body>
 	<h3>Unidad de Medida de Volumen</h3>

 	<!--Estan invertidos los nombres de umoutput y uminput mañana lo reviso, pero anda-->

 	<form action="/calcular.php", method="POST"> 
 		<input type="number" name="cantidad">
 		<select name="umoutput">
  			<option value=1>Mililitro</option>
		  	<option value=2>Centilitro</option>
		  	<option value=3>Decilitro</option>
		  	<option value=4>Litro</option>
			<option value=5>Decalitro</option>
			<option value=6>Hectolitro</option>  
			<option value=7>Kilolitro</option>
		</select>
 		<label>a:</label>
 		<select name="uminput">
			<option value=1>Mililitro</option>
			<option value=2>Centilitro</option>
			<option value=3>Decilitro</option>
			<option value=4>Litro</option>
			<option value=5>Decalitro</option>
			<option value=6>Hectolitro</option>  
			<option value=7>Kilolitro</option>
 		</select>

 		<input type="submit" name="calcular" value="calcular">
 	</form>
 </body>
 </html>