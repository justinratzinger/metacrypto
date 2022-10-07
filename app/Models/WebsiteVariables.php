<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteVariables extends Model
{
    use HasFactory;

    public static function coins(){
    return [          [ 'Name' => 'BTC',
                        'ID' => '1',
                        'Logo' => 'img/dashboard/BTC_Logo.png',
                        'Admin Address' => 'kjdkfjk',
                        'Admin QR Code' =>  'img/dashboard/BTC-QR-Code.png'
                    ],
                    [   'Name' => 'ETH',
                        'ID' => '2',
                        'Logo' => 'img/dashboard/ETH_Logo.png',
                        'Admin Address' => 'adlfalkfla',
                        'Admin QR Code' =>  'img/dashboard/BTC-QR-Code.png'
                    ],
                    [   'Name' => 'USDT',
                        'ID' => '3',
                        'Logo' => 'img/dashboard/USDT_Logo.png',
                        'Admin Address' => 'AJDALJSLAJ',
                        'Admin QR Code' =>  'img/dashboard/BTC-QR-Code.png'
                    ]
            ];
    }
  
    public static function investmentPlans(){

        return [            [  'Name' => 'Basic',
                               'Range' => '100 - 4999',
                               'Referral Commission' =>  '10',
                               'Return' =>  '15',
                               'Period' =>  '24',
                            ],
                            
                            [     'Name' => 'Standard',
                                  'Range' => '5000 - 9999',
                                  'Referral Commission' =>  '10',
                                  'Return' =>  '20',
                                  'Period' =>  '48',
                          ],
                          [       'Name' => 'Executive',
                                  'Range' => '10000 - 20000',
                                  'Referral Commission' =>  '10',
                                  'Return' =>  '40',
                                  'Period' =>  '72',
                           ]
            ];
    }

}
