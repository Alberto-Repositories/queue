<div>
    <form wire:submit.prevent="save">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload
            file</label>
        <input wire:model="document"
            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
            aria-describedby="user_avatar_help" id="user_avatar" type="file">
            @error('document')
                {{$message}}
            @enderror
        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">Cargar documento</div>
        <button
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">GUARDAR</button>
    </form>
</div>