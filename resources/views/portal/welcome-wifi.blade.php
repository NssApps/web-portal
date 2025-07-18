<x-guest-layout>
    <div class="min-h-screen bg-gray-100 flex flex-col items-center justify-center px-4">
        <div class="bg-white shadow-lg rounded-xl p-8 max-w-lg w-full text-center">
            {{-- Optional Logo --}}
            <img src="{{ asset('img/yourlogo.png') }}" alt="Logo" class="h-12 mx-auto mb-6">

            {{-- Welcome message --}}
            <h1 class="text-2xl font-semibold text-gray-800 mb-2">Thanks for signing in!</h1>
            <p class="text-gray-600 mb-6">You are now connected to our free Wi-Fi. Enjoy your time!</p>

            {{-- Optional button or redirect --}}
            <a href="https://newsmartservices.com" target="_blank"
            class="inline-block bg-blue-600 text-white px-6 py-2 rounded-md shadow hover:bg-blue-700 transition">
                Visit Our Website
            </a>

            {{-- Footer --}}
            <p class="text-xs text-gray-400 mt-6">© {{ date('Y') }} Your Company name. All rights reserved.</p>
        </div>
    </div>
</x-guest-layout>

