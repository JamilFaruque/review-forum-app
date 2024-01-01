@props(['name','type' => 'text' ,'placeholder'])

<input 
  class="block w-full outline-none border rounded-md py-1 px-2" 
  type= {{$type}}
  name = {{$name}}
  placeholder= "{{$placeholder ?? ucwords($name)}}"
  value="{{old($name)}}"
/>

