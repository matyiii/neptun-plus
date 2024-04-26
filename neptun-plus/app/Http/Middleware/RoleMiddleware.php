<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
	 */
	public function handle(Request $request, Closure $next, string $role): Response
	{
		// Check if the user is authenticated
		if (!$request->user()) {
			return redirect()->route('login'); // Redirect unauthenticated users to the login page
		}

		// Check if the user has one of the specified roles
		if ($request->user()->hasRole($role)) {
			return $next($request); // User has one of the specified roles, allow access
		}

		// User does not have any of the specified roles, deny access
		abort(403, 'Unauthorized');
	}
}
