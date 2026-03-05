# Todo API – Laravel TP

A simple **RESTful Todo API** built with **Laravel** that provides basic task management functionality.  
This project demonstrates the implementation of **CRUD operations** and a **PATCH endpoint to mark tasks as completed**.

---

# Features

- Create a new Todo
- Retrieve all Todos
- Retrieve a single Todo
- Update a Todo
- Delete a Todo
- Mark a Todo as completed

---

# Tech Stack

- PHP
- Laravel
- MySQL / SQLite
- RESTful API
- JSON responses

---

# Project Setup

## 1. Clone the repository

```bash
git clone https://github.com/YoussefASX/LaravelTP.git
cd LaravelTP
```

## 2. Install dependencies

```bash
composer install
```

## 3. Configure environment

Copy the environment file:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

## 4. Configure database

Update `.env`:

```
DB_DATABASE=todo_db
DB_USERNAME=root
DB_PASSWORD=
```

Run migrations:

```bash
php artisan migrate
```

---

# API Endpoints

## Get All Todos

```
GET /api/todos
```

Response:

```json
[
  {
    "id": 1,
    "title": "Finish Laravel TP",
    "completed": false
  }
]
```

---

## Get Single Todo

```
GET /api/todos/{id}
```

Example:

```
GET /api/todos/1
```

---

## Create Todo

```
POST /api/todos
```

Body:

```json
{
  "title": "Study Laravel",
  "completed": false
}
```

Response:

```json
{
  "id": 1,
  "title": "Study Laravel",
  "completed": false
}
```

---

## Update Todo

```
PUT /api/todos/{id}
```

Body:

```json
{
  "title": "Study Laravel deeply",
  "completed": false
}
```

---

## Delete Todo

```
DELETE /api/todos/{id}
```

Example:

```
DELETE /api/todos/1
```

Response:

```
204 No Content
```

---

## Mark Todo as Completed

```
PATCH /api/todos/{id}/complete
```

This endpoint updates the `completed` field to `true`.

Example:

```
PATCH /api/todos/1/complete
```

Response:

```json
{
  "id": 1,
  "title": "Study Laravel",
  "completed": true
}
```

---

# Todo Model Example

```php
Schema::create('todos', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->boolean('completed')->default(false);
    $table->timestamps();
});
```

---

# Example API Workflow

1. Create a task

```
POST /api/todos
```

2. Retrieve tasks

```
GET /api/todos
```

3. Mark task completed

```
PATCH /api/todos/1/complete
```

4. Delete task

```
DELETE /api/todos/1
```

---

# Learning Objectives

This project demonstrates:

- RESTful API design
- CRUD operations in Laravel
- Routing and controllers
- Database migrations
- PATCH requests for partial updates

---

# Author

**Youssef Akhroub**  
ENSAM Casablanca
