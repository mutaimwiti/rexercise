<?php

namespace Regex;

class TextProcessor {
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function wordCount() {
        return $this->matchCount('@\w+@');
    }

    public function sentenceCount() {
        return $this->matchCount('@(^\s*\w+)|(\.\s*\w+)@');
    }

    public function punctuationCount() {
        return $this->matchCount('@[^\w]+@');
    }

    protected function matchCount($regex) {
        $matches = $this->match($regex);

        return count($matches);
    }

    protected function match($regex) {
        $matched = preg_match_all($regex, $this->text, $matchArray);

        $matches = $matched ? $matchArray[0] : [];

        return $matches;
    }
}
