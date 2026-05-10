<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$setting = Illuminate\Support\Facades\DB::table('business_settings')->where('key_name', 'system_language')->first();
if ($setting) {
    $langs = json_decode($setting->live_values, true);
    $found = false;
    foreach ($langs as $l) {
        if ($l['code'] == 'pt') {
            $found = true;
        }
    }
    if (!$found) {
        $langs[] = ['id' => count($langs) + 1, 'direction' => 'ltr', 'code' => 'pt', 'status' => 1, 'default' => false];
        Illuminate\Support\Facades\DB::table('business_settings')->where('key_name', 'system_language')->update(['live_values' => json_encode($langs)]);
        echo 'Added PT';
    } else {
        echo 'PT already exists';
    }
} else {
    echo 'No system_language setting found';
}
