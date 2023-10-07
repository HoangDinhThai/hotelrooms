@extends('layouts.app')
@section('content')
<div class="col-md-8 col-md-offset-2" style="margin-top: 69px;">
    <div class="panel panel-default" style="border-top-color: #e74c3c;">
        <div class="panel-heading">Partner Requests from Users:</div>
        <div class="panel-body">
  <ul>
    <table class="table">
      <thead>
        <tr>
        <th>Company Name</th>
        <th>Email</th>
        <th>HQ Address</th>
        <th>Vision</th>
        </tr>
      </thead>
      <tbody>
            <!-- Displays a list of all the partner Proposals sent to Check-In.com and an Accept/Refuse Button -->
          @foreach ($Proposals as $Proposal)

            <tr>
              <td><a class="" href="#">{{$Proposal->CompanyName}}</a></td>
              <td>{{$Proposal->CompanyEmail}}</td>
              <td>{{$Proposal->HQAddress}}</td>
              <td>{{$Proposal->Vision}}</td>

                  <td><a class="btn btn-success pull-right" href="/proposal/{{$Proposal->id}}/accept">Accept</a></td>
                  <td><a class="btn btn-danger pull-right" href="/proposal/{{$Proposal->id}}/decline">Refuse</a></td>
            </tr>
          @endforeach
     </tbody>
 </table>
  <a href="/home" class="btn btn-info">Back to Dashboard.</a>
</div>
</div>
</div>

@endsection
