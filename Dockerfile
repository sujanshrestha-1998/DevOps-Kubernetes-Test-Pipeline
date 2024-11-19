# Use the PHP CLI image
FROM php:8.1-cli

# Install MySQLi extension
RUN docker-php-ext-install mysqli

# Set the working directory
WORKDIR /app

# Copy the PHP files from the host to the container
COPY ./src/index.php /app/

# Expose port 4900
EXPOSE 4900

# Start the PHP built-in server on port 4900
CMD ["php", "-S", "0.0.0.0:4900", "-t", "/app"]
