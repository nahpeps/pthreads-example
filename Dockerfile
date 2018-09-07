FROM php:7.2-zts
RUN apt-get update && apt-get -y install git 
RUN git clone https://github.com/krakjoe/pthreads -b master /tmp/pthreads
RUN docker-php-ext-configure /tmp/pthreads --enable-pthreads
RUN docker-php-ext-install /tmp/pthreads
RUN rm -rf /tmp/pthreads
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
RUN php composer.phar install
CMD ["/bin/bash"]
