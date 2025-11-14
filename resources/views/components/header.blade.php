<header class="bg-white shadow dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <!-- Logo -->
        <a href="/" class="text-2xl font-bold text-indigo-600 dark:text-indigo-400">
            Taptoget
        </a>

        <!-- Navigation -->
        <nav class="space-x-6">
            <a href="{{ route('welcome') }}" 
               class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400">
                Home
            </a>

            <a href="{{ route('login') }}" 
               class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400">
                Login
            </a>

            <a href="{{ route('register') }}" 
               class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400">
                Register
            </a>
        </nav>
    </div>
</header>
