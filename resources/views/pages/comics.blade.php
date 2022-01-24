@extends('layouts.main-layout')
@section('main')
    <section id="comics">
        <div class="container">

            <div class="title">
                <h2>CURRENT SERIES</h2>
            </div>

            <div class="cards-container">
                @foreach ($comics as $i => $comic)

                    <div class="comic">

                        <div class="img-container">
                            <a href="{{route('comic')}}">
                                <img src="{{asset('storage/assets/comic2.jpg')}}" alt="details.series">
                            </a>
                        </div>
                
                        <div class="text">{{$comic['name']}}</div>
                
                    </div>
    
                @endforeach
                
            </div>

        </div>
    </section>
    <section id="shop-main">
        <div class="cards">
            <div class="card">
        
                <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-DCUI.svg" alt="card.text">
        
                <div>shop</div>
        
            </div>
            <div class="card">
        
                <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-DCUI.svg" alt="card.text">
        
                <div>shop</div>
        
            </div>
            <div class="card">
        
                <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-DCUI.svg" alt="card.text">
        
                <div>shop</div>
        
            </div>
            <div class="card">
        
                <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-DCUI.svg" alt="card.text">
        
                <div>shop</div>
        
            </div>
            <div class="card">
        
                <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-DCUI.svg" alt="card.text">
        
                <div>shop</div>
        
            </div>
        </div>
      </section>
@endsection