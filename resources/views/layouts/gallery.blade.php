@extends('layouts.app')

@section('content')
    
<div class="container">
    <header class="text-center">
        <h1>Potfolio</h1>
    </header>
    <div class="row">
        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
            <div class="row h-50">
                <div class="col-md-12 col-sm-12 co-xs-12 gal-item">
                    <div class="box">
                        <img src="http://fakeimg.pl/758x370/" class="img-ht img-fluid rounded">
                    </div>
                </div>
            </div>
        
            <div class="row h-50">
                <div class="col-md-6 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <img src="http://fakeimg.pl/748x177/" class="img-ht img-fluid rounded">
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <img src="http://fakeimg.pl/371x370/" class="img-ht img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="col-md-12 col-sm-6 co-xs-12 gal-item h-25">
                <div class="box">
                    <img src="http://fakeimg.pl/748x177/" class="img-ht img-fluid rounded">
                </div>                
            </div>

            <div class="col-md-12 col-sm-6 co-xs-12 gal-item h-75">
                <div class="box">
                    <img src="http://fakeimg.pl/748x177/" class="img-ht img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
    <br/>
</div>

@endsection