<?php

declare(strict_types=1);

namespace Tempest\Highlight\Tests\Languages\Rust;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Tempest\Highlight\Highlighter;
use Tempest\Highlight\Tests\Bench\HighlighterBench;

final class RustLanguageTest extends TestCase
{
    #[Test]
    public function rust_and_rs_are_registered(): void
    {
        $languages = (new Highlighter())->getSupportedLanguageNames();

        $this->assertContains('rust', $languages);
        $this->assertContains('rs', $languages);
    }

    #[Test]
    public function representative_rust_syntax_is_highlighted(): void
    {
        $highlighted = (new Highlighter())->parse(
            '#[derive(Debug)] pub fn main<T: Trait>(value: &str) -> i32 { println!("{value}"); 42 } // done',
            'rust',
        );

        foreach (['hl-attribute', 'hl-keyword', 'hl-property', 'hl-type', 'hl-operator', 'hl-value', 'hl-comment'] as $class) {
            $this->assertStringContainsString($class, $highlighted);
        }
    }

    #[Test]
    public function html_sensitive_rust_source_is_preserved_and_escaped(): void
    {
        $this->assertSame(
            '&lt;T as Trait&gt;::item()',
            (new Highlighter())->parse('<T as Trait>::item()', 'rust'),
        );
    }

    #[Test]
    public function rust_has_a_benchmark_entry_and_fixture(): void
    {
        $this->assertArrayHasKey('rust', HighlighterBench::LANGUAGES);
        $this->assertFileExists(__DIR__ . '/../../Bench/Fixtures/rust.txt');
        $this->assertNotSame('', trim((string) file_get_contents(__DIR__ . '/../../Bench/Fixtures/rust.txt')));
    }
}
