FROM php:7.2-fpm

RUN apt-get update -y \
    && apt-get install -y nginx

COPY nginx-site.conf /etc/nginx/sites-enabled/default
COPY entrypoint.sh /etc/entrypoint.sh

RUN chmod +x /etc/entrypoint.sh

COPY --chown=www-data:www-data . /var/www/html

WORKDIR /var/www/html

EXPOSE 80 443

ENTRYPOINT ["/etc/entrypoint.sh"]
