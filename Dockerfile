FROM php:7.1-apache
MAINTAINER Thol-Voleak <thol.voleak@gmail.com>
ENV TZ=Asia/Phnom_Penh
WORKDIR /usr/php
LABEL release-date="@timestamp@"
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
EXPOSE 8080
RUN chmod -R 775 . 
COPY . .
COPY php.ini /usr/local/etc/php/
