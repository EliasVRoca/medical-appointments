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
        'name' => 'Crear',
    ],
 ];
@endphp
<x-admin-layout title="CM | Usuarios" :breadcrumbs="$breadcrumbs">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-6">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Crear Nuevo Usuario</h1>
            <form action="{{ route('admin.users.store') }}" method="post">
                @csrf
                <x-wireui-input
                    name="name"
                    blue
                    label="Nombre del Usuario"
                    placeholder="Ingrese el nombre del usuario"
                    class="w-full mb-4"
                    value="{{ old('name') }}"
                    required
                />
                <x-wireui-input
                    name="email"
                    type="email"
                    blue
                    label="Correo Electrónico"
                    placeholder="Ingrese el correo electrónico del usuario"
                    class="w-full mb-4"
                    value="{{ old('email') }}"
                    required
                />
                {{-- dni, phone address, role --}}
                <x-wireui-input
                    name="dni"
                    blue
                    label="DNI"
                    placeholder="Ingrese el DNI del usuario"
                    class="w-full mb-4"
                    value="{{ old('dni') }}"
                    required
                />
                <x-wireui-input
                    name="phone"
                    blue
                    label="Teléfono"
                    placeholder="Ingrese el teléfono del usuario"
                    class="w-full mb-4"
                    value="{{ old('phone') }}"
                    required
                />
                <x-wireui-input
                    name="address"
                    blue
                    label="Dirección"
                    placeholder="Ingrese la dirección del usuario"
                    class="w-full mb-4"
                    value="{{ old('address') }}"
                    required
                />

                <x-wireui-select
                    name="role"
                    label="Rol"
                    placeholder="Seleccione un rol"
                    class="w-full mb-4"
                    :options="$roles"
                    option-label="name" option-value="id"
                    required
                />

                <x-wireui-input
                    name="password"
                    type="password"
                    blue
                    label="Contraseña"
                    placeholder="Ingrese la contraseña del usuario"
                    class="w-full mb-4"
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