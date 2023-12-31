<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Этот объект представляет собой файл анимации (видео GIF или H.264/MPEG-4 AVC без звука).
 * @link    https://core.telegram.org/bots/api#animation
 */
interface AnimationInterface
{
    /**
     * Идентификатор этого файла, который можно использовать для загрузки или повторного использования файла.
     *
     * @return string
     */
    public function getFileId(): string;

    /**
     * Уникальный идентификатор этого файла, который должен быть одинаковым во времени и для разных ботов.
     * Невозможно использовать для загрузки или повторного использования файла.
     *
     * @return string
     */
    public function getFileUniqueId(): string;

    /**
     * Ширина видео, определенная отправителем.
     *
     * @return int
     */
    public function getWidth(): int;

    /**
     * Высота видео, определенная отправителем.
     *
     * @return int
     */
    public function getHeight(): int;

    /**
     * Продолжительность видео в секундах, указанная отправителем.
     *
     * @return int
     */
    public function getDuration(): int;

    /**
     * Необязательный. Миниатюра анимации, указанная отправителем.
     *
     * @return PhotoSizeInterface|null
     */
    public function getThumbnail(): ?PhotoSizeInterface;

    /**
     * Необязательный. Имя исходного файла анимации, определенное отправителем.
     *
     * @return string|null
     */
    public function getFileName(): ?string;

    /**
     * Необязательный. MIME-тип файла, определенный отправителем.
     *
     * @return string|null
     */
    public function getMimeType(): ?string;

    /**
     * Необязательный. Размер файла в байтах. Он может быть больше 2^31, и в некоторых языках программирова
     * ния могут возникать трудности/скрытые дефекты при его интерпретации. Но оно имеет не более 52 значащ
     * их битов, поэтому для хранения этого значения безопасно использовать 64-битное целое число со знаком
     * или тип с плавающей запятой двойной точности.
     *
     * @return int|float|null
     */
    public function getFileSize(): null|int|float;
}
