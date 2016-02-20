<?php

	require_once 'src/RepeatCounter.php';

	class RepeatCounterTest extends PHPUnit_Framework_TestCase
	{

		function test_oneLetterLower()
		{
		//Arrange
		$test_RepeatCounter = new RepeatCounter;
		$wordToCount = 'i';
		$sentence = 'i';

		//Act
		$result = $test_RepeatCounter->CountRepeats($wordToCount, $sentence);

		//Assert
		$this->assertEquals('1', $result);
		}

		function test_oneletterUpper()
		{
		//Arrange
		$test_RepeatCounter = new RepeatCounter;
		$wordToCount = 'I';
		$sentence = 'I';

		//Act
		$result = $test_RepeatCounter->CountRepeats($wordToCount, $sentence);

		//Assert
		$this->assertEquals('1', $result);
		}

		function test_oneWordTwoLetterAllLowercase()
		{
		//Arrange
		$test_RepeatCounter = new RepeatCounter;
		$wordToCount = 'in';
		$sentence = 'in';

		//Act
		$result = $test_RepeatCounter->CountRepeats($wordToCount, $sentence);

		//Assert
		$this->assertEquals('1', $result);
		}

		function test_oneWordTwoLetterAllUppercase()
		{
		//Arrange
		$test_RepeatCounter = new RepeatCounter;
		$wordToCount = 'IN';
		$sentence = 'IN';

		//Act
		$result = $test_RepeatCounter->CountRepeats($wordToCount, $sentence);

		//Assert
		$this->assertEquals('1', $result);
		}

		function test_oneWordTwoLetterMixedCase()
		{
		//Arrange
		$test_RepeatCounter = new RepeatCounter;
		$wordToCount = 'In';
		$sentence = 'In';

		//Act
		$result = $test_RepeatCounter->CountRepeats($wordToCount, $sentence);

		//Assert
		$this->assertEquals('1', $result);
		}

		function test_aSentenceThatIsTwoMatches()
		{
		//Arrange
		$test_RepeatCounter = new RepeatCounter;
		$wordToCount = 'In';
		$sentence = 'In In';

		//Act
		$result = $test_RepeatCounter->CountRepeats($wordToCount, $sentence);

		//Assert
		$this->assertEquals('2', $result);
		}

		function test_aSentenceThatIsTwoWordsOneMatch()
		{
		//Arrange
		$test_RepeatCounter = new RepeatCounter;
		$wordToCount = 'It';
		$sentence = 'It is';

		//Act
		$result = $test_RepeatCounter->CountRepeats($wordToCount, $sentence);

		//Assert
		$this->assertEquals('1', $result);
		}

		function test_aSentenceThatHasMultipleWordsAndTwoMatches()
		{
		//Arrange
		$test_RepeatCounter = new RepeatCounter;
		$wordToCount = 'It';
		$sentence = 'It is It';

		//Act
		$result = $test_RepeatCounter->CountRepeats($wordToCount, $sentence);

		//Assert
		$this->assertEquals('2', $result);
		}

		function test_aSentenceThatContainsMatchesWithMultipleCaseConfiguations()
		{
		//Arrange
		$test_RepeatCounter = new RepeatCounter;
		$wordToCount = 'That';
		$sentence = 'THAT is great tHAt is funny that is cool';

		//Act
		$result = $test_RepeatCounter->CountRepeats($wordToCount, $sentence);

		//Assert
		$this->assertEquals('3', $result);
		}

		function test_aSentenceThatHasNoMatches()
		{
		//Arrange
		$test_RepeatCounter = new RepeatCounter;
		$wordToCount = 'That';
		$sentence = 'This sentence does not have any matches';

		//Act
		$result = $test_RepeatCounter->CountRepeats($wordToCount, $sentence);

		//Assert
		$this->assertEquals('0', $result);
		}

		function test_aSentenceWithPunctuation()
		{
		//Arrange
		$test_RepeatCounter = new RepeatCounter;
		$wordToCount = 'That';
		$sentence = 'That sentence, has #$%^ that punctuation thing going on.';

		//Act
		$result = $test_RepeatCounter->CountRepeats($wordToCount, $sentence);

		//Assert
		$this->assertEquals('2', $result);
		}

	}

?>
