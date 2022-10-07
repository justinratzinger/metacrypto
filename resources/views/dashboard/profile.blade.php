
<x-dashboard-layout pageHeader="Profile">

    @push('headTags')
    @endpush

    <div class="container mb-5">
        <!-- Nav tabs & pills -->
        <ul class="nav nav-tabs nav-pills nav-justified">
            <li class="nav-item">
              <a class="nav-link active" data-bs-toggle="tab" href="#profile">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#kyc">KYC</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#security">Security</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#payout-address">Payout address</a>
            </li>
        </ul>
  
        <!-- Tab panes -->
        <div class="tab-content mt-5">
            <div class="tab-pane container active" id="profile">
                
                <x-card cardHeader="Profile">
                    
                </x-card>
            </div>
            <div class="tab-pane container fade" id="kyc">
                <x-card cardHeader="KYC">
                    
                </x-card>
            </div>
            <div class="tab-pane container fade" id="security">
                <x-card cardHeader="Security">
                    
                </x-card>
            </div>
            <div class="tab-pane container fade" id="payout-address">
                <x-card cardHeader="Payout Address">
                    
                </x-card>
            </div>
        </div>
    </div>
  
    @push('footerTags')
    @endpush
 
 </x-dashboard-layout>
     