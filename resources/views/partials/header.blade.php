@php
$Menulist = [
        [
            'testo'=> 'chracaters chracaters chracaters chracaters chracaters chracaters',
            'text'=> 'CHARACTERS',
        ],
        [
            'testo'=> 'comics comics comics comics comics comics',
            'text'=> 'COMICS',
        ],
        [
            'testo'=> 'movies movies movies movies movies movies',
            'text'=> 'MOVIES',
        ],
        [
            'testo'=> 'tv tv tv tv tv tv',
            'text'=> 'TV',
        ],
        [
            'testo'=> 'games games games games games games',
            'text'=> 'GAMES',
        ],
        [
            'testo'=> 'collectibles collectibles collectibles collectibles collectibles collectibles',
            'text'=> 'COLLECTIBLES',
        ],
        [
            'testo'=> 'videos videos videos videos videos videos',
            'text'=> 'VIDEOS',
        ],
        [
            'testo'=> 'fans fans fans fans fans fans',
            'text'=> 'FANS',
        ],
        [
            'testo'=> 'news news news news news news',
            'text'=> 'NEWS',
        ],
        [
            'testo'=> 'shop shop shop shop shop shop',
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
            <a href="{{route('route_welcome')}}">
                <img id='header-logo' src="{{asset('../img/dc-logo.png')}}" alt="">
            </a> 
            <ul id='header-list'>
                @foreach($Menulist as $index => $item)
                    <li class='mx-3'><a href="{{route('menu',['id'=> $index])}}">{{$item['text']}}</a></li>
                @endforeach
            </ul>
            <input type="search" placeholder='Search'>
            <i class="fas fa-search"></i>
        </div>
    </div>
</header>
