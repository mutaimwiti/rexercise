<?php

namespace Tests;

use Regex\TextProcessor;

class TextProcessorTest extends \PHPUnit\Framework\TestCase {
    /** @var TextProcessor */
    protected $processor;

    protected function setUp(): void
    {
        parent::setUp();

        $this->processor = new TextProcessor(
            get_text('lorem1.txt')
        );
    }

    /** @test */
    function it_gets_correct_word_count() {
        $this->assertEquals(92, $this->processor->wordCount());
    }

    /** @test */
    function it_gets_correct_sentence_count() {
        $this->assertEquals(4, $this->processor->sentenceCount());
    }
}
