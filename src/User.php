<?php
declare(strict_types=1);

namespace Beleriand;

use Carbon\Carbon;

class User extends Model
{
    public function getAgeAttribute(): string
    {
        $date = Carbon::createFromFormat('d/m/Y', $this->birthDate);

        return (string) $date->age;
    }
}
