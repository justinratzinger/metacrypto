@props(['pageHeader'])

<x-layout :title="$pageHeader">

    @push('headTags')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet"> 
    @endpush
    
    <div class="container mt-5 mb-5">
        <div class="page-header">
            <h1> {{ $pageHeader }}</h1>
        </div>
      </div>


      {{ $slot }}

    @push('footerTags')
    <script src='{{ asset('js/dashboard.js') }}'></script> 
    @endpush
 
 </x-layout>
     