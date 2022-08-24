create a db named 'fingent' 
go to htdocs folder in xampp
open cmd and type git clone https://github.com/muhssinks/fingent.git
enter directory 
open .env file and set DB_DATABASE,DB_USERNAME,DB_PASSWORD
extract vendor.zip
open cmd and type 
	1 - 'php artisan migrate'
	2 - 'php artisan serve'
open browser and go to http://127.0.0.1:8000
Create shorturls in home page. Url must have http or https