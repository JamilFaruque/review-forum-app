@props(['class' => ''])

<button 
  type="submit" 
  {{ $attributes([
      'class' => "hover:bg-transparent hover:border-2 hover:text-black hover:border-green-800 bg-green-800 font-semibold px-8 py-2 rounded-md text-white " . $class
    ])
  }}
  >
  {{$slot}}
</button>