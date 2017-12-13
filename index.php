 <!DOCTYPE html>
 <html>
 <head>
 	<title>Equivalence</title>
 </head>
 <body>
 	<h3>Equivalencias</h3>

 	<!--Estan invertidos los nombres de umoutput y uminput mañana lo reviso, pero anda-->

 	<form action="/calcular.php", method="POST"> 
 		<input type="number" name="cantidad">
 		<select name="umoutput">
  			<option value="Milimetro">Milimetro</option>
		  	<option value="Decimetro">Decimetro</option>
		  	<option value="Centimetro">Centimetro</option>
		  	<option value="Metro">Metro</option>
			<option value="Decametro">Decametro</option>
			<option value="Hectometro">Hectometro</option>  
			<option value="Kilometro">Kilometro</option>
		</select>
 		<label>a:</label>
 		<select name="uminput">
			<option value="Milimetro">Milimetro</option>
			<option value="Decimetro">Decimetro</option>
			<option value="Centimetro">Centimetro</option>
			<option value="Metro">Metro</option>
			<option value="Decametro">Decametro</option>
			<option value="Hectometro">Hectometro</option>  
			<option value="Kilometro">Kilometro</option>
 		</select>

 		<input type="submit" name="calcular" value="calcular">
 	</form>
 </body>
 </html>