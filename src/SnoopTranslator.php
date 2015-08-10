<?php

class SnoopTranslator
{

    function snoopTranslate($input_phrase)
    {
        $array_of_words = explode(" ", $input_phrase);
        $output = array();

        foreach ($array_of_words as $word) {
            $output_word = "";
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

            array_push($output, $output_word);
        }

        return implode(" ", $output);
    }
}
?>
