FROM ubuntu:16.04


# # Install openjdk-8-jdk
RUN apt-get update && \
	apt-get install -y openjdk-8-jdk 
#&& \
# 	apt-get install -y ant && \
# 	apt-get clean && \
# 	rm -rf /var/lib/apt/lists/* && \
# 	rm -rf /var/cache/oracle-jdk8-installer;
	
# # Fix certificate issues, found as of 
# # https://bugs.launchpad.net/ubuntu/+source/ca-certificates-java/+bug/983302
# RUN apt-get update && \
# 	apt-get install -y ca-certificates-java && \
# 	apt-get clean && \
# 	update-ca-certificates -f && \
# 	rm -rf /var/lib/apt/lists/* && \
# 	rm -rf /var/cache/oracle-jdk8-installer;

# # Setup JAVA_HOME, this is useful for docker commandline
# ENV JAVA_HOME /usr/lib/jvm/java-8-openjdk-amd64/


RUN apt-get -y install nodejs


# Install apache, PHP
RUN apt-get update

RUN apt-get -qq -y install curl
RUN apt-get -y install apache2
RUN apt-get -y install php7.0
RUN apt-get -y install libapache2-mod-php7.0
# RUN apt-get -y install php7.0-mysql
RUN apt-get -y install php7.0-pgsql
# RUN apt-get -y install php7.0-gd
# RUN apt-get -y install php-pear
# RUN apt-get -y install php7.0-curl

# Enable apache mods.
# RUN a2enmod php7.0
# RUN a2enmod rewrite

# Update the PHP.ini file, enable <? ?> tags and quieten logging.
# RUN sed -i "s/short_open_tag = Off/short_open_tag = On/" /etc/php/7.0/apache2/php.ini
# RUN sed -i "s/error_reporting = .*$/error_reporting = E_ERROR | E_WARNING | E_PARSE/" /etc/php/7.0/apache2/php.ini

# Manually set up the apache environment variables
# ENV APACHE_RUN_USER www-data
# ENV APACHE_RUN_GROUP www-data
# ENV APACHE_LOG_DIR /var/log/apache2
# ENV APACHE_LOCK_DIR /var/lock/apache2
# ENV APACHE_PID_FILE /var/run/apache2.pid



# Copy this repo into place.
RUN rm -f  /var/www/html/index.html
COPY . /var/www/html
# COPY . /var/www/site

# Update the default apache site with the config we created.
# ADD apache-config.conf /etc/apache2/sites-enabled/000-default.conf

# Expose apache.
EXPOSE 80

# By default start up apache in the foreground, override with /bin/bash for interative.
# CMD ["apache2ctl", "-D", "FOREGROUND"]
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
# CMD ["/bin/bash", "-D", "FOREGROUND"]