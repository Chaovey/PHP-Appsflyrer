<?php
    require 'vendor/autoload.php';
    use AppsFlyer\AppsFlyer;
    $client = new AppsFlyer('19', '6544');
    $client->track([
        'af_event_type' => 'install',
        'af_user_id' => '1234567890',
    ]);
    echo 'Install event sent successfully!';
