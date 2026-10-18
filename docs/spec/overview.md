# Highlight specification

Highlight is a PHP library that converts source code into themed syntax tokens
on the server. Language support is implemented through registered `Language`
classes and tested with focused examples and benchmark fixtures.

This specification covers language registration and highlighting behavior. It
does not redefine the token engine, theme catalog, terminal rendering, or
CommonMark integration unless a later commitment brings one into scope.

## Spec map

| File | Prefix | Scope |
|---|---|---|
| language-support.md | HLT | Language registration, syntax recognition, fixtures, and visual review |

## Observed outside the current radius

- The token engine applies injections, patterns, grouping, rendering, and escaping.
- Themes render the same token stream for web and terminal consumers.
- CommonMark delegates fenced and inline code to the public highlighter.

