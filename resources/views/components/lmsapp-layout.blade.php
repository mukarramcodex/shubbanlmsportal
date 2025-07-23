<div>
    <div class="sidebar bg-white shadow w-64 min-h-screen fixed transition-all duration-300 ease-in-out">
        @include("layouts.lmsapp")
    </div>


    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-4">
         @isset($pagetitle)
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-4xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $pagetitle }}
                </div>
            </header>
            @endisset

        {{ $slot }}
    </main>
</div>
