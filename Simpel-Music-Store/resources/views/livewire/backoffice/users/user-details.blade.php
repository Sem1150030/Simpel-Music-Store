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
        <div class="mt-2 space-y-2">

            <!-- Role Form -->
            <form action="{{ route('profile.changerole', $user->id) }}" method="POST" class="inline-block">
                @csrf
                @method('PUT')
                <p class="text-sm text-gray-600">
                    <p class="text-sm text-gray-600 mb-2">
                        <span class="font-semibold">Joined:</span> {{ $user->created_at->format('d M Y') }}
                    </p>
                    <span class="font-semibold">Role:</span>
                    @if(Auth::id() != $user->id)
                    <select name="role" class="ml-2 px-2 py-1 border border-gray-300 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                    @endif
                    @if(Auth::id() === $user->id)
                        <span class="font-semibold">{{ucfirst($user->role)}}</span>
                    @endif
                    <br>
                    @if(Auth::id() != $user->id)
                        <button type="submit" class="
                            cursor-pointer  ml-2 px-6 py-1 mt-5 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            Save
                        </button>
                    @endif
                </p>
            </form>

            <!-- Joined date -->

        </div>
    </div>
</div>
