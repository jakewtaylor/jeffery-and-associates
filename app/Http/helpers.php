<?php

use Illuminate\Support\Collection;

if (!function_exists('groupAlphabetically')) {
    /**
     * Groups a collection alphabetically
     *
     * @param Collection $collection The collection to sort
     * @param string $sortBy The key to sort by on $collection
     */
    function groupAlphabetically (Collection $collection, string $sortBy) {
        return $collection
            ->sortBy($sortBy, SORT_NATURAL|SORT_FLAG_CASE)
            ->groupBy(function ($item) use ($sortBy) {
                $grouper = substr($item[$sortBy], 0, 1);
                return ctype_alpha($grouper) ? strtoupper($grouper) : "&";
            });
    }
}
