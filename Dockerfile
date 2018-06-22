FROM php:7.0-apache
MAINTAINER Thol-Voleak <thol.voleak@gmail.com>
ENV TZ=Asia/Phnom_Penh
LABEL release-date="@timestamp@"
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN chmod 777 /var/log/apache2/error.log
USER 1001
EXPOSE 80
COPY . /var/www/html
