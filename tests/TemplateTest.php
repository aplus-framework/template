<?php
/*
 * This file is part of Aplus Framework Template Project.
 *
 * (c) Natan Felles <natanfelles@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\Template;

use Framework\Template\Template;
use PHPUnit\Framework\TestCase;

final class TemplateTest extends TestCase
{
    protected Template $template;

    protected function setUp() : void
    {
        $this->template = new Template();
    }

    public function testTemplate() : void
    {
        self::assertSame(
            'Framework\Template\Template::test',
            $this->template->test()
        );
    }
}
