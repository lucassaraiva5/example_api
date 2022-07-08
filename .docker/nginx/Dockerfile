FROM nginx:1.21-alpine

COPY .docker/nginx/nginx.conf  /etc/nginx/
COPY .docker/nginx/templates /etc/nginx/templates/
RUN echo "upstream php-upstream { server php:9000; }" > /etc/nginx/conf.d/upstream.conf

COPY . /var/www/symfony
RUN rm /var/www/symfony/.env.local
RUN rm /var/www/symfony/.env.test.local

EXPOSE 80
EXPOSE 443