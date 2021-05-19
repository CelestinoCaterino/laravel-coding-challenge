# Laravel coding challenge :zap:

The challenge requires developing a small CRUD part for the Clients section of a Laravel application.


## How to run application

**1.** Clone this project running:

        git clone https://github.com/CelestinoCaterino/laravel-coding-challenge.git
        
**2.** Install composer dependecies running:

        composer install
        
**3.** Create the .env file, use the .env.example file as a reference.

**4.** Migrate and seed your database running:

        php artisan migrate
        php artisan db:seed

**5.** Generate an app key.

        php artisan key:generate
        
## Using docker :whale2:

**1.** Build images and start containers running

        docker-compose up --build

**2.**  If you are using docker you should set DB_HOST in your .env with the name of your service, in this case “mysql”.

**3.**  Run database migrations and seeder in you application container.

        docker exec -ti your_container php artisan migrate
        docker exec -ti your_container php artisan db:seed

**4.**  Generate an app key.

        docker exec -ti your_container  php artisan key:generate


 Now you can run your application in localhost :rocket: