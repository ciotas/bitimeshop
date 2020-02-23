<?php
return [
    'alipay' => [
        'app_id'         => '2016101900720739',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAjISuPf5LoWTu8ZkB3XSsFxyOD07AlMzC5qgPCNaC9o9VMWyt/rANxfN5pa3pd5+Ap0hc0oy+D0rSPYuiHJWOcTQVAIPWdka0jOjGfHLmP77kfeqU7/JXaeIWWCyl69zZT35dzhAU3+54foTYebcTynxFz6vsPVYIZi4TBtOOs2STjvhsxwXp/lg7IibKEO1mQXDpe5p+yrk5TRXAx11xaBQvwj2T7fDx4ilXsZsj/B78IX/ST3umXH18hWJnfjaBXu1p4PQYH/oCupp6V5ZtHpDWkMNp/CiI77WdAeJhPinG34DwS4HgpwpPzpV9kW1Vl/7HCbwGGGfutf4+f78z9QIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAiUwvkIRP/iqrU8xnywFM9FDccDtKIuEEGghaO0bzOHleOu1CwY7//qpZ59tAaIaI2yGVZlo4hhNxeiqLfoYG3OjGeJPeCd7SMdH5YCXjBLaXM/l+N1rzeaPfRBxozEbQzvklhey8FPCS62FqVIde/QJEcSuMIuOCGgb1LkyQePj+zrRU5CD1tbxHo4+6Ui8BeziRH/a7wCI4qbhOaqE8c/JnVFkqsmNwIf/7SNCKBHWua6tokGUnqrOUPnBCKh64P/CRPLHXMuzdPGXRGQFhchxD9dJekHnPPTkUEVLVy1nQzCMiJ5TyN1ZyfDFbYeZkkAtl/CrhhADIOLmjdOrAAQIDAQABAoIBAHXsYroMeqxCN88MtGUvI8qAHSWkNuPIQn6dh+p74PEzhRS1re2ThhpUdE3pCeP9EVSs/qXffcbiskeMfS1ZrlFU+Qqdbksp/31c7ISBZgApV6sDcj3XN2HVtzDH+dbiR/xND8Z8c3rEulvC2tHpR1Ol++T70ywwHhF+wl1W04uigPo56ZZZnonrfNPlsJZfRK7g2pTrDM7KwAWz7pmoYXMWpAC6P+loxxHrrH3TOi1j2OvDZB+FGJFPIN9c9K8q6B2bN8cSalYVhg+5uNeJ0RS7O6LpbSeTN7tIVgrVtz+3w6GYVZ5a36bquOPEaIQuTItSA8lK58KbvgEOtZfJFdUCgYEA4+hLyKV7Y5egUbCy1O2vOv3hO4n+ZPtSaNwtYRQqZkZKTSdg9Pwvqk62GoafkLDTvLASliBa57I9kukZP7neD62q1xRvI366vvEbf4cwZhz+XmiFt/Upo0ET0vhIIvY8aJceiA19BiTxCIm3M+MbjBRO08bd5BzPM6cDbGnwPCMCgYEAmjipyy7GALU14EtKf+i+y9CJ/xktAEDzReN5IAD9btZnVsMKvDuXOIRh93SEnGG+qvITVd6XPspxCbswCIcTek/PwYYNXb/wcfY1RcxdHqZBZqLPm+RGPNiz9pL/EteqjSTb9wlLrF/F/ZlUz0jzLscs81+5ugumbHdZO81mk4sCgYAtDhNNS0mlWqha/e+coJBvvRj1yEX+eKDGEiD2fCIVrfeqYQqN4/0YUg82Fz8cP5jcSIKkIylVfKsni+Vt77SyrMaFVojSH4+Th97Dy1oKFdlDmK42u8TLfWYJ4wN/xeYTVyy2ANSijlMIORF6tH8RpkIfI8Vh/0AHGhFXMWpIuQKBgBdI7OH/mueqdIr78zCizIPrZZp9i5zZMaHguX4KiDk+5/Vil3FaMffXjQ8WqZsO6wHWcPLrG7zgRfbpK1RuSJOUD1Mx0TzRaRVbzilOtNSW15MOi/gGnFA9i9Zz1U1cAKU05n1DCwjooPUsPHDbm9P5QKEyV9FuRt9jmbZ8ybsHAoGAArcAuJ5AFNc1zqGGwdNbgfipgHgfSuxUPJUkQ2D4LdDeFFjQ2/5twOQcpK/EOYYcFIpnXxTaiGF7dhi954WnOKG7yVc62uZ44pbADxRCmSBooi6oa43ftuNzpdgwQNRSTaMGvnG1ddEbSJA2R1JnpYMYYovioi4UdjhfrV+BPvs=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
