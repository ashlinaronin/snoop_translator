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
            $input = "boys in the cupboards";

            //Act
            $result = $test_SnoopTranslator->snoopTranslate($input);

            //Assert
            $this->assertEquals("boyz in the cupboardz", $result);

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
    }

?>
