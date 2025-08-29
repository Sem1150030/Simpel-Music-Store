<!-- resources/views/dialog.blade.php -->

<div
    x-data="{ open: true }"
    x-show="open"
    class="relative z-10"
    aria-labelledby="modal-title"
    role="dialog"
    aria-modal="true"
>
    <!-- Background -->
    <div class="fixed inset-0 bg-gray-500/75"></div>

    <!-- Panel -->
    <div class="fixed inset-0 flex items-center justify-center p-4">
        <div class="w-full max-w-sm rounded-lg bg-white p-6 shadow-xl">
            <div class="mx-auto flex size-12 items-center justify-center rounded-full bg-green-100">
                <svg class="size-6 text-green-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path d="m4.5 12.75 6 6 9-13.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <h3 id="modal-title" class="mt-3 text-base font-semibold text-gray-900">Success</h3>
            <div class="mt-2">
              <p class="text-sm text-gray-500">Role was changed succesfully</p>
            </div>
            <div class="mt-5">
                <button
                    @click="open = false"
                    class="w-full rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-500"
                >
                    Go back to dashboard
                </button>
            </div>
        </div>
    </div>
</div>
