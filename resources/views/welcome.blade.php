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



@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('.sidenav').sidenav();
    });
</script>
@endsection