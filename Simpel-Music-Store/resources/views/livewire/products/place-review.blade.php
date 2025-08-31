<div>
    <button wire:click="toggle" class="cursor-pointer mt-2 text-sm text-blue-400 hover:underline">
        Place a Review
    </button>

    @if ($toggleReview)
        <div class="max-w-md  mt-10 p-6 bg-white rounded-xl shadow-md">
            <h2 class="text-xl font-semibold mb-4">Leave a Review</h2>
            <form action="#" method="POST" class="space-y-4">
            <!-- Review Textarea -->
            <div>
            <label for="review" class="block text-sm font-medium text-gray-700 mb-1">Your Review</label>
            <textarea id="review" name="review" rows="4"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Write your thoughts here..."></textarea>
            </div>

            <!-- Rating Selector -->
            <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Rating</label>
                <div class="flex space-x-1">
                    @for ($i = 1; $i <= 5; $i++)
                        <input type="radio" id="star{{ $i }}" name="rating" value="{{ $i }}" class="hidden" wire:model.live="rating">
                        <label for="star{{ $i }}" class="cursor-pointer text-2xl hover:text-yellow-400  {{ $rating >= $i ? 'text-yellow-400' : 'text-gray-300' }}">★</label>
                    @endfor
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit"
            class="w-full py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            Submit Review
            </button>
        </form>
        </div>
    @endif
</div>
