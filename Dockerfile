FROM httpd:2.4
MAINTAINER Thol-Voleak <thol.voleak@gmail.com>
ENV TZ=Asia/Phnom_Penh
LABEL release-date="@timestamp@"
EXPOSE 80
COPY . /var/www/html
