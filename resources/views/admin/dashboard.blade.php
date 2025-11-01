@php
    $breadcrumbs = [
        [
            'name' => 'Dashboard',
            'href' => route('admin.dashboard'),
        ],
        [
            'name' => 'Home',
        ],
    ];
@endphp
<x-admin-layout :breadcrumbs="$breadcrumbs">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-6">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Bienvenido al Panel de Administración
            </h1>
            <p class="text-gray-700 dark:text-gray-300">
                Desde aquí puedes gestionar las diferentes secciones de la aplicación, incluyendo usuarios, roles,
                permisos y más. Utiliza el menú lateral para navegar entre las distintas opciones disponibles.
            </p>
        </div>
    </div>
</x-admin-layout>
