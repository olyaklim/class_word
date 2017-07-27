<?php 

	class Word
	{
		const MIN = 1;
		const MAX = 10;
		private $word = '';
		public static $numMembers = 0;

		private function create()
		{
			$this->word = '';

			$count_letter = rand(self::MIN, self::MAX);
			$array 		= range('a','c'); 
			$count_mas 	= count($array); 

			for($i = 0; $i < $count_letter; $i++) {
				$this->word .= $array[rand(0, $count_mas -1)];
			} 
			return;
		}

		public function getWord()
		{
			$this->create();
			return $this->word;
		}

	}

	class Sentence extends Word {
		
		const MIN = 1;
		const MAX = 10;
		private $sentence = '';
		private $count_sentence;
		private $count_word;
 
		public function __construct($count_sentence) {
		    $this->count_sentence = $count_sentence;
		    echo "<h2>Генератор случайных предложений на классах</h2>";
		}

		public function getSentence()
		{
			$this->sentence .= "<ol>";
			for ($j = 0; $j < $this->count_sentence; $j++) {

				$this->sentence .= "<li>";
				$this->count_word = rand(self::MIN, self::MAX);
				for ($i = 0; $i < $this->count_word; $i++) {
				 	$this->sentence .= $this->getWord() . " ";
				 }

				 $this->sentence .= "</li> <br>";
			}
			$this->sentence .= "</ol>";

			return $this->sentence;

		}

	}

	echo "<hr>";
	echo (new Sentence(4))->getSentence();

?>


<!DOCTYPE HTML>
<html lang="ru">
<html> 
<head>
	<meta charset="utf-8">
	<title>calculator</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Bootstrap -->
	<link href="stylesheet/bootstrap.min.css" rel="stylesheet">
	<link href="stylesheet/my.css" rel="stylesheet">
	
</head>
<html>
<body>

</body>
</html>