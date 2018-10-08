FROM abobby/php-apache
MAINTAINER Subhasish Ghosh, subhasishghosh@gmail.com

VOLUME ["/var/www/html"]
WORKDIR /var/www/html

EXPOSE 8080:80

# Copy this repo into place.
ADD . /var/www/html

# Update the default apache site with the config we created.
ADD config/vhost.conf /etc/apache2/sites-enabled/000-default.conf

# By default start up apache in the foreground, override with /bin/bash for interative.
CMD /usr/sbin/apache2ctl -D FOREGROUND
