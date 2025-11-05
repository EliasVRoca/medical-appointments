@php
 $breadcrumbs = [
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Pacientes',
    ],
 ];
@endphp
<x-admin-layout title="CM | Pacientes" :breadcrumbs="$breadcrumbs">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-6">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Gestión de Pacientes</h1>
            @livewire('admin.datatables.patient-table')
        </div>
    </div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Descripción de los Pacientes</h2>
            <p class="text-gray-700 dark:text-gray-300">
                En esta sección, puedes gestionar los pacientes dentro del sistema. Los pacientes definen los permisos y accesos que cada uno tiene en la plataforma. Asegúrate de asignar los roles adecuados para mantener la seguridad y funcionalidad del sistema.
            </p>
        </div>
    </div>
</x-admin-layout>