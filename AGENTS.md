# AGENTS.md — Homepage

WXies Team org homepage at `www.wxies.cn` — static Astro 7 + Tailwind 4 site (no CMS/API); pushing `main` builds and rsyncs `dist/` to the live site root, while `*.md`/`.github/**`-only pushes deploy nothing (use workflow_dispatch).

## Precedence

Nearest `AGENTS.md` wins over the global file; an explicit user instruction wins over both. When docs and code disagree, follow the existing code and report the inconsistency. Global rules live in `~/.config/opencode/AGENTS.md` (do not restate them here).

## Commands

| Purpose | Command (from CI/package.json) |
| --- | --- |
| Install dependencies | `npm install` (Node ≥ 22.12, per `engines`) |
| Local dev | `npm run dev` |
| Preview built site | `npm run preview` |
| Build / verification | `npm run build` → `dist/`; CI check = `dist/index.html` exists |
| Single test / lint | none — `npm run build` is the only gate |

Required before finishing: `npm run build` exits 0 and `dist/index.html` exists. CI installs with `npm install` (not `npm ci`); on a dependency error, run `npm install` before judging the build.

## Boundaries

**Always**
- Run `npm run build` before pushing anything under `src/` or config; a new page goes in `src/pages/<name>.astro` and must be linked from Navbar/Footer.
- Check desktop and mobile layout for any layout or component change.

**Ask first**
- Adding dependencies (the set is intentionally minimal: astro + tailwind), changing `astro.config.mjs` (site URL/output), or restyling the font/color system in `src/styles/global.css`.
- Editing `.github/workflows/deploy.yml` or changing the build output directory (the workflow rsyncs `dist/` from a fixed path).

**Never**
- Commit `dist/`, `.astro/` or `node_modules/` (all gitignored); write extra files into the site root at build time — deploy rsyncs `--delete` and removes anything the build doesn't produce.
- Touch panel-managed files (`.user.ini`, `.htaccess`, `.well-known/`) — they are rsync-excluded and stay on the server.

## Pointers

- Canonical site URL: `astro.config.mjs` (`site`); deploy semantics and exclusions: `ci/deploy-managed.sh`, `ci/deploy-exclude.txt`.
- Static assets copied as-is live in `public/`; bundled/hashed assets live in `src/assets/`.
- Commit format: `~/.config/opencode/docs/COMMITTING.md`.
