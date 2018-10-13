@extends ('layouts.master')


  @section('title', 'TechHelp @ SBTS')

  @section ('content')
    <div id="app"></div>
  @endsection

  @section ('script')
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="{{ asset('js/app.js') }}"></script>
  @endsection