<?php

return [
    'SOUTHEAST_certificateVerifyPeer' => env('SOUTHEAST_certificateVerifyPeer', FALSE),
    'SOUTHEAST_certificateVerifyHost' => env('SOUTHEAST_certificateVerifyHost',0),
    'SOUTHEAST_gatewayUrl' => env('SOUTHEAST_gatewayUrl','https://test-southeastbank.mtf.gateway.mastercard.com/api/nvp/'),
    'SOUTHEAST_merchantId' => env('SOUTHEAST_merchantId','TESTSEBPAPERLESS'),
    'SOUTHEAST_apiUsername' => env('SOUTHEAST_apiUsername',"Merchant.TESTSEBPAPERLESS"),
    'SOUTHEAST_password' => env('SOUTHEAST_password','70cc59c5d253fdb3f01825e7d7f816ef'),
    'SOUTHEAST_debug' => env('SOUTHEAST_debug',TRUE),
    'SOUTHEAST_version' => env('SOUTHEAST_version','71'),

    'callback_url' => env('southeast__CALLBACK_URL', env('APP_URL').'/southeast/callback'),
];
