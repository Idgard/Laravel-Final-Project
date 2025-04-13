FROM php:8.2-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
  libzip-dev \
  unzip \
  && docker-php-ext-install zip pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy project files
COPY . /var/www/html

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage \
  && chmod -R 775 /var/www/html/storage \
  && chmod -R 775 /var/www/html/bootstrap/cache

# Expose port 80 (or use ${PORT} if needed)
EXPOSE 80