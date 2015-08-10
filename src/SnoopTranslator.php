<?php

class SnoopTranslator
{

    function snoopTranslate($input_phrase)
    {
        $phrase_array = explode(" ", $input_phrase);
        $output = array();

        foreach ($phrase_array as $word) {
            $output_word = "";
            $final_letter = substr($word, -1);
            if ($final_letter == "s") {
                $string_length = strlen($word);
                $rest_of_word = substr($word, 0, $string_length - 1);
                $output_word = $rest_of_word . "z";
            } else {
                // if a given word does not end with s, return it as-is.
                $output_word = $word;
            }

        array_push($output, $output_word);
        }

        return implode(" ", $output);
    }
}
