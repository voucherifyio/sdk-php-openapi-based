# Stage 1: Build stage
FROM composer:2.6.6 AS composer

WORKDIR /app

VOLUME /app/data

COPY . .

RUN composer install


# Stage 2: Final image
FROM php:8.3

WORKDIR /app

COPY --from=composer /app /app

VOLUME /app/data

CMD ["php", "-S", "0.0.0.0:5050", "./__tests__/index.php"]
