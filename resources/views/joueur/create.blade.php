<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nouveau Joueur') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Nom -->
                        <div>
                            <x-label for="name" :value="__('Nom')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                        </div>

                        <!-- Prénom -->
                        <div class="mt-4">
                            <x-label for="prenom" :value="__('Prénom')" />

                            <x-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('logo')" required />
                        </div>

                        <!-- Poste -->
                        <div class="mt-4">
                            <x-label for="poste" :value="__('Poste')" />

                            <x-input id="poste" class="block mt-1 w-full" type="text" name="poste" :value="old('logo')" required />
                        </div>

                        <!-- Photo -->
                        <div class="mt-4">
                            <x-label for="photo" :value="__('Equipe')" />
                            <x-select name="categorie_equipe" id="" class="block mt-1 w-full">
                                <option value="" disabled>Choisir une équipe</option>
                                <option value="" require></option>
                            </x-select>
                        </div>

                        <!-- Photo -->
                        <div class="mt-4">
                            <x-label for="photo" :value="__('Photo')" />

                            <x-input id="photo" class="block mt-1 w-full" type="file" name="photo" :value="old('logo')" required />
                        </div>

                        <div class="mt-4">
                            <x-button>
                                AJOUTER
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h5>Liste des Joueurs</h5>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>