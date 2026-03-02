# Clothing Store Website

A full-stack web application of an online clothing store built with PHP and MySQL.

This project was developed as a graduation (diploma) project in college.

## Tech Stack
- PHP
- MySQL
- HTML
- CSS
- JavaScript (jQuery)

## Features
- User registration and authentication (session-based)
- Product categories (Men, Women, Kids)
- Shopping cart functionality
- Order processing
- Basic responsive layout (desktop-first)
- Database integration using PDO

## Project Structure
- `index.php` — main page
- `men.php`, `woman.php`, `kid.php` — category pages
- `korzina.php` — shopping cart
- `process_order.php` — order processing logic
- `db.php`, `MySqlPDO.php` — database connection
- `style/` — CSS files
- `img/` — images
- `abibas.sql` — database dump

## How to Run Locally
1. Place the project folder inside your web server directory (XAMPP / Laragon / OpenServer).
2. Create a new MySQL database.
3. Import `abibas.sql` into the database.
