<!DOCTYPE html>
 <html>
 <head>
 	<title>Unidad de Medida de Peso</title>
 </head>
 <body>
 	<h3>Unidad de Medida de Peso</h3>

 	<!--Estan invertidos los nombres de umoutput y uminput mañana lo reviso, pero anda-->

 	<form action="/calcular.php", method="POST"> 
 		<input type="number" name="cantidad">
 		<select name="umoutput">
  			<option value=1>Miligramo</option>
		  	<option value=2>Centigramo</option>
		  	<option value=3>Decigramo</option>
		  	<option value=4>Gramo</option>
			<option value=5>Decagramo</option>
			<option value=6>Hectogramo</option>  
			<option value=7>Kilogramo</option>
		</select>
 		<label>a:</label>
 		<select name="uminput">
			<option value=1>Miligramo</option>
			<option value=2>Centigramo</option>
			<option value=3>Decigramo</option>
			<option value=4>Gramo</option>
			<option value=5>Decagramo</option>
			<option value=6>Hectogramo</option>  
			<option value=7>Kilogramo</option>
 		</select>

 		<input type="submit" name="calcular" value="calcular">
 	</form>
 </body>
 </html>