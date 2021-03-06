<?php

class SnoopTranslator
{

    function shizzlenate($input_phrase)
    {
        include "snoopdictionary.php";

        $array_of_words = explode(" ", $input_phrase);
        $output = array();

        foreach ($array_of_words as $word) {

            $output_word = "";

            $last_three_letters = substr($word, -3);
            //check the dictionary array for a particular word
            //if the key is there, return the value
            if (array_key_exists($word, $snoopdictionary)) {
                $output_word = $snoopdictionary[$word];
            } elseif ($last_three_letters == "ing") {
                // delete "g" and replace with "'"
                $output_word = substr($word, 0, -1) . "'";
            } else {

                $first_letter = substr($word, 0);

                $array_of_letters = str_split($word);
                $count = 0;
                foreach ($array_of_letters as $letter) {
                    $output_letter = "";

                    /* If first letter is s, ignore it.
                       If s occurs anywhere else in the word, change it to z.
                       Leave all other letters alone. */
                    if ($letter == "s") {
                        if ($count == 0) {
                            $output_letter = $letter;
                        } else {
                            $output_letter = "z";
                        }
                    } else {
                        $output_letter = $letter;
                    }

                    $output_word .= $output_letter;
                    $count++;
                }
            }
            array_push($output, $output_word);
        }

        return implode(" ", $output);
    }
}
?>
