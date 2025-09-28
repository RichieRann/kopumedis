# KOPUMEDIS

KOPUMEDIS is a **Laravel 12** project using **Vite**, **Tailwind CSS**, and **Laravel Livewire**.
This README will guide you through setting up the project locally and collaborating with GitHub.

---

## 📦 Requirements

Make sure you have the following installed on your machine:

-   [PHP 8.3+](https://www.php.net/downloads.php)
-   [Composer](https://getcomposer.org/download/)
-   [Node.js & npm](https://nodejs.org/en/download/)
-   [Git](https://git-scm.com/downloads)
-   A database system (**SQLite** or **MySQL**)

---

## 🚀 Getting Started

1. **Clone the repository**

```bash
git clone https://github.com/RichieRann/kopumedis.git
```

2. **Change directory to the project folder**

```bash
cd kopumedis
```

3. **Update your local project**

```bash
git pull
```

4. **Install dependencies**

-   Composer:

```bash
composer install
```

-   Node/NPM:

```bash
npm install
```

5. **Copy environment file**

```bash
cp .env.example .env
```

6. **Generate application key**

```bash
php artisan key:generate
```

7. **Adjust `.env` file**
   Update the `.env` file based on your local environment (database, app name, etc).
   Also, update the **APP_URL** like this:

```
APP_URL=http://kopumedis.test/
```

---

## 🗄️ Database Setup

You can use either **SQLite** or **MySQL**.

### Option 1: SQLite

```bash
touch database/database.sqlite
```

Update `.env`:

```
DB_CONNECTION=sqlite
```

### Option 2: MySQL

1. Create a new database manually in MySQL.
2. Update `.env` with your database credentials:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name   # <-- Create this database first!
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

---

## 🔧 Run migrations

```bash
php artisan migrate
```

---

## ▶️ Run the project

Run Vite development build (for Laravel, Tailwind & Livewire assets):

```bash
npm run dev
```

The link to access the project will be shown in the terminal, usually like this:

```
http://kopumedis.test:port/
```

---

## 🌱 Git Workflow (Team Collaboration)

When working with GitHub, follow these steps:

1. **Create and switch to a new branch**

```bash
git switch -c <branch-name>
```

Examples:

-   `feature/login`
-   `fix/bugLogin`

2. **Add changes to staging**

-   Add all changes:

```bash
git add .
```

-   Add specific file:

```bash
git add path/to/file.php
```

3. **Commit your changes**

```bash
git commit -m "Your commit message"
```

4. **Push changes**

-   First time push (new branch):

```bash
git push -u origin <branch-name>
```

-   Subsequent pushes:

```bash
git push
```

---

## ✅ Tips

-   Always **pull the latest code** before starting work:

```bash
git pull
```

-   Use clear branch names (`feature/...`, `fix/...`, etc.).
-   Write **descriptive commit messages**.
-   Do **not work directly on `main` branch**.

---

Happy coding! 🎉
