@extends ('layouts.master')


  @section('title', 'TechHelp @ SBTS')

  @section ('content')
    <div id="app"></div>
  @endsection

  @section ('script')
    <script src="{{ asset('js/app.js') }}"></script>
  @endsection
