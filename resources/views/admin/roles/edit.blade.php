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
        'name' => 'Editar',
    ],
 ];
@endphp
<x-admin-layout title="CM | Roles" :breadcrumbs="$breadcrumbs">
</x-admin-layout>