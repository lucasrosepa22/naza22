FROM php:8.2-cli

WORKDIR /var/www

# Instalar extensiones necesarias
RUN apt-get update && apt-get install -y unzip git \
    && docker-php-ext-install pdo

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiar archivos del proyecto
COPY . .

# Instalar dependencias
RUN composer install --no-dev --optimize-autoloader

# Generar clave automáticamente
RUN php artisan key:generate

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000
