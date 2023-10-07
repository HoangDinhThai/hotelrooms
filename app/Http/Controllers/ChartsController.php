<?php

namespace App\Http\Controllers; 

use App\Hotel; 
use App\Partner; 
use App\Reservation; 
use Carbon\Carbon; 
use Charts; 
use DB; 
//County
class ChartsController extends Controller {
public function index(Partner $partner) {
// Use the current Users Partner ID to find hotels provided by the logged in partner and places the ID's of these hotels into an Array.
        $PartnerId = $partner->id;
        $Hotels = Hotel::where('partner_id', '=', $PartnerId)->get();
        $HotelId = $Hotels->pluck('id');
        // calculates the total earnings and the earnings made in the current month.
        $TotalEarnings = Reservation::where('hotel_id', $HotelId)->sum('totalPrice');
        $MonthlyEarnings = Reservation::where('hotel_id', $HotelId)
            ->where('created_at', '>=', Carbon::now()->startOfMonth())
            ->sum('totalPrice');
        //Returns a list of countries that the partners hotels are located in and the number of hotels in each Country.
        // $GetCountries = DB::table('hotels')->where('partner_id', '=', $PartnerId)
        //     ->select('County')
        //     ->GroupBy('County')
        //     ->get();
        // $Countries = $GetCountries->pluck('County');
        // foreach ($Countries as $County) {
        //     $Count[] = $Hotels
        //         ->where('County', ' = ', $County)->count();
        // }
        // Counts the Number of reservations for each hotel in the current month.
        $GetReserv = Reservation::whereIn('hotel_id', $HotelId)
            ->where('created_at', '>=', Carbon::now()->startOfMonth())
            ->get();
        foreach ($HotelId as $Id) {
            $NumOfReserv[] = $GetReserv
                ->where('hotel_id', '=', $Id)->count();
        }

        /* Creates 3 charts , 1. Total Bookings for each hotel in the current month ,
        2 .Number of hotels per country
        3.Earnings In the current month         */

        $chart = Charts::create('bar', 'highcharts')
            ->title('Tổng số đặt chỗ')
            ->elementLabel('Số lượng đặt phòng')
            ->labels($Hotels->pluck('Name'))
            ->values($NumOfReserv)
            ->dimensions(1000, 500)
            ->responsive(true);

        // $chart2 = Charts::create('bar', 'highcharts')
        //     ->title('Khách sạn theo Quận')
        //     ->elementLabel('Số lượng khách sạn')
        //     ->labels($Countries)
        //     ->values($Count)
        //     ->dimensions(1000, 500)
        //     ->responsive(true);

        $chart3 = Charts::create('percentage', 'justgage')
            ->title('Tổng thu nhập từ tháng này')
            ->elementLabel('VND')
            ->values([$MonthlyEarnings, 0, $TotalEarnings])
            ->responsive(false)
            ->height(300)
            ->width(0);
        return view('partners.viewcharts', ['chart' => $chart,'chart3' => $chart3]);
    }
}
