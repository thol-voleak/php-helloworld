FROM php:7.0-apache
MAINTAINER Thol-Voleak <thol.voleak@gmail.com>
ENV TZ=Asia/Phnom_Penh
LABEL release-date="@timestamp@"
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
EXPOSE 80
COPY . /var/www/html
