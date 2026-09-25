Implementation of the conference guestbook from the fantastic book [Symfony: The Fast Track](https://symfony.com/book).

The project uses Docker for external services, such as the database. A base template for environment variables can be found in `.env.example`. The `.env.test` and `.env.dev` files are for the test and dev environments only, they do not contain any sensitive data.

The following is required as a pre-requisite:
* PHP + any extensions mentioned in the book
* Composer
* Symfony CLI
* Docker

You can check these requirements by running `symfony book:check-requirements`.

To run this project:
1. Start the local web server by running `symfony server:start -d`.
2. Start the external Docker services by running `docker compose up -d`.
3. Optional - open the home page by running `symfony open:local`.
