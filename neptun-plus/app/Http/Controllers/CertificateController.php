<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Certificate;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
	public function certificate_view()
	{
		$user = Auth::user()->load(['role', 'grades', 'courses', 'attendances']);

		$additionalData = [
			'user' => $user,
		];

		return view('submit_certificate')->with($additionalData);
	}

    public function upload_view()
	{
		$user = Auth::user()->load(['role', 'grades', 'courses', 'attendances']);

		$additionalData = [
			'user' => $user,
		];

		return view('upload_certificate')->with($additionalData);
	}

public function uploadCertificate(Request $request)
{
    if ($request->hasFile('certificate')) {
        $request->validate([
            'certificate' => 'required|mimes:pdf',
        ]);

        $path = $request->file('certificate')->store('public/certificates');

        Certificate::create([
            'user_id' => auth()->user()->id,
            'file_path' => $path,
        ]);

        return redirect()->back()->with('success', 'Az igazolás sikeresen feltöltve.');
    }

    return redirect()->back()->with('error', 'Nem található feltöltött fájl.');
}

}