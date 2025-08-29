<div>
  <h3 class="text-base font-semibold text-gray-900 ">User Statistics</h3>
  <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
    <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow-lg sm:p-6">
      <dt class="truncate text-sm font-medium text-gray-500">Orders Placed</dt>
      <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{count($orders)}}</dd>
    </div>
    <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow-lg sm:p-6">
      <dt class="truncate text-sm font-medium text-gray-500">Total Revenue Generated</dt>
      <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">${{$totalRevenue}}</dd>
    </div>
    <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow-lg sm:p-6">
      <dt class="truncate text-sm font-medium text-gray-500">Reviews Placed</dt>
      <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{count($reviews)}}</dd>
    </div>
  </dl>
</div>
