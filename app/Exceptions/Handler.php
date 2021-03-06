<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Request;
use Illuminate\Auth\AuthenticationException;
use Response;
class Handler extends ExceptionHandler
{
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
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        //NEW STUFF HERE
        if($exception instanceof AuthenticationException){
            $guard = array_get($exception->guards(),0);

            switch($guard){
                case 'rider':
                    $login = 'rider.login';
                    break;

                default:
                    $login = 'login';
                    break;
            }
            return redirect()->guest(route($login));

        };
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
        $class = get_class($exception);
    
        switch($class) {
            case 'Illuminate\Auth\AuthenticationException':
                $guard = array_get($exception->guards(), 0);
                switch ($guard) {
                    case 'admin':
                        $login = 'admin.login';
                        break;
                    case 'rider':
                        $login = 'rider.login';
                        break;
                    default:
                        $login = 'login';
                        break;
                }
    
                return redirect()->route($login);
        }
    
        return parent::render($request, $exception);
    }
//     protected function unauthenticated($request, AuthenticationException $exception)
    
//     {
//        return $request->expectsJson()
//                ? response()->json(['message' => 'Unauthenticated.'], 401)
//                : redirect()->guest(route('authentication.index'));
// }
protected function unauthenticated($request, AuthenticationException $exception)
{
    if ($request->expectsJson()) {
        return response()->json(['error' => 'Unauthenticated.'], 401);
    }
    $guard = array_get($exception->guards(), 0);
    switch ($guard) {
   case 'admin':
        $login = 'admin.login';
        break;
    case 'rider':
        $login = 'rider.login';
        break;
    default:
        $login = 'login';
        break;
    }
    return redirect()->guest(route($login));
}
}

