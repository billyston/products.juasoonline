<?php

namespace App\Observers\Juaso\Country;

use App\Models\Juaso\Country\Country;

class CountryObserver
{
    /**
     * @param Country $country
     */
    public function creating( Country $country )
    {
        $country -> resource_id = uniqid();
    }
}
