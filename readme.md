# Open Laravel

A repository of open source projects built using Laravel.

## Getting Started

Clone the project repository by running the command below if you use SSH

`git clone git@github.com:ammezie/openlaravel.git`

If you use https, use this instead

`git clone https://github.com/ammezie/openlaravel.git`

After cloning, run:

`composer install`

Duplicate `.env.example` and rename it `.env`

## Setting Up
Setup your database and `cd` into the project directory then run:

```php artisan migrate```

Once the database is settup and migrations are up, run

```php artisan serve```

and visit [http://localhost:8000/](http://localhost:8000/) to see the application in action.

## TODO

* Filter by stars
* Filter by activities
* ~~Show project repo activity on view project page~~
* Add project screenshot/logo


## Contributing

:+1::tada: First off, thanks for taking the time to contribute! :tada::+1:

**Please submit your pull request against the `develop` branch only.**

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.