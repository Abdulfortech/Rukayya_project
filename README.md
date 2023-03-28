
# How to Install

<!-- Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as: -->


## Cloning the Repository

The first thing to do is to cloe te repository from [Github](https://github.com/Abdulfortech/Rukayya-Final-Year-Project)

## Install the project dependencies from compose
install all the dependencies of the project. This is what allows you to install Laravel itself, among other packages needed to start your application. Run
* composer install 

## Create a copy of your .env file

The .env files are generally not submitted to your repo, if this is not the case I invite you to correct this for security reasons. So we will make a copy of the .env.example file and create an .env file that we can fill in with our configuration settings.
* cp .env.example .env


## Generate your encryption key

Laravel requires that you have an encryption key for each of your applications, this is usually randomly generated and stored in your .env file.
* php artisan key:generate

## Creating Database

Create a database with the name "rukayya_project_chat".


## database migration

Run the following command to do database migration
* php artisan migrate