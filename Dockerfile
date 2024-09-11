# Use the official PHP image from Docker Hub
FROM php:8.4.0beta4-zts-alpine

# Copy the PHP files to the container
COPY . /var/www/html/

# Run the PHP script
CMD ["php", "/var/www/html/index.php"]
