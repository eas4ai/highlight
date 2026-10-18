# Repository Guidelines

## Project Structure & Module Organization

This package provides server-side syntax highlighting for PHP 8.4. Production code lives in `src/` under the `Tempest\Highlight` namespace. Language definitions are grouped in `src/Languages/<Language>/`, token processing in `src/Tokens/`, CommonMark integration in `src/CommonMark/`, and built-in themes in `src/Themes/`. Tests mirror that layout under `tests/`; benchmark cases and fixtures live in `tests/Bench/`. Root-level `test-server.php` and `test-terminal.php` are manual smoke-test entry points.

## Build, Test, and Development Commands

Install dependencies with `composer install`. The primary checks are:

- `composer qa` — formats code, runs PHPStan, then executes the full PHPUnit suite.
- `composer phpunit` — runs PHPUnit with warnings, skips, deprecations, errors, and notices displayed.
- `composer phpstan` — statically analyzes `src/` and `tests/`.
- `composer csfixer` — applies the repository's PHP-CS-Fixer rules; use `vendor/bin/php-cs-fixer fix --dry-run --allow-risky=yes` for a non-mutating check.
- `composer bench` — runs the PHPBench aggregate benchmark report.

## Coding Style & Naming Conventions

Follow PSR-12 with four-space indentation and `declare(strict_types=1);`. Use short arrays, alphabetized imports, trailing commas in multiline constructs, and one blank line between methods. Namespace classes according to their directory and use PascalCase class names. Test methods use descriptive `snake_case` names prefixed with `test_`; data providers use `provide_<subject>_cases`. Run the formatter before submitting changes.

## Testing Guidelines

PHPUnit discovers files ending in `Test.php` anywhere under `tests/`. Place new tests beside the matching subsystem and cover success paths, edge cases, and regressions. Language additions should include representative highlighting cases and a fixture in `tests/Bench/Fixtures/`; `HighlighterBenchTest` verifies benchmark coverage for supported languages. CI publishes coverage to Coveralls, but the repository does not define a numeric coverage threshold.

## Commit & Pull Request Guidelines

History favors concise, imperative subjects, often using Conventional Commit prefixes such as `fix:` and `feat:`. Keep each commit focused. Pull requests should explain the behavior change, link the relevant issue, and include tests. Add screenshots only for rendered highlighting or theme changes. Before requesting review, ensure Composer validation, formatting, PHPStan, PHPUnit, and any relevant benchmarks pass; note intentional performance changes in the PR description.
