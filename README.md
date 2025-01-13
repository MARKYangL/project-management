Project Management REST API
This is a simple RESTful API for managing projects and tasks, built with Laravel, MySQL, and PHP. The application demonstrates CRUD operations for Projects and Tasks and highlights Laravel's core features, such as migrations, seeding, Eloquent relationships, and API resource routing.

Features
Projects:
Create, read, update, and delete.
Fields:
id (auto-increment primary key)
title (string, required)
description (text, optional)
status (enum: open, in_progress, completed)
Tasks:
Create, read, update, and delete.
Fields:
id (auto-increment primary key)
project_id (foreign key referencing projects)
title (string, required)
description (text, optional)
assigned_to (string, optional)
due_date (date, optional)
status (enum: to_do, in_progress, done)
Requirements
PHP: >= 8.0
Composer
MySQL
Laravel: Latest version or recent LTS version
Setup Instructions
1. Clone the Repository
bash
Copy code
git clone https://github.com/markyangl/project-management.git
cd project-management
2. Install Dependencies
bash
Copy code
composer install
3. Configure Environment
Copy .env.example to .env:
bash
Copy code
cp .env.example .env
Set your database connection details in .env:
env
Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=project_management
DB_USERNAME=root
DB_PASSWORD=your_password
4. Run Migrations and Seeders
bash
Copy code
php artisan migrate --seed
This will create the database tables (projects and tasks) and populate them with sample data.

5. Start the Development Server
bash
Copy code
php artisan serve
The application will run on:

arduino
Copy code
http://127.0.0.1:8000
API Documentation
Base URL
arduino
Copy code
http://127.0.0.1:8000/api
Endpoints
Projects
GET /projects
List all projects.

POST /projects
Create a new project.
Request Body:

json
Copy code
{
    "title": "Project Title",
    "description": "Optional project description",
    "status": "open"
}
GET /projects/{id}
Get details of a single project.

PUT /projects/{id}
Update a project.
Request Body:

json
Copy code
{
    "title": "Updated Title",
    "description": "Updated description",
    "status": "completed"
}
DELETE /projects/{id}
Delete a project.

Tasks
GET /projects/{project_id}/tasks
List all tasks for a specific project.

POST /projects/{project_id}/tasks
Create a new task under a project.
Request Body:

json
Copy code
{
    "title": "Task Title",
    "description": "Optional task description",
    "assigned_to": "John Doe",
    "due_date": "2025-01-20",
    "status": "to_do"
}
GET /tasks/{id}
Get details of a single task.

PUT /tasks/{id}
Update a task.
Request Body:

json
Copy code
{
    "title": "Updated Task Title",
    "description": "Updated task description",
    "assigned_to": "Jane Doe",
    "due_date": "2025-01-25",
    "status": "in_progress"
}
DELETE /tasks/{id}
Delete a task.

Testing
Use Postman or cURL to test the API endpoints.
Example cURL command for creating a project:
bash
Copy code
curl -X POST http://127.0.0.1:8000/api/projects \
-H "Content-Type: application/json" \
-d '{"title":"New Project","description":"Description","status":"open"}'
Project Structure
Migrations: Located in database/migrations/.
Seeders: Located in database/seeders/.
Controllers: Located in app/Http/Controllers/.
Models: Located in app/Models/.
Routes: API routes are defined in routes/api.php.
Contributing
Feel free to fork this repository and submit pull requests for any improvements.