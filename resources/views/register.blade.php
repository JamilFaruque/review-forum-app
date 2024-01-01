<x-layout>
  <main>
    <form method="post" action="/register" class="mt-10">
      @csrf

      <h1 class="text-3xl font-semibold text-center">Register</h1>

      <div class="w-1/3 space-y-5 mx-auto mt-8">
        <x-forms.input name='name'/>
        <x-forms.input name='username' placeholder="Username (must be unique)"/>
        <x-forms.input name='email' type='email' />
        <x-forms.input name='password' type='password' />
        <x-forms.error/>
      </div>
      <div class="text-center mt-4">
        <x-forms.button>Register</x-forms.button>
      </div>

    </form>
  </main>
</x-layout>