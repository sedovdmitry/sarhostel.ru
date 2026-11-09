## 1. Privacy Policy Page

- [x] 1.1 Create `/privacy/index.php` with official 152-FZ Privacy Policy for ИП Воронина Т.М.
  - **Spec scenario**: Navigation to privacy policy page / Legal details and contact for revocation
  - **Ladder rung**: 2 (Reuse — site layout and legal structure from stciv reference)
  - **Test first**: `Test-Path privacy/index.php`
  - **Verify**: `rtk rg -n "152-ФЗ" privacy/index.php`

## 2. Cookie Notice Banner and Footer Link

- [x] 2.1 Add Cookie Consent banner and replace spoiler button with `/privacy/` link in `index.php`
  - **Spec scenario**: First visit banner display / Consent dismissal and persistence
  - **Ladder rung**: 2 (Reuse — existing `jquery.cookie.min.js` and Bootstrap alert styles)
  - **Test first**: `rtk rg "cookie_directive_container" index.php`
  - **Verify**: `rtk rg -n "privacy" index.php`

## 3. Google Analytics Removal

- [x] 3.1 Remove Google Analytics (`gtag.js`, `G-PNEQ1VWRSM`) code from `index.php`
  - **Spec scenario**: Absence of Google Analytics tracking code
  - **Ladder rung**: 1 (YAGNI / Clean)
  - **Test first**: `rtk rg "G-PNEQ1VWRSM" index.php`
  - **Verify**: `pwsh -Command "if (Select-String 'G-PNEQ1VWRSM' index.php) { exit 1 } else { exit 0 }"`

## 4. Decommissioning Legacy Otel Directory

- [x] 4.1 Delete legacy `/otel/` directory and remove script reference from `index.php`
  - **Spec scenario**: Redirecting legacy otel routes
  - **Ladder rung**: 1 (YAGNI / Clean)
  - **Test first**: `Test-Path otel`
  - **Verify**: `pwsh -Command "if (Test-Path otel) { exit 1 } else { exit 0 }"`
- [x] 4.2 Configure HTTP 301 redirect for `/otel/` in `.htaccess`
  - **Spec scenario**: Redirecting legacy otel routes
  - **Ladder rung**: 4 (Native — Apache mod_rewrite)
  - **Test first**: `rtk rg "RewriteRule \^otel" .htaccess`
  - **Verify**: `rtk rg -n "RewriteRule \^otel" .htaccess`

## 5. Address Update

- [x] 5.1 Remove deprecated "(Кирова)" suffix in line 620 of `index.php`
  - **Spec scenario**: Legal details and contact for revocation
  - **Ladder rung**: 4 (Native HTML)
  - **Test first**: `rtk rg "Кирова" index.php`
  - **Verify**: `pwsh -Command "if (Select-String 'Кирова' index.php) { exit 1 } else { exit 0 }"`

## 6. Google Fonts Local Hosting

- [x] 6.1 Download Open Sans and Lora WOFF2 fonts to `/fonts/` and configure `css/fonts.css`
  - **Spec scenario**: Local font asset loading
  - **Ladder rung**: 4 (Native — WOFF2 @font-face)
  - **Test first**: `Test-Path css/fonts.css`
  - **Verify**: `pwsh -Command "if (Test-Path css/fonts.css) { exit 0 } else { exit 1 }"`
- [x] 6.2 Switch font links in `index.php` from Google Fonts to local stylesheet
  - **Spec scenario**: Local font asset loading
  - **Ladder rung**: 4 (Native HTML)
  - **Test first**: `rtk rg "fonts.googleapis.com" index.php`
  - **Verify**: `rtk rg "fonts.css" index.php`
