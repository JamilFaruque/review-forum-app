<x-layout>
  <main class="flex gap-x-5 px-10 py-10">
    <div class="basis-[70%]">
      <h1 class="text-3xl font-medium mb-4">Latest Reviews</h1>

      <div class="grid grid-cols-2 gap-5">
        @foreach ($reviews as $review )
        <div class="border rounded p-2 min-h-[10rem]">
          <div class="flex justify-between">
            <p class="flex-1 text-lg">{{$review->title}} </p>
            <p class="text-gray-500 ml-1 text-xs">
              Date: {{$review->created_at?->format('d-m-y')}}
          </div>
          <p class="text-gray-600 text-sm mt-1">Written by: {{ $review->author->name }}</p>
          <p class="mt-4">{{ $review->excerpt }}</p>
        </div>
        @endforeach
      </div>
    </div>

    <div class="border rounded p-2 min-h-[60vh] basis-[30%]">
      <h1 class="text-xl text-center font-medium mb-4">
        <?= auth()->user() ? 'Welcome, ' . auth()->user()->name : 'Write a review' ?>
      </h1>
      @auth
      <form action="/submit-review" method="post" class="space-y-2">
        @csrf
        <h2 class="pt-2">Write a review:</h2>
        <x-forms.input name='title' />
        <x-forms.input name="excerpt" />
        <x-forms.textarea name="body" class="h-[150px] resize-none"></x-forms.textarea>

        <div class="flex justify-between h-full">
          <select name="category_id" class="block border px-2 outline-none rounded-md min-w-20">
            <option value="">category</option>
            @foreach (App\Models\Category::all() as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>
          <x-forms.button>Post</x-forms.button>
        </div>
        <x-forms.error />
      </form>
      @else
      <div>
        <p class="text-center">Please
          <a href="/login" class="text-blue-500 underline">Login</a> or
          <a href="/register" class="text-blue-500 underline">Register</a> to write a review!
        </p>
      </div>
      @endauth
    </div>
  </main>

  @if (session()->has('success'))
    @include('sweet-alert',['msg' => session('success') ])
  @endif
</x-layout>