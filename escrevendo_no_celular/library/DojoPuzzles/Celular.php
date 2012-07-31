<?php
namespace DojoPuzzles;

class Celular
{
	const CARACTER_DE_PAUSA = '_';

	private $mapa = array(
		2 => 'ABC',
		3 => 'DEF',
		4 => 'GHI',
		5 => 'JKL',
		6 => 'MNO',
		7 => 'PQRS',
		8 => 'TUV',
		9 => 'WXYZ',
		0 => ' '
	);

	private $digitos = '';

	/**
	 * @param string $digitos
	 */
	public function setDigitos($digitos)
	{
		$this->digitos = (string)$digitos;
	}

	public function getTexto()
	{
		$texto = '';
		$size = strlen($this->digitos);
		$pedacos = explode(self::CARACTER_DE_PAUSA, $this->digitos);

		foreach($pedacos as $pedaco)
		{
			$texto .= $this->traduzirParaTexto($pedaco);
		}

		return $texto;
	}

	private function traduzirParaTexto($digitos)
	{
		$texto = '';
		$size = strlen($digitos);
		$char_index = 0;
		$item_mapa = null;
		for($i = 0; $i < $size; $i++)
		{
			$atual = $digitos[$i];
			$prox = ($i < $size - 1) ? $digitos[$i + 1]: null;

			if(is_null($item_mapa))
				$item_mapa = $this->mapa[$atual];

			if($atual == $prox)
				$char_index++;
			else {
				$texto .= $item_mapa[$char_index];
				$char_index = 0;
				$item_mapa = null;
			}
		}

		return $texto;
	}
}