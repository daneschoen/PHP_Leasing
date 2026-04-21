# Equipment Rental PHP App

## Overview
PHP-based equipment leasing application that connects to a rental API.

## Features
- Equipment listing
- Booking system
- API-based architecture
- Easy to integrate with real rental scripts

## Setup

1. Copy project to your PHP server:
```
htdocs/rental-app
```

2. Start local server:
```
php -S localhost:8000
```

3. Open:
```
http://localhost:8000/index.php
```

## API Endpoints (Mock)
- GET `/api/equipment.php`
- POST `/api/bookings.php`

## Structure
- `/api` - backend endpoints
- `/services` - API client
- `/views` - UI pages
- `/assets` - styles

## Next Steps
- Add authentication
- Connect real rental script (PHPJabbers / Laravel ERP)
- Add payments (Stripe / PayPal)
