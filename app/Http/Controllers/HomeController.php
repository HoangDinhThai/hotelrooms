<?php

namespace App\Http\Controllers;

use App\Partner;
use App\Proposal;
use App\Role;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    // Used for Authorising the user.
    public function index()
    {
        //Checks to see what Role Id the Logged in user has.
        $Id = Auth::user()->id;
        $CurrentUser = User::find($Id);
        $UsersRole = $CurrentUser->role;
        $Partner = $CurrentUser->partners;
        $RoleId = $UsersRole->id;
        // dd($RoleId);
        //Depending on the Role Id different Dashboards are loaded.
        if ($RoleId == 2) {
            return view('search');
            // return view('userDash', compact('UsersRole'));
        } else if ($RoleId == 4) {
            return view('adminM.master', compact('UsersRole'));
            // return view('admin.adminDash', compact('UsersRole'));
        } else if ($RoleId == 1) {
            // return view('search');
            $PartnerHotels = $Partner->hotels->count();
            return view('partners.partnerDash', compact('UsersRole', 'Partner', 'PartnerHotels'));
            // return view('/profile', compact('proposal'));
        } else {
            return view('auth.login');
        }
    }
    //Updates a User Role to Partner if the Admin accepts the Partner Request.
    public function update(Proposal $proposal, Role $role, Partner $partner)
    {

        //Finds the User a Proposal belongs to
        $Id = $proposal->id;
        $Proposal = Proposal::find($Id);
        $UserId = $Proposal->User->id;
        $User = User::find($UserId);

        // Updates the Users Role to Partner
        User::where('id', $UserId)->update(array('role_id' => '1'));
        $CompanyName = $Proposal->CompanyName;
        $CompanyEmail = $Proposal->CompanyEmail;
        $HQAddress = $Proposal->HQAddress;

        // Creates a record in the Partners table with details such as Company Name
        $User->addPartner(

            $partner->create(
                [
                    'CompanyName' => $CompanyName,
                    'CompanyEmail' => $CompanyEmail,
                    'HQAddress' => $HQAddress,
                    'user_id' => $UserId])

        );

        // Deletes the Proposal.
        $proposal->delete();
        return back();

    }
    public function profile()
    {
        if (Auth::check()) {
            $UserId = Auth::id();
            $User = User::find($UserId);
            if ($User->role->id == 2);
            {
                if ($User->proposals) {
                    $proposal = $User->proposals;
                    return view('profile', compact('proposal'));
                }
                else
                {
                    return view('profileproposal');
                }
            }
        } else {
            return redirect('/login');
        }
    }
}
