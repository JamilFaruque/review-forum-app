<x-layout>
  <main class="flex gap-x-5 px-10 py-10">
    <div class="flex-1">
      <h1 class="text-3xl font-medium mb-4">Latest Reviews</h1>

      <div class="grid grid-cols-2 gap-5">
        @foreach ($reviews as $review )
        <div class="border rounded p-2">
          <div class="flex justify-between">
            <p class="flex-1 text-lg">{{$review->title}} </p>
            <p class="text-gray-500 ml-1 text-xs"> Date: 01-05-2020 </p>
          </div>
          <p class="text-gray-600 text-sm mt-1">Written by: {{ $review->author->name }}</p>
          <p class="mt-4">{{ $review->excerpt }}</p>
        </div>
        @endforeach
      </div>
    </div>

    <div class="border rounded p-2 min-h-[60vh]">
      <h1 class="text-xl text-center font-medium mb-4">Write Review</h1>
      <div>
        <p>Please <a href="/login">Login</a> or <a href="/register">Register</a> to write a review!
      </div>
    </div>
  </main>
</x-layout>