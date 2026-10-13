# AGENTS.md

WXies Team org homepage (www.wxies.cn): a static marketing page on **Astro 7 + Tailwind 4** — no CMS, no data layer, no API calls. The deployed site root is the built `dist/`; push to `main` builds and rsyncs it live via Actions.

## Commands

```bash
npm install          # Node >= 22.12 (engines field)
npm run dev          # local dev server
npm run build        # astro build → dist/ (gitignored, never committed)
npm run preview      # preview the built dist/ locally
```

There is **no lint / test**; verification = build exits 0 and `dist/index.html` exists (same check CI runs). CI is the real gate.

Deploy: push `main` → `.github/workflows/deploy.yml` builds and rsyncs `dist/` **flattened to the site root**; changes to `*.md` or `.github/**` **do not trigger** a deploy — use workflow_dispatch.

## Conventions

- Structure: routes in `src/pages/`, the shared shell (head, meta, global styles) in `src/layouts/Layout.astro`, page sections as components in `src/components/` (Hero / About / Services / Navbar / Footer / BackToTop).
- Images: bundled assets (imports, hashed) in `src/assets/`; static files copied as-is in `public/` (favicon, `images/`).
- The canonical site URL is set once in `astro.config.mjs` (`site: 'https://www.wxies.cn'`) — absolute URLs derive from it.
- Commit format follows the org convention: conventional commits with a Chinese description.

## Boundaries

**Always**
- Run `npm run build` and confirm exit 0 before pushing anything that touches `src/` or config.
- New pages → add `src/pages/<name>.astro` and wire the link from existing components (Navbar/Footer); check both desktop and mobile layout.

**Ask first**
- Adding dependencies (the dep set is intentionally minimal: astro + tailwind).
- Changing `astro.config.mjs` (site URL, output mode, outDir).
- Restyling conventions (fonts, color system in `src/styles/global.css`).

**Never**
- Commit `dist/` or `node_modules/`.
- Change the build output directory — the workflow rsyncs `dist/` from a fixed path.
- Touch server-side panel files (`.user.ini`, `.htaccess`, `.well-known`) — they are rsync-excluded and stay on the server.

## Known pitfalls

- The deploy **flattens `dist/` onto the site root with `rsync --delete`**: anything on the server that the build doesn't produce is deleted (panel-managed files are excluded). Don't add steps that write extra files into the site root.
- Only `dist/` is synced, so repo-only files (`.git*`, `AGENTS.md`, docs) never reach production — keep it that way when editing the workflow.
- `*.md`-only pushes deploy nothing (paths-ignore) — doc tweaks need workflow_dispatch if they must go live.
