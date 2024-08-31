<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/usuario/gestor-tareas/actions"><img src="https://github.com/usuario/gestor-tareas/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/usuario/gestor-tareas"><img src="https://img.shields.io/packagist/dt/usuario/gestor-tareas" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/usuario/gestor-tareas"><img src="https://img.shields.io/packagist/v/usuario/gestor-tareas" alt="Latest Stable Version"></a>
<a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/github/license/usuario/gestor-tareas" alt="License"></a>
</p>

## About the Task Management API

This API allows users to manage their daily tasks through CRUD operations (Create, Read, Update, Delete). The API supports task organization by categories, deadline assignments, marking tasks as completed, and user management with authentication and authorization.

## Technologies Used

- **PHP**: The core programming language used for server-side logic.
- **Laravel 9.x**: The PHP framework utilized to build the RESTful API with advanced features like authentication, authorization, and error handling.
- **MySQL**: The relational database used to store users, tasks, categories, and tags.
- **JWT (JSON Web Tokens)**: Used for secure user authentication.
- **Composer**: Dependency management for PHP packages.
- **Apache**: The web server used to serve the application.
- **Mailtrap**: For testing email notifications (optional).
- **Docker**: For containerizing the application (optional).

## API Endpoints

### Task Management
- **GET** `/api/tasks`: Fetch all tasks.
- **POST** `/api/tasks`: Create a new task.
- **PUT** `/api/tasks/{id}`: Update an existing task.
- **DELETE** `/api/tasks/{id}`: Delete a task.

### Category Management
- **GET** `/api/categories`: Fetch all categories.
- **POST** `/api/categories`: Create a new category.

### User Management
- **GET** `/api/users`: Fetch all users.

### Email Notifications
- **Description**: Email notifications are sent automatically when a task is successfully created or updated, informing the user of the task's status.

## License

The Task Management API is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
