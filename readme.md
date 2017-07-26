# Open Laravel

A repository of open source projects built using Laravel.

## Getting Started

Clone the project repository by running the command below if you use SSH

`git clone git@github.com:ammezie/openlaravel.git`

If you use https, use this instead

`git clone https://github.com/ammezie/openlaravel.git`

## Getting Started

`cd` into the project directory and run:

`composer install`

Duplicate `.env.example` and rename it `.env`

Run:

`php artisan key:generate`

Then run

`npm install`

## Setup Algolia

Create a free Algolia account at [https://www.algolia.com/users/sign_up](https://www.algolia.com/users/sign_up) then fill in your Algolia API Keys in your `.env` file:

```
ALGOLIA_APP_ID=xxxxxxxxxx
ALGOLIA_KEY=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
ALGOLIA_SECRET=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
```

## Setup GitHub
Create a GitHub personal access token at [https://github.com/settings/tokens](https://github.com/settings/tokens) with the following scopes unders `repo:status` and `public_repo` then fill in the generated token in your `.env` file:

```
GITHUB_TOKEN=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
```

Then run:

`npm run dev`

## Database Migrations

Be sure to fill in your database details in your `.env` file before running the migrations:

`php artisan migrate`

Once the database is settup and migrations are up, run

`php artisan serve`

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