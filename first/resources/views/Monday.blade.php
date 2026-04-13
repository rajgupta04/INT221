@extends('layout.common')
@section('title')
 Monday
@endsection
@include('layout.header')
<!-- @include('layout.footer') -->

<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
     <!-- <p> Inside Monday-----! </p> -->
      <h1> @lang('Monday.welcome') <b> @lang('Monday.student_name') </b> </h1>
      
      <div style="margin-top: 20px;">
          <p>Switch Language:</p>
          <a href="{{ url('/monday/en') }}">English</a> | 
          <a href="{{ url('/monday/hn') }}">हिंदी (Hindi)</a>
      </div>
</div>
