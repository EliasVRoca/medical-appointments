 <div class="container mx-auto py-8">
     <div x-data="{ tab: 'datos_personales' }" class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-6">
         <div class="border-b border-gray-200 dark:border-gray-700">
             <ul
                 class="flex flex-wrap -mb-px text-sm font-medium justify-center text-center text-gray-500 dark:text-gray-400">
                 <li class="me-2">
                     <a x-on:click.prevent="tab = 'datos_personales'" href="#"
                         :class="{
                             'inline-flex items-center justify-center p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500 group': tab === 'datos_personales',
                             'inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group': tab !== 'datos_personales',
                         }">
                         <i
                             :class="{
                                 'fas fa-user me-2 text-blue-600 dark:text-blue-500': tab === 'datos_personales',
                                 'fas fa-user me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300': tab !== 'datos_personales',
                             }"></i>
                         Datos Personales
                     </a>
                 </li>
                 <li class="me-2">
                     <a x-on:click.prevent="tab = 'antecedentes'" href="#"
                         :class="{
                             'inline-flex items-center justify-center p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500 group': tab === 'antecedentes',
                             'inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group': tab !== 'antecedentes',
                         }">

                         <i
                             :class="{
                                 'fas fa-notes-medical me-2 text-blue-600 dark:text-blue-500': tab === 'antecedentes',
                                 'fas fa-notes-medical me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300': tab !== 'antecedentes',
                             }"></i>
                         Antecedentes
                     </a>
                 </li>
                 <li class="me-2">
                     <a x-on:click.prevent="tab = 'informacion_general'" href="#"
                         :class="{
                             'inline-flex items-center justify-center p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500 group': tab === 'informacion_general',
                             'inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group': tab !== 'informacion_general',
                         }">

                         <i
                             :class="{
                                 'fas fa-file-medical-alt me-2 text-blue-600 dark:text-blue-500': tab === 'informacion_general',
                                 'fas fa-file-medical-alt me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300': tab !== 'informacion_general',
                             }"></i>
                         Información General
                     </a>
                 </li>
                 <li class="me-2">
                     <a x-on:click.prevent="tab = 'informacion_de_contacto'" href="#"
                         :class="{
                             'inline-flex items-center justify-center p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500 group': tab === 'informacion_de_contacto',
                             'inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group': tab !== 'informacion_de_contacto',
                         }">

                         <i
                             :class="{
                                 'fas fa-phone-alt me-2 text-blue-600 dark:text-blue-500': tab === 'informacion_de_contacto',
                                 'fas fa-phone-alt me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300': tab !== 'informacion_de_contacto',
                             }"></i>
                         Información de Contacto
                     </a>
                 </li>
             </ul>
         </div>
         <div class="p-6">
             <div x-show="tab === 'datos_personales'">
                 @include('admin.patients.partials.form-personal-data', ['patient' => $patient])
             </div>
             <div x-show="tab === 'antecedentes'">
                 @include('admin.patients.partials.form-medical-history', ['patient' => $patient])
             </div>
             <div x-show="tab === 'informacion_general'">
                 @include('admin.patients.partials.form-general-information', ['patient' => $patient, 'bloodTypes' => $bloodTypes])
             </div>
             <div x-show="tab === 'informacion_de_contacto'">
                 @include('admin.patients.partials.form-contact-information', ['patient' => $patient])
             </div>
         </div>
     </div>
 </div>
