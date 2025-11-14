@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-100">

    <!-- Hero Section -->
    <section class="flex items-center justify-center min-h-[75vh] bg-gradient-to-b from-white dark:from-gray-900 to-indigo-50/50 dark:to-gray-800 px-6">
        <div class="text-center max-w-3xl">

            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight text-gray-900 dark:text-white mb-6">
                Smart NFC Digital Profiles<br>
                <span class="text-indigo-600">Connect. Share. Grow.</span>
            </h1>

            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                Taptoget helps you share your digital identity using NFC and QR technology — no app required.
                Build smart, modern, customizable digital profiles that work anywhere.
            </p>

            <div class="mt-10 space-x-4">
                <a href="{{ route('register') }}"
                   class="px-6 py-3 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition">
                    Create Your Profile
                </a>

                <a href="{{ route('login') }}"
                   class="px-6 py-3 bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-200 border rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 transition">
                    Login
                </a>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section id="features" class="py-20 bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-6">

            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900 dark:text-white">
                What You Get With Taptoget
            </h2>

            <div class="grid md:grid-cols-3 gap-10">

                <div class="p-6 rounded-xl shadow bg-gray-50 dark:bg-gray-700">
                    <h3 class="text-xl font-semibold mb-3 text-indigo-600">NFC Digital Profiles</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Instantly share your profile using NFC-enabled cards or devices.
                    </p>
                </div>

                <div class="p-6 rounded-xl shadow bg-gray-50 dark:bg-gray-700">
                    <h3 class="text-xl font-semibold mb-3 text-indigo-600">Customizable Links</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Add social media, websites, business details, portfolios, and more.
                    </p>
                </div>

                <div class="p-6 rounded-xl shadow bg-gray-50 dark:bg-gray-700">
                    <h3 class="text-xl font-semibold mb-3 text-indigo-600">No App Needed</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Anyone can open your profile with a tap or QR — no installation required.
                    </p>
                </div>

                <div class="p-6 rounded-xl shadow bg-gray-50 dark:bg-gray-700">
                    <h3 class="text-xl font-semibold mb-3 text-indigo-600">Smart Analytics</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Track profile visits, link clicks, and engagement statistics easily.
                    </p>
                </div>

                <div class="p-6 rounded-xl shadow bg-gray-50 dark:bg-gray-700">
                    <h3 class="text-xl font-semibold mb-3 text-indigo-600">Custom Themes</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Personalize your profile with colors, themes, and branding.
                    </p>
                </div>

                <div class="p-6 rounded-xl shadow bg-gray-50 dark:bg-gray-700">
                    <h3 class="text-xl font-semibold mb-3 text-indigo-600">NFC Business Cards</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Link a physical NFC card to your profile for instant sharing anywhere.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- How It Works -->
    <section id="how" class="py-20 bg-indigo-50 dark:bg-gray-900/40">
        <div class="max-w-7xl mx-auto px-6 text-center">

            <h2 class="text-3xl font-bold mb-12 text-gray-900 dark:text-white">
                How It Works
            </h2>

            <div class="grid md:grid-cols-3 gap-10">

                <div class="p-6 bg-white dark:bg-gray-800 rounded-xl shadow">
                    <h3 class="text-xl font-semibold mb-3">1. Create Account</h3>
                    <p class="text-gray-600 dark:text-gray-300">Sign up and build your smart profile.</p>
                </div>

                <div class="p-6 bg-white dark:bg-gray-800 rounded-xl shadow">
                    <h3 class="text-xl font-semibold mb-3">2. Customize</h3>
                    <p class="text-gray-600 dark:text-gray-300">Add links, contact info, and branding.</p>
                </div>

                <div class="p-6 bg-white dark:bg-gray-800 rounded-xl shadow">
                    <h3 class="text-xl font-semibold mb-3">3. Tap & Share</h3>
                    <p class="text-gray-600 dark:text-gray-300">Share your profile with NFC or QR instantly.</p>
                </div>

            </div>

        </div>
    </section>

    <!-- Pricing CTA -->
    <section id="pricing" class="py-20 bg-white dark:bg-gray-800">
        <div class="max-w-4xl mx-auto text-center px-6">

            <h2 class="text-3xl font-bold mb-6 text-gray-900 dark:text-white">
                Simple & Flexible Pricing
            </h2>

            <p class="text-gray-600 dark:text-gray-300 mb-10">
                Start free — upgrade anytime for advanced features, analytics, and NFC tools.
            </p>

            <a href="{{ route('register') }}"
               class="px-8 py-4 bg-indigo-600 text-white rounded-xl text-lg shadow hover:bg-indigo-700 transition">
                Get Started
            </a>

        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-6 text-gray-500 bg-gray-100 dark:bg-gray-900">
        © {{ date('Y') }} Taptoget — All rights reserved.
    </footer>

</div>
@endsection
