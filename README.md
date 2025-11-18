# 📚 Sistema de Gestión de Librería Pepe

Este proyecto es un **sistema de gestión de librería**, desarrollado con el framework **Laravel**, pensado para administrar inventarios de libros y el control de préstamos. Está construido utilizando tecnologías modernas que permiten un entorno rápido, eficiente y escalable.

---

## 🧩 Roles del Sistema

El sistema cuenta con tres tipos de usuarios, cada uno con diferentes permisos y responsabilidades:

### 👤 Usuario
- Puede ver los libros que tiene alquilados actualmente.
- Puede consultar información del catálogo.

### 🛠️ Administrador
- Puede ver todos los libros alquilados por todos los usuarios.
- Puede administrar los usuarios del sistema (crear, editar, eliminar).
- Tiene acceso total a la gestión del inventario de libros.

### 🧾 Gerente
- Realiza los **alquileres** de libros.
- Selecciona el usuario al que se le hará el préstamo.
- Gestiona las devoluciones.
- Actualiza el estado de los libros alquilados.

---

## 🚀 Tecnologías Clave

Este proyecto utiliza el siguiente stack tecnológico:

-   **PHP 8.4.14:** Lenguaje principal del backend.
-   **Laravel 12.37.0:** Framework MVC encargado del enrutamiento,
    lógica de negocio y ORM (Eloquent).
-   **Vite:** Herramienta para compilación y bundling de assets
    (JavaScript y CSS).
-   **MySQL (XAMPP):** Base de datos relacional utilizada para el
    almacenamiento de información.

---

## ⚙️ Instalación y Configuración

Sigue estos pasos para poner en funcionamiento el proyecto.

---

### 1️⃣ Clonar el Repositorio

``` bash
git clone https://github.com/tu-usuario/nombre-del-proyecto.git
cd nombre-del-proyecto
```

### 2️⃣ Instalación de Dependencias

#### 🔧 Dependencias de PHP (Backend)

``` bash
composer install
```

#### 🎨 Dependencias de JavaScript (Frontend)

``` bash
npm install
# o
yarn install
```

---

### 3️⃣ Configuración del Entorno (`.env`)

``` bash
cp .env.example .env
php artisan key:generate
```

Configura tu conexión a la base de datos:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nombre_de_tu_bd
    DB_USERNAME=root
    DB_PASSWORD=

---

### 4️⃣ Base de Datos

``` bash
php artisan migrate
php artisan db:seed
```

---

## ▶️ Ejecución del Proyecto

### 🖥️ Backend (Laravel)

``` bash
php artisan serve
```

### ⚡ Frontend (Vite)

``` bash
npm run dev
# o
yarn dev
```