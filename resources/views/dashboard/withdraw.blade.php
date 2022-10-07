<x-dashboard-layout pageHeader="Withdraw">

    @push('headTags')
   
    @endpush

    
    <x-balances/>

    <section class="container mb-5"> 

      <x-accordion accordionTitle='Transfer earnings to wallet' accordionId='transferEarnings'>

        <form method="POST" action="/users/authenticate">

          <div class="form-floating mb-3">
            <select class="form-select" required>
              <option value="investment" selected>Invesment Earnings</option>
              <option value="referral">Referral earnings</option>
            </select>
            <label class="form-label">Choose earnings to transfer</label>
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

      <x-accordion accordionTitle='Withdraw funds' accordionId='withdrawFunds'>

        <form method="POST" action="/users/authenticate">

          <div class="form-floating mb-3">
            <select class="form-select" required>
              <option value="BTC" selected>BTC</option>
              <option value="ETH">ETH</option>
              <option value="USDT">USDT</option>
            </select>
            <label class="form-label">Choose Coin <i class="fa-solid fa-coins"></i></label>
          </div>

           <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="Enter wallet address" name="walletAddress" required>
            <label>Wallet Address <i class="fa-solid fa-wallet"></i></label>
          </div>

          <div class="form-floating mb-3">
            <input type="number" class="form-control" placeholder="Enter amount in dollars" name="amount" required>
            <label>Amount <i class="fa-solid fa-dollar-sign"></i></label>
          </div>

          <p class="text-primary">Please make sure that: </p>
          <ul class="list custom-list">
            <li>You have the available funds in your wallet.</li>
            <li>Wallet address provided is accurate.</li>
          </ul>

          <div class="d-flex flex-row align-items-center mb-4">
            <div class="form-outline flex-fill mb-0">
              <input class="form-check-input me-2" type="checkbox" name="confirmDetails" required/>
              <label class="form-check-label">I have confirmed that all details provided are correct</label>
            </div>
          </div>

          <div class="d-grid mx-4 mb-3 mb-lg-4 rounded-pill">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
          </div>
        </form>
      </x-accordion>


    </section>
    
    <section class="container mb-5">
        <x-card cardHeader="Withdraw History" >
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-primary">
                      <tr>
                        <th>Transaction ID</th>
                        <th>Amount</th>
                        <th>Coin</th>
                        <th>Hash ID</th>
                        <th>Date</th>
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
     