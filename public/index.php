<?php
// Ensure errors are displayed during development
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Your application code here
echo "Hi, I'm Dr.MMO. Please contact me on Telegram: @drmmo15";

// Project configurations
$projects = [
    'hitclub' => [
        'domains' => [
            'hitclub2.com',
            'hitclub2.net', 
            'hitclub2.pages.dev',
            'hitclub-ads.pages.dev',
            'hitclub3-ads.pages.dev',
            'hitclub4-ads.pages.dev',
            'hitclub5-ads.pages.dev',
            'hitclub6-ads.pages.dev',
            'hitclub7-ads.pages.dev',
            'hitclub8-ads.pages.dev',
            'hitclub9-ads.pages.dev',
            'hitclub10-ads.pages.dev',
            'hitclub-ads.club',
            'hitclub111.net',
            'www-hitclub.net',
            'www-hitclubs.net',
            'ww-hitclubs.net',
            'hitclub112.net',
            'www.hitclub112.net',
            'vwwhitclup1.net',
            'www.vwwhitclup1.net'
        ],
        'redirects' => [
            'web' => 'https://load-hit.club',
            'apk' => 'https://apk.load-hit.club/download/Hit.apk',
            'ios' => 'https://apps.apple.com/us/app/hit-moltenzel/id6739461358'
        ]
    ],
    'b52' => [
        // domain landing
        'domains' => [
            'ads1-b52.net',
            'ads2-b52.net',
            'ads3-b52.net',
            'ads4-b52.net',
            'ads5-b52.net',
            'ads6-b52.net',
            'ads7-b52.net',
            'ads8-b52.net',
            'ads9-b52.net',
            'b52-1102.pages.dev',
            'www-b52.net',
            'www-b52-1.net',
            'www-b52-2.net',
            'www-b52-3.net',
            'www-b52-4.net',
            'www-b52-5.net',
            'www-b52-6.net',
            'www-b52-7.net',
            'wwwb52ads.net'
        ],
        // domain đích
        'redirects' => [
            'web' => 'https://i-b52i.club',
            'ios' => 'https://apps.apple.com/us/app/namhai-swimix/id6737888766',
            'apk' => 'https://apk.i-b52i.club/download/B52.apk'
        ]
    ],
    'go88' => [
        // domain landing
        'domains' => [
            'vwwgo88.net',
            'www.vwwgo88.net',
            'ads3-vwwgo88.net',
            'ads4-vwwgo88.net',
            'ads5-vwwgo88.net',
            'ads6-vwwgo88.net',
            'ads7-vwwgo88.net',
            'ads8-vwwgo88.net',
            'ads9-vwwgo88.net',
            'www-vwwgo88.net',
            'www-vwwgo88-1.net',
            'www-vwwgo88-2.net',
            'www-vwwgo88-3.net',
            'www-vwwgo88-4.net',
            'www-vwwgo88-5.net',
            'www-vwwgo88-6.net',
            'www-vwwgo88-7.net',
        ],
        // domain đích
        'redirects' => [
            'web' => 'https://i-go88.org',
            'ios' => 'https://apps.apple.com/us/app/go-xamboora/id6738839091',
            'apk' => 'https://apk.i-go88.org/download/GO88.apk'
        ]
    ]
];

// Example URL: https://ddrmmo-0238532b4c86.herokuapp.com/?project=b52&type=apk
// project: b52, go88
// type: web, ios, apk
$project_name = $_GET['project'] ?? '';
$redirect_type = $_GET['type'] ?? 'web';

// If project exists, redirect directly without referer check
if (isset($projects[$project_name])) {
    $project = $projects[$project_name];
    if (isset($project['redirects'][$redirect_type])) {
        header("HTTP/1.1 303 See Other");
        header("Location: " . $project['redirects'][$redirect_type]);
        exit();
    } else {
        // Default to web if redirect type not found
        header("HTTP/1.1 303 See Other");
        header("Location: " . $project['redirects']['web']);
        exit();
    }
}
?>
