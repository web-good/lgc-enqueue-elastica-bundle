<?php

declare(strict_types=1);

namespace Enqueue\ElasticaBundle;


class KafkaTopicName
{
    /**
     * @return string
     */
    public static function getTopicNamePopulate(): string
    {
        return $_ENV['KAFKA_TOPIC_PREFIX'] . $_ENV['KAFKA_QUERY_NAME_ELASTICSEARCH_POPULATE'];
    }

    public static function getTopicNameChangeEntity(): string
    {
        return $_ENV['KAFKA_TOPIC_PREFIX'] . $_ENV['KAFKA_QUERY_NAME_ELASTICSEARCH_CHANGE_ENTITY'];
    }

}