<?php

namespace CreativeSyntax\DevNote\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;

class DevNoteMiddleware
{   
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $check1 = strtolower(env('APP_ENV'));
        $check2 = strtolower(App::environment());
        $check3 = strtolower(app()->environment());
        $isActive = true;
        if ($check1 == 'production' || $check2 == 'production' || $check3 == 'production') {
            $isActive = false;
        }
        if ($isActive) {
            $content = $response->getContent();
            $headEnd = '</head>';
            $headEndPosition = strripos($content, $headEnd);
            if (false !== $headEndPosition) {
                $devNoteStyle = '<link href="' . asset('public/vendor/devnote/css/devnote.min.css') . '" rel="stylesheet" />';
                $content = substr($content, 0, $headEndPosition) . $devNoteStyle . substr($content, $headEndPosition);
            }
            $bodyEnd = '</body>';
            $bodyEndPosition = strripos($content, $bodyEnd);
            if (false !== $bodyEndPosition) {
                $devNoteScript = '<script src="' . asset('public/vendor/devnote/js/devnote.min.js') . '"></script>';
                $content = substr($content, 0, $bodyEndPosition) . $devNoteScript . substr($content, $bodyEndPosition);
            }
            $response->setContent($content);
        }
        return $response;
    }
}