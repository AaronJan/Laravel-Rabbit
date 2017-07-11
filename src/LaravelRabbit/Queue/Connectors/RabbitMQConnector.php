<?php

namespace LaravelRabbit\Queue\Connectors;

use Illuminate\Queue\Connectors\ConnectorInterface;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use LaravelRabbit\Queue\RabbitMQQueue;

class RabbitMQConnector implements ConnectorInterface
{
    /** @var AMQPStreamConnection */
    private $connection;

    /**
     * Establish a queue connection.
     *
     * @param array $config
     *
     * @return \Illuminate\Contracts\Queue\Queue
     */
    public function connect(array $config)
    {
        // create connection with AMQP
        $this->connection = new AMQPStreamConnection(
            $config['host'],
            $config['port'],
            $config['login'],
            $config['password'],
            $config['vhost']
        );

        return new RabbitMQQueue(
            $this->connection,
            $config
        );
    }

    public function connection()
    {
        return $this->connection;
    }
}
