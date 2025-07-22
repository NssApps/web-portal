<div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
    <x-application-logo class="block h-12 w-auto" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
        Welcome to your Dashboard!
    </h1>

    <p class="mt-6 text-gray-500 dark:text-gray-400 leading-relaxed">
      
    </p>
</div>

<div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
 

    <div class="bg-white dark:bg-gray-800 dark:bg-opacity-25 p-6 rounded-lg shadow">
        <h2 class="text-lg font-semibold text-gray-900 dark:text-white">User Management</h2>
        <p class="mt-2 mb-2 text-gray-600 dark:text-gray-400">Manage your users and their access.</p>
        <x-button>
           <a href="{{ route('users.index') }}" class="">
                 Manage Users
            </a>
        </x-button>
        
    </div>
</div>
