@php
    $breadcrumbs = [
        [
            'name' => 'Dashboard',
            'href' => route('admin.dashboard'),
        ],
        [
            'name' => 'Pacientes',
            'href' => route('admin.patients.index'),
        ],
        [
            'name' => 'Editar',
        ],
    ];
@endphp
{{-- Verificar los errores de validación --}}
<x-admin-layout title="CM | Pacientes" :breadcrumbs="$breadcrumbs">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-6">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Editar Paciente</h1>
            <form action="{{ route('admin.patients.update', $patient) }}" method="post">
                @csrf
                @method('PUT')
                

                <div class="flex justify-end">
                    <x-wireui-button type="submit" blue>
                        <i class="fas fa-save mr-2"></i> Guardar
                    </x-wireui-button>
                </div>
            </form>

        </div>
    </div>
</x-admin-layout>
