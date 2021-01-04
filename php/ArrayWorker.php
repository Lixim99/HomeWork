<?php

	function max_searching($array){
		$max_num = $array[0];
		for ($i=0; $i < count($array); $i++) { 
			if ($array[$i] > $max_num) {
 				$max_num = $array[$i];
 				$index = $i;
 			}	 
		}
		return $index;
	}

	function min_searching($array){
		$min_num = $array[0];
		for ($i=0; $i < count($array); $i++) { 
			if ($array[$i] < $min_num) {
 				$min_num = $array[$i];
 				$index = $i;
 			}	 
		}
		return $index;
	} 

 	class ArrayWorker
 	{
 		protected $array;

 		protected $counter; // Выбор длинны массива

 		public function __construct($counter){
 			$this->counter = $counter;
 			$this->fill();
 			$this->reindex();
 		}

 		protected function fill()
 		{
 			echo "Сгенерированный массив: ";
 			for ($i=0; $i < $this->counter; $i++) { 
 				$this->array[] = rand(1,100);
 				echo "</br>" . $i . ' : ' . $this->array[$i];
 			} 
 		}

 		protected function reindex(){
 			$max = max_searching($this->array);
 			$min = min_searching($this->array);
 			$zero = $this->array[$max];
 			$this->array[$max] = $this->array[$min];
 			$this->array[$min] = $zero;
 			echo "</br> Индекс максимального значения: $max и минимального: $min";
 		}

 		public function dump() {
 			echo "</br> Сумма индексов масимального и минимального значений:" . (max_searching($this->array) + min_searching($this->array));
 		} 
 	}

 	$generate_array = new ArrayWorker(10);
 	$generate_array->dump();

?>	