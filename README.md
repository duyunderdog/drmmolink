# link-web
# drmmolink

# PHP Heroku Application

## Deployment Instructions

1. Install Heroku CLI
2. Login to Heroku:
   ```bash
   heroku login
   ```
3. Create a new Heroku app:
   ```bash
   heroku create your-app-name
   ```
4. Deploy to Heroku:
   ```bash
   git push heroku main
   ```

## Local Development

1. Install dependencies:
   ```bash
   composer install
   ```
2. Run locally:
   ```bash
   php -S localhost:8000 -t public
   ```
