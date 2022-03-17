service mysql start


#mysql < init.sql

# mysql 
# FLUSH PRIVILEGES ;
# GRANT ALL ON *.* TO 'root'@'%' identified by '$_DB_ROOT_PASSWORD' WITH GRANT OPTION ;
# GRANT ALL ON *.* TO 'root' identified by '$_DB_ROOT_PASSWORD' WITH GRANT OPTION ;
# SET PASSWORD FOR 'root'=PASSWORD('$_DB_ROOT_PASSWORD') ;
# DROP DATABASE IF EXISTS test ;
# FLUSH PRIVILEGES ;
# CREATE DATABASE IF NOT EXISTS $_DB_NAME;
# GRANT ALL ON `$_DB_NAME`.* to '$_DB_USER'@'%' IDENTIFIED BY '$_DB_PASSWORD';
mysql -e "CREATE DATABASE IF NOT EXISTS \`${_DB_NAME}\`"
mysql -e "CREATE USER IF NOT EXISTS \`${_DB_USER}\`@'%' IDENTIFIED BY '${_DB_PASSWORD}'"
# mysql -e "GRANT ALL PRIVILEGES ON *.* TO \`${WP_ADMIN}\`@'%' IDENTIFIED BY '${WP_ADMIN_PASSWORD}'"
mysql -e "GRANT ALL PRIVILEGES ON \`${_DB_NAME}\`.* TO \`${_DB_USER}\`@'%'"
mysql -e "FLUSH PRIVILEGES"
# mysql -u username -p database_name < file.sql

mysqladmin shutdown -uroot -p$_DB_ROOT_PASSWORD


#sleep infinity
mysqld_safe