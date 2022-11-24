#!/bin/sh

if [ ! -f "/etc/nginx/http.d/default.conf" ]; then
	cp /tmp/nginx.conf /etc/nginx/http.d/default.conf
fi

nginx -g 'daemon off;'