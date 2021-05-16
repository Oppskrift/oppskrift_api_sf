# Oppskrit API

## Installation

```sh
composer install
# create file .env.local
# add the DATABASE_URL var from the .env file and customize it (remember the project runs with PostgreSQL)
bin/console doctrine:database:create
bin/console doctrine:migrations:migrate
```