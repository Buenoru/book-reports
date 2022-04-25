<?php

declare(strict_types=1);

namespace Reports;

use Doctrine\Common\Collections\Collection;
use Reports\Domain\Database\DatabaseTableDto;
use Reports\Domain\OutputTypeEnum;

class OutputBuilder
{
    /**
     * @param Collection<DatabaseTableDto> $collection
     */
    public function fromCollection(Collection $collection, OutputTypeEnum $outputType): string
    {
        return '';
    }
}
