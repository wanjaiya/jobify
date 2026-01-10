<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Menus') }}
        </h2>
    </x-slot>
    <div class="py-8">


        <div class="mx-auto sm:px-6 lg:px-8 flex justify-between items-center">
            <div class="mb-4">
                <x-auth-session-status class="mb-4" :status="session('status')" />

            </div>

            @can('manage-site')
                <button x-data x-on:click="$dispatch('open-menu-form')" class="px-4 py-2 bg-indigo-600 text-white rounded">
                    Add Menu
                </button>
            @endcan
        </div>



        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 px-2 text-gray-900 dark:text-gray-100">
                <div class="overflow-x-auto bg-white dark:bg-gray-800 rounded-lg shadow">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th>
                                    &nbsp;
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                    Name
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                    Slug
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                    Menu Type
                                </th>

                                <th class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                    Actions
                                </th>
                            </tr>
                        </thead>

                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-800">
                            @foreach ($menus as $menu)

                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">

                                    <td class="pl-4 w-10">
                                        <x-status-dot :status="$menu->status" />
                                    </td>

                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">
                                        {{ $menu->name }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-300">
                                        {{ $menu->slug }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-300">
                                        {{ $menu->types->name }}
                                    </td>


                                    @can('access-manager-panel')
                                        <td cclass="px-6 py-4 whitespace-nowrap  text-sm relative overflow-visible">
                                            <div x-data="{ open: false }"
                                                class="inline-block text-left overflow-x-visible overflow-y-visible">

                                                <!-- Trigger -->
                                                <button @click="open = !open"
                                                    class="pl-[24] inline-flex items-center justify-center w-8 h-8 rounded-full hover:bg-gray-200">

                                                    ...
                                                </button>

                                                <!-- Dropdown -->
                                                <div x-show="open" x-transition @click.outside="open = false"
                                                    class="absolute  z-50 mt-2 w-40 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5">


                                                    <div class="py-1">

                                                        <!-- Edit -->
                                                        <button x-data
                                                            x-on:click="$dispatch('open-menu-form', {
                                                            name: '{{ $menu->name }}',
                                                            menu_type_id: '{{ $menu->menu_type_id }}',
                                                            updateUrl: '{{ route('menus.update', $menu) }}'
                                                        })"
                                                            class="text-green-600 hover:bg-green-700 hover:text-white px-3 py-1 rounded w-full text-left">
                                                            Edit
                                                        </button>

                                                        <!-- Publish / Unpublish -->
                                                        @if ($menu->status === 'draft' || $menu->status === 'unpublished')
                                                            <form method="POST"
                                                                action="{{ route('admin.publish', ['model' => 'menus', 'id' => $menu->id]) }}">
                                                                @csrf
                                                                <button type="submit"
                                                                    class="w-full text-left px-3 py-2 text-sm text-primary-800 hover:bg-primary-800 hover:text-white">
                                                                    Publish
                                                                </button>
                                                            </form>
                                                        @else
                                                            <form method="POST"
                                                                action="{{ route('admin.unpublish', ['model' => 'menus', 'id' => $menu->id]) }}">
                                                                @csrf
                                                                <button
                                                                    class="w-full text-left px-3 py-2 text-sm text-primary-800 hover:bg-primary-800 hover:text-white">
                                                                    Unpublish
                                                                </button>
                                                            </form>
                                                        @endif

                                                        <div class="border-t my-1"></div>

                                                        <!-- Delete -->
                                                        <form action="{{ route('menus.destroy', $menu) }}" method="POST"
                                                            class="inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="text-red-600 hover:bg-red-700 hover:text-white px-3 py-1 rounded w-full text-left"
                                                                onclick="return confirm('Are you sure you want to delete this menu type?');">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        </td>
                                    @endcan

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>





    <x-modal name="menu-form" :show="$errors->menuCreate->isNotEmpty()">
        <div x-data="menuForm()" x-on:open-menu-form.window="open($event.detail)">
            <h2 class="text-lg font-medium text-gray-900 dark:text-white pl-6 py-6"
                x-text="mode === 'create' ? 'Create Menu' : 'Edit Menu'">
            </h2>
            <form method="POST" :action="action" class="p-6 pt-2">
                @csrf

                <template x-if="mode === 'edit'">
                    <input type="hidden" name="_method" value="PUT">
                </template>


                <!-- Menu Type -->
                <div class="mt-4">
                    <x-input-label for="role" :value="__('Menu Type')" />
                    <select id="menu_type_id" name="menu_type_id" x-model="form.menu_type_id"
                        class="block mt-1 w-full border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="">Select Menu Type</option>
                        @foreach ($menuTypes as $type)
                            <option value="{{ $type->id }}" :selected="form.role_name === '{{ $type->name }}'">
                                {{ ucfirst($type->name) }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('menu_type_id')" class="mt-2" />
                </div>

                <!-- Name -->
                <div class="mt-4">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                        :value="old('name')" autofocus x-model="form.name" required />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>




                <div class="flex items-center justify-end mt-4">
                    <x-secondary-button x-on:click="$dispatch('close-modal', '{{ 'menu-form' }}')" class="mr-3">
                        {{ __('Cancel') }}
                    </x-secondary-button>

                    <x-primary-button class="ml-3">
                        <span x-text="mode === 'create' ? 'Create' : 'Update'"></span>
                    </x-primary-button>
                </div>
            </form>
        </div>
    </x-modal>



    <script>
        function menuForm() {


            return {
                mode: 'create',
                action: '',
                form: {
                    name: '',
                    menu_type_id: ''
                },


                open(data = null) {
                    if (Object.keys(data || {}).length > 0) {
                        // EDIT
                        this.mode = 'edit'
                        this.action = data.updateUrl
                        this.form.name = data.name
                        this.form.menu_type_id = data.menu_type_id

                    } else {
                        // CREATE
                        this.mode = 'create'
                        this.action = '{{ route('menus.store') }}'
                        this.form.name = ''
                        this.form.menu_type_id = ''


                    }

                    this.$dispatch('open-modal', 'menu-form')
                }

            }


        }
    </script>
</x-app-layout>
