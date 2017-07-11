# Laravel-Rabbit

RabbitMQ Queue driver for Laravel.


## Installation

1. Install this package via composer using:

	`composer require aaronjan/laravel-rabbit`

2. Add LaravelQueueRabbitMQServiceProvider to `providers` array in `config/app.php`:

	`LaravelRabbit\LaravelQueueRabbitMQServiceProvider::class,`

3. Add these properties to `.env` with proper values:

		QUEUE_DRIVER=rabbitmq

		RABBITMQ_HOST=127.0.0.1
		RABBITMQ_PORT=5672
		RABBITMQ_VHOST=/
		RABBITMQ_LOGIN=guest
		RABBITMQ_PASSWORD=guest
		RABBITMQ_QUEUE=queue_name


You can also find full examples in src/examples folder.


## Usage

Once you completed the configuration you can use Laravel Queue API. If you used other queue drivers you do not need to change anything else. If you do not know how to use Queue API, please refer to the official Laravel documentation: http://laravel.com/docs/queues


## Test

Unit tests will be provided soon.


## Contribution

You can contribute to this package by discovering bugs and opening issues.


## Supported versions of Laravel (+Lumen)

`5.4`

The version is being matched by the release tag of this library.


## Credits

Forked from [vladimir-yuldashev/laravel-queue-rabbitmq](https://github.com/vladimir-yuldashev/laravel-queue-rabbitmq)
