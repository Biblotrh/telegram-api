<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface ReplyParametersArgumentInterface extends ArgumentInterface
{
    /**
     * Идентификатор сообщения, на которое будет дан ответ в текущем чате или в чате chat_id, если он указа
     * н.
     */
    public function getMessageId(): int|float;

    /**
     * Необязательный. Передайте значение True, если сообщение должно быть отправлено, даже если указанное
     * сообщение, на которое нужно ответить, не найдено; можно использовать только для ответов в одной и то
     * й же теме чата и форума.
     */
    public function isAllowedSendingWithoutReply(): ?bool;

    /**
     * Необязательный. Цитируемая часть сообщения, на которое необходимо ответить; 0–1024 символа после ана
     * лиза сущностей. Цитата должна представлять собой точную подстроку сообщения, на которое нужно ответи
     * ть, включая жирный шрифт, курсив, подчеркивание, зачеркивание, спойлер и элементы custom_emoji. Сооб
     * щение не будет отправлено, если цитата не найдена в исходном сообщении.
     */
    public function getQuote(): ?string;

    /**
     * Необязательный. Режим разбора сущностей в цитате. Дополнительные сведения см. в разделе «Параметры ф
     * орматирования».
     *
     * @see https://core.telegram.org/bots/api#formatting-options
     */
    public function getQuoteParseMode(): ?string;

    /**
     * Необязательный. Список специальных объектов, сериализованный в формате JSON, которые появляются в ци
     * тате. Его можно указать вместо quote_parse_mode.
     *
     * @return MessageEntityArgumentInterface|null
     */
    public function getQuoteEntities(): ?array;

    /**
     * Необязательный. Позиция цитаты в исходном сообщении в кодовых единицах UTF-16.
     */
    public function getQuotePosition(): ?int;
}
