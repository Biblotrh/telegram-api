<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaDocumentArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface InputMediaDocumentArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(InputMediaDocumentArgumentInterface $argument): array;
}
