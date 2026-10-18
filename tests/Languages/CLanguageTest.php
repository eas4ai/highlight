<?php

declare(strict_types=1);

namespace Tempest\Highlight\Tests\Languages;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Tempest\Highlight\Highlighter;

final class CLanguageTest extends TestCase
{
    #[Test]
    public function it_registers_c(): void
    {
        $this->assertContains('c', (new Highlighter())->getSupportedLanguageNames());
    }
}
