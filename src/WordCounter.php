<?php
	 class WordCounter
		{

		 function countWordFunction($wordToCount, $sentence)
		 {
			 $result = 0;
			 $sentenceArray = explode(strtolower(" ", $sentence));
			 foreach ($sentenceArray as $word) {
				 if ($word == $wordToCount)
				 {
				 		$result += 1;
		 		 }

				}
				return $result;
		}
	}
 ?>
