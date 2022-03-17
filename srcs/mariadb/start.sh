service mysql start
mysql < init.sql
mysqladmin shutdown -uroot -p$_DB_ROOT_PASSWORD
mysqld_safe