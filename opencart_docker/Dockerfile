FROM php:8.1-apache

# 安装依赖
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev libzip-dev zip unzip \
    libxml2-dev libonig-dev libcurl4-openssl-dev zlib1g-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install mysqli gd zip

# 拷贝 php.ini
COPY php.ini /usr/local/etc/php/conf.d/custom.ini

# 拷贝 OpenCart 上传目录到 Apache 默认网站目录
COPY upload/ /var/www/html/

# 给 Apache 用户权限
RUN chown -R www-data:www-data /var/www/html/

# 启用 Apache rewrite 模块
RUN a2enmod rewrite

# 启动 Apache 服务
CMD ["apache2-foreground"]
