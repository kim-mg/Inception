CREATE DATABASE wordpress_db;

CREATE USER 'myunkim'@'%' IDENTIFIED BY 'password';

GRANT ALL ON wordpress_db.* TO 'myunkim'@'%';

FLUSH PRIVILEGES;