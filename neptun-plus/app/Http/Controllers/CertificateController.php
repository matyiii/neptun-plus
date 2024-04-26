<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CertificateController extends Controller
{
    /**
     * Show the form for submitting a certificate.
     *
     * @return \Illuminate\Http\Response
     */
    public function submit()
    {
        $user = Auth::user()->load(['role', 'grades', 'courses', 'courses.subject', 'attendances']);

		$additionalData = [
			'user' => $user,
		];

		return view('submit_certificate')->with($additionalData);
    }
}