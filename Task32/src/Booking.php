<?php

namespace task32;

use Carbon\Carbon;

class Booking {
    private array $books = [];
    public function book(string $date_from, string $date_to): bool {
        $date_from = Carbon::parse($date_from);
        $date_to = Carbon::parse($date_to);

        if ($date_from->greaterThanOrEqualTo($date_to) || $date_from->diffInDays($date_to) < 1) {
            return false;
        }

        foreach ($this->books as $book) {
            if ($book['date_to']->greaterThan($date_from) && $date_to->greaterThan($book['date_from'])) {
                return false;
            }
        }

        $this->books[] = [
            'date_from' => $date_from,
            'date_to' => $date_to
        ];

        return true;
    }
}
