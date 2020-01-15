# Laravel MongoDB

## Set Permission

``` bash
# Linux Only
$ Setup permision

- /storage => 777
- /storage/app/public => 777
- /storage/app/framework => 777
- /storage/app/framework/* => 777
- /storage/app/logs => 777
- /bootstrap/cache => 777

```
## Setup
``` bash

# install dependencies on root folder
$ composer install

# Generate app key
$ php artisan key:generate

# Create env on /src folder
$ touch .env


```

Add this to .env

```js
MONG_DB_HOST=
MONGO_DB_PORT=
MONGO_DB_DATABASE=
MONGO_DB_USERNAME=
```

Run Project

```bash

# serve and will run at localhost:8000
$ php artisan serve

```

