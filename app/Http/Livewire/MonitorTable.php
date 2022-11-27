<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\LeosMonitor;

class MonitorTable extends DataTableComponent
{
    protected $model = LeosMonitor::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")->sortable(),
            Column::make("URL", "url")->sortable(),
            Column::make("Status", "uptime_status")->sortable(),
            Column::make("Minutes", "uptime_check_interval_in_minutes")->sortable(),
            Column::make("Method", "uptime_check_method")->sortable(),
            Column::make("Payload", "uptime_check_payload")->sortable(),
            Column::make("Created at", "created_at")->sortable(),
            Column::make("Last Check", "uptime_last_check_date")->sortable()->format(
                function ($value, $row, Column $column){
                    return date('d/m/Y H:m', strtotime($value));;
                }
            ),
        ];
    }
}
