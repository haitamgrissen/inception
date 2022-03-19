FROM debian:buster

# update and upgrade
RUN apt-get -y update && apt-get -y upgrade
RUN apt-get -y install php php-bcmath php-curl php-imagick php-intl php-json php-mbstring php-mysql php-xml php-zip php-fpm
COPY www.conf /etc/php/7.3/fpm/pool.d/www.conf 
RUN mkdir /var/run/php


CMD ["php-fpm7.3", "-F", "-R"]
#CMD ["sleep", "infinity"]