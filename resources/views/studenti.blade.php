@extends('layouts.app')

@section('content')

  <div class="cnt-stud">
    <div class="container">
      <div class="row">

        @foreach ($students as $student)
          <div class="col-6">
            <div class="student">
              <div class="student-left">
                <img src="{{ $student['img'] }}" alt="">
              </div>
              <div class="student-right">
                <h3>
                  <a href="{{ route('studenti.show', $student['slug'])}}">{{ $student['name'] }} ({{ $student['age'] }} anni)</a>
                </h3>
                <small>Ora è Web Developer in {{ $student['work'] }}</small>
              </div>
            </div>
          </div>

        @endforeach

      </div>
    </div>
  </div>

  @endsection
