@props(['name','type' => 'text' ,'placeholder','class' => ''])

<input 
  {{ $attributes([
    'class'=>"block w-full outline-none border border-gray-500 rounded-md py-1 px-2 " . $class ])
  }}
  type= {{$type}}
  name = {{$name}}
  placeholder= "{{$placeholder ?? ucwords($name)}}"
  value="{{old($name)}}"
/>

