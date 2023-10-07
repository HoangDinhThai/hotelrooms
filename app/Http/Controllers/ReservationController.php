<?php

namespace App\Http\Controllers;
use Stripe\Stripe;
use Config;
use App\Hotel;
use App\Reservation;
use App\Room;
use App\User;
use Auth;
use Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mail;
use PDF;
use Validator;
use App\Role;
use App\Partner;
class ReservationController extends Controller
{
    //Shows the User their Reservation Details before confirmation.
    public function index(Hotel $hotel, Room $room, Request $request)
    {

        if (Auth::check()) {

            $UID = Auth::id();
            $FirstDate = $request->session()->get('checkin');

            $SecDate = $request->session()->get('checkout');

            $CheckIn = strtotime($FirstDate);
            $CheckInStr = date('F jS Y', $CheckIn);

            $CheckOut = strtotime($SecDate);
            $CheckOutStr = date('F jS Y', $CheckOut);

            $Difference = strtotime($SecDate) - strtotime($FirstDate);
            $StayDuration = $Difference / 86400;

            $Price = $room->Price;
            $TotalCost = $StayDuration * $Price;

            $ProtectedCost = Crypt::encrypt($TotalCost);

            return view('hotels.booking', compact('hotel', 'room', 'CheckInStr', 'CheckOutStr', 'FirstDate', 'SecDate', 'StayDuration', 'TotalCost', 'ProtectedCost', 'UID'));
        } else {
            return redirect('/login');
        }
    }
    public function store(Partner $partner,Hotel $hotel, Room $room, Request $request, Reservation $reservation, $first, $sec, $protectedCost )
    {
        $rules= [
            'guestName'=>'required|min:6|max:100',
            'phone' => 'required|min:10|max:11,numeric',
            
            ];
    $msg = [
            'guestName.required'=>'Trường Họ Tên Không Được Để Trống!',
            'guestName.min'=>'Tên có ít nhất 8 ký tự!',
            'guestName.max'=>'Tên  tối đa 100 ký tự!',
            'phone.required'=>'SĐT',
            'phone.max'=>'Số điện thoại tối đa 11 số',
            'phone.min'=>'Số điện thoại có tối thiểu 10 số',
            'phone.numeric'=>'Chỉ nhập số không được phép nhập ký tự'
            ];
            $validator = Validator::make($request->all(), $rules , $msg);
            
            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
                        } else{
                            if($request->thanhtoan=="Thanh Toán Tại Khách Sạn")
                            {
                            $uid = Auth::id();
                            $user = User::find($uid);
                            $email = $user->email;
                            $hotel = $room->hotel;
                            $partnerid=$hotel->partner_id;
                            $partner=Partner::find($partnerid);
                            $emailpartner=$partner->CompanyEmail;
                            $hotelid = $hotel->id;
                            $totalcost = Crypt::decrypt($protectedCost);
                            $reservation = new Reservation;
                            $reservation->hotel_id = $hotelid;
                            $reservation->room_id = $room->id;
                            $reservation->guestName = $request->guestName;
                            $reservation->phone = $request->phone;
                            $reservation->checkIn = $first;
                            $reservation->checkOut = $sec;
                            $reservation->totalPrice = $totalcost;
                            $reservation->statuspayment='0';
                            // $json = json_encode($reservation);                           
                           $user->addReservation($reservation);
                           
                            Session::flash('status','Bạn Đã Đặt Phòng Thành Công!');
                             return view('hotels.payment');
                             
                    
                            }else if($request->thanhtoan=="Thanh Toán Qua visa")
                            {
                            $uid = Auth::id();
                            $user = User::find($uid);
                            
                            $email = $user->email;
                            $hotel = $room->hotel;
                            $partnerid=$hotel->partner_id;
                            $partner=Partner::find($partnerid);
                            $emailpartner=$partner->CompanyEmail;
                            $hotelid = $hotel->id;
                            $totalcost = Crypt::decrypt($protectedCost);
                            $reservation = new Reservation;
                            $reservation->hotel_id = $hotelid;
                            $reservation->room_id = $room->id;
                            $reservation->guestName = $request->guestName;
                            $reservation->phone = $request->phone;
                            $reservation->checkIn = $first;
                            $reservation->checkOut = $sec;
                            $reservation->totalPrice = $totalcost;
                            $reservation->statuspayment='1';
                            $idreser=$reservation->id;
                            $user->addReservation($reservation);
                            $idreser=$reservation->id;
                           
                            //
                            
                            $tien = $reservation->totalPrice;
                            return view('hotels.paypal', compact('tien','email','hotel','idreser'));
                            }
                        }

        
    }
    public function show(User $user, Reservation $reservation)
    {
        $uid = Auth::id();
        $user = User::find($uid);
        $email = $user->email;
        $reservations = $user->reservations->sortBy('CheckIn');
        return view('myreservations', compact('reservations'));
    }
    public function destroy(Reservation $reservation)
    {
        $id = $reservation->id;
        $reservation = Reservation::find($id);
       
        $reservation->delete();
        Session::flash('status','Bạn Đã Hủy Phòng Thành Công!');
        return back();
    }

    public function pdfview(Request $request, Reservation $reservation)
    {
        $uid = Auth::id();
        $id = $reservation->id;
        $room = $reservation->room;
        $hotel = $room->hotel;
        $hotelphoto = $hotel->photos->first();
        $reservation = Reservation::where('id', '=', $id)->with('room')->get();
        // $pdf = PDF::loadview('pdfview', compact('reservation', 'hotel', 'hotelphoto'));
        // return $pdf->stream('pdfview.pdf');
         return view('pdfview',compact('reservation','hotel','hotelphoto'));
    }

    public function storePayment(Request $request ,Reservation $reservation)
    {

        
        
        $pay = $request->money;
        $email = $request->emailuser;
        $hotel = $request->infor;
        $id=$request->id;
        $r=Reservation::find($id);
        $status=$r->statuspayment;
        
         
        \Stripe\Stripe::setApiKey("sk_test_YeyrVrdYxmFLBK4PozNf77eR");
        $token = $_POST['stripeToken'];
        try {
            $charge = \Stripe\Charge::create(array(
            'amount' =>$pay,
            'currency' => 'vnd',
            'description' => 'Payment Booking Room',
            'source' => $token,
           
            ));
        } catch (\Stripe\Error\Card $e) {
          
        $reservation = Reservation::find($id);
        $reservation->delete();
            Session::flash('status','lỗi!');
            return back();
        }
      
        Session::flash('status','Bạn Đã Đặt Phòng Thành Công!');
        return view('hotels.payment');
    }
    
}
