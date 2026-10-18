<?php

declare(strict_types=1);

namespace Tempest\Highlight\Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class VisualHarnessTest extends TestCase
{
    #[Test]
    public function the_capture_page_uses_a_local_dark_theme_and_stable_capture_surface(): void
    {
        $source = (string) file_get_contents(__DIR__ . '/index.php');

        $this->assertStringContainsString('highlight-dark-lite.css', $source);
        $this->assertStringContainsString('color-scheme: dark', $source);
        $this->assertStringContainsString('capture', $source);
        $this->assertStringNotContainsString('<link rel="stylesheet" href=', $source);
    }
}
