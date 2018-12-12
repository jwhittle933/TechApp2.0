@extends ('layouts.master')


  @section('title', 'TechHelp @ SBTS')

  @section ('content')
    <div id="troubleshooter"></div>
  @endsection

  @section ('script')
    <script src="{{ asset('js/troubleshooter.js') }}"></script>
  @endsection
