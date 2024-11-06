<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('BUG.REPORT.CHANNEL', function () {
    return true;
});
