FROM webdevops/apache:alpine
MAINTAINER Samuel Goncalves

RUN ln -sf /dev/stdout /var/log/apache2/access.log && ln -sf /dev/stderr /var/log/apache2/error.log