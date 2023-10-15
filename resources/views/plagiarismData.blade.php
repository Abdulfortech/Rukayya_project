@extends('layout.layout')

@section('content')

<div class="row">
    {{-- navigation bar --}}
    @include('components.sidebar')
    {{-- end navigation bar --}}

    <div class="accordion" id="accordion">
        <p class="font-30 peach-color font-weight-bold pt-5 pb-2">Plagiarism Result</p>
        <div class="container">
        {{var_dump($result)}}
          <p><b> <i class="fa fa-arrow-right"></i> Query :</b> {{$result["query"]}} </p>
          <p><b> <i class="fa fa-arrow-right"></i> Uniqueness :</b> {{var_dump($result["unique"])}} </p>
          <p><b> <i class="fa fa-arrow-right"></i> Total Matches :</b> {{$result["totalMatches"]}} </p>
          <p><b> <i class="fa fa-arrow-right"></i> Query :</b> {{$result["query"]}} </p>
        </div>
        
        <p class="font-20 peach-color font-weight-bold pt-5 pb-2">Sources</p>
        <table class="table">
          <thead> 
            <tr>
              <th>S/N</th>
              <th>Title</th>
              <th>Link</th>
            </tr>
          </thead>
          <tbody> 
            @php
            $count=1;
            @endphp
            @foreach($result["webs"] as $source)
                <tr>
                <td>{{$count}}</td>
                <td>{{$source["title"]}}</td>
                <td>{{$source["url"]}}</td>
                </tr>
                @php
                $count++;
                @endphp
            @endforeach
          </tbody>
        </table>
    </div>
</div>