<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForceReplyArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LocalFileArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardRemoveArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyParametersArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendVideoNoteArgumentInterface;

class SendVideoNoteArgument implements SendVideoNoteArgumentInterface
{
    public function __construct(
        private readonly int|float|string $chatId,
        private readonly LocalFileArgumentInterface|string $videoNote,
        private readonly ?int $duration = null,
        private readonly ?int $length = null,
        private readonly LocalFileArgumentInterface|string|null $thumbnail = null,
        private readonly ?bool $disableNotification = null,
        private readonly ?bool $protectContent = null,
        private readonly ?ReplyParametersArgumentInterface $replyParameters = null,
        private readonly InlineKeyboardMarkupArgumentInterface
                        |ReplyKeyboardMarkupArgumentInterface
                        |ReplyKeyboardRemoveArgumentInterface
                        |ForceReplyArgumentInterface
                        |null $replyMarkup = null,
        protected readonly ?int $messageThreadId = null,
    ) {
    }

    public function getChatId(): float|int|string
    {
        return $this->chatId;
    }

    public function getVideoNote(): LocalFileArgumentInterface|string
    {
        return $this->videoNote;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function getLength(): ?int
    {
        return $this->length;
    }

    public function getThumbnail(): LocalFileArgumentInterface|string|null
    {
        return $this->thumbnail;
    }

    public function wantDisableNotification(): ?bool
    {
        return $this->disableNotification;
    }

    public function wantProtectContent(): ?bool
    {
        return $this->protectContent;
    }

    public function getReplyParameters(): ?ReplyParametersArgumentInterface
    {
        return $this->replyParameters;
    }

    public function getMessageThreadId(): ?int
    {
        return $this->messageThreadId;
    }

    public function getInlineKeyboardMarkup(): ?InlineKeyboardMarkupArgumentInterface
    {
        return $this->replyMarkup instanceof InlineKeyboardMarkupArgumentInterface ? $this->replyMarkup : null;
    }

    public function getReplyKeyboardMarkup(): ?ReplyKeyboardMarkupArgumentInterface
    {
        return $this->replyMarkup instanceof ReplyKeyboardMarkupArgumentInterface ? $this->replyMarkup : null;
    }

    public function getReplyKeyboardRemove(): ?ReplyKeyboardRemoveArgumentInterface
    {
        return $this->replyMarkup instanceof ReplyKeyboardRemoveArgumentInterface ? $this->replyMarkup : null;
    }

    public function getForceReply(): ?ForceReplyArgumentInterface
    {
        return $this->replyMarkup instanceof ForceReplyArgumentInterface ? $this->replyMarkup : null;
    }
}
