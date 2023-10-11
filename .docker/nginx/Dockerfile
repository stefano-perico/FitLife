FROM nginx:stable-alpine

RUN apk update; apk upgrade; apk upgrade --update-cache --available \
    && apk add openssl libcap

WORKDIR /var/www/html

RUN mkdir -p /etc/nginx/ssl/
RUN openssl req -x509 -sha256 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/domain.key -out /etc/nginx/ssl/domain.crt -subj '/CN=localhost'

ADD default.conf /etc/nginx/conf.d/default.conf