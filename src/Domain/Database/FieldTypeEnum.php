<?php

declare(strict_types=1);

namespace Reports\Domain\Database;

/**
 * @todo Тут должны быть перечисления ожидаемых от используемой базы типов полей.
 */
enum FieldTypeEnum: string
{
    case STRING = 'string';
    case BOOL = 'boolean';
    case INT32 = 'integer';
    case INT64 = 'bigint';
}
