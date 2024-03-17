# BookPriceTracker

BookPriceTracker is a Laravel-based web application that helps users track book prices and receive alerts when prices change.

## Features

- User authentication: Allows users to sign up, log in, and manage their accounts.
- Book search: Enables users to search for books by title, author, or ISBN.
- Price tracking: Tracks prices of books across multiple online bookstores.
- Price alerts: Allows users to set price alerts for specific books and receive notifications when prices drop.
- Community contributions: Users can contribute subtitles and translations for video content.

## Installation
 - Clone the repository to your local machine.
 - Copy .env.example to .env and configure your environment variables, including database settings.
 - Generate an application key:
php artisan key:generate
 - Run the database migrations and seeders:
php artisan migrate --seed
 - To generate the sitemap, navigate to the following URL after starting your server:
yoursite.com/api/createSitemap
 - Create the file views/layouts/analytics.blade.php and add your analytics tracking code or any other necessary setup.

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request with your changes.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
