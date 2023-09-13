# Project Name

Serverless PHP PostgreSQL REST API with Users, Products, Categories, and ImagesProduct Modules

## Description

This project is a serverless REST API built with PHP and PostgreSQL. It includes modules for managing users, products, categories, and images of products. The API is designed to be deployed on a serverless platform such as AWS Lambda.

## Project Structure

The project has the following file structure:

```
serverless-php-postgresql-rest-api
├── src
│   ├── config
│   │   └── database.php
│   ├── controllers
│   │   ├── CategoriesController.php
│   │   ├── ImagesProductController.php
│   │   ├── ProductsController.php
│   │   └── UsersController.php
│   ├── models
│   │   ├── Category.php
│   │   ├── ImageProduct.php
│   │   ├── Product.php
│   │   └── User.php
│   ├── routes
│   │   ├── categories.php
│   │   ├── images_product.php
│   │   ├── products.php
│   │   └── users.php
│   ├── utils
│   │   └── Response.php
│   ├── vendor
│   ├── composer.json
│   ├── composer.lock
│   └── index.php
├── tests
│   ├── CategoriesControllerTest.php
│   ├── ImagesProductControllerTest.php
│   ├── ProductsControllerTest.php
│   └── UsersControllerTest.php
├── .env
├── .gitignore
├── README.md
└── serverless.yml
```

## Installation

1. Clone the repository:

```
git clone https://github.com/username/serverless-php-postgresql-rest-api.git
```

2. Install the dependencies:

```
cd serverless-php-postgresql-rest-api
composer install
```

3. Set up the environment variables:

Create a `.env` file in the root directory of the project and add the following variables:

```
DB_HOST=your_database_host
DB_PORT=your_database_port
DB_NAME=your_database_name
DB_USER=your_database_user
DB_PASSWORD=your_database_password
```

4. Set up the database:

Create a PostgreSQL database and run the SQL scripts in the `database` directory to create the tables.

5. Deploy the API:

Deploy the API to a serverless platform such as AWS Lambda using the `serverless.yml` configuration file.

## Usage

The API has the following endpoints:

- `/users`: CRUD operations for users
- `/products`: CRUD operations for products
- `/categories`: CRUD operations for categories
- `/images_product`: CRUD operations for images of products

Each endpoint supports the following HTTP methods:

- `GET`: Retrieve a resource or a list of resources
- `POST`: Create a new resource
- `PUT`: Update an existing resource
- `DELETE`: Delete an existing resource

## License

This project is licensed under the MIT License. See the `LICENSE` file for details.