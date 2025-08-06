# استخدام صورة PHP 8.3 الرسمية كأساس، مع FPM (FastCGI Process Manager)
FROM php:8.3-fpm

# تعيين مجلد العمل الافتراضي داخل الحاوية
WORKDIR /var/www

# تثبيت الاعتماديات الأساسية التي يحتاجها النظام ومكتبات PHP
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    # إضافة مكتبات ضرورية لقاعدة البيانات
    libpq-dev \
    # إضافة مكتبات ضرورية للتعامل مع الصور (GD)
    libgd-dev

# تنظيف الكاش بعد التثبيت لتقليل حجم الصورة
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# تثبيت إضافات PHP الضرورية لتشغيل Laravel
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# تثبيت Composer (مدير الحزم الخاص بـ PHP) على مستوى النظام
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# إنشاء مستخدم جديد باسم 'sail' (يمكنك استخدام أي اسم) لتجنب تشغيل الأوامر بصلاحيات root
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# تغيير ملكية مجلد العمل للمستخدم الجديد
RUN chown -R www:www /var/www

# تبديل المستخدم إلى المستخدم الجديد
USER www

# كشف المنفذ 8000 الذي سيستخدمه خادم Laravel Artisan
EXPOSE 8000

# الأمر الافتراضي الذي سيتم تشغيله عند بدء تشغيل الحاوية
# في هذه المرحلة، سنبقيه بسيطًا. سيقوم Laravel Sail لاحقًا بتجاوز هذا الأمر.
CMD ["php-fpm"]
