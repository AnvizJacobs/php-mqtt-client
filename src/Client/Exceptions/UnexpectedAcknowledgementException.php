<?php

declare(strict_types=1);

namespace Anviz\MqttClient\Client\Exceptions;

/**
 * Exception to be thrown if an MQTT client encountered an unexpected acknowledgement.
 */
class UnexpectedAcknowledgementException extends MQTTClientException
{
    public function __construct(int $code, string $error)
    {
        parent::__construct(
            sprintf('[%s] Received unexpected acknowledgement: %s', $code, $error),
            $code
        );
    }
}
