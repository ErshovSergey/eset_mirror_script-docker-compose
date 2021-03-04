# eset_mirror_script-docker-compose  
ESET NOD32 UPDATE SCRIPT in docker-compose (nginx+php)  

## Проект контейнера для зеркала антивирусных баз для ESET-NOD32
Базы подготавливаются с помощью скрипта из репозитория  
https://github.com/Kingston-kms/eset_mirror_script

## В проекте используются  
- nginx (https://github.com/nginxinc/docker-nginx)
- php https://github.com/docker-library/docs/tree/master/php

## Клонируйте проект
```
git clone https://github.com/ErshovSergey/eset_mirror_script-docker-compose.git
cd eset_mirror_script-docker-compose
```
## Настройки - делать до создания контейнера
### Скопировать настройки контейнеров
```
cp .env-default .env
```
Определить адрес, порт и каталог для хранения антивирусных баз.

### Скопировать файл с паролями
```
cp nginx/htpasswd-default nginx/htpasswd
```
Добавить пароли в файл *nginx/htpasswd*, если необходимо.
По умолчанию есть учетная запись admin/admin
### Настроки скрипта обновления (после изменения необходимо пересобрать проект)  
Файл настроек скрипта обновления находится в *php/nod32ms.conf*.  
Подробнее в https://github.com/Kingston-kms/eset_mirror_script  
### Настроки запуска скрипта обновления  
Файл cron для запуска скрипта обновления находится в *php/cron.php*.  
Если не работает - проверить разрешения на файл.

## Команды
### Ручной запуск скрипта обновления из контейнера **php**  
```
docker exec -i -t <php_container_name> php /eset_mirror_script/update.php
```
### Запуск, остановка/удаление  
Произвести/изменить необходимые настройки и собрать проект
```
docker-compose up --build -d --remove-orphans --force-recreate
```
### Удаление проекта
```
docker-compose down --remove-orphans
```
#### Обновить используемые образы
```
docker pull nginx:latest
docker pull php:7.2-cli
```
После обновления пересобрать образы
