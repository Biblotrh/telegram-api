<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Builder;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForceReplyArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LinkPreviewOptionsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageEntityArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardRemoveArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyParametersArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * @see     MessageArgumentInterface
 */
interface MessageArgumentBuilderInterface
{
    public function setChatId(string|int|float $chatId): MessageArgumentBuilderInterface;

    public function setText(string $text): MessageArgumentBuilderInterface;

    public function setMessageThreadId(int $messageThreadId): MessageArgumentBuilderInterface;

    public function setParseMode(string $parseMode = null): MessageArgumentBuilderInterface;

    public function setEntities(array $entities): MessageArgumentBuilderInterface;

    public function addEntity(MessageEntityArgumentInterface $entity): MessageArgumentBuilderInterface;

    public function setLinkPreviewOptions(LinkPreviewOptionsArgumentInterface $linkPreviewOptions): MessageArgumentBuilderInterface;

    public function setNotificationDisabled(bool $notificationDisabled): MessageArgumentBuilderInterface;

    public function setContentProtected(bool $contentProtected): MessageArgumentBuilderInterface;

    public function setReplyParameters(ReplyParametersArgumentInterface $replyParameters): MessageArgumentBuilderInterface;

    public function setReplyMarkup(
        InlineKeyboardMarkupArgumentInterface
        |ReplyKeyboardMarkupArgumentInterface
        |ReplyKeyboardRemoveArgumentInterface
        |ForceReplyArgumentInterface $replyMarkup
    ): MessageArgumentBuilderInterface;

    public function setInlineKeyboardMarkup(InlineKeyboardMarkupArgumentInterface $replyMarkup): MessageArgumentBuilderInterface;

    public function setReplyKeyboardMarkup(ReplyKeyboardMarkupArgumentInterface $replyMarkup): MessageArgumentBuilderInterface;

    public function setReplyKeyboardRemove(ReplyKeyboardRemoveArgumentInterface $replyMarkup): MessageArgumentBuilderInterface;

    public function setForceReply(ForceReplyArgumentInterface $replyMarkup): MessageArgumentBuilderInterface;

    public function build(): MessageArgumentInterface;
}
