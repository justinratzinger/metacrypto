@php
    use App\Models\WebsiteVariables;
    $coins = WebsiteVariables::coins();
@endphp

<x-dashboard-layout pageHeader="Deposit">

    @push('headTags')
    <style>
        .crypto-logo{
            width: 60px; height: 60px;
        }

        .crypto-QR{
            display: block; margin-left: auto; margin-right: auto; width: 50%;
        }
    </style>
    @endpush
     
    <x-balances/>
    <section class="container mb-5">
        <x-card cardHeader="Wallets" class="text-white bg-primary">
            <div class="row">
                @foreach ($coins as $row)
                <div class="col-sm-4 text-center">
                    <p class="h4 mb-4">{{ $row['Name'] }}</p>
                    <img src="{{ asset($row['Logo']) }}" class="crypto-logo mb-5">
                    <p class="text-dark">Scan the QR Code below</p>
                    <img src="{{ asset( $row['Admin QR Code']) }}"  class="crypto-QR mb-5" >
                    <p class="text-dark">or copy wallet address</p>
                    <div class="input-group mb-5">
                        <input type="text" class="form-control" value="{{ $row['Admin Address'] }}" id="{{ 'Coin'.$row['ID'] }}" disabled>
                        <button type="button" class="btn btn-primary" onclick="copyToClipboard('{{ 'Coin'.$row['ID'] }}')" >Copy</button>
                      </div>
                </div>
                @endforeach
            </div>
        </x-card>
    </section>
    
    <section class="container mb-5">
        <x-card cardHeader="Deposit History" >
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-primary">
                      <tr >
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
     