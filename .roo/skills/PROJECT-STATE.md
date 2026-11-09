# Project State — sarhostel.ru

Updated: 2026-11-09

## Components
- `index.php` — single-page landing (PHP + Bootstrap 3 + jQuery, no CMS); all blocks/counters inline
- `privacy/index.php` — 152-ФЗ personal-data policy page for ИП Воронина Т.М. (uses site styles, link from footer); 11 sections incl. §8 VK-widget disclosure
- `css/fonts.css` — local @font-face declarations (Open Sans 400/400i/700, Lora 400/400i/700), font-display: swap
- `fonts/*.woff2` — 12 self-hosted WOFF2 (Open Sans + Lora, cyrillic/latin); Google Fonts fully removed
- `.htaccess` — tracked despite gitignore; otel 301 redirect: `RewriteRule ^otel(/.*)?$ / [R=301,L]`
- `otel/` — DELETED 2026-11-09 (legacy 2016 OtelMS booking system)
- `warpweave/` — WarpWeave change artifacts; active changes in `changes/`, sealed in `changes/archive/`

## Analytics (2026-11-09)
- Present: Яндекс.Метрика, Top.Mail.Ru, Rambler Top100, LiveInternet
- Removed: Google Analytics gtag.js (G-PNEQ1VWRSM) — cross-border transfer risk per 152-ФЗ
- VK comments widget on index.php (vk.com openapi.js, apiId 5236689) — third-party transmitter, disclosed in policy §8 (2026-11-09, commit ccaee31)

## Conventions
- Cookie consent: `$.cookie('cookies_consent', '1', { expires: 30, path: '/' })` via existing jquery.cookie.min.js; banner id `cookie_directive_container`
- `*.br` (brotli precompressed) — server-generated, gitignored; regen on server if nginx brotli_static
- Git: deploy branch `main`; feature work in `152-fz`-style branches; `master` exists but stale

## Deploy
- Production: `/var/www/sarhostel.ru/public` on `main` (origin: git@github.com:sedovdmitry/sarhostel.ru.git)
- Current prod target: `f4e5f14` (152-FZ compliance: privacy page, cookie banner, GA removal, otel decommission, local fonts)
