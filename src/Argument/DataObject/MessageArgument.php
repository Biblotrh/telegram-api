<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LinkPreviewOptionsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageEntityArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyParametersArgumentInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ForceReplyInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\InlineKeyboardMarkupInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\LinkPreviewOptionsInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ReplyKeyboardMarkupInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ReplyKeyboardRemoveInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Метод "sendMessage".
 * Используйте этот метод для отправки текстовых сообщений. В случае успеха отправленное Message возв
 * ращается.
 *
 * @see     https://core.telegram.org/bots/api#sendmessage
 * @see     https://core.telegram.org/bots/api#message
 */
class MessageArgument implements MessageArgumentInterface
{
    public function __construct(
        private string|int|float|null $chatId = null,
        private ?int $messageThreadId = null,
        private ?string $text = null,
        private ?string $parseMode = null,
        private ?array $entities = null,
        private ?LinkPreviewOptionsInterface $linkPreviewOptions = null,
        private ?bool $notificationDisabled = null,
        private ?bool $contentProtected = null,
        private ?ReplyParametersArgumentInterface $replyParameters = null,
        private InlineKeyboardMarkupInterface|ReplyKeyboardMarkupInterface|ReplyKeyboardRemoveInterface|ForceReplyInterface|null $replyMarkup = null,
    ) {
    }

    public function getChatId(): float|int|string|null
    {
        return $this->chatId;
    }

    public function setChatId(float|int|string $chatId): void
    {
        $this->chatId = $chatId;
    }

    public function getMessageThreadId(): ?int
    {
        return $this->messageThreadId;
    }

    public function setMessageThreadId(int $messageThreadId = null): void
    {
        $this->messageThreadId = $messageThreadId;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function getParseMode(): ?string
    {
        return $this->parseMode;
    }

    public function setParseMode(string $parseMode = null): void
    {
        $this->parseMode = $parseMode;
    }

    public function getEntities(): ?array
    {
        return $this->entities;
    }

    public function setEntities(array $entities = null): void
    {
        $this->entities = $entities;
    }

    public function addEntity(MessageEntityArgumentInterface $entity): void
    {
        $this->entities[] = $entity;
    }

    public function getLinkPreviewOptions(): LinkPreviewOptionsInterface|LinkPreviewOptionsArgumentInterface|null
    {
        return $this->linkPreviewOptions;
    }

    public function setLinkPreviewOptions(LinkPreviewOptionsInterface|LinkPreviewOptionsArgumentInterface $linkPreviewOptions = null): void
    {
        $this->linkPreviewOptions = $linkPreviewOptions;
    }

    public function isNotificationDisabled(): ?bool
    {
        return $this->notificationDisabled;
    }

    public function setNotificationDisabled(bool $notificationDisabled = null): void
    {
        $this->notificationDisabled = $notificationDisabled;
    }

    public function isContentProtected(): ?bool
    {
        return $this->contentProtected;
    }

    public function setContentProtected(bool $contentProtected = null): void
    {
        $this->contentProtected = $contentProtected;
    }

    public function getReplyParameters(): ?ReplyParametersArgumentInterface
    {
        return $this->replyParameters;
    }

    public function setReplyParameters(ReplyParametersArgumentInterface $replyParameters = null): void
    {
        $this->replyParameters = $replyParameters;
    }

    public function getReplyMarkup(): InlineKeyboardMarkupInterface|ReplyKeyboardMarkupInterface|ReplyKeyboardRemoveInterface|ForceReplyInterface|null
    {
        return $this->replyMarkup;
    }

    public function setReplyMarkup(InlineKeyboardMarkupInterface|ReplyKeyboardMarkupInterface|ReplyKeyboardRemoveInterface|ForceReplyInterface $replyMarkup = null): void
    {
        $this->replyMarkup = $replyMarkup;
    }

    public function setInlineKeyboardMarkup(InlineKeyboardMarkupInterface $replyMarkup = null): void
    {
        $this->replyMarkup = $replyMarkup;
    }

    public function setReplyKeyboardMarkup(ReplyKeyboardMarkupInterface $replyMarkup = null): void
    {
        $this->replyMarkup = $replyMarkup;
    }

    public function setReplyKeyboardRemove(ReplyKeyboardRemoveInterface $replyMarkup = null): void
    {
        $this->replyMarkup = $replyMarkup;
    }

    public function setForceReply(ForceReplyInterface $replyMarkup = null): void
    {
        $this->replyMarkup = $replyMarkup;
    }
}
