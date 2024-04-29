<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Attendance;

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
        $file = $request->file('certificate');
        $contents = file_get_contents($file);

        $classId = Auth::user()->courses->last()->classes->last()->id;

        $userId = Auth::id();

        Attendance::create([
            'certificate_file' => $contents,
            'class_id' => $classId,
            'user_id' => $userId,
        ]);

        return redirect()->back()->with('success', 'Az igazolás sikeresen feltöltve.');
    }

    return redirect()->back()->with('error', 'Nem található feltöltött fájl.');
}
    
    
    

}