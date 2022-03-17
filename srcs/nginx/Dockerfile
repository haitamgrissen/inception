FROM debian:buster
RUN apt update -y
RUN apt upgrade -y

RUN apt install nginx -y
RUN apt install openssl
RUN mkdir /etc/nginx/ssl
# user mkcert instead
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/nginx.key -out /etc/nginx/ssl/nginx.crt -subj "/C=MA/ST=hellohello /L=loser /O=tema/OU=hadik/CN=localhost/emailAddress=admin@localhost.com"
COPY default /etc/nginx/sites-available/ 
EXPOSE 443
CMD ["nginx","-g","daemon off;"]