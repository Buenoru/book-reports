<?php

declare(strict_types=1);

namespace Reports\Domain\Request;

use Doctrine\Common\Collections\Collection;
use Reports\Domain\OutputTypeEnum;

class RequestDto
{
    public function __construct(
        public readonly string $type,
        public readonly OutputTypeEnum $outputType,
        /** @var Collection<RequestCriteriaDto> */
        public readonly Collection $criterias,
    ) {
    }
}
