## 1. Cookie Consent Banner (index.php)

- [x] 1.1 Replace dead `navbar navbar-default navbar-fixed-bottom` wrapper and `alert alert-info fade in` block with own `.cookie-bar` block: `position: fixed; bottom: 0`, background `#222` (footer `.bg-dark` style), white text, flex «текст + кнопка "Понятно"», ссылка `#5fc4b6`, mobile media query; CSS — в существующий инлайн `<style>`-блок head. Сохранить `id="cookie_accept"`, класс `.btn` на кнопке и JS cookie `cookies_consent` (30 дней) без правок.
  - **Spec scenario**: First visit banner display / Consent dismissal and persistence (`personal-data-compliance` → Cookie Notice and Consent Banner)
  - **Ladder rung**: 4 (Native — CSS `position: fixed` + flexbox; переиспользует живой `.btn-primary`)
  - **Test first**: `rtk rg -n "cookie-bar" index.php` (RED: класс отсутствует)
  - **Verify**: `pwsh -Command "if ((Select-String 'navbar-fixed-bottom|alert alert-info|fade in' index.php -Quiet)) { exit 1 } elseif (-not ((Select-String 'cookie-bar' index.php -Quiet) -and (Select-String 'position:\s*fixed' index.php -Quiet))) { exit 1 } else { exit 0 }"`

## 2. Privacy Page Dark Document Theme (privacy/index.php)

- [x] 2.1 Set `body` background to `#222` (как футер) and lighten `.footer-note` color to `#95a5a6`; белая карточка-документ с тёмным текстом остаётся без изменений.
  - **Spec scenario**: Navigation to privacy policy page (`personal-data-compliance` → Public Privacy Policy Document, «оформленная в едином дизайне сайта»)
  - **Ladder rung**: 4 (Native CSS — 2 строки в инлайн-блоке)
  - **Test first**: `rtk rg -n "95a5a6" privacy/index.php` (RED: цвет отсутствует)
  - **Verify**: `pwsh -Command "if (-not ((Select-String 'background-color:\s*#222' privacy/index.php -Quiet) -and (Select-String '95a5a6' privacy/index.php -Quiet))) { exit 1 } else { exit 0 }"`

## 3. Remove Duplicate Privacy Button (index.php)

- [x] 3.1 Delete duplicate «Политика конфиденциальности» button after FAQ block (~4 строки); каноничная ссылка остаётся в футере рядом с реквизитами ИП и в cookie-баннере.
  - **Spec scenario**: Navigation to privacy policy page (каноничная ссылка в футере)
  - **Ladder rung**: 1 (YAGNI — удаление дубля)
  - **Test first**: `pwsh -Command "if ((Select-String 'href=./privacy/.' index.php).Count -eq 2) { exit 0 } else { exit 1 }"` (RED: сейчас 3 вхождения)
  - **Verify**: `pwsh -Command "if ((Select-String 'href=./privacy/.' index.php).Count -eq 2) { exit 0 } else { exit 1 }"`
