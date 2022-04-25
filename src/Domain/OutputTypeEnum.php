<?php

declare(strict_types=1);

namespace Reports\Domain;

enum OutputTypeEnum
{
    case XLSX;
    case CSV;
}
