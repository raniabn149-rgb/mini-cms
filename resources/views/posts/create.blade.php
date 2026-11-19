
<x-layout>
    <x-slot:title>Nouvel article - Mini-CMS</x-slot:title>

    <h1 class="text-3xl font-bold text-gray-900">Nouvel article</h1>
    <p class="mt-2 mb-8 text-gray-600">Remplissez les informations de votre article.</p>

    @if ($errors->any())
        <x-alert type="error" title="Le formulaire contient des erreurs" class="mb-6 max-w-2xl">
            Corrigez les champs signalés, puis envoyez à nouveau.
        </x-alert>
    @endif

    <x-post-form :categories="$categories" :tags="$tags" />
</x-layout>
