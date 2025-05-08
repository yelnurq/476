<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>47 мектеп А.Байтұрысынов атындағы - @yield("title")</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset("css/data.css")}}"> 
</head>
<body>
    <div class="head_main">
        <div class="header">
            <div class="container">
                <div class="header-line">
                    <a href="/">
                    <div class="logo">
    
                        <p class="p" style="font-weight: 900">АХМЕТ БАЙТҰРСЫНҰЛЫ АТЫНДАҒЫ<br> №47 ЖАЛПЫ ОРТА БІЛІМ БЕРЕТІН МЕКТЕБІ</p>
                    </div></a>
                    <div class="right-tools">
                        <div class="navbar">
                            <ul>
    
                            </ul>
                            </div>
                        <div class="tools">
                            <div class="two">
                                <p style="font-size: 17px; font-weight:700">Абай облысы, Семей қаласы</p>
                                {{-- <p>Қабылдау бөлімі: +7(722) 264-19-15 </p>
                                <p>Есепші бөлімі: +7(722) 264-19-15</p> --}}
                            </div>
    
    
                    </div>
                    </div>
    
                </div>
            </div>
        </div>
        <div class="upheader">
            <div class="header-line-up">
    
                <div class="right-tools">
                    <div class="navbar">
                        <ul>
                            <li><a href="/">Ақпарат</a></li>
                            <li><a href="/news">Жаңалықтар</a></li>
                            {{-- <li class="dropdown">
                                <a href="{{route("shoes.blazer")}}">Оқушыларға</a>
                                <div class="dropdown-content">
                                    <a href="/news/1">ҰБТ-2024 жаңалықтары</a>
                                    <a href="/news/10">Жарыстардағы ұтысымыз!</a>
                                    <a href="/news/12">Cпорттық секциялардың ашылуы</a>
                                </div>
                            </li> --}}
                            <li class="dropdown">
                                <a>Біз туралы *</a>      
                                <div style="min-width:300px" class="dropdown-content">
                                    <div class="dropdown-content">
                                        <a href="/about/history">Мектеп тарихы
                                        </a>
                                        <a href="/about/administration">Әкімшілік
                                        </a>
                                        <a href="/about/teachers">Мұғалімдер
                                        </a>
                                        <a href="{{route("support")}}">Әлеуметтік көмек</a>
                                    </div>                            </div>
                            </li>
                            <li><a href="/application">Мектепке түсу</a></li>
                            <li><a href="{{route("questions")}}">Жиі қойылатын сұрақтар</a></li>
                            
                            <li><a href="{{route("bailanys")}}">Байланыс</a></li>
                            <li class="dropdown">
                                <a>Терроризмге қарсы іс-шаралар*</a>
                                <div style="min-width:300px" class="dropdown-content">
                                    <div class="dropdown-content">
                                        <a href="/docs/1">Министрдің терроризмге қарсы іс-қимыл туралы бұйрығы
                                        </a>
                                        <a href="/docs/2">Вице-министрдің мектептерде оқу-жаттығу өткізу туралы бұйрығы
                                        </a>
                                        <a href="/docs/3">Төтенше жағдайлар мен оқиғалар алгоритмдері</a>
                                    </div>                            </div>
                            </li>
                                <li><a href="{{route("product.create")}}">Директор</a>
                                </li>
                            @if(Auth::guard("admin")->check())
                                <li>
                                    <form action="{{route("admin.logout")}}" method="POST">
                                        @csrf
                                        <button style="background: none; border:none; font-size:17px; cursor:pointer; color:white;" type="submit">
                                            Шығу
                                            </button>
                                    </form>
                                </li>
                            @endif
                        </ul>
                        </div>
    
                </div>
                </div>
        </div>
    </div>

    @yield("main")
    <div class="footer">
        <div class="footer-line">
            <div class="left-side">
                <p class="p" style="font-weight: 800">АХМЕТ БАЙТҰРСЫНҰЛЫ АТЫНДАҒЫ<br> №47 ЖАЛПЫ ОРТА БІЛІМ БЕРЕТІН МЕКТЕБІ</p>
                <p style="font-size: 17px; font-weight:700">Абай облысы, Семей қаласы</p>

            </div>

            <div class="numbers">
                <div class="number_div">
                    <p>Қабылдау бөлімі:</p>
                    +7(722) 264-19-15
                </div>
                <div class="number_div" style="margin-top:20px;">
                    <p>Есепші бөлімі:</p>
                    +7(722) 264-19-15
                </div>
            </div>

        </div>
    </div>
<body>
