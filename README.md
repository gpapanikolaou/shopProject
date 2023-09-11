### Clone the Repository

To get a copy of this project on your local machine, you can use the following command:


git clone https://github.com/gpapanikolaou/shopProject.git

## Configuration

Before running your Laravel project, you need to set up your environment configuration by creating an `.env` file. Follow these steps:

1. In the root directory of your project, locate the `.env.example` file.

2. Duplicate `.env.example` and rename the copy to `.env`:


   cp .env.example .env

Open the .env file in a text editor of your choice.

Configure the environment variables in the .env file according to your project's needs. These variables typically include database connection settings, app key, and other application-specific configuration.

Here are some example variables that you may need to configure:


APP_NAME=YourAppName
APP_ENV=local
APP_KEY=your-random-key
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
Replace YourAppName, your-random-key, localhost, your_database_name, your_database_username, and your_database_password with your actual configuration values.

Save and close the .env file.

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

