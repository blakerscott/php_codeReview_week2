<?php
	 class RepeatCounter
		{

		 function CountRepeats($wordToCount, $sentence)
		 {
			 $result = 0;
			 $lowerCaseSentence = strtolower($sentence);
			 $lowerCaseWordToCount = strtolower($wordToCount);
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
