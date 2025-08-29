<div class="max-w-md mx-auto bg-white shadow-lg rounded-2xl p-6">
    <!-- Profile Picture -->
    <div class="flex justify-center">
        <img
            src="{{ asset('Images/PF/' . $user->image_path) }}"
            alt="Profile Picture"
            class="w-32 h-32 rounded-full border-4 border-gray-200 object-cover"
        >
    </div>

    <!-- User Info -->
    <div class="mt-6 text-center">
        <h2 class="text-2xl font-bold text-gray-800">{{ $user->name }}</h2>
        <p class="text-gray-500">{{ $user->email }}</p>

        <!-- Extra info -->
        <div class="mt-3 space-y-2">

            <!-- Role Form -->
            <form action="{{ route('backoffice.users.show', $user->id) }}" method="POST" class="inline-block">
                @csrf
                @method('PATCH')
                <p class="text-sm text-gray-600">
                    <span class="font-semibold">Role:</span>
                    <select name="role" class="ml-2 px-2 py-1 border border-gray-300 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="User" {{ $user->role == 'User' ? 'selected' : '' }}>User</option>
                        <option value="Admin" {{ $user->role == 'Admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                    <p class="text-sm text-gray-600 mt-3">
                        <span class="font-semibold">Joined:</span> {{ $user->created_at->format('d M Y') }}
                    </p>
                    <button type="submit" class="cursor-pointer ml-2 px-6 py-1.5 mt-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        Save
                    </button>
                </p>
            </form>

            <!-- Joined date -->

        </div>
    </div>
</div>
