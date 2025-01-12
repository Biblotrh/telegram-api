<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SwitchInlineQueryChosenChatArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
class SwitchInlineQueryChosenChatArgument implements SwitchInlineQueryChosenChatArgumentInterface
{
    public function __construct(
        private readonly string $query,
        private readonly ?bool $allowUserChats = null,
        private readonly ?bool $allowBotChats = null,
        private readonly ?bool $allowGroupChats = null,
        private readonly ?bool $allowChannelChats = null,
    ) {
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function allowUserChats(): ?bool
    {
        return $this->allowUserChats;
    }

    public function allowBotChats(): ?bool
    {
        return $this->allowBotChats;
    }

    public function allowGroupChats(): ?bool
    {
        return $this->allowGroupChats;
    }

    public function allowChannelChats(): ?bool
    {
        return $this->allowChannelChats;
    }
}
