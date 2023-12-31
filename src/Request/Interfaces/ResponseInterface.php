<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Request\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
interface ResponseInterface
{
    public function getHeaders(): array;

    public function getResponseData(): array;

    public function getCode(): ?int;

    public function getErrorMessage(): ?string;

    public function isError(): bool;
}
