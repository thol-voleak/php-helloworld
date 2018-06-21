FROM registry.access.redhat.com/rhscl/php-70-rhel7
MAINTAINER Thol-Voleak <thol.voleak@gmail.com>
ENV TZ=Asia/Phnom_Penh
LABEL release-date="@timestamp@"
EXPOSE 80
COPY . /var/www/html
