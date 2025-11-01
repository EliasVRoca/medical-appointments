<?php

namespace App\Livewire\Admin\Datatables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Spatie\Permission\Models\Role;

class RoleTable extends DataTableComponent
{
    protected $model = Role::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre", "name")
                ->sortable()
                ->searchable(),
            Column::make("Creado en", "created_at")
                ->sortable()
                ->format(fn($value) => $value->format('d/m/Y')),
            Column::make('Acciones')
                ->label(fn($row) => view('admin.roles.actions', ['role' => $row])),

        ];
    }
}
