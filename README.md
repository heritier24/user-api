# Laravel REST API – Backend Internship Assessment

## Description
This is a simple REST API built with Laravel that allows creating and retrieving users, using in-memory storage and SOLID principles.

##  Tech Stack
- Language: PHP 8.1
- Framework: Laravel 10
- Storage: In-memory (PHP session)
- Design: SOLID principles (Controller, Service, Form Request)

## How to Run
```bash
git clone https://github.com/heritier24/user-api.git
cd user-api
composer install
php artisan serve

##  API Endpoints

POST /api/users
Create a new user
Payload:
{
  "name": "John Doe",
  "email": "john@example.com"
}

GET /api/users/{id}

# Create a user
curl -X POST http://localhost:8000/api/users \
-H "Content-Type: application/json" \
-d '{"name": "John Doe", "email": "john@example.com"}'

# Get a user
curl http://localhost:8000/api/users/{user_id}
