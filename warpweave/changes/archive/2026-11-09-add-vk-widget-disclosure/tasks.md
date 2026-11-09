## 1. VK Disclosure Section (privacy/index.php)

- [x] 1.1 Вставить новую секцию «8. Виджет комментариев ВКонтакте» между секцией 7 («Использование файлов Cookie...») и текущей секцией 8 («Права субъектов»): цель обработки (отображение отзывов посетителей), владелец сервиса — ООО «ВК», домен vk.com; перечень данных, автоматически передаваемых при загрузке и использовании виджета (IP-адрес, файлы cookie, данные браузера и устройства); указание, что дальнейшая обработка осуществляется оператором сервиса ВКонтакте по его собственной политике конфиденциальности.
  - **Spec scenario**: VK widget section present in policy; Transferred data is enumerated
  - **Ladder rung**: 2 (Reuse — существующая структура секций и формат «N.M.» privacy/index.php)
  - **Test first**: `rtk rg -n "Виджет комментариев ВКонтакте" privacy/index.php` (RED: упоминаний нет)
  - **Verify**: `pwsh -Command "if (-not ((Select-String 'Виджет комментариев ВКонтакте' privacy/index.php -Quiet) -and (Select-String 'vk\.com' privacy/index.php -Quiet) -and (Select-String 'IP-адрес' privacy/index.php -Quiet))) { exit 1 } else { exit 0 }"`

- [x] 1.2 Перенумеровать последующие секции и их пункты: 8→9 «Права субъектов» (8.1→9.1), 9→10 «Порядок отзыва согласия» (9.1–9.2→10.1–10.2), 10→11 «Заключительные положения» (10.1–10.2→11.1–11.2).
  - **Spec scenario**: VK widget section present in policy (сквозная нумерация секций документа)
  - **Ladder rung**: 7 (Minimum — правка номеров в заголовках и текстах пунктов)
  - **Test first**: `pwsh -Command "if (Select-String '<h3>8\. Права субъектов' privacy/index.php -Quiet) { exit 0 } else { exit 1 }"` (RED: сейчас секция ещё имеет номер 8)
  - **Verify**: `pwsh -Command "if ((Select-String '<h3>9\. Права субъектов' privacy/index.php -Quiet) -and (Select-String '<h3>10\. Порядок отзыва' privacy/index.php -Quiet) -and (Select-String '<h3>11\. Заключительные положения' privacy/index.php -Quiet) -and (-not (Select-String '<h3>8\. Права|<h3>9\. Порядок|<h3>10\. Заключительные' privacy/index.php -Quiet))) { exit 0 } else { exit 1 }"`

- [x] 1.3 Дополнить перечень п. 3.2: в пункт о технических данных («Технические данные: файлы cookie...») добавить данные, автоматически передаваемые виджетом ВКонтакте (IP-адрес, cookie, данные браузера/устройства).
  - **Spec scenario**: Technical data list consistency
  - **Ladder rung**: 7 (Minimum — одно дополнение в существующий <li>)
  - **Test first**: `pwsh -Command "if (-not (Select-String 'Технические данные.*виджетом ВКонтакте' privacy/index.php -Quiet)) { exit 0 } else { exit 1 }"` (RED: пункт 3.2 ещё не дополнен)
  - **Verify**: `pwsh -Command "if (-not (Select-String 'Технические данные.*виджетом ВКонтакте' privacy/index.php -Quiet)) { exit 1 } else { exit 0 }"`
