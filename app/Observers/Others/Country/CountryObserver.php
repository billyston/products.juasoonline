<?php

namespace App\Observers\Others\Country;

use App\Models\Others\Country\Country;

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
