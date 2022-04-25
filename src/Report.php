<?php

declare(strict_types=1);

namespace Reports;

use Psr\Http\Message\MessageInterface;

class Report
{
    public function __construct(
        private readonly RequestDeserializer $deserializer,
        private readonly DatabaseRequester $databaseRequester,
        private readonly OutputBuilder $outputBuilder,
    ) {
    }

    public function build(MessageInterface $message): string
    {
        $body = $message->getBody();
        $request = $this->deserializer->deserialize($body);
        $collection = $this->databaseRequester->getFiltered($request);

        return $this->outputBuilder->fromCollection($collection, $request->outputType);
    }
}
