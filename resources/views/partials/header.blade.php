@php
$Menulist = [
    [
        'href'=> '1',
        'text'=> 'CHARACTERS',
    ],
    [
        'href'=> '1',
        'text'=> 'COMICS',
    ],
    [
        'href'=> '1',
        'text'=> 'MOVIES',
    ],
    [
        'href'=> '1',
        'text'=> 'TV',
    ],
    [
        'href'=> '1',
        'text'=> 'GAMES',
    ],
    [
        'href'=> '1',
        'text'=> 'COLLECTIBLES',
    ],
    [
        'href'=> '1',
        'text'=> 'VIDEOS',
    ],
    [
        'href'=> '1',
        'text'=> 'FANS',
    ],
    [
        'href'=> '1',
        'text'=> 'NEWS',
    ],
    [
        'href'=> '1',
        'text'=> 'SHOP',
    ],
]
@endphp

<header id='app_header' >
    <div class="container-fluid header1 d-flex justify-content-center">
        <div class="container text-white justify-content-end d-flex">
            <p>DC POWER BY VISA</p>
            <p>ADDITIONALS DC SITES</p>
        </div>
    </div>
    <div class="container-fluid bg-white header2 d-flex justify-content-center">
        <div class="container position-relative bg-white d-flex align-items-center justify-content-between"">
            <img id='header-logo' src="{{asset('../img/dc-logo.png')}}" alt="">
            <ul id='header-list'>
                @foreach($Menulist as $item)
                    <li class='mx-3'><a href="#">{{$item['text']}}</a></li>
                @endforeach
            </ul>
            <input type="search" placeholder='Search'>
            <i class="fas fa-search"></i>
        </div>
    </div>
</header>
