<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
  <a href="https://angular.io" target="_blank">
    <img src="https://angular.io/assets/images/logos/angular/angular.svg" width="400" alt="Angular Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/yourusername/mini-helpdesk/actions"><img src="https://github.com/yourusername/mini-helpdesk/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/yournamespace/mini-helpdesk"><img src="https://img.shields.io/packagist/dt/yournamespace/mini-helpdesk" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/yournamespace/mini-helpdesk"><img src="https://img.shields.io/packagist/v/yournamespace/mini-helpdesk" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/yournamespace/mini-helpdesk"><img src="https://img.shields.io/packagist/l/yournamespace/mini-helpdesk" alt="License"></a>
</p>

## About Mini Helpdesk

Mini Helpdesk is a comprehensive ticketing system built with Laravel 12 backend and Angular 16+ frontend. This application features JWT/Sanctum authentication with role-based access control (user/agent/admin), FAQ management with search and filtering, and a complete ticket system with status transitions and comment threads.

## Features

### 🔐 Authentication & Roles
- **JWT/Sanctum Authentication** - Secure login/logout system
- **Role-Based Access Control** - Three user roles: User, Agent, Admin
- **Protected Routes** - Route guards and policies for authorization

### ❓ FAQ Management
- **Full-Text Search** - Search across questions and answers
- **Category Filtering** - Filter FAQs by categories
- **Admin CRUD** - Full create, read, update, delete operations for admins
- **Infinite Scroll** - Paginated results with smooth infinite scrolling

### 🎫 Ticket System
- **Ticket Creation** - Create tickets with title, description, category, and priority
- **Status Workflow** - Open → Resolved → Closed with user reopening capability
- **Comment Threads** - Real-time comments and discussions
- **Advanced Filtering** - Filter tickets by status, category, and priority

### ⚡ Technical Features
- **Server-Side Pagination** - Efficient data loading with pagination schema
- **Reactive Forms** - Angular reactive forms with validation
- **Loading States** - Skeleton loaders and error handling
- **Responsive Design** - Mobile-friendly interface
- **Comprehensive Testing** - Backend and frontend tests

## Demo Accounts

| Role | Email | Password | Access |
|------|-------|----------|---------|
| Admin | `admin@example.com` | `Admin123!` | Full system access |
| Agent | `agent@example.com` | `Agent123!` | Ticket management + FAQ access |
| User | `user@example.com` | `User123!` | Create/view own tickets |

## Quick Start with Docker

```bash
# Clone the repository
git clone https://github.com/yourusername/mini-helpdesk.git
cd mini-helpdesk

# Start the application
docker-compose up -d

# Run migrations and seeders
docker-compose exec backend php artisan migrate --seed

# Access the applications:
# Frontend: http://localhost:4200
# Backend API: http://localhost:8000
# MySQL Database: localhost:3306
