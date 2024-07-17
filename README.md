<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel CRUD Application

## Overview

This application is a simple CRUD (Create, Read, Update, Delete) system built with Laravel. It demonstrates how to handle basic operations on a resource, including file uploads and deletions. The system is designed to be user-friendly and efficient, providing a clear example of how to implement CRUD functionality in a Laravel application.

## Features

1. **Create, Read, Update, Delete Operations**: Manage resources with full CRUD functionality.
2. **File Upload and Delete**: Efficiently handle file uploads and deletions.
3. **User-Friendly Interface**: Easy-to-navigate and intuitive interface.
4. **Validation and Error Handling**: Robust validation and error handling for forms.
5. **Alert Notifications**: User-friendly alerts for actions performed.

## Technologies Used

- **PHP**: The programming language used for developing the application.
- **Laravel**: The PHP framework for building the application.
- **MySQL**: Relational database management system for storing data.
- **Bootstrap**: CSS framework for responsive design.
- **JavaScript**: For interactive elements and client-side validation.

## Installation

To set up the project locally, follow these steps:

1. **Clone the repository:**

    ```bash
    git clone https://github.com/your-username/laravel-crud-app.git
    cd laravel-crud-app
    ```

2. **Install Dependencies:**

    ```bash
    composer install
    npm install
    ```

3. **Environment Setup:**

    - Copy the `.env.example` file to `.env`:

      ```bash
      cp .env.example .env
      ```

    - Generate the application key:

      ```bash
      php artisan key:generate
      ```

    - Update the `.env` file with your database credentials.

4. **Run Migrations:**

    ```bash
    php artisan migrate
    ```

5. **Run Seeders (if any):**

    ```bash
    php artisan db:seed
    ```

6. **Run the Application:**

    ```bash
    php artisan serve
    ```

    Your application will be available at `http://localhost:8000`.

## Usage

- **Manage Resources**: Add, edit, or delete resources such as products, users, etc.
- **File Handling**: Upload and delete files associated with resources.
- **Admin Panel**: Use the admin panel to manage users and system settings.
- **Alerts and Notifications**: Receive notifications for CRUD operations.

## Description of Key Components

### Controllers

The controllers handle the incoming HTTP requests, process the data, and return appropriate responses. The primary controller for this application is the `CrudController`, which manages the CRUD operations for the resource.

### Traits

The `FileUploadTrait` provides methods for handling file uploads and deletions. It is used in the `CrudController` to manage file operations associated with the resources.

## Contributing

Contributions are welcome! If you have suggestions or improvements, feel free to fork the repository and submit a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact

For any inquiries or issues, please contact Mohamed Insath at [insath1997.mi@gmail.com](mailto:insath1997.mi@gmail.com).

---

**Developed by Mohamed Insath**
