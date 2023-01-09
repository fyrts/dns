<?php

use MamaOmida\Dns\Records\Types\A;
use MamaOmida\Dns\Records\Types\AAAA;
use MamaOmida\Dns\Records\Types\CNAME;
use MamaOmida\Dns\Records\Types\MX;
use MamaOmida\Dns\Records\Types\NS;
use MamaOmida\Dns\Records\Types\SOA;
use MamaOmida\Dns\Records\Types\TXT;

return [
    [
        [
            'host'  => 'test.com',
            'class' => 'IN',
            'ttl'   => 0,
            'type'  => 'A',
            'ip'    => '20.81.111.85',
        ],
        A::class,
    ],
    [
        [
            'host'   => 'test.com',
            'class'  => 'IN',
            'ttl'    => 0,
            'type'   => 'NS',
            'target' => 'ns4-39.azure-dns.info',
        ],
        NS::class,
    ],
    [
        [
            'host'   => 'microsoft.com',
            'class'  => 'IN',
            'ttl'    => 0,
            'type'   => 'CNAME',
            'target' => 'microsoft.com',
        ],
        CNAME::class,
    ],
    [
        [
            'host'   => 'microsoft.com',
            'class'  => 'IN',
            'ttl'    => 0,
            'type'   => 'MX',
            'pri'    => 10,
            'target' => 'microsoft-com.mail.protection.outlook.com',
        ],
        MX::class,
    ],
    [
        [
            'host'        => 'microsoft.com',
            'ttl'         => '3600',
            'class'       => 'IN',
            'type'        => 'SOA',
            'mname'       => 'ns1-39.azure-dns.com',
            'rname'       => 'azuredns-hostmaster.microsoft.com',
            'serial'      => '1',
            'refresh'     => '3600',
            'retry'       => '300',
            'expire'      => '2419200',
            'minimum-ttl' => '300',
        ],
        SOA::class,
    ],
    [
        [
            'host'    => 'microsoft.com',
            'class'   => 'IN',
            'ttl'     => 0,
            'type'    => 'TXT',
            'txt'     => 'google-site-verification=M--CVfn_YwsV-2FGbCp_HFaEj23BmT0cTF4l8hXgpvMt7sebee51jrj7vm932k531hipa8RPDXjBzBS9tu7Pbysu7qCACrwXPoDV8ZtLfthTnC4y9VJFLd84it5sQlEITgSLJ4KOIA8pBZxmyvPujuUvhOg==fg2t0gov9424p2tdcuo94goe9jd365mktkey=3uc1cf82cpv750lzk70v9bvf2hubspot-developer-verification=OTQ5NGIwYWEtODNmZi00YWE1LTkyNmQtNDhjMDMxY2JjNDAxd365mktkey=QDa792dLCZhvaAOOCe2Hz6WTzmTssOp1snABhxWibhMxgoogle-site-verification=pjPOauSPcrfXOZS9jnPPa5axowcHGCDAl1_86dCqFpkdocusign=d5a3737c-c23c-4bd0-9095-d2ff621f2840d365mktkey=SxDf1EZxLvMwx6eEZUxzjFFgHoapF8DvtWEUjwq7ZTwxd365mktkey=6358r1b7e13hox60tl1uagv14facebook-domain-verification=fwzwhbbzwmg5fzgotc2go51olc3566google-site-verification=GfDnTUdATPsK1230J0mXbfsYw-3A9BVMVaKSd4DcKgIgoogle-site-verification=uFg3wr5PWsK8lV029RoXXBBUW0_E6qf1WEWVHhetkOYv=spf1 include:_spf-a.microsoft.com include:_spf-b.microsoft.com include:_spf-c.microsoft.com include:_spf-ssg-a.msft.net include:spf-a.hotmail.com include:_spf1-meo.microsoft.com -alld365mktkey=j2qHWq9BHdaa3ZXZH8x64daJZxEWsFa0dxDeilxDoYYx',
        ],
        TXT::class,
    ],
    [
        [
            'host'  => 'microsoft.com',
            'class' => 'IN',
            'ttl'   => 0,
            'type'  => 'AAAA',
            'ipv6'  => '::ffff:1451:6f55',
        ],
        AAAA::class,
    ],
];
