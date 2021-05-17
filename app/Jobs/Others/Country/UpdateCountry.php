<?php

namespace App\Jobs\Others\Country;

use App\Http\Requests\Others\Country\CountryRequest;
use App\Http\Resources\Others\Country\CountryResource;
use App\Models\Others\Country\Country;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdateCountry implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private CountryRequest $theRequest; private Country $theModel;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( CountryRequest $countryRequest, Country $country )
    {
        $this -> theRequest     = $countryRequest;
        $this -> theModel       = $country;
    }

    /**
     * Execute the job.
     *
     * @return CountryResource|mixed
     */
    public function handle() : CountryResource
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new CountryResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
