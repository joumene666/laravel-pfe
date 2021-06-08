<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Ajouter un nouvel adhérent") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{route('adherent.store')}}">
						@csrf
              <div class="grid-cols-3 grid gap-4">
                <div class="mb-4 w-64">
                  <label for="firstName" class="block mb-1">
                    Nom
                    <span class="text-red-500">*</span>
                  </label>
                  <input
                    required
                    type="text"
                    class="bg-gray-100 border border-blue-300  py-px px-2 focus:outline-none rounded w-full block"
                    id="firstName"
					name="firstname"
                    autoComplete="off"
                   
                    value=""
                  />
                </div>
                <div class="mb-4 w-64">
                  <label for="firstName" class="block mb-1">
                    Prénom
                    <span class="text-red-500">*</span>
                  </label>
                  <input
                    required
                    type="text"
                    class="bg-gray-100 border border-blue-300 py-px px-2 focus:outline-none rounded w-full block"
                    id="lastName"
					name="lastname"
                    autoComplete="off"
                   
                    value=""
                  />
                </div>
                <div class="mb-4 w-64">
                  <label for="profession" class="block mb-1">
                    Profession
                    <span class="text-red-500">*</span>
                  </label>
                  <input
                    required
                    type="text"
                    class="bg-gray-100 border border-blue-300 py-px px-2 focus:outline-none rounded w-full block"
                    id="profession"
					name="profession"
                    autoComplete="off"
                   
                    value=""
                  />
                </div>
                <div class="mb-4 w-64">
					<label for="secteur" class="block mb-1">
					Secteur
						<span class="text-red-500">*</span>
					</label>
					<input
					required
					type="text"
					class="bg-gray-100 border border-blue-300 py-px px-2 focus:outline-none rounded w-full block"
					id="secteur"
					name="secteur"
					autoComplete="off"
					
					value=""
					/>
				</div>  
                <div class="mb-4 w-64">
                  <label for="firstName" class="block mb-1">
                    Nationalité
                    <span class="text-red-500">*</span>
                  </label>
                  <input
                    required
                    type="text"
                    class="bg-gray-100 border border-blue-300 py-px px-2 focus:outline-none rounded w-full block"
                    id="nationality"
					name="nationality"
                    autoComplete="off"
                    
                    value=""
                  />
                </div>
                <div class="mb-4 w-64">
                  <label for="firstName" class="block mb-1">
                    CIN/Passport
                    <span class="text-red-500">*</span>
                  </label>
                  <input
                    required
                    type="text"
                    class="bg-gray-100 border border-blue-300 py-px px-2 focus:outline-none rounded w-full block"
                    id="cin"
					name="cin"
                    {{-- pattern="\d*" --}}
                    autoComplete="off"
                  
                    value=""
                  />
                </div>

                <div class="mb-4 w-64">
                  <label for="sexe" class="block mb-1">
                    Genre
                    <span class="text-red-500">*</span>
                  </label>
                  <select
                    required
                    type="text"
                    class="bg-gray-100 border border-blue-300 py-2 px-2 focus:outline-none rounded w-full block"
                    id="sexe"
					name="gender"
                    autoComplete="off"
                    
                    value=""
                  >
                    <option>choisissez</option>
                    <option value="Masculin">Masculin</option>
                    <option value="Féminin">Féminin</option>
                  </select>
                </div>

                <div class="mb-4 w-64">
                  <label for="type" class="block mb-1">
                    Type Adhérent
                    <span class="text-red-500">*</span>
                  </label>
                  <select
                    required
                    type="text"
                    class="bg-gray-100 border border-blue-300 py-2 px-2 focus:outline-none rounded w-full block"
                    id="type"
					name="type"
                    autoComplete="off"
                  
                    value=""
                  >
                    <option>choisissez</option>
                    <option value="Président">Président(e)</option>
                    <option value="Vice Président">Vice Président(e) </option>
                    <option value="Directeur(rice) Executif">
                      Directeur(rice) Executif(ve){" "}
                    </option>
                    <option value="sorier(e)">Trésorier(e) </option>
                    <option value="Simple Membre">Simple Membre </option>
                  </select>
                </div>

                <div class="mb-4 w-64">
                  <label for="code" class="block mb-1">
                    Code Adhérent
                    <span class="text-red-500">*</span>
                  </label>
                  <input
                    disabled
                    required
                    type="text"
                    class="bg-gray-100 border border-blue-300  py-px px-2 focus:outline-none rounded w-full block"
                    id="code"
					name="code"
                    autoComplete="off"
                    
                    value=""
                  />
                </div>

                <div class="mb-4 w-64">
                  <label for="birthDate" class="block mb-1">
                    Date de naissance
                    <span class="text-red-500">*</span>
                  </label>
                  <input
                    required
                    type="date"
                    class="bg-gray-100 border border-blue-300  py-px px-2 focus:outline-none rounded w-full block"
                    id="birthDate"
					name="date-naissance"
                    autoComplete="off"
                   
                    value=""
                  />
                </div>

                <div class="mb-4 w-64">
                  <label for="joiningDate" class="block mb-1">
                    Date d'adhésion
                    <span class="text-red-500">*</span>
                  </label>
                  <input
                    required
                    type="date"
                    class="bg-gray-100 border border-blue-300  py-px px-2 focus:outline-none rounded w-full block"
                    id="joiningDate"
                    autoComplete="off"
                    name="joining-date"
                    value=""
                  />
                </div>

                <div class="mb-4 w-64">
                  <label for="image" class="block mb-1">
                    Déposez une image
                    <span class="text-red-500">*</span>
                  </label>
                  <input
                    required
                    type="file"
                    class="bg-gray-100 border border-blue-300  py-px px-2 focus:outline-none rounded w-full block"
                    id="image"
					name="image"
                    autoComplete="off"
                   
                  />
                </div>

                <div class="mb-4 w-64">
                  <label for="email" class="block mb-1">
                    Email
                    <span class="text-red-500">*</span>
                  </label>
                  <input
                    required
                    type="email"
                    class="bg-gray-100 border border-blue-300  py-px px-2 focus:outline-none rounded w-full block"
                    id="email"
					name="email"
                    autoComplete="off"
                    
                    value=""
                  />
                </div>

                <div class="mb-4 w-64">
                  <label for="telephone" class="block mb-1">
                    Telephone
                    <span class="text-red-500">*</span>
                  </label>
                  <input
                    pattern="\d*"
                    required
                    type="text"
                    class="bg-gray-100 border border-blue-300  py-px px-2 focus:outline-none rounded w-full block"
                    id="telephone"
					name="phone"
                    autoComplete="off"
                    
                    value=""
                  />
                </div>

                <div class="mb-4 w-64">
                  <label for="code-structure" class="block mb-1">
                    Code Strcuture
                    <span class="text-red-500">*</span>
                  </label>
                  <input
                    required
                    disabled
                    type="text"
                    class="bg-gray-100 border border-blue-300  py-px px-2 focus:outline-none rounded w-full block"
                    id="codeStructure"
                    autoComplete="off"
					name="code-structure"
                    
                    value=""
                  />
                </div>
                <div class="mb-4 w-64">
                  <label for="birthPlace" class="block mb-1">
                    Lieu de naissance
                    <span class="text-red-500">*</span>
                  </label>
                  <input
                    required
                    type="text"
                    class="bg-gray-100 border border-blue-300  py-px px-2 focus:outline-none rounded w-full block"
                    id="birth-place"
					name="birth-place"
                    autoComplete="off"
                    value=""
                  />
                </div>
                <div class="mb-4 w-64">
                  <label for="birthPlace" class="block mb-1">
                    Mot de passe
                    <span class="text-red-500">*</span>
                  </label>
                  <input
                    required
                    type="text"
                    class="bg-gray-100 border border-blue-300  py-px px-2 focus:outline-none rounded w-full block"
                    id="password"
					name="password"
                    autoComplete="off"
                    value=""
                  />
                </div>

                <div class="mb-4 w-64">
                  <label for="commission" class="block mb-1">
                    Code Commission
                    <span class="text-red-500">*</span>
                  </label>
                  <select
                    required
                    type="text"
                    class="bg-gray-100 border border-blue-300 py-2 px-2 focus:outline-none rounded w-full block"
                    id="commission"
					name="commission"
                    autoComplete="off"
                    
                    value=""
                  >
                    <option>choisir</option>
                    <option value="Enseignement-sciences-technologie">
                      Enseignement, sciences et technologie
                    </option>
                    <option value="Développement-économique-emploi">
                      Développement économique et emploi
                    </option>
                    <option value="Socialsanté">Social et santé </option>
                    <option value="Culture, tourisme et environnement ">
                      Culture, tourisme et environnement
                    </option>
                  </select>
                </div>
              </div>
              <div class=" w-full">
                <label for="observation" class="block mb-1">
                  Observation
                </label>
                <textarea
                  required
                  class="bg-gray-100 border border-blue-300  py-px px-2 focus:outline-none rounded w-full block"
                  id="observation"
                  autoComplete="off"
                  name="observation"
                  value=""
                ></textarea>
              </div>
              <div class="flex items-center py-8">
                <button
                  onClick={this.closeModal}
                  type="reset"
                  class="bg-red-400 px-12 py-3 rounded text-white mr-8"
                >
                  Fermer
                </button>
                <button
                  type="submit"
                  class="bg-indigo-600 px-12 py-3 rounded text-white"
                >
                  Ajouter
                </button>
              </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
