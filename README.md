# Drupal-Sandbox

A Sandbox to test the Drupal core by using docker compose.

## Inside this box

* PHP 7.4
* MySQL 5
* PostGres 12
* Built-in Drupal default test
* Composer 2
* Ahoy

## Build and Run

You need to copy `.env.default` to `.env` and modify, then run

```
ahoy build
```

The site will be availalbe at `http://localhost:8888`