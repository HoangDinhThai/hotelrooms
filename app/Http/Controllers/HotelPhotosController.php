<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\HotelPhoto;
use Illuminate\Http\Request;

// Controller to Upload and Delete Hotel Photos
class HotelPhotosController extends Controller
{
    // Shows the Upload Form.
    public function uploadPhoto(Hotel $hotel)
    {
        return view('partners.hotels.newphotos', compact('hotel'));
    }

    // Inserts the newly uploaded Photos path in the database.

    public function addphoto(Request $request, Hotel $hotel)
    {
        $File = $request->file('file');
        $Name = time() . $File->getClientOriginalName();
        $File->move('hotelphotos/photos', $Name);
        $hotel->photos()->create(['path' => "/hotelphotos/photos/{$Name}"]);
    }

    //Removes the photo
    public function destroy(Request $request, Hotel $hotel, HotelPhoto $hotelphoto)
    {

        $Id = $hotelphoto->id;
        $Photo = HotelPhoto::find($Id);
        $Photo->delete();
        return back();

    }
   
}
