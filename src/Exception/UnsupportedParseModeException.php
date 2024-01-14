<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception;

use PHPTCloud\TelegramApi\TelegramApiException;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
class UnsupportedParseModeException extends TelegramApiException
{
    public const CODE = 'UnsupportedParseMode';
}