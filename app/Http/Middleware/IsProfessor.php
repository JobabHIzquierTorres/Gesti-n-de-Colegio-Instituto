<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class IsProfessor
{
    public function handle(Request $request, Closure $next)
    {
        /** @var \App\Models\User|null $user */
        $user = Auth::user();
        Log::debug('IsProfessor Middleware', [
            'is_authenticated' => Auth::check(),
            'user_id' => $user?->id,
            'user_role' => $user?->role,
            'is_professor' => $user?->isProfessor(),
        ]);

        if (!Auth::check()) {
            return redirect()->route('login');
        }
        if (!$user->isProfessor()) {
            return redirect()->route('alumnos-por-curso')->with('error', 'No tienes permiso para acceder a esta sección.');
        }

        return $next($request);
    }
}
