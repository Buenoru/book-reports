<?php

declare(strict_types=1);

namespace Reports\Domain\Request;

enum RequestCriteriaConditionsEnum
{
    case EQUALS;
    /** greater */
    case GT;
    /** greater or equal */
    case GTE;
    /** less */
    case LT;
    /** less or equal */
    case LTE;

}
