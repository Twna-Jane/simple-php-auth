# Simple PHP Website with Authentication
## Introduction
This project contains a simple website made for testing purposes. All it can do is register and authenticate users.

## Setup and Installation
### Installation Requirements
1. [PHP](https://www.php.net/downloads.php)
2. [XAMPP](https://www.apachefriends.org/download.html)
3. An IDE or Code Editor that supports PHP

### Setup Instructions
- Clone this repository:
```
https://github.com/Fidelisaboke/simple-php-auth.git
cd simple-php-auth
```

- Copy `config-example.php` to `config.php`:
```
cp config-example.php config.php
```

- Alternatively, create a new file named `config.php` and copy the code to that file. Update the database configuration accordingly.

## Basic Usage
Start the PHP Server:
```
php -S localhost:8000
```

**Note:** Please ensure that Apache and MariaDB (MySQL) have been configured and are running on XAMPP before starting the PHP server.

## Acknowledgements
I would like to thank the creators of the following templates:
1. [Simple Landing Page by salnetx](https://www.creative-tim.com/twcomponents/component/simple-landing-page)
2. [Tailwind CSS Login Page by 123ApplePie](https://www.creative-tim.com/twcomponents/component/login-page-20)

Those templates made it easier to create the simple website by providing the frontend.
