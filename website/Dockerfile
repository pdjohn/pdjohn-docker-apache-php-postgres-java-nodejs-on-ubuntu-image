FROM ubuntu:18.04
ARG DEBIAN_FRONTEND=noninteractive

# # Install openjdk-8-jdk
RUN apt-get update 

# Install apache, PHP
# RUN apt-get -y install apache2 curl php7.2 libapache2-mod-php7.2


#php not installed, no problem on apache
RUN apt-get -y install apache2 
RUN apt-get -y install curl  
RUN apt-get -y install php7.2 
RUN apt-get -y install libapache2-mod-php7.2

# RUN apt-get -y install php

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN rm -f  /var/www/html/index.html
COPY . /var/www/html/
RUN chmod 777 /var/www

ADD stopapache.sh /
RUN chmod +x /stopapache.sh





# RUN apt-get update && apt-get install -y gnupg2 && apt-get install -y wget
# Run wget --quiet -O - https://www.postgresql.org/media/keys/ACCC4CF8.asc | apt-key add -
# RUN echo "deb http://apt.postgresql.org/pub/repos/apt/ bionic-pgdg main" > /etc/apt/sources.list.d/pgdg.list
# RUN apt-get update && apt-get install -y postgresql-12 postgresql-client-12

# USER postgres
# RUN /etc/init.d/postgresql start &&\
#     psql --command "CREATE USER docker WITH SUPERUSER PASSWORD 'docker';" &&\
#     createdb -O docker docker

# # RUN echo "host all  all    0.0.0.0/0  md5" >> /etc/postgresql/12/main/pg_hba.conf

# # RUN echo "listen_addresses='*'" >> /etc/postgresql/12/main/postgresql.conf

# VOLUME  ["/etc/postgresql", "/var/log/postgresql", "/var/lib/postgresql"]






EXPOSE 80 

ENTRYPOINT ["/stopapache.sh"]
# ENTRYPOINT ["tail", "-f", "/dev/null"]