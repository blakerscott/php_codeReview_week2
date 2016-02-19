<?php

	require_once 'src/WordCounter.php';

	class WordCounterTest extends PHPUnit_Framework_TestCase
	{

		function test_countOneWord()
		{
		//Arrange
		$test_WordCounter = new WordCounter;
		$wordToCount = 'beowulf';
		$sentence = 'beowulf';

		//Act
		$result = $test_WordCounter->countWordFunction($wordToCount, $sentence);

		//Assert
		$this->assertEquals('1', $result);
		}
	}

?>
