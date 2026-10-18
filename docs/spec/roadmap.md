# Roadmap

Current: rust-comment-performance

## rust-highlighting

Requirements: HLT-001, HLT-002, HLT-003, HLT-004, HLT-005

Add Rust as a registered language, cover representative Rust syntax, add the
benchmark fixture, and prepare the dark visual harness used for the PR image.
Done when both declared mechanisms are current and reviewed, the repository QA
commands pass, and a cropped dark-mode screenshot has been prepared.

## go-highlighting

Requirements: HLT-005, HLT-006, HLT-007, HLT-008, HLT-009

Add Go as a registered language, cover representative Go syntax, add the
benchmark and visual fixtures, and prepare a cropped dark-mode screenshot.
Done when the Go and visual-harness mechanisms are current and reviewed, the
repository QA commands pass, and the screenshot has been prepared.

## rust-comment-performance

Requirements: HLT-010

Make Rust block-comment matching avoid unnecessary backtracking while retaining
nested-comment recognition. Done when the Rust mechanism is current and reviewed,
the focused regression proves malformed input does not produce a PCRE error, and
the repository QA commands pass.

## Later language commitments

Each group is delivered in its own pull request, in this order: C and C++; Java
and Kotlin; C#; JSX and TSX; TOML; PowerShell.

