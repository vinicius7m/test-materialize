@extends('layouts.app')

@section('styles')

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

@endsection

@section('content')

<section>
    <div class="row">
        <div class="col s12 m6">
            <div class="card z-depth-0">
                <div class="card-image">
                    <img 
                        src="{{ asset('assets/paradise.jpeg') }}" 
                        alt="Card Image"
                    />
                    <span class="card-title">Card Title</span>
                </div>
                <div class="card-content">
                    <p>
                        I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.
                    </p>
                </div>
            </div>    
        </div>
        <div class="col s12 m6">
            <div class="card z-depth-0">
                <div class="card-image waves-effect waves-block waves-light">
                    <img 
                        class="activator" 
                        src="{{ asset('assets/office.jpg') }}" 
                        alt="Escritório"
                    />
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">
                        Card Title <i class="material-icons right">more_vert</i>
                    </span>
                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title activator grey-text text-darken-4">
                        Card Title <i class="material-icons right">close</i>
                        <p>
                            Here is some more information about this product that is only revealed once clicked on.
                        </p>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('.sidenav').sidenav();
    });
</script>
@endsection