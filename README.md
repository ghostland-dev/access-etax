# Energy Tax Portal

Laravel portal that helps companies check their eligibility and prepare energy tax refund requests (CSPE / TICGN).

## Features

- Company, site and contact management
- Electricity and gas contracts, meters and invoices
- CSPE / TICGN eligibility checks and refund calculation
- Generated refund files and alerts

## Tech Stack

- Laravel 9
- PHP 8
- MySQL
- Blade, Vite

## Getting Started

```bash
git clone https://github.com/ghostland-dev/energy-tax-portal.git
cd energy-tax-portal
composer install
npm install
cp .env.example .env && php artisan key:generate
php artisan migrate
php artisan serve
```

## Author

**Ismail.M**, Software Engineer & DevOps

- GitHub: [@ghostland-dev](https://github.com/ghostland-dev)
- Website: [ismail-mouyahada.com](https://www.ismail-mouyahada.com)
