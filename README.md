<br>
<br>

<p align="center">
    <img src="docs/logo-full.svg" alt="oppskrift-logo">
</p>

<p align="center">
    <strong>A decentralized network for cooking lovers</strong>
</p>

<br>
<br>

<p align="center">
    <img alt="license-badge" src="https://img.shields.io/github/license/Oppskrift/oppskrift_api_sf?style=for-the-badge">
    <!-- TODO : this is for package.json. shiels.io provide a badge for packagist but this is repo is not meant for packagist<img alt="version-badge" src="https://img.shields.io/github/package-json/v/Oppskrift/oppskrift_api_sf?style=for-the-badge"> -->
</p>

<p align="center">
    <img alt="organization-stars-badge" src="https://img.shields.io/github/stars/Oppskrift?style=for-the-badge">
</p>

<br>

<p>
    <table align="center">
        <tbody>
            <td>
                <br>Status: <b>Work in progress (just starting)</b><br>
            </td>
        </tbody>
    </table>
</p>

<br>

## Warning :warning:

:warning: At first we intended to create a backend using Actix (Rust). Adding to implementing ActivityPub which was new to us, the learning curve was burdening and threatening the progression of the project. To setup the project more quickly we decided to temporarily use Symfony. At some point we intend to switch back to Rust.

## Features

This particular repository is dedicated to the backend activity. It implements [ActivityPub](http://activitypub.rocks/), providing the client to server API and the server to server API.

## Documentation

You will find here specific documentation regarding the backend and its maintenance.  
See full documentation on our [dedicated repository](https://github.com/Oppskrift/oppskrift_doc).

### Installation

After cloning, create a .env.local file with this variable in it :

```dotenv
DATABASE_URL=(comming soon)
```

Then run these commands

```sh
# To install all PHP dependencies
composer install
# To create the database if it is not already created
bin/console doctrine:database:create
# To apply all migrations and create the database schema
bin/console doctrine:migrations:migrate
```

### Upgrade

```sh
# Update the repository
git pull
# Swtich to latest release and replace [tag version] with the provided tag on https://github.com/Oppskrift/oppskrift_api_sf/tags
git checkout [tag version]
# Update your dependencies, maybe nothing will happen. Do not EVER run a `composer update` to upgrade the app
# composer install wil also clear symfony's cache
composer install
# Update the database schema, maybe nothing will happen
bin/console doctrine:migrations:migrate
```

### Troubleshooting

You ran `composer update` despite it is written **not to**. Run `git checkout .` to get your composer.lock to the previous version.  
`composer update` is made to update the dependencies list and install them, it is used by developpers to update dependencies. If you have no specific reason to update a dependency while develepping a feature or fixing something, if you're just maintaining your own instance, do not run `composer update` and stick to `composer install`.

### Specific documentation

- [ActivityPub implementation](https://github.com/Oppskrift/oppskrift_doc/tree/master/ActivityPub)
- [Database schema](https://github.com/Oppskrift/oppskrift_doc/tree/master/Database)

## Tech stack

- **[Symfony](https://symfony.com)** - A strong, versatile, strict and quick to set up PHP Framework
