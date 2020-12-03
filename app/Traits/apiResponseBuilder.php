<?php


namespace App\Traits;


trait apiResponseBuilder
{
    /**
     * @param $data
     * @param $status_message
     * @param $message
     * @param $status_code
     * @return \Illuminate\Http\JsonResponse
     */
    public function successResponse( $data, $status_message, $message, $status_code )
    {
        return response() -> json([ 'status' => $status_message, 'code' => $status_code, 'message' => $message, 'data' => $data ] );
    }

    /**
     * @param $data
     * @param $status_message
     * @param $message
     * @param $status_code
     * @return \Illuminate\Http\JsonResponse
     */
    public function errorResponse( $data, $status_message, $message, $status_code )
    {
        return response() -> json([ 'status' => $status_message, 'code' => $status_code, 'message' => $message, 'data' => $data, ] );
    }
}
