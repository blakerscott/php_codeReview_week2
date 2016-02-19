<?php

	require_once 'src/WordCounter.php';

	class WordCounterTest extends PHPUnit_Framework_TestCase
	{

		function test_oneLetterLower()
		{
		//Arrange
		$test_WordCounter = new WordCounter;
		$wordToCount = 'i';
		$sentence = 'i';

		//Act
		$result = $test_WordCounter->countWordFunction($wordToCount, $sentence);

		//Assert
		$this->assertEquals('1', $result);
		}

		function test_oneletterUpper()
		{
		//Arrange
		$test_WordCounter = new WordCounter;
		$wordToCount = 'I';
		$sentence = 'I';

		//Act
		$result = $test_WordCounter->countWordFunction($wordToCount, $sentence);

		//Assert
		$this->assertEquals('1', $result);
		}

		function test_oneWordTwoLetterAllLowercase()
		{
		//Arrange
		$test_WordCounter = new WordCounter;
		$wordToCount = 'in';
		$sentence = 'in';

		//Act
		$result = $test_WordCounter->countWordFunction($wordToCount, $sentence);

		//Assert
		$this->assertEquals('1', $result);
		}

		function test_oneWordTwoLetterAllUppercase()
		{
		//Arrange
		$test_WordCounter = new WordCounter;
		$wordToCount = 'IN';
		$sentence = 'IN';

		//Act
		$result = $test_WordCounter->countWordFunction($wordToCount, $sentence);

		//Assert
		$this->assertEquals('1', $result);
		}

	}

?>
