# AGENTS.md — Homepage

WXies Team org homepage at `www.wxies.cn` — static Astro 7 + Tailwind 4 site (no CMS/API); pushing `main` builds and rsyncs `dist/` to the live site root, while `*.md`/`.github/**`-only pushes deploy nothing (use `workflow_dispatch`).

## Commands

| Purpose | Command |
| --- | --- |
| Install dependencies | `npm install` (Node ≥ 22.12, per `engines`) |
| Local dev | `npm run dev` |
| Preview built site | `npm run preview` |
| Build / verification | `npm run build` → `dist/`; CI check = `dist/index.html` exists |
| Single test / lint | none — `npm run build` is the only gate |

Before finishing: `npm run build` exits 0 and `dist/index.html` exists. CI installs with `npm install` (not `npm ci`); on a dependency error run `npm install` before judging the build.

## Context loading

| Task | Read |
| --- | --- |
| Canonical site URL | `astro.config.mjs` (`site`) |
| Deploy semantics and exclusions | `ci/deploy-managed.sh`, `ci/deploy-exclude.txt` |
| Static assets | `public/` (copied as-is); `src/assets/` (bundled/hashed) |
| Layout/components | `src/layouts/Layout.astro`, `src/components/`, `src/styles/global.css` |
| Commit format | `~/.config/opencode/docs/committing.md` |
| Global rules | `~/.config/opencode/AGENTS.md` |

## Boundaries

### Always
- Run `npm run build` before pushing anything under `src/` or config; a new page goes in `src/pages/<name>.astro` and must be linked from Navbar/Footer.
- Check desktop and mobile layout for any layout or component change.

### Ask first
- Adding dependencies (the set is intentionally minimal: astro + tailwind), changing `astro.config.mjs` (site URL/output), or restyling the font/color system in `src/styles/global.css`.
- Editing `.github/workflows/deploy.yml` or changing the build output directory (the workflow rsyncs `dist/` from a fixed path).

### Never
- Commit `dist/`, `.astro/` or `node_modules/` (all gitignored) — edit `src/` only.
- Write extra files into the site root at build time — deploy rsync deletes anything the build doesn't produce.
- Touch panel-managed files (`.user.ini`, `.htaccess`, `.well-known/`) — they are rsync-excluded and stay on the server.

## Output

Chinese, lead with the conclusion. Keep instruction files in English.
