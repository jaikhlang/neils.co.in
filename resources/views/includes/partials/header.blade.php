<header class="grey lighten-4">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <span class="">
          <i class="material-icons">event_note</i>
          <span>Latest News:</span>
        </span>
        <a href="#">Announcement for the NEILS 2020 Conference at CIT Kokrajhar Assam</a>
        <span class="right"><a href="">social icons</a></span>
      </div>
    </div>
  </div>
</header>

<nav class="transparent z-depth-0">
  <div class="container">
    <div class="row">
      <div class="col s12 nav-wrapper">
        <a href="#" class="brand-logo red-text">NEILS <small class="grey-text text-darken-2">North Eastern Indian Linguistic Society</small></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a class="{{ Route::is('pages.index') == '/' ? 'red-text' : 'grey-text text-darken-3' }}" href="{{ route('pages.index') }}">HOME</a></li>
          <li><a class="{{ Route::is('pages.issues') == '/issues' ? 'red-text' : 'grey-text text-darken-3' }}" href="{{ route('pages.issues') }}">LINGUISTIC ISSUES</a></li>
          <li><a class="{{ Route::is('pages.about') == '/about' ? 'red-text' : 'grey-text text-darken-3' }}" href="{{ route('pages.about') }}">ABOUT NEILS</a></li>
          <li><a class="{{ Route::is('pages.contact') == '/contact' ? 'red-text' : 'grey-text text-darken-3' }}" href="{{ route('pages.contact') }}">CONTACT US</a></li>
          {{-- <li><a class="" href="badges.html" style="padding-right: 0px!important;"><span class="btn grey">REGISTER NOW</span></a></li> --}}
        </ul>
      </div>
    </div>
  </div>
 </nav>


<style media="screen">
  #nav-mobile li a{
    color: grey;
  }
</style>
