<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register - Laravel App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    {{-- Styles Extra --}}
    <link href="{{ asset('dashboard/css/styles_extra.css') }}" rel="stylesheet" />
</head>
<body id="body-logres" class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-900">
                <span class="text-yellow-600">Login</span>- Register
            </h2>
            <p class="mt-2 text-sm text-gray-600">
                Akses akun Anda dengan aman
            </p>
        </div>

        <!-- Flash Message Popups -->
        {{-- SUCCESS MESSAGE --}}
        @if (session('success'))
            <div id="successAlert" class="fixed top-5 left-1/2 transform -translate-x-1/2 bg-green-500 text-white px-6 py-4 rounded-lg shadow-md flex items-center z-50 transition-all">
                <svg class="w-5 h-5 mr-2 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 13l4 4L19 7" />
                </svg>
                <span>{{ session('success') }}</span>
                <button onclick="this.parentElement.remove()" class="ml-4 font-bold hover:text-gray-200">&times;</button>
            </div>
        @endif

        {{-- ERROR MESSAGE --}}
        @if ($errors->any())
            <div id="errorAlert" class="fixed top-5 left-1/2 transform -translate-x-1/2 bg-red-500 text-white px-6 py-4 rounded-lg shadow-md flex items-center z-50 transition-all">
                <svg class="w-5 h-5 mr-2 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
                <span>{{ $errors->first() }}</span>
                <button onclick="this.parentElement.remove()" class="ml-4 font-bold hover:text-gray-200">&times;</button>
            </div>
        @endif



        <div class="auth-container bg-white rounded-xl overflow-hidden">
            <!-- Tab Buttons -->
            <div class="flex border-b border-gray-200">
                <button id="login-tab" class="tab-btn active w-1/2 py-4 px-1 text-center text-sm font-medium text-white bg-yellow-600">
                    Masuk
                </button>
                <button id="register-tab" class="tab-btn w-1/2 py-4 px-1 text-center text-sm font-medium text-yellow-600 bg-white">
                    Daftar
                </button>
            </div>

            <!-- Login Form -->
            <div id="login-form" class="p-8">
                <form class="mt-4 space-y-6" action="{{ route('login') }}" method="POST">
                    <input type="hidden" name="remember" value="true">
                    @csrf
                    <div class="rounded-md space-y-4">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                            <div class="mt-1">
                                <input id="email" name="email" type="email" autocomplete="email" required class="form-input appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none">
                            </div>
                        </div>
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <div class="mt-1 relative">
                                <input id="password" name="password" type="password" autocomplete="current-password" required class="form-input appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none">
                                <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-yellow-600 focus:ring-yellow-500 border-gray-300 rounded">
                                <label for="remember-me" class="ml-2 block text-sm text-gray-900">
                                    Ingatkan saya
                                </label>
                            </div>
                            <div class="text-sm">
                                {{-- <a href="{{ route('password.request') }}" class="font-medium text-yellow-600 hover:text-white-500">
                                    Forgot your password?
                                </a> --}}
                            </div>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition duration-300">
                            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-white-500 group-hover:text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            Masuk
                        </button>
                    </div>
                </form>
            </div>

            <!-- Register Form (Hidden by default) -->
            <div id="register-form" class="p-8 hidden">
                <form class="mt-4 space-y-6" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="rounded-md space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                            <div class="mt-1">
                                <input id="name" name="name" type="text" autocomplete="name" required class="form-input appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none">
                            </div>
                        </div>
                        <div>
                            <label for="email-register" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                            <div class="mt-1">
                                <input id="email-register" name="email" type="email" autocomplete="email" required class="form-input appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none">
                            </div>
                        </div>
                        <div>
                            <label for="password-register" class="block text-sm font-medium text-gray-700">Password</label>
                            <div class="mt-1">
                                <input id="password-register" name="password" type="password" autocomplete="new-password" required class="form-input appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none">
                            </div>
                        </div>
                        <div>
                            <label for="password-confirm" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                            <div class="mt-1">
                                <input id="password-confirm" name="password_confirmation" type="password" autocomplete="new-password" required class="form-input appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none">
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input id="terms" name="terms" type="checkbox" class="h-4 w-4 text-yellow-600 focus:ring-yellow-500 border-gray-300 rounded" required>
                            <label for="terms" class="ml-2 block text-sm text-gray-900">
                                Saya menyetujui <a href="#" class="text-yellow-600 hover:text-white-500">Ketentuan</a> dan <a href="#" class="text-yellow-600 hover:text-white-500">Kebijakan Privasi</a>
                            </label>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition duration-300">
                            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-white-500 group-hover:text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            Buat Akun
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Tab switching functionality
        document.addEventListener('DOMContentLoaded', function() {
            const loginTab = document.getElementById('login-tab');
            const registerTab = document.getElementById('register-tab');
            const loginForm = document.getElementById('login-form');
            const registerForm = document.getElementById('register-form');

            loginTab.addEventListener('click', function() {
                loginTab.classList.remove('bg-white', 'text-yellow-600');
                loginTab.classList.add('bg-yellow-600', 'text-white');
                registerTab.classList.remove('bg-yellow-600', 'text-white');
                registerTab.classList.add('bg-white', 'text-yellow-600');
                loginForm.classList.remove('hidden');
                registerForm.classList.add('hidden');
            });

            registerTab.addEventListener('click', function() {
                registerTab.classList.remove('bg-white', 'text-yellow-600');
                registerTab.classList.add('bg-yellow-600', 'text-white');
                loginTab.classList.remove('bg-yellow-600', 'text-white');
                loginTab.classList.add('bg-white', 'text-yellow-600');
                registerForm.classList.remove('hidden');
                loginForm.classList.add('hidden');
            });

            // Toggle password visibility
            function setupPasswordToggle(inputId, buttonId) {
                const passwordInput = document.getElementById(inputId);
                const toggleButton = document.getElementById(buttonId);

                if (passwordInput && toggleButton) {
                    toggleButton.addEventListener('click', function() {
                        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                        passwordInput.setAttribute('type', type);

                        toggleButton.innerHTML = type === 'password' ?
                            '<svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>' :
                            '<svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path></svg>';
                    });
                }
            }

            // Setup for all password fields
            setupPasswordToggle('password', 'show-pass-login');
            setupPasswordToggle('password-register', 'show-pass-register');
            setupPasswordToggle('password-confirm', 'show-pass-confirm');
        });

        // Auto-hide alert boxes
        setTimeout(() => {
            const successAlert = document.getElementById('successAlert');
            if (successAlert) {
                successAlert.classList.add('opacity-0', 'transition-opacity');
                setTimeout(() => successAlert.remove(), 500); // after fade
            }

            const errorAlert = document.getElementById('errorAlert');
            if (errorAlert) {
                errorAlert.classList.add('opacity-0', 'transition-opacity');
                setTimeout(() => errorAlert.remove(), 500); // after fade
            }
        }, 4000); // 4 seconds
    </script>
</body>
</html>
