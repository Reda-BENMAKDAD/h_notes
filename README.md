# H-Notes

H-Notes is a web application developed using Laravel, Breeze, Vite, and MySQL that allows school administrators to manage teachers, modules, students, and notes, and teachers to manage students' exam marks, and students and parents to view their progress and attendance.

## Features

- **Admin Dashboard**: The admin dashboard allows school administrators to manage teachers, modules, and students.
- **Teacher Dashboard**: The teacher dashboard allows teachers to manage their students' exam marks.
- **Student Dashboard**: The student dashboard allows students and parents to view their progress and attendance.
- **Authentication**: The application uses Laravel Breeze for authentication.
- **Database**: The application uses MySQL as the database.

## Installation

To install the H-Notes application, follow these steps:

1. Clone the repository:

```
git clone https://github.com/reda-benmakdad/h-notes.git
```

2. Install the dependencies:

```
composer install
npm install
```

3. Create a `.env` file:

```
cp .env.example .env
```

4. Generate an application key:

```
php artisan key:generate
```

5. Set up the database by editing the `.env` file:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=h-notes
DB_USERNAME=root
DB_PASSWORD=
```

6. Run the database migrations:

```
php artisan migrate
```

7. Compile the assets:

```
npm run dev
```

8. Serve the application:

```
php artisan serve
```

9. Visit the application in your web browser at http://localhost:8000.

## Usage

To use the H-Notes application, follow these steps:

1. Register for an account as an administrator, teacher, or student.
2. Log in to your account.
3. Navigate to your dashboard to manage your users, modules, or marks.

## Contributing

If you would like to contribute to the H-Notes application, please follow these steps:

1. Fork the repository.
2. Create a new branch: `git checkout -b my-feature-branch`.
3. Make your changes and commit them: `git commit -am 'Add some feature'`.
4. Push to the branch: `git push origin my-feature-branch`.
5. Submit a pull request.
