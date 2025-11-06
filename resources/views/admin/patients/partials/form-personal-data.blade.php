 <x-wireui-alert title="Atención" info class="mb-4">
     <div>
         <p>Para editar esta informacion, por favor dirígete al <a href="{{ route('admin.users.edit', $patient->user) }}"
                 class="text-blue-600 hover:underline" target="_blank">perfil de usuario</a> asociado a
             este paciente.</p>
     </div>
 </x-wireui-alert>

 <div class="pt-2 mx-4 text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
     <div class="flex flex-col pb-3">
         <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Correo Electrónico</dt>
         <dd class="text-lg font-semibold">{{ $patient->user->email }}</dd>
     </div>
     <div class="flex flex-col py-3">
         <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Dirección</dt>
         <dd class="text-lg font-semibold">{{ $patient->user->address }}</dd>
     </div>
     <div class="flex flex-col pt-3">
         <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Número de Teléfono</dt>
         <dd class="text-lg font-semibold">{{ $patient->user->phone }}</dd>
     </div>
 </div>
