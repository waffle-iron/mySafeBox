# mySafebox

**mySafebox** is an app to store your passwords, accounts, logins and more.
Currently, **mySafebox** is under ***development***.

![mySafebox](http://esaupr.github.io/img/mySafebox2.png)

![mySafebox](http://esaupr.github.io/img/mySafebox1.png)

## Requeriments
- [Composer](https://getcomposer.org/)
- [PHP >= 5.5.9](http://php.net/)
- [POSTGRES](http://www.postgresql.org.es/), [MariaDB](https://mariadb.org/), or some other database system
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension

## Installation

### Quick Installation

Download the zip or clone the repository

	$ git clone https://github.com/EsauPR/mySafeBox.git

Enter to the project directory and install the dependeces using Composer

	$ cd mySafeBox
	$ composer install

Copy the default environment file *.env.example* and rename it to *.env* to configure de app and set your application key

	$ cp .env.example .env
	$ php artisan key:generate

Set your Database configuration in *.env*

	DB_CONNECTION=driver
	DB_DATABASE=database_name
	DB_USERNAME=username
	DB_PASSWORD=password

- For MariaDB set DB_CONNECTION with *mysql*
- For Postgres SQL set DB_CONNECTION with *pgsql*
- Be sure that the extension of your DB System is activated in configuration file of PHP, *php.ini*

Migrate the DB

	$ php artisan migrate

Execute the server

	$ php artisan serve

- Directories within the storage and the bootstrap/cache directories should be writable by your web server

### Creating a Desktop App
#### Requeriments
- Node.js >= 4

#### Using Natifier

- Install Natifier


	npm install nativefier -g

- Creating the desktop app


	nativefier --name "mySafebox" [url]

- Example


	nativefier --name "mySafebox" "http://localhost:8000/"

More info [Natifier](https://github.com/jiahaog/nativefier)


## To do
    ...

## License

***mySafebox*** is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
