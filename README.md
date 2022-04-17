# PC HUB Test
Cloned from https://github.com/AntekSoeharto/PCHub.git

Added test module with Playwright using Node v16.13

## Setup PHP

    composer install
    php artisan key:generate
    php artisan migrate
    php artisan db:seed
    
## Run PHP
    
    php artisan serve

## Setup Test

    npm install
    
## Run Test
    
    npx playwright test
    
## Run Specific Test
    
    npx playwright test tests/e2e/[test_file]
    
