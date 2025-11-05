@php
 $breadcrumbs = [
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Usuarios',
        'href' => route('admin.users.index'),
    ],
    [
        'name' => 'Editar',
    ],
 ];
@endphp
<x-admin-layout title="CM | Roles" :breadcrumbs="$breadcrumbs">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-6">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Editar Usuario</h1>
            <form action="{{ route('admin.users.update', $user) }}" method="post">
                @csrf
                @method('PUT')
                <x-wireui-input
                    name="name"
                    blue
                    label="Nombre del Usuario"
                    placeholder="Ingrese el nombre del usuario"
                    class="w-full mb-4"
                    value="{{ old('name', $user->name) }}"
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