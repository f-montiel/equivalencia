 <!DOCTYPE html>
 <html>
 <head>
 	<title>Unidad de Medida de Longitud</title>
 </head>
 <body>
 	<h3>Unidad de Medida de Longitud</h3>

 	<!--Estan invertidos los nombres de umoutput y uminput mañana lo reviso, pero anda-->

 	<form action="/calcular.php", method="POST"> 
 		<input type="number" name="cantidad">
 		<select name="umoutput">
  			<option value=1>Milimetro</option>
		  	<option value=2>Centimetro</option>
		  	<option value=3>Decimetro</option>
		  	<option value=4>Metro</option>
			<option value=5>Decametro</option>
			<option value=6>Hectometro</option>  
			<option value=7>Kilometro</option>
		</select>
 		<label>a:</label>
 		<select name="uminput">
			<option value=1>Milimetro</option>
			<option value=2>Centimetro</option>
			<option value=3>Decimetro</option>
			<option value=4>Metro</option>
			<option value=5>Decametro</option>
			<option value=6>Hectometro</option>  
			<option value=7>Kilometro</option>
 		</select>

 		<input type="submit" name="calcular" value="calcular">
 	</form>
 </body>
 </html>