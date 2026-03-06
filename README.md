# PortfolioAdmin

PortfolioAdmin is a robust, Headless CMS designed for managing personal portfolio websites. Built on **Laravel 12** and **Filament 4**, it provides a powerful admin interface and a comprehensive REST API for frontend consumption.

## 🚀 Tech Stack

- **Framework:** [Laravel 12](https://laravel.com)
- **Admin Panel:** [Filament 4](https://filamentphp.com)
- **Database:** SQLite (default)
- **Multi-language:** [Spatie Translatable](https://github.com/spatie/laravel-translatable)

## ✨ Features

- **Content Management:** Full CRUD operations for:
    - 📁 **Projects & Realizations:** Detailed showcases of your work.
    - 💼 **Experience:** Manage work history (Jobs) and Education.
    - 🛠️ **Skills & Technologies:** Categorize and display your technical expertise.
    - 🎓 **Certifications:** Track and showcase your professional achievements.
    - 🔗 **Social Links:** Manage your online presence.
- **Headless API:** Rich REST API (`/api/v1/`) with support for:
    - Localized content (multi-language support).
    - Pagination.
    - Filtered "home-page" collections for quick landing page loads.
- **Contact Management:** Integrated contact form processing with mail entry logging.
- **Media Management:** Streamlined file and image uploads via Filament.
- **Dynamic Ordering:** Custom display order for all portfolio items.
- **Localization:** Built-in support for multiple locales using `spatie/laravel-translatable`.

## 🛠️ Setup & Installation

### Prerequisites
- PHP 8.2+
- Composer
- Node.js & NPM

### Steps
1. **Clone the repository:**
   ```bash
   git clone <repository-url>
   cd PortfolioAdmin
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install && npm run build
   ```

3. **Configure Environment:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Initialize Database:**
   ```bash
   # Create SQLite database
   touch database/database.sqlite
   php artisan migrate --seed
   ```

5. **Create Admin User:**
   ```bash
   php artisan make:filament-user
   ```

6. **Start Development Server:**
   ```bash
   php artisan serve
   ```

## 🔌 API Overview

All API endpoints are prefixed with `/api/v1/`.

| Endpoint | Description |
| --- | --- |
| `GET /api/v1/projects` | List all projects |
| `GET /api/v1/projects/home-page` | Get projects featured on home page |
| `GET /api/v1/jobs` | Work experience |
| `GET /api/v1/skills` | Technical skills |
| `POST /api/v1/send-email` | Submit contact form |

### Multi-language API
Access translated content by using the `/translated` sub-path:
`GET /api/v1/projects/translated`

## 🎨 Admin Panel
Access the management interface at `/admin`. Here you can manage all portfolio content, view contact form submissions, and configure your site's data.

## 📄 License
The MIT License (MIT). Please see [License File](LICENSE) for more information.
