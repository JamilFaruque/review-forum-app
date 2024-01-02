<x-layout>
  <main>
    <form method="post" action="/login" class="mt-10">
      @csrf

      <h1 class="text-3xl font-semibold text-center">Login</h1>

      <div class="w-1/3 space-y-5 mx-auto mt-8">
        <x-forms.input name='email' type='email' />
        <x-forms.input name='password' type='password' />
        <x-forms.error/>
      </div>
      <div class="text-center mt-4">
        <x-forms.button>Login</x-forms.button>
      </div>
    </form>
  </main>
</x-layout>