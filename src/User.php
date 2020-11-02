<?php
declare(strict_types=1);

namespace Beleriand;

use Carbon\Carbon;

class User extends Model
{
    public function getFullNameAttribute(): string
    {
        return $this->first_name. ' '.$this->last_name;
    }

    public function getAgeAttribute(): int
    {
        $date = Carbon::createFromFormat('d/m/Y', $this->birthDate);

        return $date->age;
    }
}
