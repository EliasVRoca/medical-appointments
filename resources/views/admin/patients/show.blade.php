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
        'name' => 'Mostrar',
    ],
 ];
@endphp
<x-admin-layout title="CM | Pacientes" :breadcrumbs="$breadcrumbs">
</x-admin-layout>