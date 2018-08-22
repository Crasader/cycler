<?php

namespace App\Traits;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Auth\AuthenticationException;

trait RestExceptionHandlerTrait
{




    /**
     * Creates a new JSON response based on exception type.
     *
     * @param Request $request
     * @param Exception $e
     * @return \Illuminate\Http\JsonResponse
     */
    protected function getJsonResponseForException(Request $request, Exception $e)
    {   
        switch(true) {
            
            case $this->isModelNotFoundException($e):
                $retval = $this->modelNotFound($this->getMessage($e),$this->getStatusCode($e));
                break;
            case $this->isHttpException($e):
                $retval = $this->httpException($this->getMessage($e),$this->getStatusCode($e));
                break;
            case $this->isAuthenticationException($e):
                $retval = $this->AuthenticationException($this->getMessage($e));
                break;
            default:
                $retval = $this->badRequest($this->getMessage($e),$this->getStatusCode($e));
        }

        return $retval;
    }




    /**
     * Returns json response for generic bad request.
     *
     * @param string $message
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function badRequest($message='Bad request', $statusCode=400)
    {   
        return $this->jsonResponse(['error' => $message, 'error_code'=>$statusCode], $statusCode);
    }





    /**
     * Returns json response for Eloquent model not found exception.
     *
     * @param string $message
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function modelNotFound($message='Record not found', $statusCode=404)
    {   
        return $this->jsonResponse(['error' => $message], $statusCode);
    }





    /**
     * Returns json response for Eloquent model not found exception.
     *
     * @param string $message
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function httpException($message='Http found', $statusCode=500)
    {   
        return $this->jsonResponse(['error' => $message], $statusCode);
    }
    





    /**
     * Returns json response.
     *
     * @param array|null $payload
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function jsonResponse(array $payload=null, $statusCode=404)
    {
        $payload = $payload ?: [];

        return response()->json($payload, $statusCode);
    }




    /**
     * Determines if the given exception is an Eloquent model not found.
     *
     * @param Exception $e
     * @return bool
     */
    protected function isModelNotFoundException(Exception $e){
        return $e instanceof ModelNotFoundException;
    }



    /**
     * если это потомок \Symfony\Component\HttpKernel\Exception\HttpException
     *
     * @param Exception $e
     * @return bool
     */
    protected function isHttpException(Exception $e){
        return $e instanceof HttpException;
    }
    
    
    
    
    protected function isAuthenticationException(Exception $e){
        return $e instanceof AuthenticationException; 
    }
    
    
    
    protected function AuthenticationException($message='Unauthenticated', $statusCode=401){
    
        return $this->jsonResponse(['error' => $message], $statusCode);; 
    
        
    }

}