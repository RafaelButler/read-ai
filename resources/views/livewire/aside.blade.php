<aside
    class="fixed text-gray-500 inset-y-0 left-0 z-10 flex-col hidden border-r dark:border-r-gray-800 dark:text-gray-400 w-12 bg-white/100 dark:bg-gray-800 sm:flex">
    <nav class="flex flex-col items-center gap-4 px-2 sm:py-5">
        <a href="{{ route('dashboard') }}" wire:navigate>
            <x-application-mark class="block h-6 w-auto"/>
        </a>
        <a class="flex items-center justify-center transition-colors rounded-lg h-9 w-9 text-muted-foreground hover:text-foreground md:h-8 md:w-8"
           href="{{ route('dashboard') }}" data-state="closed" wire:navigate>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="lucide lucide-library-icon">
                <path d="m16 6 4 14"></path>
                <path d="M12 6v14"></path>
                <path d="M8 8v12"></path>
                <path d="M4 4v16"></path>
            </svg>
            <span class="sr-only">Leituras</span></a>

        <a class="flex items-center justify-center transition-colors rounded-lg h-9 w-9 text-muted-foreground hover:text-foreground md:h-8 md:w-8"
           href="{{ route('chat') }}" data-state="closed" wire:navigate>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="lucide lucide-message-circle-more">
                <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/>
                <path d="M8 12h.01"/>
                <path d="M12 12h.01"/>
                <path d="M16 12h.01"/>
            </svg>
            <span class="sr-only">Chat</span></a>

        <button data-state="closed"><a
                class="flex items-center justify-center transition-colors rounded-lg h-9 w-9 text-muted-foreground hover:text-foreground md:h-8 md:w-8"
                href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-line-chart-icon">
                    <path d="M3 3v18h18"></path>
                    <path d="m19 9-5 5-4-4-3 3"></path>
                </svg>
                <span class="sr-only">Analytics</span></a></button>
    </nav>
    <nav class="flex flex-col items-center gap-4 px-2 mt-auto sm:py-5"><a
            class="flex items-center justify-center transition-colors rounded-lg h-9 w-9 text-muted-foreground hover:text-foreground md:h-8 md:w-8"
            href="#" data-state="closed">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="lucide lucide-settings-icon">
                <path
                    d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path>
                <circle cx="12" cy="12" r="3"></circle>
            </svg>
            <span class="sr-only">Settings</span></a></nav>
</aside>
