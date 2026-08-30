# ☕ Brew Shot E-Commerce

Welcome to the **Brew Shot E-Commerce** web application. This is a dynamic, responsive online coffee shopping platform built using a lightweight, file-based architecture. It features PHP for server-side logic, Bootstrap 5 for fluid layout designs, and flat JSON files for database-less data persistence.

## 🚀 Key Modules & System Scripts

### 🛒 Client & Cart Features
* **Auto-Open Cart Modal (`cart-auto-open.js`):** Automatically retains user context and re-opens the cart modal upon page reload.
* **Core Cart Handler (`cart.php`):** Processes dynamic cart operations including item additions, direct quantity updates, and item removals.
* **Checkout Processor (`checkout.php`):** Compiles cart data, handles order placement processing, and appends records directly to JSON storage.
* **Dynamic Enhancements:** Contains a native JavaScript live clock loop (`clock.js`) and a quick auto-dismiss script (`floating-notif.js`) for status popups.

### 🛡️ Authentication & User Portals
* **Unified Data Core:** Features a secure user system powered by a flat-file database schema (`/data/users.json` and `/data/admins.json`) for both registration and login processes.
* **Consumer Gateway (`login-form.php`, `signup-form.php`, `register.php`):** Connects form components to validate accounts and store profiles without an external SQL engine.

### 📊 Administrative Dashboard ecosystem (`/admin`)
* **Real-Time Analytics (`dashboard.php`):** Aggregates data from active JSON storage arrays to render live transaction and product summaries.
* **Menu Listings Manager (`menu-items.php`, `display-items.php`):** Loops, filters, and groups menu items dynamically by category with structured query logic.
* **Account Controls (`sub-admin.php`):** Implements an administrative panel to monitor sub-admin teams, handle inline account deletion, and provision new accounts (`sub-admin.php` saving to `admins.json`).
* **UI Orchestration (`modal-auto-open.js`, `admin-success.php`):** Houses a unified modal execution handler and dedicated administrative confirmation panels.

## 🛠️ Built With
* **Backend Core:** PHP (local file manipulation, include blocks, and routing)
* **Frontend UI:** Bootstrap 5, Custom CSS3 (`style.css`)
* **Dynamic Scripts:** Native JavaScript (ES6+ Document Object Model operations)
* **Data Layer:** Serverless JSON Flat-Files (`/data/*.json`)

## 🤖 Academic AI Assistance & Development Disclosure
This project was constructed as an academic assignment with the assistance of **Gemini AI**. Artificial intelligence was leveraged as an interactive development partner to achieve engineering best practices:
* **Syntax Correction:** Debugged rigid PHP execution loops, structural array handling, and JavaScript event listeners.
* **Architectural Refactoring:** Cleaned up project file hierarchies and optimized data transactions between forms and target JSON files.
* **UI/UX Enhancement:** Implemented fluid responsive styling parameters via Bootstrap 5 utility classes to ensure smooth rendering across mobile devices, tablets, and desktop displays.

## 💻 Local Setup Instructions
Because this project runs on local JSON flat-files, **no MySQL or phpMyAdmin setup is required**:

1. Clone or download this project directly into your local server environment root directory (e.g., `htdocs` for XAMPP/MAMP).
2. Ensure your local server folder has full read/write permissions enabled for the `/data` folder so PHP can write to the JSON objects.
3. Open your browser and navigate directly to: `http://localhost/brew-shot_e-commerce`
