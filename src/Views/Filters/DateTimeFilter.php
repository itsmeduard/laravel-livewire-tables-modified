<?php

namespace Rappasoft\LaravelLivewireTables\Views\Filters;

use DateTime;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Filter;

class DateTimeFilter extends Filter
{
    public function validate($value)
    {
        if (DateTime::createFromFormat('Y-m-d\TH:i', $value) === false) {
            return false;
        }

        return $value;
    }

    public function render(DataTableComponent $component)
    {
        return view('livewire-tables::components.tools.filters.datetime', [
            'component' => $component,
            'filter' => $this,
        ]);
    }
}
