<div class="p-0 m-0 w-full max-w-screen-xl">
    <div class="w-full flex justify-start rounded-lg bg-gray-300">
        <div class=" shadow-lg p-6 w-1/4 max-w-md flex flex-col items-center">
            <h2 class="text-2xl font-bold mb-6 text-gray-700">Generador de Códigos QR</h2>
            <div class="w-full">
                <label for="qr_text" class="block mb-2 text-sm font-medium text-gray-700">Datos del QR</label>
                <textarea wire:model="qrText" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"></textarea>
                <button wire:click="generateQr" class="px-5 py-2 ml-auto mr-0 mt-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg cursor-pointer hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Generar QR</button>
            </div>
        </div>
        <div class=" w-3/4 max-w-4xl p-6">
            <div class="flex justify-start items-center">
                @if ($qrImage)
                    <img src="{{ $qrImage }}" alt="QR Code">
                @endif
            </div>
        </div>
    </div>
</div>
