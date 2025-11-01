@php
 $breadcrumbs = [
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Roles',
    ],
 ];
@endphp
<x-admin-layout title="CM | Roles" :breadcrumbs="$breadcrumbs">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-6">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Gestión de Roles</h1>
            <x-slot name="action">
                <x-wireui-button
                    href="{{ route('admin.roles.create') }}"
                    blue
                    title="Crear Nuevo Rol">
                    <i class="fas fa-plus mr-2"></i> Crear Rol
                </x-wireui-button>
            </x-slot>
            @livewire('admin.datatables.role-table')
        </div>
    </div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Descripción de los Roles</h2>
            <p class="text-gray-700 dark:text-gray-300">
                En esta sección, puedes gestionar los roles de usuario dentro del sistema. Los roles definen los permisos y accesos que cada usuario tiene en la plataforma. Asegúrate de asignar los roles adecuados para mantener la seguridad y funcionalidad del sistema.
            </p>
        </div>
    </div>
</x-admin-layout>