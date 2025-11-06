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
        <form action="{{ route('admin.patients.update', $patient) }}" method="POST" id="edit-patient-form">
            @csrf
            @method('PUT')
            <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-6">
                <h1 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Editar Paciente</h1>
                <div class="lg:flex lg:justify-between lg:items-center ">
                    <div class="flex items-center">
                        <img src="{{ $patient->user->profile_photo_url }}" alt="{{ $patient->user->name }}"
                            class="w-20 h-20 rounded-full object-cover object-center mr-4">
                        <div>
                            <p class="text-2xl font-semibold text-gray-800 dark:text-white">{{ $patient->user->name }}
                            </p>
                        </div>
                    </div>
                    <div class="flex space-x-3 mt-4 lg:mt-0">
                        {{-- Volver, Guardar --}}
                        <a href="{{ route('admin.patients.index') }}">
                            <x-wireui-button blue outline>
                                <i class="fas fa-arrow-left mr-2"></i> Volver
                            </x-wireui-button>
                        </a>

                        <x-wireui-button form="edit-patient-form" type="submit" blue>
                            <i class="fas fa-save mr-2"></i> Guardar Cambios
                        </x-wireui-button>
                    </div>
                </div>
            </div>
            @include('admin.patients.partials.c-form-edit-patient', compact('patient', 'bloodTypes'))
        </form>
    </div>
</x-admin-layout>
