<?php 

CLASS Calculadora
{
	public $valorInput;
	public $valorOutput;
	public $cantidad;

	public function set()
	{
		$this->valorInput = $_POST [uminput];
		$this->valorOutput = $_POST [umoutput];
		$this->cantidad = $_POST [cantidad];
	} 

	public function calcular()
	{
		if ($this->valorInput <= $this->valorOutput){
			echo $this->cantidad * pow(10, ($this->valorOutput - $this->valorInput));
			} else {
				echo $this->cantidad / pow(10, ($this->valorInput - $this->valorOutput));
				;
			}
	}
}

$calculo = new Calculadora;
$calculo->set();
$calculo->calcular();

?>