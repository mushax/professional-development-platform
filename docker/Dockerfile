# Use the official PHP 8.3 image as a base
FROM php:8.3-fpm

# Set the working directory
WORKDIR /var/www

# Install system dependencies required for Laravel and Node.js
RUN apt-get update && apt-get install -y \
    build-essential \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev \
    libpq-dev \
    libgd-dev \
    # Dependencies for NodeSource repository
    ca-certificates \
    gnupg

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Node.js (LTS version) and npm
RUN mkdir -p /etc/apt/keyrings && \
    curl -fsSL https://deb.nodesource.com/gpgkey/nodesource-repo.gpg.key | gpg --dearmor -o /etc/apt/keyrings/nodesource.gpg
RUN echo "deb [signed-by=/etc/apt/keyrings/nodesource.gpg] https://deb.nodesource.com/node_20.x nodistro main" | tee /etc/apt/sources.list.d/nodesource.list
RUN apt-get update && apt-get install -y nodejs

# Create a non-root user to run the application
RUN useradd -ms /bin/bash -u 1000 www

# Switch to the new user
USER www

# Expose port for Vite dev server
EXPOSE 5173

# The main command to run when the container starts
CMD ["php-fpm"]
