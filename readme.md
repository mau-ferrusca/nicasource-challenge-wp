Thank for your checking my code.

How to deploy and test:

1) Download repo content to a local folder.
2) Create new database within phpmyadmin
3) Connect database to WP installation using the following parameters:
define( 'DB_NAME', 'bitnami_wordpress' );

```
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
username: admin
password:gSwtSrx0M8Yj@^MjqvqOGx1$
