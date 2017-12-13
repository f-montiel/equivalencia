<?php 

CLASS equivalencia
{
	public $valorinput;
	public $valoroutput;
	public $descripcionoutput;
	public $cantidad;

	public function Get()
	{
		$uminput = $_POST [uminput];

		if ($uminput == "Milimetro"){
			$valorinput = 1;
		}elseif ($uminput == "Decimetro"){
			$valorinput = 2; 
		} elseif ($uminput == "Centimetro"){
			$valorinput = 3;
		} elseif ($uminput == "Metro"){
			$valorinput = 4;
		} elseif ($uminput == "Decametro"){
			$valorinput = 5;
		} elseif ($uminput == "Hectometro"){
			$valorinput = 6;
		} else {
			$valorinput = 7;
		}
		
		$umoutput = $_POST [umoutput];

		if ($umoutput == "Milimetro"){
			$valoroutput = 1;
		} elseif ($umoutput == "Decimetro" ){
			$valoroutput = 2;
		} elseif ($umoutput == "Centimetro"){
			$valoroutput = 3;
		} elseif ($umoutput == "Metro"){
			$valoroutput = 4;
		} elseif ($umoutput == "Decametro"){
			$valoroutput = 5;
		} elseif ($umoutput == "Hectometro"){
			$valoroutput = 6;
		} else {
			$valorinput = 7;
		}

		$cantidad = $_POST [cantidad];
		$descripcion = $_POST [uminput];
		$this->valorinput = $valorinput;
		$this->valoroutput = $valoroutput;
		$this->cantidad = $cantidad;
		$this->descripcionoutput = $descripcion;
	}
	
	public function Calcular()
	{
		if ($this->valorinput <= $this->valoroutput){
			echo $this->cantidad * 10 ** ($this->valoroutput - $this->valorinput) . " " . $this->descripcionoutput;
			} else {
				echo $this->cantidad / 10 ** ($this->valorinput - $this->valoroutput) . " " . $this->descripcionoutput;
				;
			}
	}
}

$calculo = new equivalencia;
$calculo->Get();
$calculo->Calcular();
?>