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

[HLT-006] The Highlighter MUST resolve `go` and `golang` to the Go language and list both identifiers among its supported languages.
Falsifier: Either identifier selects the fallback language, or either identifier is absent from the supported-language list.
Mechanism: go-language
Status: Agreed 2026-10-18

[HLT-007] The Go language MUST distinguish representative comments, imports, strings, raw strings, runes, numbers, keywords, built-in types, constants, built-in functions, declared types, declared functions, operators, and punctuation.
Falsifier: A representative Go fixture leaves one of those categories unclassified or assigns it a conflicting category.
Mechanism: go-language
Status: Agreed 2026-10-18

[HLT-008] Go highlighting MUST preserve the complete source text and MUST safely render source characters that have meaning in HTML.
Falsifier: Removing theme markup from highlighted Go changes, drops, reorders, or exposes any source character.
Mechanism: go-language
Status: Agreed 2026-10-18

[HLT-009] The repository MUST provide Go unit cases, a non-empty Go benchmark fixture, and a non-empty Go visual fixture whenever Go is registered.
Falsifier: Go is registered while its focused test cases, benchmark fixture, or visual fixture are missing or empty.
Mechanism: go-language
Status: Agreed 2026-10-18

[HLT-010] Rust comment recognition MUST preserve nested block comments and MUST handle an unterminated block comment without exhausting the PCRE backtracking limit.
Falsifier: A valid nested block comment is not classified as a comment, or matching a 1,000-character unterminated block comment reports a PCRE error.
Mechanism: rust-language
Status: Agreed 2026-10-18

[HLT-011] The Highlighter MUST resolve `c` to the C language and `cpp` and `c++` to the C++ language, and MUST list all three identifiers among its supported languages.
Falsifier: Any identifier selects the fallback or wrong language, or is absent from the supported-language list.
Mechanism: c-cpp-language
Status: Agreed 2026-10-18

[HLT-012] The C language MUST distinguish representative comments, preprocessor directives and includes, strings, character literals, numbers, keywords, storage qualifiers, built-in and declared types, literals, functions, operators, and punctuation.
Falsifier: A representative C fixture leaves one of those categories unclassified or assigns it a conflicting category.
Mechanism: c-cpp-language
Status: Agreed 2026-10-18

[HLT-013] The C++ language MUST distinguish representative comments, preprocessor directives and includes, strings and raw strings, character literals, numbers, keywords, built-in and declared types, literals, namespaces, classes, templates, functions, operators, and punctuation.
Falsifier: A representative C++ fixture leaves one of those categories unclassified or assigns it a conflicting category.
Mechanism: c-cpp-language
Status: Agreed 2026-10-18

[HLT-014] C and C++ highlighting MUST preserve the complete source text and MUST safely render source characters that have meaning in HTML.
Falsifier: Removing theme markup from highlighted C or C++ changes, drops, reorders, or exposes any source character.
Mechanism: c-cpp-language
Status: Agreed 2026-10-18

[HLT-015] The repository MUST provide focused unit cases and non-empty benchmark and visual fixtures for both C and C++ whenever those languages are registered.
Falsifier: C or C++ is registered while its focused cases or either fixture is missing or empty.
Mechanism: c-cpp-language
Status: Agreed 2026-10-18

[HLT-016] C and C++ comment recognition MUST handle an unterminated block comment without exhausting the PCRE backtracking limit.
Falsifier: Matching a 1,000-character unterminated block comment with either language's comment pattern reports a PCRE error.
Mechanism: c-cpp-language
Status: Agreed 2026-10-18

[HLT-017] The Highlighter MUST resolve `java` to the Java language and `kotlin`, `kt`, and `kts` to the Kotlin language, and MUST list all four identifiers among its supported languages.
Falsifier: Any identifier selects the fallback or wrong language, or is absent from the supported-language list.
Mechanism: java-kotlin-language
Status: Agreed 2026-10-18

[HLT-018] The Java language MUST distinguish representative packages and imports, annotations, comments and Javadoc, strings and text blocks, character literals, numbers, keywords and modifiers, built-in and declared types, classes, interfaces, enums, records, generics, literals, methods and calls, lambdas, operators, and punctuation.
Falsifier: A representative Java fixture leaves one of those categories unclassified or assigns it a conflicting category.
Mechanism: java-kotlin-language
Status: Agreed 2026-10-18

[HLT-019] The Kotlin language MUST distinguish representative packages and imports, annotations, comments and KDoc, strings and multiline strings with interpolation, character literals, numbers, keywords and modifiers, built-in and declared types, classes, interfaces, objects, type aliases, literals, functions, calls and references, properties, lambdas, operators, and punctuation.
Falsifier: A representative Kotlin fixture leaves one of those categories unclassified or assigns it a conflicting category.
Mechanism: java-kotlin-language
Status: Agreed 2026-10-18

[HLT-020] Java and Kotlin highlighting MUST preserve the complete source text and MUST safely render source characters that have meaning in HTML.
Falsifier: Removing theme markup from highlighted Java or Kotlin changes, drops, reorders, or exposes any source character.
Mechanism: java-kotlin-language
Status: Agreed 2026-10-18

[HLT-021] The repository MUST provide focused unit cases and non-empty benchmark and visual fixtures for both Java and Kotlin whenever those languages are registered.
Falsifier: Java or Kotlin is registered while its focused cases or either fixture is missing or empty.
Mechanism: java-kotlin-language
Status: Agreed 2026-10-18

[HLT-022] Java and Kotlin comment recognition MUST handle an unterminated block comment without exhausting the PCRE backtracking limit.
Falsifier: Matching a 1,000-character unterminated block comment with either language's comment pattern reports a PCRE error.
Mechanism: java-kotlin-language
Status: Agreed 2026-10-18

[HLT-023] The Highlighter MUST resolve `csharp`, `cs`, and `c#` to the C# language and list all three identifiers among its supported languages.
Falsifier: Any identifier selects the fallback or wrong language, or is absent from the supported-language list.
Mechanism: csharp-language
Status: Agreed 2026-10-18

[HLT-024] The C# language MUST distinguish representative preprocessor directives, namespaces and using directives, attributes, comments and XML documentation, regular, verbatim, interpolated, and raw strings, character literals, numbers, keywords and modifiers, built-in and declared types, classes, interfaces, structs, records, enums, delegates, generics and nullable types, literals, methods and calls, properties, lambdas, query expressions, operators, and punctuation.
Falsifier: A representative C# fixture leaves one of those categories unclassified or assigns it a conflicting category.
Mechanism: csharp-language
Status: Agreed 2026-10-18

[HLT-025] C# highlighting MUST preserve the complete source text and MUST safely render source characters that have meaning in HTML.
Falsifier: Removing theme markup from highlighted C# changes, drops, reorders, or exposes any source character.
Mechanism: csharp-language
Status: Agreed 2026-10-18

[HLT-026] The repository MUST provide focused C# unit cases and non-empty benchmark and visual fixtures whenever C# is registered.
Falsifier: C# is registered while its focused cases or either fixture is missing or empty.
Mechanism: csharp-language
Status: Agreed 2026-10-18

[HLT-027] C# comment and string recognition MUST handle representative unterminated input without exhausting the PCRE backtracking limit.
Falsifier: Matching a 1,000-character unterminated block comment, raw string, or interpolated string reports a PCRE error.
Mechanism: csharp-language
Status: Agreed 2026-10-18

[HLT-028] The Highlighter MUST resolve `jsx` to the JSX language and `tsx` to the TSX language and list both identifiers among its supported languages.
Falsifier: Either identifier selects the fallback or wrong language, or is absent from the supported-language list.
Mechanism: jsx-tsx-language
Status: Agreed 2026-10-18

[HLT-029] The JSX language MUST distinguish representative JavaScript syntax, elements and fragments, intrinsic, component, member, and namespaced tags, attribute names and quoted values, spread attributes, embedded JavaScript expressions, text, entities, and comments.
Falsifier: A representative JSX fixture leaves one of those categories unclassified or assigns it a conflicting category.
Mechanism: jsx-tsx-language
Status: Agreed 2026-10-18

[HLT-030] The TSX language MUST distinguish representative TypeScript syntax and the JSX categories in HLT-029, including TypeScript types and generics where angle brackets could otherwise be read as JSX tags.
Falsifier: A representative TSX fixture leaves one of those categories unclassified, assigns it a conflicting category, or treats a generic arrow function as a JSX element.
Mechanism: jsx-tsx-language
Status: Agreed 2026-10-18

[HLT-031] JSX and TSX highlighting MUST preserve the complete source text and MUST safely render source characters that have meaning in HTML.
Falsifier: Removing theme markup from highlighted JSX or TSX changes, drops, reorders, or exposes any source character.
Mechanism: jsx-tsx-language
Status: Agreed 2026-10-18

[HLT-032] The repository MUST provide focused unit cases and non-empty benchmark and visual fixtures for both JSX and TSX whenever those languages are registered.
Falsifier: JSX or TSX is registered while its focused cases or either fixture is missing or empty.
Mechanism: jsx-tsx-language
Status: Agreed 2026-10-18

[HLT-033] JSX and TSX recognition MUST handle representative unterminated tags, quoted attributes, and embedded expressions without exhausting the PCRE backtracking limit.
Falsifier: Matching a 1,000-character unterminated tag, quoted attribute, or embedded expression with either language reports a PCRE error.
Mechanism: jsx-tsx-language
Status: Agreed 2026-10-18

[HLT-034] The Highlighter MUST resolve `toml` to the TOML language and list the identifier among its supported languages.
Falsifier: The identifier selects the fallback or wrong language, or is absent from the supported-language list.
Mechanism: toml-language
Status: Agreed 2026-10-18

[HLT-035] The TOML language MUST distinguish representative comments, bare, quoted, and dotted keys, standard and array-of-tables headers, basic, literal, and multiline strings, integers in supported bases, floats and special float values, booleans, offset and local date-time values, arrays, inline tables, separators, and delimiters.
Falsifier: A representative TOML fixture leaves one of those categories unclassified or assigns it a conflicting category.
Mechanism: toml-language
Status: Agreed 2026-10-18

[HLT-036] TOML highlighting MUST preserve the complete source text and MUST safely render source characters that have meaning in HTML.
Falsifier: Removing theme markup from highlighted TOML changes, drops, reorders, or exposes any source character.
Mechanism: toml-language
Status: Agreed 2026-10-18

[HLT-037] The repository MUST provide focused TOML unit cases and non-empty benchmark and visual fixtures whenever TOML is registered.
Falsifier: TOML is registered while its focused cases, benchmark fixture, or visual fixture are missing or empty.
Mechanism: toml-language
Status: Agreed 2026-10-18

[HLT-038] TOML recognition MUST handle representative unterminated strings, arrays, and inline tables without exhausting the PCRE backtracking limit.
Falsifier: Matching a 1,000-character unterminated basic string, multiline basic string, array, or inline table reports a PCRE error.
Mechanism: toml-language
Status: Agreed 2026-10-18

