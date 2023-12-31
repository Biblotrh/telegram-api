<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi;

use PHPTCloud\TelegramApi\Type\Interfaces\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
interface TelegramApiManagerInterface
{
    public const TELEGRAM_API_HOST = 'https://api.telegram.org';

    public function getBot(): TelegramBotInterface;

    public function getMe(): UserInterface;

    public function logOut(): bool;

    public function close(): bool;

    public function setTelegramApiHost(string $host): void;
}
