<!-- BEGIN OPENLORE (managed — edits inside this block will be overwritten) -->
<!-- openlore-fingerprint: f5e6039ff6662e0c -->
This project uses OpenLore for persistent architectural memory.

Call `orient "<task description>"` (via the openlore MCP server, or
`npx openlore orient --json`) **before touching a module you have not yet read in
this session**, and when a task spans several modules. It returns the relevant
functions, callers, spec sections, and insertion points in one structural lookup
instead of file-by-file rediscovery.

Skip it for work you are already inside: repeated edits to a file you have read
this session do not need re-orientation. Reach for it again when the task moves
to unfamiliar code.

OpenLore prefixes tool responses with a brief, factual freshness note (the
Epistemic Lease) once your cached context has aged or the repo has moved since
your last `orient()`. It is informational — re-`orient()` if you are relying on
cached cross-module structure; otherwise carry on.

For the MCP setup, ensure `openlore mcp` is configured as an MCP server.
See https://github.com/clay-good/OpenLore for details.

Wired MCP surface: `substrate`. This guidance is written for that surface; re-run `openlore install --preset <name>` to change it and regenerate these instructions.
<!-- END OPENLORE -->

<!-- openlore-decisions-instructions -->
## Architectural decisions

`record_decision` is **not** part of the wired `substrate` surface, so do not plan around calling it.

When making a significant design choice, record it with the CLI **before** writing the code:

```bash
openlore decisions record --title "Use JWTs for stateless auth" --rationale "Avoids session store in infra" \
  --consequences "Tokens can't be revoked early" --files src/auth/middleware.ts
```

To expose the MCP tool as well: `openlore install --preset full`  — then this section regenerates with the MCP workflow.

## When git commit is blocked by the decisions gate

If `git commit` fails and the output is JSON with `"gated": true`, do NOT retry silently.
Check the `reason` field and act accordingly:

**`reason: "verified"` — decisions await review:**
Present each decision to the user:
> "The commit is blocked — I found N architectural decision(s) to validate:
> 1. **[id]** Title — rationale
Do you approve? (yes/no)"
For each approval run `openlore decisions --approve <id>`, for each rejection `openlore decisions --reject <id>` (both work on every MCP preset).
Then run `openlore decisions --sync` and retry `git commit`.

**`reason: "approved_not_synced"` — decisions approved but not written to specs:**
Run `openlore decisions --sync` then retry `git commit`. Do not skip this step.

**`reason: "drafts_pending_consolidation"` — drafts were recorded but not yet consolidated:**
Present to the user:
> "N decision draft(s) were recorded but never consolidated. Run consolidation now? (~10-30s)"
If yes: run `openlore decisions --consolidate --gate` and handle the result.
If no: retry with `git commit --no-verify` to skip the gate.

**`reason: "no_decisions_recorded"` — source files staged but nothing recorded:**
Present to the user:
> "Source files are staged but no architectural decisions were recorded. Run fallback extraction to check for undocumented decisions? (~10-30s)"
If yes: run `openlore decisions --consolidate --gate` and handle the result.
If no: retry with `git commit --no-verify` to skip the gate.
<!-- end-openlore-decisions-instructions -->
