## Book catalog CRUD web application.

### Host and deploy.

* Upload project on hosting.
* Execute SSH command `composer update`.
* Connect your data base at `./config/db.php`.
* Execute migrate db `yii migrate`.
* Configure `.htaccess` at your base directory or create and type following into `RewriteEngine on`, `RewriteRule ^(.+)?$ /web/$1`.
* Now web application ready to use.
