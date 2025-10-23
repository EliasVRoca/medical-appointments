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
  <x-wireui-button primary label="Boton de WireUI" />
</x-admin-layout>