<?php
namespace App\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * APIAuthentication middleware
 */
class APIAuthenticationMiddleware
{
    /**
     * Invoke method.
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request The request.
     * @param \Psr\Http\Message\ResponseInterface $response The response.
     * @param callable $next Callback to invoke the next middleware.
     * @return \Psr\Http\Message\ResponseInterface A response
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, $next)
    {
        $apiKey = $request->getHeaderLine('API-KEY');
        if($apiKey === constant("API_KEY")){
            return $next($request, $response);
        }else{
            $newResponse = $response->withHeader('Content-Type', 'application/json')
            ->withHeader('Pragma', 'no-cache')
            ->withStatus(422);
            $body = $newResponse->getBody();
            $body->write(json_encode(['error' => 'unauthenticated']));
            return $newResponse;
        }
    }
}
