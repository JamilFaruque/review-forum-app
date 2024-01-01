<div>
  @if ($errors->any())
    @foreach ($errors->all() as $error)
      <p class="text-red-500"><i class="fa-solid fa-circle-dot"></i> {{$error}}</p>
    @endforeach
  @endif
</div>