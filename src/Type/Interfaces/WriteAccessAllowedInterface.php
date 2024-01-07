<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Этот объект представляет собой служебное сообщение о том, что пользователь разрешает боту писать соо
 * бщения после добавления его в меню вложений, запуска веб-приложения по ссылке или принятия явного за
 * проса от веб-приложения, отправленного методом requestWriteAccess.
 *
 * @link    https://core.telegram.org/bots/api#writeaccessallowed
 */
interface WriteAccessAllowedInterface
{
    /**
     * Необязательный. Истинно, если доступ был предоставлен после того, как пользователь принял явный запр
     * ос от веб-приложения, отправленный методом requestWriteAccess.
     *
     * @link    https://core.telegram.org/bots/webapps#initializing-mini-apps
     * @return bool|null
     */
    public function isFromRequest(): ?bool;

    /**
     * Необязательный. Имя веб-приложения, если доступ был предоставлен при запуске веб-приложения по ссылке.
     *
     * @return string|null
     */
    public function getWebAppName(): ?string;

    /**
     * Необязательный. Верно, если доступ был предоставлен при добавлении бота во вложение или в боковое меню.
     *
     * @return bool|null
     */
    public function isFromAttachmentMenu(): ?bool;
}
