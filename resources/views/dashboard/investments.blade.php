@php
use App\Models\WebsiteVariables;
@endphp
<x-dashboard-layout pageHeader="Investments">

    @push('headTags')
   
    @endpush

    <x-balances/>
    <section class="container mb-5"> 
      <x-accordion accordionTitle='Make an investment' accordionId='makeInvestment'>

        <form method="POST" action="/users/authenticate">

          <div class="form-floating mb-3">
            <select class="form-select" required>
             @php
              $investmentPlans = WebsiteVariables::investmentPlans();
             @endphp
             
             @foreach ($investmentPlans as $row)
                 <option value="{{ $row['Name'] }}">{{ $row['Name'] }}</option>
             @endforeach
            </select>
            <label class="form-label">Choose Investment plan</label>
          </div>

          <div class="form-floating mb-3">
            <input type="number" class="form-control" placeholder="Enter amount in dollars" name="amount" required>
            <label>Amount <i class="fa-solid fa-dollar-sign"></i></label>
          </div>

          <div class="d-grid mx-4 mb-3 mb-lg-4 rounded-pill">
            <button type="submit" class="btn btn-primary btn-lg">Transfer</button>
          </div>
        </form>
      </x-accordion>
    </section>

    <section class="container mb-5">
      <x-card cardHeader="Investments" >
          <div class="table-responsive">
              <table class="table table-bordered table-hover">
                  <thead class="table-primary">
                    <tr>
                      <th>Investment ID</th>
                      <th>Plan</th>
                      <th>Capital</th>
                      <th>Start date</th>
                      <th>Total earnings</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>John</td>
                      <td>Doe</td>
                      <td>john@example.com</td>
                      <td>john@example.com</td>
                      <td>john@example.com</td>
                      <td><span class="badge bg-success">Success</span></td>
                    </tr>
                  </tbody>
                </table>
          </div>           
      </x-card>
  </section>
    
   
    @push('footerTags')
    @endpush
 
 </x-dashboard-layout>
     