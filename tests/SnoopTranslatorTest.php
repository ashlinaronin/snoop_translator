<?php

    require_once "src/SnoopTranslator.php";

    class SnoopTranslatorTest extends PHPUnit_Framework_TestCase
    {

        function test_snoopTranslate_endingS()
        {
            //Arrange
            $test_SnoopTranslator = new SnoopTranslator;
            $input = "homies";

            //Act
            $result = $test_SnoopTranslator->snoopTranslate($input);

            //Assert
            $this->assertEquals("homiez", $result);
        }

        function test_snoopTranslate_multipleEndingS()
        {
            //Arrange
            $test_SnoopTranslator = new SnoopTranslator;
            $input = "boys in cupboards";

            //Act
            $result = $test_SnoopTranslator->snoopTranslate($input);

            //Assert
            $this->assertEquals("boyz in cupboardz", $result);

        }

        function test_snoopTranslate_ignoreStartingS()
        {
            //Arrange
            $test_SnoopTranslator = new SnoopTranslator;
            $input = "silhouette";

            //Act
            $result = $test_SnoopTranslator->snoopTranslate($input);

            //Assert
            $this->assertEquals("silhouette", $result);
        }

        function test_snoopTranslate_theToTha()
        {
            //Arrange
            $test_SnoopTranslator = new SnoopTranslator;
            $input = "the";

            //Act
            $result = $test_SnoopTranslator->snoopTranslate($input);

            //Assert
            $this->assertEquals("tha", $result);
        }

        function test_snoopTranslate_forToFo()
        {
            //Arrange
            $test_SnoopTranslator = new SnoopTranslator;
            $input = "for";

            //Act
            $result = $test_SnoopTranslator->snoopTranslate($input);

            //Assert
            $this->assertEquals("fo'", $result);
        }

        function test_snoopTranslate_sureToShizzle()
        {
            //Arrange
            $test_SnoopTranslator = new SnoopTranslator;
            $input = "sure";

            //Act
            $result = $test_SnoopTranslator->snoopTranslate($input);

            //Assert
            $this->assertEquals("shizzle", $result);
        }

        function test_snoopTranslate_ingToIn()
        {
            //Arrange
            $test_SnoopTranslator = new SnoopTranslator;
            $input = "popping";

            //Act
            $result = $test_SnoopTranslator->snoopTranslate($input);

            //Assert
            $this->assertEquals("poppin'", $result);
        }
    }

?>
