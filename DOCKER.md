# Docker Setup Guide

This repository includes Docker configuration for PHP 8.3 with all necessary dependencies.

## Quick Start

### 1. Build the Docker image

```bash
docker-compose up -d --build
```

This will:
- Build a PHP 8.3-FPM Alpine image
- Install system dependencies (git, curl, zip, etc.)
- Install PHP extensions (pdo_mysql, mbstring, exif, pcntl, bcmath, gd)
- Install Composer
- Set up the working directory

### 2. Install PHP dependencies

```bash
docker-compose exec app composer install
```

### 3. Run tests

```bash
docker-compose exec app composer test
```

Or use PHPUnit directly:

```bash
docker-compose exec app vendor/bin/phpunit
```

## Docker Commands

### Start containers
```bash
docker-compose up -d
```

### Stop containers
```bash
docker-compose down
```

### View logs
```bash
docker-compose logs -f app
```

### Execute commands in container
```bash
docker-compose exec app bash
```

### Rebuild containers
```bash
docker-compose up -d --build
```

## Running Without Docker

If you prefer to run the project without Docker, ensure you have:

- PHP 8.3 or higher
- Composer

Then run:

```bash
composer install
composer test
```

## Troubleshooting

### Port conflicts
If port 9000 is already in use, modify `docker-compose.yml`:

```yaml
services:
  app:
    ports:
      - "9001:9000"  # Change 9001 to any available port
```

### Permission issues
If you encounter permission issues:

```bash
docker-compose exec app chown -R www-data:www-data /var/www/html
```

### Composer issues
If composer install fails inside Docker:

```bash
# Install dependencies locally first
composer install

# Then rebuild the container
docker-compose up -d --build
```
