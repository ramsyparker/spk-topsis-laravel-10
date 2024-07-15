
# SPK TOPSIS Laravel 10

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Introduction

SPK TOPSIS Laravel 10 is a web application developed using the Laravel framework. This project implements the Technique for Order of Preference by Similarity to Ideal Solution (TOPSIS) method for decision-making.

## Table of Contents

- [Introduction](#introduction)
- [Installation](#installation)
- [Usage](#usage)
- [Features](#features)
- [Dependencies](#dependencies)
- [Configuration](#configuration)
- [Documentation](#documentation)
- [Examples](#examples)
- [Troubleshooting](#troubleshooting)
- [Contributors](#contributors)
- [License](#license)

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/ramsyparker/spk-topsis-laravel-10.git
   cd spk-topsis-laravel-10
   ```

2. Install the dependencies:
   ```bash
   composer install
   npm install
   ```

3. Copy the `.env.example` file to `.env` and configure your environment variables:
   ```bash
   cp .env.example .env
   ```

4. Generate the application key:
   ```bash
   php artisan key:generate
   ```

5. Run the migrations:
   ```bash
   php artisan migrate
   ```

6. Serve the application:
   ```bash
   php artisan serve
   ```

## Usage

To use the application, open your browser and navigate to `http://localhost:8000`. Follow the instructions on the website to perform TOPSIS calculations.

## Features

- Implements the TOPSIS method for decision-making.
- User authentication and management.
- Data input and result export.

## Dependencies

- PHP ^8.0
- Laravel ^10.0
- Node.js and npm
- Composer

## Configuration

Make sure to configure your `.env` file with the appropriate database and application settings.

## Documentation

For more details on how to use Laravel, visit the [official Laravel documentation](https://laravel.com/docs).

## Examples

Here are some example commands you can use with this project:

- Running tests:
  ```bash
  php artisan serve
  ```

- Compiling assets:
  ```bash
  npm run dev
  npm run build 
  ```

## Troubleshooting

If you encounter any issues, here are some steps to help resolve common problems:

- Check that all dependencies are installed correctly.
- Ensure that your `.env` file is configured properly.
- Verify that the database is set up and running.

## Contributors

- Ramsy Parker

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
