# ☕ Brew Shot E-Commerce

Welcome to the **Brew Shot E-Commerce** web application. This is a dynamic, responsive online coffee shopping platform built using a lightweight, file-based architecture. It uses PHP for backend routing, Bootstrap 5 for modern styling, and flat JSON files for database-less data persistence.

## 🚀 Features
* **Interactive Shopping Cart:** Automatically updates and manages selections using custom JavaScript (`cart-auto-open.js`).
* **Secure Authentication:** Complete user login, signup, and validation flows (`login-form.php`, `signup-form.php`, `register.php`).
* **Admin Dashboard Panel:** Built-in backend management ecosystem located in the `/admin` folder to control menu listings, system items, and consumer orders.
* **Dynamic Content Displays:** Automated page features including interactive carousels (`carousel.php`), real-time clocks (`clock.js`), floating status notifications (`floating-notif.js`), and photography layouts (`photo-albums.php`).
* **Responsive Visuals:** Rich media assets folder (`/images`) fully optimized for fluid mobile and desktop layouts using Bootstrap 5 utility classes.

## 🛠️ Built With
* **Backend Core:** PHP (handling local file operations, includes, and form responses)
* **Frontend Framework:** Bootstrap 5, Custom CSS3 (`style.css`)
* **Dynamic Scripts:** Native JavaScript (ES6+ for interactive UI behaviors)
* **Data Storage:** Flat-file JSON databases (`/data/*.json` for serverless data persistence)

## 📁 Core Project Architecture
* `/admin` - Dashboard, access forms, item lists, and administrative success panels.
* `/data` - Contains `admins.json`, `items.json`, `orders.json`, and `users.json`.
* `/images` - Structured media libraries covering marketing banners, landing carousels, logos, and promotional photo albums.

## 💻 Local Setup Instructions
Because this project uses JSON flat-files instead of a heavy database configuration like MySQL, you **do not need phpMyAdmin**. You only need a local PHP server environment:

1. Clone or download this repository directly into your local server environment root directory (e.g., `htdocs` for XAMPP/MAMP).
2. Ensure your local server environment has read/write permissions enabled for the `/data` folder so PHP can update the JSON files when handling orders or registrations.
3. Open your browser and navigate directly to: `http://localhost/brew-shot_e-commerce`
