FROM debian:buster

RUN apt update -y && apt upgrade -y

RUN apt-get -y install mariadb-server procps
COPY init.sql .
COPY start.sh .
COPY 50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
# RUN rm -rf /var/lib/mysql
# RUN mkdir var/lib/mysql
CMD ["bash", "start.sh"]



#RUN service mysql start && 
#RUN service mysql start && sleep 2 && mysql --user=root --password=fibo < /init.sql 
#RUN service mysql start && sleep 2 && mysql --user=root --password=fibo < / // back up sql file
#RUN service mysql start && sleep 2 && mysql --user=root --password=fibo < /fixroot.sql && service mysql restart
##RUN service mysql start &&  mysqld --init-file='/wpdb_create.sql'
#CMD ["mysqld"]
#CMD ["sleep", "infinity"]