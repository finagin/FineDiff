<?php

namespace FineDiffTests\Granularity;

use FineDiffTests\TestCase;
use CogPowered\FineDiff\Delimiters;
use CogPowered\FineDiff\Granularity\Paragraph;

class ParagraphTest extends TestCase
{
    /**
     * @var \CogPowered\FineDiff\Granularity\Granularity
     */
    protected $character;
    
    protected $delimiters = array(
        Delimiters::PARAGRAPH,
    );

    public function setUp()
    {
        $this->character = new Paragraph;
    }

    public function testExtendsAndImplements()
    {
        $this->assertInstanceOf('CogPowered\FineDiff\Granularity\Granularity', $this->character);
        $this->assertInstanceOf('CogPowered\FineDiff\Granularity\GranularityInterface', $this->character);
        $this->assertInstanceOf('ArrayAccess', $this->character);
        $this->assertInstanceOf('Countable', $this->character);
    }

    public function testGetDelimiters()
    {
        $this->assertEquals($this->character->getDelimiters(), $this->delimiters);
    }
}
