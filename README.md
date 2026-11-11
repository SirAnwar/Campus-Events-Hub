# Campus Events Hub

A university club events website built as a team project for IT361 (Web Programming). Students can browse upcoming events, view event details, and register through a form that saves to a MySQL database.

## My role
I was responsible for the **CSS**: the color palette, page layout with Flexbox, responsive design with media queries, and the styling of forms, buttons and the registrations table.

## Features
- Events listing and individual event detail pages
- Registration form with required-field and email validation
- Registrations stored in MySQL and displayed in a table
- Prepared statements to prevent SQL injection, and output escaping with `htmlspecialchars`
- Shared header and footer included across pages
- Responsive layout for desktop and mobile

## Built with
PHP · MySQL · HTML · CSS (Flexbox, media queries)

## Run locally
1. Install [XAMPP](https://www.apachefriends.org) and start **Apache** and **MySQL**.
2. Copy this folder into `C:\xampp\htdocs\`.
3. Open `http://localhost/phpmyadmin`, then import `campus_events.sql`.
4. Visit `http://localhost/CampusEventsHub/index.php`.
