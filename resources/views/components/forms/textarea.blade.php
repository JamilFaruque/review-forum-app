
@props(['name','class' => ''])

<textarea 
  {{ $attributes([
      'class' => "w-full outline-none border rounded-md py-1 px-2 " . $class
    ])
  }}
  name="{{$name}}" 
  id=""
  placeholder="Start writing.."
  {{$attributes}}
>{{old($name)}}</textarea>