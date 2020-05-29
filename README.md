# VKpost
Скрипт для автоматического ведения группы ВК

- Установка: 

Распаковать на хостинг/сервер 

1. В файле `config/config.php` - прописать данные БД
2. Импортируйте базу данных из файла `config/database.sql`
3. В файлах `Controllers/GetPost.php` и `Controllers/wallPost.php` вставляете ваш токен ВК (Где его взять будет ниже)
4. В для того чтобы точно всё работало выполните в консоли команду `composer update`
5. Установка завершена!


===
Получаем токен
1) Создаём Standalone-приложение https://vk.com/apps?act=manage
2) Заходим в настройки, копируем ID приложения
3) Вставляем ID приложения в эту ссылку (в параметр clinet_id) и переходим по ней —
https://oauth.vk.com/authorize?client_id=ID_ПРИЛОЖЕНИЯ&display=page&redirect_uri=https://oauth.vk.com/blank.html&scope=wall,docs,notes,pages,video,audio,photos,offline&response_type=token&v=5.37 (Возможно потребуется изменить значение последнего параметра на актуальную версию API, но тогда мб придётся модифицировать код под новую версию. У меня всё работает на данной версии, однако когда-нибудь в будущем ВК может отключить её, т.к. она устареет)
Нажимаем Разрешить.
4) Получаем бессрочный токен в параметре access_token https://oauth.vk.com/blank.html#access_token=BLABLABLA&expires_in=0&user_id=23799993
