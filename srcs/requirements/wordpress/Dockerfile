FROM alpine:3.15

RUN apk update && \
	wget -O /usr/bin/dumb-init https://github.com/Yelp/dumb-init/releases/download/v1.2.5/dumb-init_1.2.5_x86_64 && \
	chmod +x /usr/bin/dumb-init && \
	apk add curl php7-phar mariadb-client php7 php7-json php7-curl php7-iconv php7-mysqli php7-fpm && \
	mkdir -p /var/www/wordpress && \
	curl -s -L https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar --output /usr/bin/wp && \
	chmod +x /usr/bin/wp && \
	wp core download --version=6.1.1 --path=/var/www/wordpress

COPY conf/wp-config.php /tmp/wp-config.php
COPY tools/script.sh /tmp/script.sh

RUN chmod +x /tmp/script.sh

ENTRYPOINT ["/usr/bin/dumb-init", "--"]

CMD ["sh", "-c", "/tmp/script.sh"]