<?php

declare(strict_types=1);

namespace Tempest\Highlight\Tests\Languages\Go;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Tempest\Highlight\Highlighter;
use Tempest\Highlight\Tests\Bench\HighlighterBench;

final class GoLanguageTest extends TestCase
{
    #[Test]
    public function it_registers_go_identifiers(): void
    {
        $languages = (new Highlighter())->getSupportedLanguageNames();

        $this->assertContains('go', $languages);
        $this->assertContains('golang', $languages);
    }

    #[Test]
    public function it_highlights_representative_go_syntax(): void
    {
        $highlighted = (new Highlighter())->parse('package main; func render() string { return `ok` }', 'go');

        $this->assertStringContainsString('<span class="hl-keyword">package</span>', $highlighted);
        $this->assertStringContainsString('<span class="hl-property">render</span>', $highlighted);
        $this->assertStringContainsString('<span class="hl-value">`ok`</span>', $highlighted);
    }

    #[Test]
    public function it_preserves_and_escapes_the_complete_source(): void
    {
        $source = "package main\r\nvar value = `<script>❶❷❸❹❿</script>`";
        $highlighted = (new Highlighter())->parse($source, 'go');
        $renderedSource = html_entity_decode(strip_tags($highlighted), ENT_QUOTES | ENT_HTML5);

        $this->assertSame($source, $renderedSource);
        $this->assertStringNotContainsString('<script>', $highlighted);
    }

    #[Test]
    public function it_requires_go_fixtures(): void
    {
        $this->assertSame('go.txt', HighlighterBench::LANGUAGES['go'] ?? null);
        $this->assertFileExists(__DIR__ . '/../../Bench/Fixtures/go.txt');
        $this->assertFileExists(__DIR__ . '/../../targets/go.md');
    }
}
