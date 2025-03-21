<nav x-data="{ open: false }" class="custom-bg-357D7F border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>


                @role('vetclinic')
                <!-- Navigation Links for vetclinic role -->
               <!-- Navigation Links for vetclinic role -->
               <div class="hidden space-x-10 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link href="{{ route('admin.AdminsDashboard.index') }}" :active="request()->routeIs('admin.AdminsDashboard.index')">
                    {{ __('Dashboard') }}
                </x-nav-link>
                
                <x-nav-link href="{{ route('chatify') }}" :active="request()->routeIs('chatify')" class="custom-bg-357D7F text-cyan-50">
                    {{ __('Admin Communication') }}
                </x-nav-link>


          
                <div class="dropdown dropdown-hover mt-5">
                    <x-nav-link href="{{ route('admin.AdminAppointment.index') }}" :active="request()->routeIs('admin.AdminAppointment.index')">
                        {{ __('Manage Clients Appointment') }}
                    </x-nav-link>
                    
              
               </div> 
                

                <x-nav-link href="{{ route('admin.AdminManagePetAccount.index') }}" :active="request()->routeIs('admin.AdminManagePetAccount.index')">
                    {{ __('Manage Pet Accounts') }}
                </x-nav-link>

                <x-nav-link href="{{ route('admin.AdminClientAccountList.index') }}" :active="request()->routeIs('admin.AdminClientAccountList.index')">
                    {{ __('Client Account List') }}
                </x-nav-link>

                <x-nav-link>
                    
                </x-nav-link>
            </div>
            </div>
                @endrole

           <!--end vet clinic role -->

            @role('client')
                <!-- Navigation Links -->
                <div class="hidden space-x-10 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="custom-bg-357D7F text-cyan-50">
                        {{ __('Homepage') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('chatify') }}" :active="request()->routeIs('chatify')" class="custom-bg-357D7F text-cyan-50">
                        {{ __('Client Communication Engagement') }}
                    </x-nav-link>
                    <div class="dropdown dropdown-hover mt-5">
                        <x-nav-link href="{{ route('Appointment.index') }}" :active="request()->routeIs('Appointment.index')" class="custom-bg-357D7F text-cyan-50">
                            {{ __('Appointment Scheduling') }}
                        </x-nav-link>
                        <ul class="menu dropdown-content custom-bg-357D7F rounded-box z-[1] w-full p-2 shadow">
                           
                            <li><a href="{{ route('Listofappointment.index') }}" class="{{ request()->routeIs('Listofappointment.index') ? 'bg-cyan-700 text-cyan-50' : 'text-cyan-50' }} rounded px-4 py-2">My Appointment</a></li>
                            <li><a href="{{ route('Success.index') }}" class="{{ request()->routeIs('Listofappointment.index') ? 'bg-cyan-700 text-cyan-50' : 'text-cyan-50' }} rounded px-4 py-2">Appointment Number</a></li>
                        </ul>
                    </div>
                    <div class="dropdown dropdown-hover mt-5">
                    <x-nav-link href="{{ route('MyPets.index') }}" :active="request()->routeIs('MyPets.index')" class="custom-bg-357D7F text-cyan-50">
                        {{ __('Pet Account') }} 
                     </x-nav-link>

                    </div>
                  
                    <x-nav-link href="{{ route('HowToPay.index') }}" :active="request()->routeIs('ClientCommunication.index')" class="custom-bg-357D7F text-cyan-50">
                        {{ __('How to pay') }}
                    </x-nav-link>
            
                </div>
        </div>
                @endrole
                     <!--end client role -->

                     @role('superadmin')
                     <!-- Navigation Links -->
                <div class="hidden space-x-10 sm:-my-px sm:ms-10 sm:flex">
                    
                    <x-nav-link href="{{ route('SuperAdmin.SuperAdminWelcome') }}" :active="request()->routeIs('admin.AdminsDashboard.index')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('SuperAdmin.SuperAdminManageAcc.index') }}" :active="request()->routeIs('admin.AdminsDashboard.index')">
                        {{ __('Manage Accounts') }}
                    </x-nav-link>

                    <x-nav-link href="{{ route('SuperAdmin.SuperAdminPaymentHistory.index') }}" :active="request()->routeIs('admin.AdminCommunication.index')">
                        {{ __('Payment History') }}
                    </x-nav-link>
                </div>
            </div>

                @endrole
                <!-- end super admin role-->

            
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ms-3 relative">
                        <x-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-dropdown-link>
                                    @endcan

                                    <!-- Team Switcher -->
                                    @if (Auth::user()->allTeams()->count() > 1)
                                        <div class="border-t border-gray-200 dark:border-gray-600"></div>

                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-switchable-team :team="$team" />
                                        @endforeach
                                    @endif
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">




                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    @if (Auth::user()->profile_photo_path)
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}" alt="{{ Auth::user()->name }}'s Profile Picture">
                                    @else
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('path/to/default/profile/photo.png') }}" alt="Default Profile Picture">
                                    @endif
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-black dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}
                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>





                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-black">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                            

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200 dark:border-gray-600"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': !open}" class="sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Homepage') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('ClientCommunication.index') }}" :active="request()->routeIs('ClientCommunication.index')">
                {{ __('Client Communication Engagement') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('Appointment.index') }}" :active="request()->routeIs('Appointment.index')">
                {{ __('Appointment Scheduling') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('MyPets.index') }}" :active="request()->routeIs('MyPets.index')">
                {{ __('Pet Account') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link href="{{ route('HowToPay.index') }}" :active="request()->routeIs('HowToPay.index')">
                {{ __('Pet Account') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 me-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-white dark:text-gray-200">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-white">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200 dark:border-gray-600"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-responsive-nav-link>
                    @endcan

                    <!-- Team Switcher -->
                    @if (Auth::user()->allTeams()->count() > 1)
                        <div class="border-t border-gray-200 dark:border-gray-600"></div>

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Switch Teams') }}
                        </div>

                        @foreach (Auth::user()->allTeams() as $team)
                            <x-switchable-team :team="$team" component="responsive-nav-link" />
                        @endforeach
                    @endif
                @endif
            </div>
        </div>
    </div>
</nav>



   
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modalButton = document.querySelector('[data-modal-toggle="my_modal_5"]');
        const modal = document.getElementById('my_modal_5');
        const closeButton = document.getElementById('close-modal-btn');

        modalButton.addEventListener('click', function () {
            modal.classList.toggle('modal-open');
        });

            // Close modal when the close button is clicked
            closeButton.addEventListener('click', function () {
                modal.classList.remove('modal-open');
        });
        
    });
</script>
