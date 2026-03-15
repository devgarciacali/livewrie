# 🚀 Livewire Curso

Proyecto desarrollado como parte de un curso práctico de **Laravel Livewire**, enfocado en aprender a construir aplicaciones web dinámicas utilizando componentes interactivos sin necesidad de escribir grandes cantidades de JavaScript.

Este repositorio contiene ejemplos, prácticas y funcionalidades desarrolladas durante el curso, aplicando buenas prácticas de desarrollo con **Laravel** y **Livewire**.

---

## 📚 Tecnologías utilizadas

Este proyecto fue desarrollado utilizando las siguientes tecnologías:

* **Laravel**
* **Laravel Livewire**
* **Tailwind CSS**
* **Blade Templates**
* **MySQL**
* **JavaScript**
* **Git & GitHub**

---

## ⚙️ Requisitos

Antes de ejecutar el proyecto asegúrate de tener instalado:

* PHP 8.x
* Composer
* Node.js
* MySQL
* Servidor local (Laragon, XAMPP o similar)

---

## 📥 Instalación del proyecto

Clonar el repositorio:

```bash
git clone https://github.com/devgarciacali/livewire-curso.git
```

Entrar a la carpeta del proyecto:

```bash
cd livewire-curso
```

Instalar dependencias de PHP:

```bash
composer install
```

Instalar dependencias de Node:

```bash
npm install
```

Copiar el archivo de entorno:

```bash
cp .env.example .env
```

Generar la clave de la aplicación:

```bash
php artisan key:generate
```

Configurar la base de datos en el archivo **.env**

Luego ejecutar las migraciones:

```bash
php artisan migrate
```

Compilar los assets:

```bash
npm run dev
```

Iniciar el servidor:

```bash
php artisan serve
```

---

## 📂 Estructura del proyecto

El proyecto sigue la estructura estándar de Laravel:

```
app/
bootstrap/
config/
database/
public/
resources/
routes/
storage/
tests/
```

Los componentes interactivos se encuentran principalmente en:

```
app/Livewire
resources/views/livewire
```

---

## 🎯 Objetivo del proyecto

El objetivo de este proyecto es aprender a:

* Crear componentes dinámicos con Livewire
* Manejar estados sin usar JavaScript complejo
* Construir interfaces reactivas
* Integrar Laravel con tecnologías modernas de frontend
* Aplicar buenas prácticas en desarrollo web

---

## 👨‍💻 Autor

**Jose Manuel Garcia Calixto**

Desarrollador enfocado en tecnologías web como:

* Laravel
* Livewire
* PHP
* JavaScript
* MySQL

---

## 📄 Licencia

Este proyecto se utiliza con fines educativos como parte de un curso de aprendizaje de **Laravel Livewire**.
