Prefix: HLT

# Language support

[HLT-001] The Highlighter MUST resolve `rust` and `rs` to the Rust language and list both identifiers among its supported languages.
Falsifier: Either identifier selects the fallback language, or either identifier is absent from the supported-language list.
Mechanism: rust-language
Status: Agreed 2026-10-18

[HLT-002] The Rust language MUST distinguish representative comments, attributes, strings, character literals, lifetimes, numbers, keywords, types, macros, functions, operators, and punctuation.
Falsifier: A representative Rust fixture leaves one of those categories unclassified or assigns it a conflicting category.
Mechanism: rust-language
Status: Agreed 2026-10-18

[HLT-003] Rust highlighting MUST preserve the complete source text and MUST safely render source characters that have meaning in HTML.
Falsifier: Removing theme markup from highlighted Rust changes, drops, reorders, or exposes any source character.
Mechanism: rust-language
Status: Agreed 2026-10-18

[HLT-004] The repository MUST provide Rust unit cases and a non-empty Rust benchmark fixture whenever Rust is registered.
Falsifier: Rust is registered while its focused test cases or benchmark fixture are missing or empty.
Mechanism: rust-language
Status: Agreed 2026-10-18

[HLT-005] The visual harness MUST render a selected fixture in a deterministic dark layout using repository-local assets and a stable capture area.
Falsifier: The Rust fixture requires an external asset, renders with a light code surface, or changes capture geometry between identical requests.
Mechanism: visual-harness
Status: Agreed 2026-10-18

