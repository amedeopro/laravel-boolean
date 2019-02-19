
    @extends('layouts.app')

    @section('content')
      <div class="jumbo">

        <div class="container">
          <div class="row">
            <div class="col-6">
              <div class="left">

                <div class="title-home">
                  <h1>Diventa sviluppatore web</h1>
                </div>

                <div class="text-home">

                  <p>6 mesi di corso intensivo online in diretta per imparare da zero il mestiere di web developer e trovare un nuovo lavoro nelle aziende top del settore</p>

                </div>

                <div class="button-home">
                  <a href="#">scopri il corso</a>
                </div>

              </div>
            </div>

            <div class="col-6">
              <div class="right">

                <img src="{{ asset('img/mac2x.png')}}" alt="">

              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="partners">
        <div class="container">

            <div class="row">
              <div class="col-12">
                <div class="text-partners">
                  <h2>I nostri studenti sono stati assunti da</h2>
                </div>
                <div class="logo-partners">
                  <img src="{{ asset('img/facile_it.png')}}" alt="">
                  <img src="{{ asset('img/oneday.png')}}" alt="">
                  <img src="{{ asset('img/cayenne.png')}}" alt="">
                  <img src="{{ asset('img/softec.png')}}" alt="">
                  <img src="{{ asset('img/fabbrica_digitale.png')}}" alt="">
                </div>
              </div>

            </div>
        </div>
      </div>
    @endsection
