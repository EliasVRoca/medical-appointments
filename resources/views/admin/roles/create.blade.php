@php
 $breadcrumbs = [
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Roles',
        'href' => route('admin.roles.index'),
    ],
    [
        'name' => 'Crear',
    ],
 ];
@endphp
<x-admin-layout title="CM | Roles" :breadcrumbs="$breadcrumbs">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-6">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Crear Nuevo Rol</h1>
            <form action="{{ route('admin.roles.store') }}" method="post">
                @csrf
                <x-wireui-input
                    name="name"
                    blue
                    label="Nombre del Rol"
                    placeholder="Ingrese el nombre del rol"
                    class="w-full mb-4"
                    value="{{ old('name') }}"
                    required
                />
                <div class="flex justify-end">
                    <x-wireui-button type="submit" blue>
                        <i class="fas fa-save mr-2"></i> Guardar
                    </x-wireui-button>
                </div>
            </form>

        </div>
    </div>
</x-admin-layout>