<?php

namespace Regex;

class TextProcessor {
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function wordCount() {
        if ( preg_match_all('@\w+@', $this->text, $matches)) {
            return count($matches[0]);
        }

        return 0;
    }

    public function sentenceCount() {
        if ( preg_match_all('@(?:^\s*\w+)|(?:\.\s*\w+)@', $this->text, $matches)) {
            return count($matches[0]);
        }

        return 0;
    }

    public function punctuationCount() {
            if ( preg_match_all('@[^\w]+@', $this->text, $matches)) {
            return count($matches[0]);
        }

        return 0;
    }
}
