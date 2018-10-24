<?php

return [
    'alipay' => [
        'app_id'         => '2016091900550841',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA0TQ+v2PaueaCvsctpX8j5qhFcAB1/H/L7yuKN+CPiU5YML6cD8ugn0VFY47hprr2m6reIhgcZ9Eqdyhby9JTxftZt7eo4JAEVy8IlgPf6On9Ws3lx3vn77hY9E5UsLgy6RGxlluzuaxMg0MkH8Q67mGoRKfkEqmww7PECpS3I/1d2ppzMtz7dEZ1mKch8wBbXcgN9YiOcwBlUq7OhuD3raR08CYKgpQN63p7TL+ySVp9OICCxKAbUSWr1Ay8vunQz41BFXbMK8StPljBc0gKCnuiybIAYNau22+/fBgYZupcr2vWrBef2P5RtyydsHt1mIFT5trwW2z054xozFDvqwIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAq/OJCjGEq1bjrYwhrNGsLWwf3JJg3tDJpF4nE6qzXEZjGjul9bKh0mhVxpMVwBeLH53rRKeLObDPGBfODTsMDQYbyacDy0/fOzsc/oC2w0UKzLLnOum8mIXhoPF/gMfrZy12pSyeplUQ1qWEP4IhCwJZQnIw7V21oIQRA55+Pb8/pvjZOPwpnKQwkf1KzrE92dmDQPWMsNOSyy6PvKNguKcdMk1gFsxdlHSn2t1i5Ne/UC4KMUvfvhTDF0U7WYmp/25sDSKAirBUCKgIu2BfM7Pf+C7/8heQPCi0/67hS53JmviGTSSv2/C2GyN6KMTua5Eshe2K/hzhIyGiBTA4UwIDAQABAoIBAEctL/TAOqKR/PzBnM7km9jRgP7UuLSCyHT5ZEOHzWbM3Ajn1/K0Vre56IeiKsaw+C3GOLTahY8D2TWn5OslHf/mH2qBb9ig306tUXsn3H9H/QhupbiFOEQKZzMvxA+Ssaar8wi8R4+idq3jJbMEMplUB46xpf8bYytmf4R3/tmfupgdD2NZ5EIoOPMXkwdJ31snnyQowPqEL7h/m74AooxaWc79vPAAEJ/iX/GIB47dDBJSKEU40sQ1kRHUN+xDOVB403HtTQJg1NBwMKuig4WdEJL6aDJOQGf00w4Vdf/spXsKBkMre7il/NbXixnXdlKcjQ2pSpoflf9znn4FwoECgYEA4bu4A/07a9Nfz2w64W2ZeTlpDdC8/1HaangEr2bt1mIT+EwNXNVbvuy2aq5hlILOS7OGpeDHK5JmXQ30pZboUovbF2SKE0V3mWBjLna3erkz49O7XJGVQx6jI+3OVz7eGy0PofwmGXtlEOs5yO7kkE9lC/ulX7pyi+ZbiaodCHkCgYEAwwHA821XIQXFXoynGb5uv/lhfUEJxeKWA0niV/CU2Kdh8H5zPG0HOWsX2ha92mWd/vrPwbTW6rSMc7Tc1hObBeIUFh+kcL8Dg3WQtqypDSsmd1keTNECduFhEx5UKE9POEjFeRDiNk9RFe33HKQSfno18cndCmRoukHkYzrzLCsCgYB8g4VvfeGnCoNQ8QxRiJkdixNtsXRvCYGHNQiwkAAlPxhw39KHIJFo8T11/xaIStbsXuyo1yJF4I1iSu5l4KXp0odZkfWvx6O/ELHk0UtIAJyk0QgKeatxyJaInQYyjdUJ/IMhAOsrJyuKd5X6RfwBtimwwHBqK3g/vyNC/njhUQKBgEojXIwvwbRYUVVE/DKZZ9msohfQpjqJjqbpbBgq6ywDVwTrzjvm55w4zvSnOL7Ta2IJUPtAGYVZ5xwGYv8wrPtrnF9c4FPNCzTreX0533uWMCWnyBFEVT+FKDbwjOZWYLPxVsJUXOxw8073Db/h0PYs2F14dYUB758AdigTvWfJAoGBAMHm4mSkWzmjOD0sGw/NX1oDOgqVta5yDpbPrrSVYX773eNfoS9SPY78KBmr/z/hY55S5PcXSGcf8dx9MoR9fo7kc+aw84Pxv70+PIklgF5lM/vuFsT7CjgLyiMZYk7Gpb5UPsHgpojOHC4w1Dd6FNPVdzq/jzcGfCaiU9ct2+MF',
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