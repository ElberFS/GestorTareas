<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Logotipo de Laravel"></a></p>

## Acerca de la API de administración de tareas

Esta API permite a los usuarios administrar sus tareas diarias a través de operaciones CRUD (Crear, Leer, Actualizar, Eliminar). La API admite la organización de tareas por categorías, asignaciones de fechas límite, marcar tareas como completadas y administración de usuarios con autenticación y autorización.

## Tecnologías utilizadas

- **PHP**: el lenguaje de programación principal utilizado para la lógica del lado del servidor.
- **Laravel 9.x**: el marco PHP utilizado para crear la API RESTful con funciones avanzadas como autenticación, autorización y manejo de errores.
- **MySQL**: La base de datos relacional utilizada para almacenar usuarios, tareas, categorías y etiquetas.
- **JWT (JSON Web Tokens)**: Se utiliza para la autenticación segura de usuarios.

## Puntos finales de API

### Gestión de tareas
- **GET** `/api/tasks`: Obtener todas las tareas.
- **POST** `/api/tasks`: Crear una nueva tarea.
- **PUT** `/api/tasks/{id}`: Actualizar una tarea existente.
- **DELETE** `/api/tasks/{id}`: Eliminar una tarea.

### Gestión de categorías
- **GET** `/api/categories`: Obtener todas las categorías.
- **POST** `/api/categories`: Crear una nueva categoría.

### Gestión de usuarios
- **GET** `/api/users`: Obtener todos los usuarios.

### Notificaciones por correo electrónico
- **Descripción**: Las notificaciones por correo electrónico se envían automáticamente cuando se crea o actualiza correctamente una tarea, informando al usuario sobre el estado de la tarea.
