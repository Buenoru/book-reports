<?php

require_once 'vendor/autoload.php';

use Doctrine\Common\Collections\Collection;
use GuzzleHttp\Psr7\MessageTrait;
use Psr\Http\Message\MessageInterface;
use Reports\DatabaseRequester;
use Reports\Interfaces\DatabaseInterface;
use Reports\OutputBuilder;
use Reports\Report;
use Reports\RequestDeserializer;


// Stub
$db = new class implements DatabaseInterface {
    public function queryRows(string $sql): Collection
    {
        return new Doctrine\Common\Collections\ArrayCollection();
    }
};
// Stub
$message = new class implements MessageInterface {
    use MessageTrait;
};

$report = new Report(new RequestDeserializer(), new DatabaseRequester($db), new OutputBuilder());

/**
 * @todo  Ну и этот $r уже стримить куда необходимо
 */
$r = $report->build($message);




