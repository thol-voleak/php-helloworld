FROM php:7.0-apache
MAINTAINER Thol-Voleak <thol.voleak@gmail.com>
ENV TZ=Asia/Phnom_Penh
LABEL release-date="@timestamp@"
RUN ls /etc/apache2
EXPOSE 80
COPY . /var/www/html
