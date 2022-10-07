@php
use App\Models\WebsiteVariables;
@endphp
<x-dashboard-layout pageHeader="Referrals">

    @push('headTags')
   
    @endpush

    <x-referral-link/>
     <section class="container mb-5">
      <x-card cardHeader="Referral Earnings" >
          <div class="table-responsive">
              <table class="table table-bordered table-hover">
                  <thead class="table-primary">
                    <tr>
                      <th>User ID</th>
                      <th>Amount invested</th>
                      <th>Commission earned</th>
                      <th>Date Invested</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>John</td>
                      <td>Doe</td>
                      <td>john@example.com</td>
                      <td>john@example.com</td>
                    </tr>
                  </tbody>
                </table>
          </div>           
      </x-card>
  </section>
    
   
    @push('footerTags')
    @endpush
 
 </x-dashboard-layout>
     