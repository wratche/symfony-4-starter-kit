<?php

declare(strict_types=1);

namespace App\Helper;

use Psr\Log\LoggerInterface;

trait LoggerTrait
{
    /**
     * @var LoggerInterface|null
     */
    private $logger;

    /**
     * Detailed debug information
     */
    private function logDebug(string $message, array $context = []): void
    {
        if ($this->logger) {
            $this->logger->debug($message, $context);
        }
    }

    /**
     * @required
     */
    public function setLogger(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }

    /**
     * Interesting events
     *
     * Examples: User logs in, SQL logs.
     */
    private function logInfo(string $message, array $context = []): void
    {
        if ($this->logger) {
            $this->logger->info($message, $context);
        }
    }

    /**
     * Uncommon events
     */
    private function logNotice(string $message, array $context = []): void
    {
        if ($this->logger) {
            $this->logger->notice($message, $context);
        }
    }

    /**
     * Exceptional occurrences that are not errors
     *
     * Examples: Use of deprecated APIs, poor use of an API,
     * undesirable things that are not necessarily wrong.
     */
    private function logWarning(string $message, array $context = []): void
    {
        if ($this->logger) {
            $this->logger->warning($message, $context);
        }
    }

    /**
     * Runtime errors
     */
    private function logError(string $message, array $context = []): void
    {
        if ($this->logger) {
            $this->logger->error($message, $context);
        }
    }

    /**
     * Critical conditions
     *
     * Example: Application component unavailable, unexpected exception.
     */
    private function logCritical(string $message, array $context = []): void
    {
        if ($this->logger) {
            $this->logger->critical($message, $context);
        }
    }

    /**
     * Action must be taken immediately
     *
     * Example: Entire website down, database unavailable, etc.
     * This should trigger the SMS alerts and wake you up.
     */
    private function logAlert(string $message, array $context = []): void
    {
        if ($this->logger) {
            $this->logger->alert($message, $context);
        }
    }

    /**
     * Urgent alert.
     */
    private function logEmergency(string $message, array $context = []): void
    {
        if ($this->logger) {
            $this->logger->emergency($message, $context);
        }
    }
}
