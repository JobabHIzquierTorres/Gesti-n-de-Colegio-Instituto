<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RestrictNonProfessors
{
  public function handle(Request $request, Closure $next)
  {
    /** @var \App\Models\User|null $user */ // puede ser null o una instancia de módelo user
    $user = Auth::user();
    if (Auth::check() && !$user->isProfessor()) {
      return redirect()->route('alumnos-por-curso')->with('error', 'Solo los alumnos autenticados pueden ver esta sección.');
    }

    return $next($request);
  }
}
