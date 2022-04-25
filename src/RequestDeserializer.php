<?php

declare(strict_types=1);

namespace Reports;

use Doctrine\Common\Collections\ArrayCollection;
use Psr\Http\Message\StreamInterface;
use Reports\Domain\OutputTypeEnum;
use Reports\Domain\Request\RequestDto;

class RequestDeserializer
{
    public function deserialize(StreamInterface $stream): RequestDto
    {
        /**
         * @todo тут должна быть логика десериализации запроса ($stream) в {@see RequestDto}.
         *          Сейчас просто заглушка.
         */
        $criterias = new ArrayCollection();
        $request = new RequestDto(
            type: 'orders',
            outputType: OutputTypeEnum::CSV,
            criterias: $criterias
        );

        return $request;
    }
}
