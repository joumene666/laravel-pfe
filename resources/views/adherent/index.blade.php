<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Gestion des adhérents") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5 text-sm">
                        <thead class="text-white">
                          <tr class="bg-red-300 flex flex-col flex-no-wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                            
                            <th class="p-3 text-left capitalize">Code</th>
                            <th class="p-3 text-left capitalize">Nom</th>
                            <th class="p-3 text-left capitalize">Prénom</th>
                            
                            <th class="p-3 text-left capitalize">Genre</th>
                            <th class="p-3 text-left capitalize">Email</th>
                            <th class="p-3 text-left capitalize">Téléphone</th>
                            <th class="p-3 text-left capitalize">Type</th>
                            <th class="p-3 text-left capitalize w-64">Action</th>
                          </tr>
                        </thead>
                        <tbody class="flex-1 sm:flex-none">
                            <tr
                              key={index}
                              class="flex flex-col flex-no-wrap sm:table-row mb-2 sm:mb-0"
                            >
                              <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">
                                <strong>#1111 </strong>
                              </td>
                              <td class="border-grey-light border hover:bg-gray-100 p-3 overflow-hidden">
                                hhhh
                              </td>
                              <td class="border-grey-light border hover:bg-gray-100 p-3 overflow-hidden">
                               dfdg
                              </td>
                              <td class="border-grey-light border hover:bg-gray-100 p-3 overflow-hidden">
                                eqgRV
                              </td>
                              <td class="border-grey-light border hover:bg-gray-100 p-3 overflow-hidden">
                                QEGV
                              </td>
                              <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">
                                EGDV
                              </td>
                              <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">
                                EQGDV
                              </td>
              
                              <td class="border-grey-light border">
                                <div class="flex items-center">
                                  <button class="hover:bg-gray-100 p-3 text-red-400 hover:text-red-600 hover:font-medium cursor-pointer focus:outline-none capitalize">
                                    Modifier
                                  </button>
              
                                  <span>|</span>
              
                                  <button
                                    type="button"
                                    class="hover:bg-gray-100 p-3 text-red-400 hover:text-red-600 hover:font-medium cursor-pointer focus:outline-none capitalize"
                                  >
                                    Supprimer
                                  </button>
                                  <span>|</span>
              
                                  <button
                                    type="button"
                                    class="hover:bg-gray-100 p-3 text-red-400 hover:text-red-600 hover:font-medium cursor-pointer focus:outline-none capitalize"
                                  >
                                    Consulter
                                  </button>
                                </div>
                              </td>
                            </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>