# Laravel User Activity Package Installation Guide

This document provides detailed steps for installing and configuring the Laravel User Activity package, along with guidelines for setting up the package repository for Git.

---

## 1. Installation

### Step 1: Install via Composer
Run the following command to install the package via Composer:

```bash
composer require abhimanyu/hive
```

---

## 2. Configuration

### Step 2.1: Publish Configuration File
Run the following command to publish the package's configuration file:

```bash
php artisan vendor:publish --tag=config --provider="Abhimanyu\Hive\UserActivityServiceProvider"
```

This will create a file `config/user_activity.php`. Customize the configuration according to your requirements.

---

### Step 2.2: Publish Migrations
Publish the database migration files using the command:

```bash
php artisan vendor:publish --tag=migrations --provider="Abhimanyu\Hive\UserActivityServiceProvider"
```

Run the migrations to create the necessary database table:

```bash
php artisan migrate
```

---

### Step 2.3: Add Middleware
To enable activity tracking globally, register the middleware in `app/Http/Kernel.php`:

```php
protected $middlewareGroups = [
    'web' => [
        \Abhimanyu\Hive\Middleware\TrackUserActivity::class,
    ],
];
```

---

### Step 2.4: Load Routes (Optional)
The package automatically loads its routes. To customize them, include the routes manually in your `routes/web.php`:

```php
require base_path('vendor/abhimanyu/hive/src/routes/web.php');
```

---

## 3. Usage

### Log User Activity
You can log custom user activities using the `ActivityLogger` service:

```php
use Abhimanyu\Hive\Services\ActivityLogger;

ActivityLogger::log(auth()->user(), 'Exported activity logs');
```

---

## 4. Publishing Assets

To publish the views for customization, run:

```bash
php artisan vendor:publish --tag=views --provider="Abhimanyu\Hive\UserActivityServiceProvider"
```

---

## 5. Git Repository Setup

### Step 5.1: Initialize Git Repository
Initialize the Git repository in the package directory:

```bash
git init
```

### Step 5.2: Create `.gitignore`
Add a `.gitignore` file in the root directory with the following content:

```
/vendor
/node_modules
/.env
/.idea
/.vscode
/public/storage
/storage/*.key
```

### Step 5.3: Add All Files
Stage all files for the initial commit:

```bash
git add .
```

### Step 5.4: Commit Changes
Create an initial commit:

```bash
git commit -m "Initial commit of Laravel User Activity package"
```

### Step 5.5: Add Remote Repository
Add your Git remote repository:

```bash
git remote add origin <your-repository-url>
```

### Step 5.6: Push Code
Push your code to the remote repository:

```bash
git push -u origin main
```

---




