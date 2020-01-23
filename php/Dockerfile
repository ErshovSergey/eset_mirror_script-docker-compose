FROM php:7.2-cli

RUN  \
    apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends $buildDeps $runtimeDeps cron git \
    && rm -r /var/lib/apt/lists/*


RUN cd / && git clone https://github.com/Kingston-kms/eset_mirror_script.git
COPY nod32ms.conf /eset_mirror_script/nod32ms.conf
COPY cron.php /var/spool/cron/crontabs/root
RUN chmod 600 /var/spool/cron/crontabs/root
COPY favicon.ico /favicon.ico
ENTRYPOINT cron -f

#разработка
#RUN apt-get update && DEBIAN_FRONTEND=noninteractive && apt-get install -y --no-install-recommends wget git procps nano telnet
