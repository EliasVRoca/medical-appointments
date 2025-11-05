<?php

namespace App\Livewire\Admin\Datatables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Builder;

class PatientTable extends DataTableComponent
{
    // protected $model = Patient::class;
    public function builder(): Builder
    {
        return Patient::query()->with('user', 'bloodType');
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre del Paciente", "user.name")
                ->sortable()
                ->searchable(),
            Column::make("Tipo de Sangre", "bloodType.name")
                ->sortable()
                ->searchable(),
            Column::make("Correo Electrónico", "user.email")
                ->sortable()
                ->searchable(),
            Column::make("DNI", "user.dni")
                ->sortable()
                ->searchable(),
            Column::make("Teléfono", "user.phone")
                ->sortable()
                ->searchable(),
            Column::make("Dirección", "user.address")
                ->sortable()
                ->searchable(),
            Column::make("Acciones")
                ->label(fn($row) => view('admin.patients.actions', ['patient' => $row])),
        ];
    }
}
