@extends('includes.layout')
@section('stylesheets')

@endsection

@section('content')
<section id="carousel" class="red">
  <div class="carousel carousel-slider">
    <a class="carousel-item" href="#one!"><img src="{{ asset('image/banner1.png') }}"></a>
    <a class="carousel-item" href="#two!"><img src="{{ asset('image/banner2.png') }}"></a>
  </div>
</section>

<section id="intro" class="grey lighten-2">
  <div class="container">
    <div class="row">
      <div class="col s8">
        <div class="intro-abouts">
          <span><i class="material-icons red-text medium">notifications_none</i></span>
          <span class="conference-note">
            <h5 class="red-text">NEILS 11<sup>TH</sup> ANNUAL CONFERENCE 2020</h5>
            {{-- <p class="grey-text text-darken-2">Dont Miss The Event Conference NEILS 2020</p> --}}
            <p class="grey-text text-darken-2">WILL BE HELD IN CENTRAL INSTITUTE OF TECHNOLOGY KOKRAJHAR<br>IN THE MONTH OF FEBRUARY 2019</p>
          </span>
        </div>
      </div>
      {{-- <div class="col s3 left-align">
        <span class="intro-days">
          <span class="red-text number">566</span>
          <span>DAYS<br>TO GO</span>
        </span>
      </div> --}}

      <div class="col s4">
        <div class="intro-button right">
          <a href="#" class="btn-large waves-effect waves-light red white-text">REGISTER FOR CONFERENCE 2020</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="trigger" class="">
  <div class="container">
    <div class="row">
      <div class="col s4">
        <div class="center-align">
          <div class="trigger-area">
            <span><a class="grey-text text-darken-2" href="#">Connect With Members</a></span>
          </div>
        </div>
      </div>
      <div class="col s4">
        <div class="center-align">
          <div class="trigger-area">
            <span><a class="grey-text text-darken-2" href="#">Explore Linguistic Research</a></span>
          </div>
        </div>
      </div>
      <div class="col s4">
        <div class="center-align">
          <div class="trigger-area">
            <span><a class="teal-text text-darken-2" href="#">Sign In | Join Now</a></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="newsfeed">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <div class="" id="newsFeed">
          <strong>FROM NEWS ROOM</strong>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s4">
        <div class="newsfeed-item">
          <h6>Title or something orem ipsum dolor tur adipi sed do eiusmod tempor.</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
        </div>
      </div>
      <div class="col s4">
        <div class="newsfeed-item">
          <h6>Title or something orem ipsum dolor tur adipi sed do eiusmod tempor.</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
        </div>
      </div>
      <div class="col s4">
        <div class="newsfeed-item">
          <h6>Title or something orem ipsum dolor tur adipi sed do eiusmod tempor.</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="publication" class="grey lighten-2">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <div class="" id="recentPublications">
          <strong>RECENT PUBLICATIONS</strong>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s6">
        <div class="publication-item">
          <div class="">
            <img src="{{ asset('image/paper1.jpg') }}" alt="">
          </div>
          <div class="">
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <span class="publication-meta">10th November 2018</span><br/><br/>
            <a href="#" class="btn white grey-text">READ MORE</a>
          </div>
        </div>
      </div>
      <div class="col s6">
        <div class="publication-item">
          <div class="">
            <img src="{{ asset('image/paper2.jpg') }}" alt="">
          </div>
          <div class="">
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <span class="publication-meta">10th November 2018</span><br/><br/>
            <a href="#" class="btn white grey-text">READ MORE</a>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="col s12">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.</p>
      </div>
    </div>
  </div>
</section>
@endsection

@section('scripts')

@endsection
