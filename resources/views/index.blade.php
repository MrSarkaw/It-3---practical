@extends('layout.public')
@section('content')
   {{-- {{ $name }} --}}

   {!! $name  !!}

   {{-- test --}}

   @if (!1==1)
        ahmed
    @elseif(1 == 1)
        azad
    @else
        mhamad
   @endif

   @unless (1==1)
       
   @endunless --}}

   {{--  --}}

   @switch($name)
       @case('ahmed')
        
           @break
   
       @default
           
   @endswitch

   @php
       $arr= [];
   @endphp


  @if(count($arr) == 0)
    dataman nea
  @endif

   @foreach ($arr as $row)
       {{$row}} <hr> 
   @endforeach

  
   {{-- @forelse ($arr as $row)
   {{$row}} <hr>  
   @empty
    dataman nea
   @endforelse --}}

   {{-- @isset($name)
       
   @endisset --}}


   @guest
       <button>login</button>
       <button>resgier</button>
   @endguest

   @auth
       <img src="" alt="">
   @endauth

   
@endsection