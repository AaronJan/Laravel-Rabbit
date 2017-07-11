<?php

namespace LaravelRabbit;

use Illuminate\Queue\QueueManager;
use Illuminate\Support\ServiceProvider;
use LaravelRabbit\Queue\Connectors\RabbitMQConnector;

class LaravelRabbitServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/rabbitmq.php', 'queue.connections.rabbitmq'
        );
    }

    /**
     * Register the application's event listeners.
     *
     * @return void
     */
    public function boot()
    {
        /** @var QueueManager $queue */
        $queue     = $this->app['queue'];
        $connector = new RabbitMQConnector();

        $queue->stopping(function () use ($connector) {
            $connector->connection()->close();
        });

        $queue->addConnector('rabbitmq', function () use ($connector) {
            return $connector;
        });
    }
}
