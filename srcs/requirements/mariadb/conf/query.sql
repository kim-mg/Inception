SET PASSWORD FOR '$MARIADB_ADMIN_USER'@'$HOST_NAME' = PASSWORD('$MARIADB_ADMIN_PWD');

CREATE DATABASE IF NOT EXISTS $MARIADB_DB;

CREATE USER '$MARIADB_USER'@'%' IDENTIFIED BY '$MARIADB_PWD';

GRANT ALL PRIVILEGES ON $MARIADB_DB.* TO '$MARIADB_USER'@'%' WITH GRANT OPTION;

FLUSH PRIVILEGES;