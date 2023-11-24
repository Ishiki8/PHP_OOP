<?php

namespace task34\Dates;

use Carbon\CarbonPeriod;
use Tightenco\Collect;

function buildRange(array $data, string $beginDate, string $endDate): array {
    $period = CarbonPeriod::create($beginDate, $endDate);
    $dates = [];

    foreach ($period as $date) {
        $dates[] = [
            'value' => 0,
            'date' => $date->format('d.m.Y')
        ];
    }

    return collect($dates)->merge($data)->keyBy('date')->values()->toArray();
}