<?php
/*
 * This file is part of Aplus Framework Sample Project.
 *
 * (c) Natan Felles <natanfelles@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\Sample;

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
