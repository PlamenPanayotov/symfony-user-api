# Symfony API user skeleton.

Symfony API skeleton with user authentication with JWT.

## Installation

Download the source and install vendor folder with composer.

```bash
composer install
```

Set your database and your JWT_SECRET=secret in your .env file as an example:
:
```
DATABASE_URL=mysql://user:password@127.0.0.1:3306/db_name
JWT_SECRET=secret
```
Create your database:
```
php bin/console doctrine:database:create
```

You have users with email and password. Start your server and write this URL in [Postman](https://www.postman.com/): https://localhost:8000/register.  Click on the Body tab. Then in the key type email, for value type user@mail.com. In the next line type password in the key and put 123456 for the value, and do the same in the next line except change password to password_confirmation. Now there is a new user in the database authenticated with JWT. There are /login, /logout, and /profile routes. You have email and password validations.


## License
[MIT](https://choosealicense.com/licenses/mit/)
