@extends('layouts.app')

@section('content')

<nav class="indigo darken-1">
    <div class="container nav-wrapper">
        <a href="#!" class="brand-logo">Logo</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="">Sass</a></li>
            <li><a href="">Components</a></li>
            <li><a href="">Javascript</a></li>
            <li><a href="">Mobile</a></li>
        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="">Sass</a></li>
    <li><a href="">Sass</a></li>
    <li><a href="">Sass</a></li>
    <li><a href="">Sass</a></li>
    
</ul>

<section class="container">
    <div class="row">
        <div class="col s12 m6">
            <div class="card">
                <div class="card-image">
                    <img 
                        src="{{ asset('assets/paradise.jpeg') }}" 
                        alt="Card Image"
                    />
                    <span class="card-title">Card Title</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red" href=""><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                    <p>
                        I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.
                    </p>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('.sidenav').sidenav();
    });
</script>
@endsection