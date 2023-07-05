# Login/Registration CRUD for Beginner - PHP Project

This project is a beginner-friendly CRUD application built using PHP, Bootstrap, HTML, and MySQL. It includes features like user login, registration, add, edit, update, and display data. It also utilizes sessions for user logout and displays the logged-in user's profile.

## Technologies Used

- PHP
- Bootstrap
- HTML
- MySQL

## Installation

1. Clone the repository to your local machine or download the source code as a ZIP file.

2. Create a MySQL database for the project.

3. Import the provided SQL file (`database.sql`) into your database to create the necessary tables.

4. Open the project files in your preferred code editor.

5. Update the database connection details in the `config.php` file to match your database credentials:

   ```php
   define('DB_HOST', 'your_database_host');
   define('DB_USER', 'your_database_username');
   define('DB_PASSWORD', 'your_database_password');
   define('DB_NAME', 'your_database_name');
   ```

6. Start your local server or use a tool like XAMPP to run the project.

## Usage

1. Open your web browser and navigate to the project URL.

2. **Registration**: Click on the "Register" link to access the registration form. Fill in the required details such as username, password, email, etc., and submit the form. Upon successful registration, you will be redirected to the login page.

3. **Login**: On the login page, enter your registered username and password to log in. If the credentials are valid, you will be redirected to the dashboard.

4. **Dashboard**: The dashboard displays a list of registered users. Here, you can perform CRUD operations such as add, edit, update, and delete user data.

5. **Add User**: Click on the "Add User" button to access the add user form. Fill in the necessary details and submit the form to add a new user to the database.

6. **Edit User**: In the user list, click on the "Edit" button next to a user's details to access the edit form. Update the user's information and submit the form to save the changes.

7. **Delete User**: In the user list, click on the "Delete" button next to a user's details to delete that user from the database. A confirmation prompt will appear before deleting the user.

8. **Profile**: Click on the "Profile" link to view the logged-in user's profile page. This page displays the user's information and provides an option to log out.

9. **Logout**: To log out, click on the "Logout" link, and you will be redirected to the login page.


## Image

![image](https://github.com/developerMaurya/login_registration_crud_for_begineer_php/assets/137375643/b8c2b1c7-535f-4446-8fba-a4b912932ac9)

