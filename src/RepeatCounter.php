<?php
	 class RepeatCounter
		{

		 function CountRepeats($wordToCount, $sentence)
		 {
			 $result = 0;
			 $lowerCaseWordToCount = strtolower($wordToCount);
			 $lowerCaseSentence = strtolower($sentence);
			 $sentenceArray = explode(" ", $lowerCaseSentence);
			 foreach ($sentenceArray as $word) {
				 if ($word == $lowerCaseWordToCount)
				 {
				 		$result += 1;
		 		 }
			
				}
				return $result;
		}
	}
 ?>
