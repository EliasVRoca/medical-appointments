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
  Hola como estas desde el dashboard
</x-admin-layout>