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
{{-- Verificar los errores de validación --}}
<x-admin-layout title="CM | Roles" :breadcrumbs="$breadcrumbs">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-6">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Editar Usuario</h1>
            <form action="{{ route('admin.users.update', $user) }}" method="post">
                @csrf
                @method('PUT')
                <x-wireui-input name="name" blue label="Nombre del Usuario" placeholder="Ingrese el nombre del usuario"
                    class="w-full mb-4" value="{{ old('name', $user->name) }}" required />
                <x-wireui-input name="email" type="email" blue label="Correo Electrónico"
                    placeholder="Ingrese el correo electrónico del usuario" class="w-full mb-4"
                    value="{{ old('email', $user->email) }}" required />
                {{-- dni, phone address, role --}}
                <x-wireui-input name="dni" blue label="DNI" placeholder="Ingrese el DNI del usuario"
                    class="w-full mb-4" value="{{ old('dni', $user->dni) }}" required />
                <x-wireui-input name="phone" blue label="Teléfono" placeholder="Ingrese el teléfono del usuario"
                    class="w-full mb-4" value="{{ old('phone', $user->phone) }}" required />
                <x-wireui-input name="address" blue label="Dirección" placeholder="Ingrese la dirección del usuario"
                    class="w-full mb-4" value="{{ old('address', $user->address) }}" required />

                <label for="rol" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rol de
                    Usuario</label>
                <select id="rol" name="role"
                    class="mb-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a role</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}" @selected($user->hasRole($role->name))>
                            {{ $role->name }}</option>
                    @endforeach
                </select>
                

                <div class="flex justify-end">
                    <x-wireui-button type="submit" blue>
                        <i class="fas fa-save mr-2"></i> Guardar
                    </x-wireui-button>
                </div>
            </form>

        </div>
    </div>
</x-admin-layout>
