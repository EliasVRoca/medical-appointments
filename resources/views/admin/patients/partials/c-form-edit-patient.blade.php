 <div class="container mx-auto py-8">
     <x-tabs active="datos_personales" class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-6">
         <x-slot name="header">
             <x-tab-link tab="datos_personales">
                 <i class="fas fa-user me-2"></i>
                 Datos Personales
             </x-tab-link>
             <x-tab-link tab="antecedentes">
                 <i class="fas fa-notes-medical me-2"></i>
                 Antecedentes
             </x-tab-link>
             <x-tab-link tab="informacion_general">
                 <i class="fas fa-file-medical-alt me-2"></i>
                 Información General
             </x-tab-link>
             <x-tab-link tab="informacion_de_contacto">
                 <i class="fas fa-address-book me-2"></i>
                 Información de Contacto
             </x-tab-link>  
         </x-slot>
         <x-slot name="slot">
             <x-tab-content tab="datos_personales">
                 @include('admin.patients.partials.form-personal-data', ['patient' => $patient])
             </x-tab-content>
             <x-tab-content tab="antecedentes">
                 @include('admin.patients.partials.form-medical-history', ['patient' => $patient])
             </x-tab-content>
             <x-tab-content tab="informacion_general">
                 @include('admin.patients.partials.form-general-information', [
                     'patient' => $patient,
                     'bloodTypes' => $bloodTypes,
                 ])
             </x-tab-content>
             <x-tab-content tab="informacion_de_contacto">
                 @include('admin.patients.partials.form-contact-information', ['patient' => $patient])
             </x-tab-content>
         </x-slot>
     </x-tabs>
 </div>
