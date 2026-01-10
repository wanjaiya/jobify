<aside class="w-64 bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <nav class="mt-4">
        <a href="{{ route('dashboard') }}"
            class="block py-2 px-4 text-gray-600 dark:text-white hover:bg-primary-800 hover:text-white">Dashboard</a>





        @can('manage-users')
            <div x-data="{ open: false }" class="space-y-1">

                <!-- Trigger -->
                <button @click="open = !open"
                    class="flex items-center justify-between w-full px-4 py-2 rounded-md text-gray-600 dark:text-white hover:bg-primary-800 hover:text-white focus:outline-none">

                    <span>Users</span>

                    <svg class="w-4 h-4 transition-transform" :class="open && 'rotate-180'" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Menu -->
                <div x-show="open" x-transition @click.outside="open = false" class="ml-4 space-y-1">

                    <a href="{{ route('users.index') }}"
                        class="block py-2 px-4 text-gray-600 dark:text-white hover:bg-primary-800 hover:text-white">Users</a>

                    <a href="{{ route('roles.index') }}"
                        class="block py-2 px-4 text-gray-600 dark:text-white hover:bg-primary-800 hover:text-white">Roles</a>

                    <a href="{{ route('permissions.index') }}"
                        class="block py-2 px-4 text-gray-600 dark:text-white hover:bg-primary-800 hover:text-white">Permissions</a>
                </div>

            </div>
        @endcan

        @can('manage-site')
            <div x-data="{ open: false }" class="space-y-1">

                <!-- Trigger -->
                <button @click="open = !open"
                    class="flex items-center justify-between w-full px-4 py-2 rounded-md text-gray-600 dark:text-white hover:bg-primary-800 hover:text-white focus:outline-none">

                    <span>Settings</span>

                    <svg class="w-4 h-4 transition-transform" :class="open && 'rotate-180'" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Menu -->
                <div x-show="open" x-transition @click.outside="open = false" class="ml-4 space-y-1">

                    <div x-data="{ open: false }" class="space-y-1">

                        <!-- Trigger -->
                        <button @click="open = !open"
                            class="flex items-center justify-between w-full px-4 py-2 rounded-md text-gray-600 dark:text-white hover:bg-primary-800 hover:text-white focus:outline-none">

                            <span>Menus</span>

                            <svg class="w-4 h-4 transition-transform" :class="open && 'rotate-180'" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Menu -->
                        <div x-show="open" x-transition @click.outside="open = false" class="ml-4 space-y-1">

                            <a href="{{ route('menus.index') }}" class="block px-3 py-2 rounded-md hover:bg-primary-800 hover:text-white">
                                Menus
                            </a>

                            <a href="{{ route('menuTypes.index') }}" class="block px-3 py-2 rounded-md hover:bg-primary-800 hover:text-white">
                                Menu Types
                            </a>

                        </div>

                    </div>

                    <a href="#" class="block px-3 py-2 rounded-md hover:bg-primary-800 hover:text-white">
                        Roles
                    </a>

                    <a href="#" class="block px-3 py-2 rounded-md hover:bg-primary-800 hover:text-white">
                        Permissions
                    </a>
                </div>

            </div>
        @endcan
    </nav>
</aside>
