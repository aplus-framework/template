<?php namespace Tests\Sample;

use Framework\Sample\Sample;
use PHPUnit\Framework\TestCase;

final class SampleTest extends TestCase
{
    protected Sample $sample;

    protected function setUp() : void
    {
        $this->sample = new Sample();
    }

    public function testSample() : void
    {
        self::assertSame(
            'Framework\Sample\Sample::test',
            $this->sample->test()
        );
    }
}
