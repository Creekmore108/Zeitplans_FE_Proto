set -e

echo "Deploying appliction ..."

(php artisan down --message 'The app is being updated. Please try again in a minute.') || true

git pull origin master

php artisan up

echo "Application deployed!"