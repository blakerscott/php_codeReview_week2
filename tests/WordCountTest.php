<?php

	require_once 'src/WordCounter.php';

	class WordCounterTest extends PHPUnit_Framework_TestCase
	{

		function test_countOneLetterLower()
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

		function test_countOneWordUpper()
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
	}

?>
