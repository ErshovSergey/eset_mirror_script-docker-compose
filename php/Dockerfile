FROM php:7.2-cli

# Install PHP extensions and PECL modules.
RUN buildDeps=" \
#        default-libmysqlclient-dev \
#        libbz2-dev \
#        libmemcached-dev \
#        libsasl2-dev \
#    " \
#    runtimeDeps=" \
#        curl \
#        openssl \
    " \
    && apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends $buildDeps $runtimeDeps cron git \
    && rm -r /var/lib/apt/lists/*
#--no-install-recommends


RUN cd / && git clone https://github.com/Kingston-kms/eset_mirror_script.git
COPY nod32ms.conf /eset_mirror_script/nod32ms.conf
COPY cron.php /var/spool/cron/crontabs/root

ENTRYPOINT cron -f

#разработка
RUN apt-get update && DEBIAN_FRONTEND=noninteractive && apt-get install -y --no-install-recommends wget git procps nano telnet
