<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("gestion des structures") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <div class="flex items-center justify-between my-5 w-full">
                    <span class="block w-8">
                        <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" class="fill-current text-red-400" fill-rule="evenodd">
                                <g id="icon-shape">
                                    <path
                                        d="M16,16 L20,16 L20,6 L0,6 L0,16 L4,16 L4,10 L16,10 L16,16 Z M4,10 L16,10 L16,20 L4,20 L4,10 Z M6,12 L14,12 L14,18 L6,18 L6,12 Z M4,0 L16,0 L16,5 L4,5 L4,0 Z M2,8 L4,8 L4,10 L2,10 L2,8 Z M6,8 L8,8 L8,10 L6,10 L6,8 Z"
                                        id="Combined-Shape"></path>
                                </g>
                            </g>
                        </svg>
                    </span>
                    <a href="{{ route('structures.create') }}"
                        class="block px-12 py-3 bg-purple-500 rounded text-gray-100">
                        Ajouter Structure
                    </a>
                </div>
                    <table class="w-full sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5 text-sm">
                        <thead class="text-white">
                          <tr class="bg-yellow-300 flex flex-col flex-no-wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                            <th class="p-3 text-left capitalize">Code Structure</th>
                            <th class="p-3 text-left capitalize">Type Structure</th>
                            <th class="p-3 text-left capitalize">Date Creation</th>
                            <th class="p-3 text-left capitalize">Matricule Fiscale</th>
                            <th class="p-3 text-left capitalize">JORT Créattion</th>
                            <th class="p-3 text-left capitalize">Numéro compte bancaire</th>
                            
                            <th class="p-3 text-center capitalize w-64">Action</th>
                          </tr>
                        </thead>
                        <tbody class="flex-1 sm:flex-none">
                            @foreach ($structers as $structer)
                                
                            
                            <tr
                            
                              class="flex flex-col flex-no-wrap sm:table-row mb-2 sm:mb-0"
                            >

                            
                              <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">
                                <strong>{{$structer->id}}</strong>
                              </td>
                              <td class="border-grey-light border hover:bg-gray-100 p-3 overflow-hidden">
                                {{$structer->type_structure}}
                              </td>
                              <td class="border-grey-light border hover:bg-gray-100 p-3 overflow-hidden">
                                {{$structer->date_creation}}
                              </td>
                              <td class="border-grey-light border hover:bg-gray-100 p-3 overflow-hidden">
                                {{$structer->matricule_fiscale}}
                              </td>
                              <td class="border-grey-light border hover:bg-gray-100 p-3 overflow-hidden">
                                {{$structer->jort_creation}}
                              </td>
                              <td class="border-grey-light border hover:bg-gray-100 p-3 overflow-hidden">
                                {{$structer->num_compte_bancaire}}
                              </td>
                              
              
                              <td class="border-grey-light border">
                                <div class="flex items-center">
                                  <button   class="hover:bg-gray-100 p-3 text-yellow-400 hover:text-yellow-600 hover:font-medium cursor-pointer focus:outline-none capitalize">
                                    Modifier
                                  </button>
              
                                  <span>|</span>
              
                                  <button
                                    type="button"
                                    class="hover:bg-gray-100 p-3 text-yellow-400 hover:text-yellow-600 hover:font-medium cursor-pointer focus:outline-none capitalize"
                                  >
                                    Supprimer
                                  </button>
                                  <span>|</span>
              
                                  <button
                                    type="button"
                                    class="hover:bg-gray-100 p-3 text-yellow-400 hover:text-yellow-600 hover:font-medium cursor-pointer focus:outline-none capitalize"
                                  >
                                    Consulter
                                  </button>
                                </div>
                              </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
