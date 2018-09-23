FROM debian
RUN apt update -y && apt upgrade -y
RUN apt install libapache2-mod-php7.0 php7.0-cli php7.0-gd php7.0-intl php7.0-json php7.0-mbstring php7.0-zip php7.0-ldap php7.0-curl php7.0-common php7.0-mysql php7.0-readline php7.0-xml php7.0-mcrypt -y
RUN a2enmod rewrite
RUN sed 's/None/All/' -i /etc/apache2/apache2.conf 
ADD 99-eramba.ini /etc/php/7.0/apache2/conf.d/
#ADD https://s3-eu-west-1.amazonaws.com/downloadseramba/CommunityTGZ/eramba_community_2018.tgz /root
COPY eramba_community_2018.tgz /root
RUN tar -xzf /root/eramba_community_2018.tgz -C /var/www/ ; rm -rf /var/www/html ;  mv /var/www/eramba_community /var/www/html ; chown www-data: -R /var/www/html
COPY database.php /var/www/html/app/Config/
COPY init.php /root/
CMD apachectl -D FOREGROUND

