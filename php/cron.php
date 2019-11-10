# permission must be
# -rw------- 1 root 295 Nov 0 22:41 cron.php

SHELL=/bin/sh
PATH=/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin

14 */6 * * * /usr/local/bin/php /eset_mirror_script/update.php
@reboot /usr/local/bin/php /eset_mirror_script/update.php

#* * * * * /usr/local/bin/php /eset_mirror_script/update.php
#* * * * * echo 111 >> /1.txt
