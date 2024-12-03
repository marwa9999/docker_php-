# Utiliser l'image officielle PHP avec Apache
FROM php:8.2-apache

# Installer les extensions PHP nécessaires
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Activer les modules Apache nécessaires (mod_rewrite pour les URL)
RUN a2enmod rewrite

# Copier le code de l'application dans le répertoire par défaut du serveur Apache
COPY app/ /var/www/html/

# Copier la configuration Apache personnalisée
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Copier le fichier PHP ini personnalisé
COPY php.ini /usr/local/etc/php/

# Exposer le port 80
EXPOSE 80