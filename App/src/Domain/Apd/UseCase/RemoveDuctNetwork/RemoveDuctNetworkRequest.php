<?php

namespace App\Domain\Apd\UseCase\RemoveDuctNetwork;

class RemoveDuctNetworkRequest
{
    public $projectId;
    public $ductNetworkId;

    public function __construct($projectId, $ductNetworkId)
    {
        $this->projectId = $projectId;
        $this->ductNetworkId = $ductNetworkId;
    }
}