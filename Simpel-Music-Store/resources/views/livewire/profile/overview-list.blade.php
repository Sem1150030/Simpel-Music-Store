<div class="mt-40">
    <div class="flex justify-center mt- mb-10">
        <h1 class="text-[#F4D468] font-semibold text-3xl">Welcome {{$user->name}}</h1>
    </div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
        <!-- Order History -->
        <div class="bg-[#111] border border-yellow-500 text-white rounded-2xl m-2 p-10 text-center shadow-lg hover:shadow-yellow-500/30 transition">
            <h2 class="text-xl font-semibold mb-4 text-[#F4D468]">Order History</h2>
            <p class="text-gray-300 mb-4">View your past purchases and track orders.</p>
            <a href="/profile/orders" class="cursor-pointer px-4 py-2 bg-yellow-500 text-black font-semibold rounded-lg hover:bg-yellow-400">
                View Orders
            </a>
        </div>

        <!-- User Details -->
        <div class="bg-[#111] border border-yellow-500 text-white rounded-2xl m-2 p-10 text-center shadow-lg hover:shadow-yellow-500/30 transition">
            <h2 class="text-xl font-semibold mb-4 text-[#F4D468]">User Details</h2>
            <p class="text-gray-300 mb-4">Update your profile and account settings.</p>
            <a class="cursor-pointer px-4 py-2 bg-yellow-500 text-black font-semibold rounded-lg hover:bg-yellow-400">
                Edit Profile
            </a>
        </div>

        <!-- Logout -->
        <div class="bg-[#111] border border-yellow-500 text-white rounded-2xl m-2 p-10 text-center shadow-lg hover:shadow-yellow-500/30 transition">
            <h2 class="text-xl font-semibold mb-4 text-[#F4D468]">Logout</h2>
            <p class="text-gray-300 mb-4">Sign out of your account securely.</p>
            <a href="/auth/logout" class="cursor-pointer px-4 py-2 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-500">
                Logout
            </a>
        </div>
        @if ($role === 'admin')
            <div class="bg-[#111] border border-yellow-500 text-white rounded-2xl m-2 p-10 text-center shadow-lg hover:shadow-yellow-500/30 transition">
                <h2 class="text-xl font-semibold mb-4 text-[#F4D468]">Backoffice</h2>
                <p class="text-gray-300 mb-4">Backoffice for administrators</p>
                <a href="/backoffice/overview" class="cursor-pointer px-4 py-2 bg-[#1c5889] text-white font-semibold rounded-lg hover:bg">
                    View Backoffice
                </a>
            </div>
        @endif
    </div>

</div>
