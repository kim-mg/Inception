FROM alpine:3.15

# VOLUME /sys/fs/cgroup

# apk add openrc && \
	# mkdir -p /run/openrc && touch /run/openrc/softlevel && \
	# rc-status && \

RUN apk update && \
	wget -O /usr/bin/dumb-init https://github.com/Yelp/dumb-init/releases/download/v1.2.5/dumb-init_1.2.5_x86_64 && \
	chmod +x /usr/bin/dumb-init && \
	apk add nginx openssl && \
	mkdir -p /etc/nginx/tls /var/run/nginx && \
	openssl req -new -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/nginx/tls/myunkim.42.fr.crt -keyout /etc/nginx/tls/myunkim.42.fr.key -subj "/C=KR/ST=Seoul/L=Songpa-gu/O=42/OU=42Seoul/CN=myunkim.42.fr" && \
	ln -sf /dev/stdout /var/log/nginx/access.log && \
	ln -sf /dev/stderr /var/log/nginx/error.log && \
	rm -rf /det/nginx/http.d/default.conf
	# rm -rf /det/nginx/conf.d/default.conf

COPY conf/nginx.conf /tmp/nginx.conf
COPY tools/script.sh /tmp/script.sh

RUN chmod +x /tmp/script.sh

EXPOSE 443

ENTRYPOINT ["/usr/bin/dumb-init", "--"]

CMD ["sh", "-c", "/tmp/script.sh"]