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
        'name' => 'Mostrar',
    ],
 ];
@endphp
<x-admin-layout title="CM | Usuarios" :breadcrumbs="$breadcrumbs">
</x-admin-layout>