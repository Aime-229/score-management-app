<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nouvelle équipe') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('equipes.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Nom de l\'équipe')" />

                            <x-input id="name" class="block mt-1 w-full @error('name') is-invalid @enderror" type="text" name="name" :value="old('name')" autofocus />
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="logo" :value="__('Logo')" />

                            <x-input id="logo" class="block mt-1 w-full" type="file" name="logo" :value="old('logo')" />
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
                    <h5>Liste des équipes</h5>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>