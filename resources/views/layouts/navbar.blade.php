<nav class="bg-gray-200">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!--
                        Icon when menu is closed.

                        Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
                        Icon when menu is open.

                        Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                    </button>
                </div>
                <div class="flex items-center justify-between max-w-screen-xl mx-auto">
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="flex shrink-0 items-center">
                        </div>
                        <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <a href="{{ route('posts.index') }}" class="{{ request()->routeIs('posts.index*') ? 'rounded-md bg-blue-400 px-3 py-2 text-sm font-medium text-white hover:bg-blue-400' : 'rounded-md bg-blue-800 px-3 py-2 text-sm font-medium text-white hover:bg-blue-600' }}" aria-current="{{ request()->routeIs('posts.*') ? 'page' : '' }}">Noticeboard</a>
                            <a href="{{ route('players.index') }}" class="{{ request()->routeIs('players.*') ? 'rounded-md bg-blue-400 px-3 py-2 text-sm font-medium text-white hover:bg-blue-400' : 'rounded-md bg-blue-800 px-3 py-2 text-sm font-medium text-white hover:bg-blue-600' }}">Players</a>
                            <a href="{{ route('pitches.index') }}" class="{{ request()->routeIs('pitches.*') ? 'rounded-md bg-blue-400 px-3 py-2 text-sm font-medium text-white hover:bg-blue-400' : 'rounded-md bg-blue-800 px-3 py-2 text-sm font-medium text-white hover:bg-blue-600' }}">Pitches</a>
                            <a href="{{ route('clubs.index') }}" class="{{ request()->routeIs('clubs.*') ? 'rounded-md bg-blue-400 px-3 py-2 text-sm font-medium text-white hover:bg-blue-400' : 'rounded-md bg-blue-800 px-3 py-2 text-sm font-medium text-white hover:bg-blue-600' }}">Clubs</a>
                            <a href="{{ route('posts.create') }}" class="{{ request()->routeIs('posts.create*') ? 'rounded-md bg-blue-400 px-3 py-2 text-sm font-medium text-white hover:bg-blue-400' : 'rounded-md bg-blue-800 px-3 py-2 text-sm font-medium text-white hover:bg-blue-600' }}">New Post</a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-right justify-between max-w-screen-xl mx-auto">
                    <div class="flex flex-1 items-right justify-center sm:items-stretch sm:justify-start">
                        <div class="flex shrink-0 items-right">
                        </div>
                        <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" id="user-menu-item-2">Sign out</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
