<div class="fixed z-10 inset-0 overflow-y-auto duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden
                    shadow-xl transform transition-all sm:align-middle sm:max-w-lg sm:w-full"
            role="dialeg" aria aria-modal="true" aria-labelledby="modal-headline">

            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 text-sm overflow-hidden shadow-xl transform tra">Title</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline" id="title" wire:modal="title">
                    </div>
                    <div class="mb-4">
                        <label for="author" class="block text-gray-700 text-sm overflow-hidden shadow-xl transform tra">Title</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline" id="author" wire:modal="author">
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 text-sm overflow-hidden shadow-xl transform tra">Title</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline" id="description" wire:modal="description">
                    </div>
                    <div class="mb-4">
                        <label for="price" class="block text-gray-700 text-sm overflow-hidden shadow-xl transform tra">Title</label>
                        <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline" id="price" wire:modal="price">
                    </div>

                    <div class="bg-gray-50 px-4 py-3 sm:flex sm_flex-row-reverser">
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click.prevent="guardar()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-purple-600 focus:border-green-700 focus:shadow-outline-green transition ease-out duration-150 sm:text-sm sm:leading-5">Guardar</button>
                        </span>

                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click.prevent="cerrarModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-purple-600 ocus:border-green-700 focus:shadow-outline-green transition ease-out duration-150 sm:text-sm sm:leading-5" >Cancelar</button>
                        </span>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>