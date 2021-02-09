<?php

namespace App\Repositories\Store;

use App\Http\Requests\Store\StoreRequest;
use App\Models\Store\Store;

interface StoreRepositoryInterface
{
    /**
     * @return mixed
     */
    public function index();

    /**
     * @param StoreRequest $storeRequest
     * @return mixed
     */
    public function store( StoreRequest $storeRequest );

    /**
     * @param Store $store
     * @return mixed
     */
    public function show( Store $store );

    /**
     * @param StoreRequest $storeRequest
     * @param Store $store
     * @return mixed
     */
    public function update( StoreRequest $storeRequest, Store $store );

    /**
     * @param Store $store
     * @return mixed
     */
    public function destroy( Store $store );
}
