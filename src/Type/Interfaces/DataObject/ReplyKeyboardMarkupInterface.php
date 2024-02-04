<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * @version 1.0.0
 *
 * Этот объект представляет собой пользовательскую клавиатуру с опциями ответа (подробности и примеры с
 * м. в разделе Знакомство с ботами).
 *
 * @link    https://core.telegram.org/bots/api#replykeyboardmarkup
 * @link    https://core.telegram.org/bots/features#keyboards
 */
interface ReplyKeyboardMarkupInterface
{
    /**
     * Массив строк кнопок, каждая из которых представлена массивом объектов KeyboardButton.
     *
     * @return KeyboardButtonInterface[][]
     */
    public function getKeyboard(): array;

    /**
     * Необязательный. Просит клиентов всегда показывать клавиатуру, когда обычная клавиатура скрыта. По ум
     * олчанию установлено значение false; в этом случае пользовательскую клавиатуру можно скрыть и открыть
     * с помощью значка клавиатуры.
     *
     * @return bool|null
     */
    public function isPersistent(): ?bool;

    /**
     * Необязательный. Просит клиентов изменить размер клавиатуры по вертикали для оптимального соответстви
     * я (например, уменьшить клавиатуру, если на ней всего два ряда кнопок). По умолчанию установлено знач
     * ение false. В этом случае пользовательская клавиатура всегда имеет ту же высоту, что и стандартная к
     * лавиатура приложения.
     *
     * @return bool|null
     */
    public function wantResizeKeyboard(): ?bool;

    /**
     * Необязательный. Просит клиентов скрывать клавиатуру сразу после ее использования. Клавиатура по-преж
     * нему будет доступна, но клиенты будут автоматически отображать в чате обычную буквенную клавиатуру —
     * пользователь может нажать специальную кнопку в поле ввода, чтобы снова увидеть кастомную клавиатуру.
     * По умолчанию ложь.
     *
     * @return bool|null
     */
    public function isOneTimeKeyboard(): ?bool;

    /**
     * Необязательный. Заполнитель, который будет отображаться в поле ввода, когда клавиатура активна; 1-64
     * символов.
     *
     * @return string|null
     */
    public function getInputFieldPlaceholder(): ?string;

    /**
     * Необязательный. Используйте этот параметр, если вы хотите показывать клавиатуру только определенным
     * пользователям. Цели:
     * 1) пользователи, @mentioned в тексте объекта «Message»;
     * 2) если сообщение бота является ответом на сообщение в том же чате и теме форума.
     *
     * Пример: пользователь запрашивает изменение языка бота, бот отвечает на запрос с помощью клавиатуры д
     * ля выбора нового языка. Другие пользователи в группе не видят клавиатуру.
     *
     * @return bool|null
     */
    public function isSelective(): ?bool;
}
