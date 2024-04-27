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
        // Ellenőrizd, hogy van-e feltöltött fájl
        if ($request->hasFile('certificate')) {
            // Fájl mentése a tárolásra (pl. a storage/app/public mappába)
            $path = $request->file('certificate')->store('public/certificates');
    
            // Tanóra azonosító megszerzése (például az utolsó megtekintett tanóra)
            $classId = Auth::user()->courses->last()->classes->last()->id;
            
            // Felhasználó azonosító megszerzése
            $userId = Auth::id();
    
            // Az útvonal, tanóra azonosító és felhasználó azonosító mentése az adatbázisba
            Attendance::create([
                'certificate_path' => $path,
                'class_id' => $classId,
                'user_id' => $userId,
            ]);
    
            // Sikeres feltöltés esetén visszairányítás vagy egyéb teendők
            return redirect()->back()->with('success', 'Az igazolás sikeresen feltöltve.');
        }
    
        // Ha nincs fájl feltöltve, akkor visszairányítás hibaüzenettel
        return redirect()->back()->with('error', 'Nem található feltöltött fájl.');
    }
    
    
    

}