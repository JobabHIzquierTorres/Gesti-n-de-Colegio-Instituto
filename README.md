# 📚 Gestión Académica Web (TFG)
![License: CC BY-NC 4.0](https://img.shields.io/badge/License-CC%20BY--NC%204.0-lightgrey.svg)

Este proyecto es una aplicación web desarrollada en PHP utilizando el framework **Laravel** como parte de mi Trabajo de Fin de Grado (TFG) en el ciclo de Desarrollo de Aplicaciones Web (DAW). La plataforma permite la gestión de alumnos, profesores, cursos, matrículas y calificaciones, implementando un sistema **CRUD** completo sobre cada entidad.

## 🚀 Funcionalidades principales

- Gestión de altas, bajas y modificaciones de alumnos, profesores y cursos.
- Administración de calificaciones.
- Control de matrículas.
- Paneles de visualización por rol (Alumnos solo tienen permiso para ver una vista, profesores acceso completo).
- Validación de datos y navegación intuitiva.

## 🧰 Tecnologías utilizadas

- **PHP 8.x**
- **Laravel 10.x**
- **MySQL**
- **Composer**
- **XAMPP**

## ⚙️ Requisitos previos

Antes de instalar el proyecto, asegúrate de tener los siguientes componentes instalados:

- [XAMPP](https://www.apachefriends.org/index.html) (Apache + MySQL)
- [Composer](https://getcomposer.org/)
- [Laravel CLI](https://laravel.com/docs/10.x/installation)
- PHP 8.x

## 📦 Instalación

Sigue estos pasos para instalar y ejecutar el proyecto en tu entorno local:

1. **Clona el repositorio**
   ```bash
   git clone https://github.com/JobabHIzquierTorres/Gesti-n-de-Colegio-Instituto.git
   cd Gesti-n-de-Colegio-Instituto
   
2. **Instalar gestor de dependencias**
   composer install

3. **Crear archivo de entorno**
    cp .env.example .env

4. **Modificar los datos en el archivo .env (Ver primero archivo info.txt en el proyecto)**
   - Los datos para la conexión a la base de datos pueden cambiar, sin embargo yo tengo una estructura ya creada que usé para mi proyecto. Debe copiarse y pegarse en el panel SQL de MySQL en Xampp.
     
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=[nombre de la base de datos creada en Xampp]
    DB_USERNAME=[nombre del usuario con privilegios]
    DB_PASSWORD=[contraseña del usuario con privilegios]

5. **Ejecutar migraciones**
   -Ya está controlado los posibles fallos relacionales debido al orden de creación de las tablas.
   
   php artisan migrate 

7. **Seeders (Añadir datos a la base de datos)**
   -El proyecto requiere de datos en su interior (en la base de datos )para funcionar debido a las restricciones por roles.
   
   php artisan db:seed

9. **Levantar el servidor de pruebas**
   - Para ejecutar el proyecto en el servidor:
     
     php artisan serve

10. **Roles**
    -Para entrar con el rol profesor (acceso completo al CRUD):
    
       usuario:    jose@jose.com
       contraseña: password
    
   -Para entrar con el rol de alumno:
   
       usuario:    jobab@jobab.com
       contraseña: jobab1234
   
## 📚 Licencia

Este proyecto está licenciado bajo una [Licencia Creative Commons Atribución-NoComercial 4.0 Internacional (CC BY-NC 4.0)](https://creativecommons.org/licenses/by-nc/4.0/).

Puedes copiar, distribuir y adaptar este proyecto para usos educativos y personales, pero **no se permite su uso con fines comerciales sin el permiso del autor.**

© 2025 **Jobab H. Izquier Torres**
