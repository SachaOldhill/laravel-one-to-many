@extends('layouts.main-layout')
@section('content')
    <div class="my_home">
      <h1>Employees</h1>
      <ul>
        @foreach ($employees as $employee)
          <li>
            <strong>
             {{ $employee -> firstname }}
             -
             {{ $employee -> lastname }}
            </strong>

            <ul>
              @foreach ($employee -> tasks as $task)
                <li>
                  {{ $task -> title }}
                </li>
              @endforeach
            </ul>
          </li>
        @endforeach
    </ul>
    </div>
@endsection
