# payback25

This is a Laravel application using Laravel Sail for local development.

## Essential Laravel Sail Commands

### Starting and Stopping Sail
- Start the sail environment: `./vendor/bin/sail up`
- Stop the sail environment: `./vendor/bin/sail down`
- Start sail in detached mode: `./vendor/bin/sail up -d`

### Running Commands
- Run artisan commands: `./vendor/bin/sail artisan [command]`
- Run composer commands: `./vendor/bin/sail composer [command]`
- Run npm commands: `./vendor/bin/sail npm [command]`
- Run tests: `./vendor/bin/sail test`

### Common Development Tasks
- Run migrations: `./vendor/bin/sail artisan migrate`
- Run seeders: `./vendor/bin/sail artisan db:seed`
- Clear cache: `./vendor/bin/sail artisan cache:clear`
- Generate application key: `./vendor/bin/sail artisan key:generate`

### Accessing Services
- Access MySQL: `./vendor/bin/sail mysql`
- Access Redis: `./vendor/bin/sail redis-cli`
- Access Mailpit: `./vendor/bin/sail mailpit`

### Building and Rebuilding
- Build containers: `./vendor/bin/sail build --no-cache`
- Update containers: `./vendor/bin/sail composer update && ./vendor/bin/sail npm update`

## Project Setup
1. Copy the environment file: `cp .env.example .env`
2. Generate application key: `./vendor/bin/sail artisan key:generate`
3. Install dependencies: `./vendor/bin/sail composer install && ./vendor/bin/sail npm install`
4. Run migrations: `./vendor/bin/sail artisan migrate`
5. Start the application: `./vendor/bin/sail up`