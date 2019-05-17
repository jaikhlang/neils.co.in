@extends('includes.layout')
@section('stylesheets')

@endsection

@section('content')

<section id="about" class="">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <div class="">
          <span>
            NEILS is a forum for the study of the languages of North East india.
            The NE Indian languages are the richest and most diversed, yet also one of the least-well-known
            region of the linguistic world. NEILS was founded in the year 2006 in Gauhati University having consensus
            with the scholars from linguistic department of Gauhati University and research scholars of Latrobes University, Australia and
            scholars from University of Oregon, USA. Among the pioneer founders of NEILS, we can mention the names of Proff. Jyoti Prakash Tamuli, GU,
            Dr. Stephen Morey, Dr. Mark Post from Latrobe University, Australia.
          </span>
          <span>
            The first International Conference of NEILS was held at GU in 2006. In this conference several interesting papers on T.B languages of any Indian
            and good number of papers on Assamesse and some other I.A languages of NE India where received. Then onwards NEILS has immerged as a well known
            forum for the scholars across India and overseas for the linguistic studies of languages of North East India.
          </span>
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
