<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use App\Traits\RestTrait;
use App\Traits\RestExceptionHandlerTrait;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;

class Handler extends ExceptionHandler
{   


    use RestTrait;
    use RestExceptionHandlerTrait;



    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];



    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];




    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }



    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {   
        

        if(!$this->isApiCall($request)) {
            $retval=parent::render($request, $exception);
        } else {
            $retval=$this->getJsonResponseForException($request, $exception);
        }


        
        return $retval;
    }




    protected function getStatusCode(\Exception $e){

        if ($e instanceof HttpException) {
            return $e->getStatusCode();
        }

        // данное исключение не является потомком \Symfony\Component\HttpKernel\Exception\HttpException,
        // поэтому небольшой хак
        if ($e instanceof ModelNotFoundException) {
            return 404;
        }


        if ($e instanceof ModelValidateException) {
            return 401;
        }

        return 500;
    }



    public function getMessage(\Exception $e){
        

        // это исключение я создал сам и использую в моделях,
        // у него человекопонятные сообщения типа «Не удалось сохранить запись»
        // if ($e instanceof DatabaseException) {
        //     return $e->getMessage();
        // }


        if ($e instanceof ModelNotFoundException) {
            return "Record not found";
            //return trans('main.model_not_found');
        }


        if ($e instanceof ModelValidateException) {
            return "Invalid attributes";
        }

        return $e->getMessage();
    }
}
