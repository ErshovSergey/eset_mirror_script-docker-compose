# eset_mirror_script-docker-compose
ESET NOD32 UPDATE SCRIPT in docker-compose (nginx+php)

Проект для зеркала антивирусных баз для ESET-NOD32
Базы подготавливаются с помощью скрипта
https://github.com/Kingston-kms/eset_mirror_script

В docker используется
- nginx (https://github.com/nginxinc/docker-nginx)
- php https://github.com/docker-library/docs/tree/master/php

Ручной запуск скрипта обновления из контейнера php
php /eset_mirror_script/update.php

