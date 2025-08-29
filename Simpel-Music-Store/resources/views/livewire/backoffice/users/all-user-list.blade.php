<div>
    <div class="px-4 sm:px-6 lg:px-8">
  <div class="sm:flex sm:items-center">
    <div class="sm:flex-auto ml-3">
        <h1 class="text-2xl font-semibold text-gray-900">Users</h1>
        <p class="mt-2 text-m text-gray-700">A list of all users on VinylStar</p>
        </div>
  </div>
  <div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow outline outline-1 outline-black/5 sm:rounded-lg">
          <table class="relative min-w-full divide-y divide-gray-300">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Name</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Date of Sign-up</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Role</th>
                <th scope="col" class="py-3.5 pl-3 pr-4 sm:pr-6">
                </th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
            @foreach ($users as $user)
              <tr>
                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{$user->name}}</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$user->created_at}}</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$user->email}}</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-900 font-medium @if ($user->role === 'admin')
                    text-red-500 font-bold
                @endif">{{$user->role}}</td>
                <td class="whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                  <a href="/backoffice/users/{{ $user->id }}" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
