
@extends('layout.master')

    @section('head')
    <style>
            .fail{
                color:red;
            }
        </style>
    @endsection
    
@section('content')
<h1>hello!!{{$userName}}</h1>
<p>{!! $line !!}</p>
<ul>
    @foreach ($scoreList as $score)
        

    @endforeach
    <select>
        <option value="2" {{($cityId==2)?"selected":""}}>台北</option>
        <option value="4" {{($cityId==4)?"selected":""}}>彰化</option>
        <option value="5" {{($cityId==5)?"selected":""}}>台南</option>
    </select>
    
</ul>
@endsection