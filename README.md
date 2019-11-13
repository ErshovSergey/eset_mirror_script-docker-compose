# eset_mirror_script-docker-compose  
ESET NOD32 UPDATE SCRIPT in docker-compose (nginx+php)  

## Проект для зеркала антивирусных баз для ESET-NOD32
Базы подготавливаются с помощью скрипта из репозитория  
https://github.com/Kingston-kms/eset_mirror_script

## В проекте используются  
- nginx (https://github.com/nginxinc/docker-nginx)
- php https://github.com/docker-library/docs/tree/master/php

## Команды
Ручной запуск скрипта обновления из контейнера **php**  
```
php /eset_mirror_script/update.php
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
Добавить пароли, если необходимо.
По умолчанию есть учетная запись admin/admin

### Настроки скрипта обновления  
Файл настроек скрипта обновления находится в *php/nod32ms.conf*.  
Подробнее в https://github.com/Kingston-kms/eset_mirror_script  

### Настроки запуска скрипта обновления  
Файл cron для запуска скрипта обновления находится в *php/cron.php*.  

## Запуск, остановка, удаление  
### Запуск проекта  
```
git clone https://github.com/ErshovSergey/eset_mirror_script-docker-compose.git
cd eset_mirror_script-docker-compose
```
Произвести/изменить необходимые настройки и собрать проект
```
docker-compose up --build -d --remove-orphans --force-recreate
```
### Удаление проекта
```
docker-compose down --remove-orphans
```
