<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Polaris Contact Form with Laravel
This project demonstrates the implementation of a contact form using Shopify's Polaris design system, integrated into a Laravel application.


### Overview
In this project, I focused on creating a user-friendly, responsive contact form using Shopify's Polaris components within a Laravel framework. Initially, the task was to integrate Shopify’s API for product creation. However, due to difficulties with authentication and API setup, I pivoted to using the Polaris design system to create a visually appealing contact form.


### Features

* **Responsive Contact Form**: The form includes fields for the user’s name, email, and message.
* **Polaris Design System**: The form leverages Shopify's Polaris components, ensuring a consistent, clean, and professional UI.
* **Form Validation**: Basic client-side and server-side validation ensures that all required fields are filled out before submission.
*Success Banner**: After successful form submission, a success message is displayed using Polaris' built-in banner component.

### Technologies Used
* **Laravel**: A PHP framework used for the backend logic and form handling.
* **Polaris**: A design system from Shopify used for the UI components (buttons, text fields, banners).
* **Blade Templates**: Used for rendering the views in Laravel.


**Installation**

1. **Clone the Repository:**
   ```bash
   git clone [https://github.com/yourusername/polaris-contact-form.git](https://github.com/yourusername/polaris-contact-form.git)

2. **Install Dependencies**
    ```bash
    composer install
3. **Install Frontend Dependencies**
    ```bash
    npm install
4. **Configure Database and Settings**
   
    Create a file named .env in the project root directory.
   
    Add your database credentials and other configuration settings to the .env file. You can find a sample .env file in most Laravel projects for reference.
   
6. **Run Migrations (Optional)**
   
    If the project requires database migrations, run the following command:
    ```bash
    php artisan migrate
8. **Start the Application (Development Server)**
    ```bash
    php artisan serve
This command will start a development server that you can access in your browser, typically at http://localhost:8000 (the port may vary).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
