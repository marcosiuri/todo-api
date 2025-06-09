<?php

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * Registre os callbacks para tratar exceções do aplicativo.
     */
    public function register(): void
    {
       $this->renderable(function (ValidationException $e, $request) {
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Dados inválidos.',
                    'errors' => $e->errors(),
                ], 422);
            }
        });

        $this->renderable(function (AuthorizationException $e, $request) {
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Você não tem permissão para realizar esta ação.',
                ], 403);
            }
        });

        $this->renderable(function (ModelNotFoundException $e, $request) {
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Recurso não encontrado.',
                ], 404);
            }
        });

        $this->renderable(function (Throwable $e, $request) {
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Erro interno no servidor.',
                    'error' => config('app.debug') ? $e->getMessage() : null,
                ], 500);
            }
        });
    }
}
