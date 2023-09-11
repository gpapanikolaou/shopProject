### Clone the Repository

To get a copy of this project on your local machine, you can use the following command:


git clone https://github.com/gpapanikolaou/shopProject.git


### Install Vendor Dependencies

Before running the Laravel project, you need to install the PHP dependencies using Composer. If you haven't already installed Composer, you can download it from [https://getcomposer.org/](https://getcomposer.org/).

Navigate to the project directory:


cd project

Then, run the following command to install the required PHP dependencies:

composer install

### Database Migrations

Before you can use the application, you need to migrate the database to set up the required tables:

php artisan migrate 

If you want to seed the database with initial data, you can run:

php artisan db:seed

### Serve the Laravel Project
To start a local development server and serve your Laravel project, follow these steps:

1. Open a terminal window.

2. Navigate to your project's directory:

cd project

Run the following command to start the development server:

php artisan serve

