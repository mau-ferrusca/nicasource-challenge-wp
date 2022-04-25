# Nicasource Wordpress Challenge Part 1

Thank for your checking my code. Any and every ounce of feedback will be greatly appreciated.

How to deploy and test:

1) Download repo content to a local folder.
2) Create new database within phpmyadmin and import data from DB found in "@wp-db" folder
3) Connect database to WP installation using the following parameters:

```php
/** Database name */
define( 'DB_NAME', 'bitnami_wordpress' );
/** Database username */
define( 'DB_USER', 'bn_wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'e02e18a2b4' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3306' );
```

4) Navigate to [localhost/wp-admin](https://localhost/wp-admin)

4.1) Use the proper port if you've changed your php defaults.

5) Log in with these credentials:
- >username: admin
- >password:gSwtSrx0M8Yj@^MjqvqOGx1$

6) If all else fails, download [All In One WP Migration Plugin](https://wordpress.org/plugins/all-in-one-wp-migration/)

7) Install the [backup file](https://drive.google.com/file/d/1PCrAmXHJeFQDTHrphz0-q-bYDf_NDh5G/view?usp=sharing) using said tool and use above credentials to access WP installation

Feel free to reach me at:
```html
<a href="mailto:mferrusca@gmail.com">mferrusca@gmail.com</a>
```