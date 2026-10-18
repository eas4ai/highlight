# Repository Recon

Recon date: 2026-10-18. This is a Path A recon: no earlier Sudus specification was present, so all behavior below is observed or documented rather than agreed contract.

## Product and Public Surface

- **Documented** — `tempest/highlight` is a PHP 8.4 Composer library for fast, extensible, server-side syntax highlighting. It exposes `Tempest\Highlight\` from `src/` through PSR-4 autoloading. (`composer.json:2-7`, `composer.json:20-22`)
- **Documented** — The advertised entry point is `new Highlighter()` followed by `parse($code, '<language>')`. (`README.md:4-16`)
- **Exists** — `Highlighter` ships with CSS output and plain-text fallback defaults, registers the built-in language set, supports aliases and custom languages, and exposes gutter, theme, current-language, nested-highlighter, and supported-language APIs. (`src/Highlighter.php:45-188`)
- **Exists** — Language extensions implement a four-method contract for name, aliases, injections, and patterns. (`src/Language.php:7-22`)
- **Exists** — Optional CommonMark support installs fenced-code and inline-code renderers around the same highlighter. (`src/CommonMark/HighlightExtension.php:13-27`, `composer.json:27,32-35`)

## Architecture and Data Flow

- **Exists** — A parse resolves the requested language or fallback, strips internal escape markers at the outer boundary, normalizes newlines, and delegates to the content pipeline. (`src/Highlighter.php:131-147`)
- **Exists** — The content pipeline runs before-injections, pattern matching, token grouping and rendering, after-injections, then theme escaping for non-nested output. (`src/Highlighter.php:191-227`)
- **Exists** — Pattern parsing deduplicates matches by offset, token type, and value before constructing tokens. (`src/Tokens/ParseTokens.php:20-67`)
- **Exists** — Rendering walks grouped tokens in source order, recursively renders children, caches theme markup by token type, and preserves untouched source spans. (`src/Tokens/RenderTokens.php:23-81`)
- **Exists** — Static project data consists chiefly of language patterns/injections, CSS themes under `src/Themes/Css/`, PHPUnit stubs and target documents, and benchmark fixtures under `tests/Bench/Fixtures/`. (`src/Highlighter.php:66-96`, `phpbench.json:3-8`, `tests/Bench/HighlighterBenchTest.php:12-76`)

## Tests, Quality, and Delivery

- **Documented** — Composer defines PHPUnit, PHP-CS-Fixer, PHPStan, aggregate QA, and PHPBench commands. (`composer.json:23-45`)
- **Exists** — PHPUnit discovers `*Test.php` below `tests/` and scopes coverage to `src/`. (`phpunit.xml:12-21`)
- **Exists** — Benchmark contract tests require every public supported language to have a non-empty fixture and reject unknown benchmark language names. (`tests/Bench/HighlighterBenchTest.php:20-92`)
- **Documented** — Pull-request CI on `main` validates Composer, checks formatting, runs PHPStan, and executes PHPUnit with coverage on PHP 8.4. (`.github/workflows/quality-assurance.yml:3-95`)
- **Documented** — A separate pull-request workflow compares PHPBench results between the base and proposed revisions and uploads a Markdown report artifact. (`.github/workflows/benchmark.yml:3-59`)
- **Exists** — On 2026-10-18, `composer validate`, PHP-CS-Fixer dry-run, PHPStan, and PHPUnit passed locally; PHPUnit ran 833 tests and 1,080 assertions. (local command receipts: `composer validate`; `vendor/bin/php-cs-fixer fix --dry-run --allow-risky=yes --diff`; `composer phpstan`; `composer phpunit`)
- **Unverified** — PHP 8.4 runtime parity was not reproduced locally because the available runtime was PHP 8.5.11; CI is configured to supply the PHP 8.4 check. (`composer.json:20-22`, `.github/workflows/quality-assurance.yml:15-23,43-53,55-89`)
- **Unverified** — No numeric coverage threshold is declared in the repository. Coverage is configured and uploaded to Coveralls, but this recon did not inspect the external Coveralls state. (`phpunit.xml:17-21`, `.github/workflows/quality-assurance.yml:88-95`, `README.md:2`)

## Documentation and Recent Direction

- **Documented** — The root README intentionally stays brief and points users to the external Tempest documentation for the full package guide. (`README.md:1-18`)
- **Documented** — `UPGRADING.md` records compatibility changes and additions including gutter support, themes, CommonMark, language metadata, immutable gutter configuration, and newer language support. (`UPGRADING.md:1-253`)
- **Exists** — Recent history centers on parser safety and broader language correctness: reserved marker filtering (`26a0e75`), richer diff-terminal handling (`f555969`), text fallback and benchmark registration (`09bb7da`, `4a6b37d`), and HTTP, Vue, and Svelte support (`43641c8`, `030c230`, `56a9fa4`). (Git history through `e04f3d4`, inspected 2026-10-18)
- **Unverified** — The external documentation linked from the README was outside this local-code recon, so claims present only there are not carried into the initial specification. (`README.md:18`)

## Recon Outcome

- **Exists** — The repository presents a cohesive library boundary, an explicit extension model, mirrored unit coverage, and benchmark coverage for registered languages. The initial Sudus specification can be derived from these observed interfaces once a concrete feature or defect defines the first commitment radius. (citations above)
- **Contradicted** — No contradiction between local documentation, implementation, and repository tests was identified within the inspected scope. This is not yet an agreed product guarantee. (citations above; local verification receipts)
