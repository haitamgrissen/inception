FROM debian:buster

RUN apt update -y && apt upgrade -y

RUN apt-get -y install mariadb-server procps
COPY init.sql .
COPY start.sh .
COPY 50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
# RUN rm -rf /var/lib/mysql
# RUN mkdir var/lib/mysql
CMD ["bash", "start.sh"]
#CMD ["sleep", "infinity"]