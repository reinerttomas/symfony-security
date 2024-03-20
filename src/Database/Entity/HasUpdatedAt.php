<?php

declare(strict_types=1);

namespace App\Database\Entity;

use Carbon\Carbon;
use Doctrine\ORM\Mapping as ORM;

trait HasUpdatedAt
{
    /**
     * @internal
     */
    #[ORM\PreUpdate]
    public function setUpdatedAt(): void
    {
        $this->updatedAt = Carbon::now();
    }
}
