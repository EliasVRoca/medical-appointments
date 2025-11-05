@php
 $breadcrumbs = [
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Usuarios',
    ],
 ];
@endphp
<x-admin-layout title="CM | Usuarios" :breadcrumbs="$breadcrumbs">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-6">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Gestión de Usuarios</h1>
            <x-slot name="action">
                <x-wireui-button
                    href="{{ route('admin.users.create') }}"
                    blue
                    title="Crear Nuevo Usuario">
                    <i class="fas fa-plus mr-2"></i> Crear Usuario
                </x-wireui-button>
            </x-slot>
            @livewire('admin.datatables.user-table')
        </div>
    </div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Descripción de los Usuarios</h2>
            <p class="text-gray-700 dark:text-gray-300">
                En esta sección, puedes gestionar los usuarios dentro del sistema. Los usuarios definen los permisos y accesos que cada uno tiene en la plataforma. Asegúrate de asignar los roles adecuados para mantener la seguridad y funcionalidad del sistema.
            </p>
        </div>
    </div>
</x-admin-layout>