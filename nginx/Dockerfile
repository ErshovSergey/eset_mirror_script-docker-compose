FROM nginx:latest

#разработка
#RUN apt-get update && DEBIAN_FRONTEND=noninteractive && apt-get install -y wget git procps nano telnet

COPY default.conf /etc/nginx/conf.d/default.conf
COPY htpasswd /etc/nginx/.htpasswd

