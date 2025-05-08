@extends("layouts/head2")
@section("main")

    <div class="main_object">
        <div class="container">
            <div class="right">
                <img src="{{asset("./images/main.jpg")}}" alt="">
 
             </div>
            <div class="left">
                <p class="title">АХМЕТ БАЙТҰРСЫНҰЛЫ АТЫНДАҒЫ <br>  №47 ЖАЛПЫ ОРТА БІЛІМ БЕРЕТІН МЕКТЕБІ</p>
                <p class="desc">Ахмет Байтұрсынұлы атындағы мектеп Қазақстанның білім беру жүйесінде жоғары сапалы білім мен тәрбие беру бағытында маңызды рөл атқарады. Мектептің басты мақсаты – оқушыларды жан-жақты дамыту, білім мен дағдыларды терең меңгерту.</p>
            </div>
            
            

        </div>
    </div>
    <div class="btm_border" style="text-align: center; margin-bottom:90px;">
        <img src="{{asset("images/bottom_img.png")}}" alt="">
    </div>
    <div class="info_blocks">
        <div class="container">
            <div class="info_block item1">
                <p class="title">Ахмет Байтұрсынұлы деген кім?</p>
                <div class="desc">
                    <p>
                        Қазақтың ақыны, әдебиет зерттеуші ғалым, түркітанушы, публицист, педагог, аудармашы, қоғам қайраткері. Қазақ халқының XX ғасырдың басындағы ұлт-азаттық қозғалысы жетекшілерінің бірі, мемлекет қайраткері, қазақ тіл білімі мен әдебиеттану ғылымдарының негізін салушы ғалым, ұлттық жазудың реформаторы, ағартушы, Алаш Орда өкіметінің мүшесі.
                    </p>
                </div>
            </div>
    
            <div class="info_block item3">
                <div class="desc" style="padding-top:30px;">
                    <p>6987</p>
                </div>
                <p class="title">Түлектер</p>
            </div>
    
            <div class="info_block item3">
                <div class="desc">
                    <p>100</p>
                </div>
                <p class="title">Мұғалімдер</p>
            </div>
    
            <div class="info_block item3">
                <div class="desc">
                    <p>30</p>
                </div>
                <p class="title">Сыныптар</p>
            </div>
    
            <div class="info_block item2">
                <div class="desc">
                    <p>Әлеуметтік көмек</p>
                </div>
                </div>
    
            <div class="info_block item3">
                <div class="desc">
                    <p>10</p>
                </div>
                <p class="title">Спорттық секциялар</p>
            </div>
    
            <div class="info_block item2">
                <div class="desc">
                    <p>Оқу бағдарламалары</p>
                </div>
            </div>
    
            <div class="info_block item3">
                <div class="desc">
                    <p>50+</p>
                </div>
                <p class="title">Мәдени іс-шаралар</p>
            </div>
    
        </div>
    </div>

    <div class="quote">
        <img src="{{asset("./images/ahkmet.jpg")}}" alt="">
        
        <div class="quote_tools">
            <p class="quote_text">
                Білім – бір құрал. Білімі көп адам құралы сай ұста сықылды,<br> не істесе де келістіріп істейді.
            </p>
            <p class="quote_author">Ахмет Байтұрсынұлы</p>
        </div>
    </div>

    <div class="features">
        <div class="features-title">
            Біздің мүмкіндіктеріміз
        </div>
        <div class="features-list">
            <div class="feature-item">
                <div class="feature-text">
                    <div class="feature-title">
                        Жоғары білікті мұғалімдер
                    </div>
                    <div class="feature-desc">
                        Білікті мамандар оқушыларға сапалы білім береді.
                    </div>
                </div>
            </div>
            <div class="feature-item" style="background-color: aliceblue">
                <div class="feature-text">
                    <div class="feature-title">
                        Көптілді білім беру
                    </div>
                    <div class="feature-desc">
                        Оқушылар бірнеше тілде білім алады.
                    </div>
                </div>
            </div>
            <div class="feature-item">
                <div class="feature-text">
                    <div class="feature-title">
                        Әлеуметтік жауапкершілік
                    </div>
                    <div class="feature-desc">
                        Оқушыларды қоғамға пайдалы болуға үйретеміз.
                    </div>
                </div>
            </div>
            <div class="feature-item" style="background-color: aliceblue">
                <div class="feature-text">
                    <div class="feature-title">
                        Спорттық және шығармашылық даму
                    </div>
                    <div class="feature-desc">
                        Спорт және өнерге арналған бағдарламалар бар.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="btm_border" style="text-align: center; margin:90px;">
        <img src="{{asset("images/bottom_img.png")}}" alt="">
    </div>
    

    <div class="director">
        <div class="director_uptitles">
            <p class="title">Кері байланыс</p>
            <a class="title" href="/questions">Жиі қойылатын сұрақтар</a>
        </div>
        <form action="{{route("director.userwrite")}}" method="POST">
            @csrf
            <label for="name">Аты-жөніңіз:</label>
            <input type="text" name="name">
            <label for="name">Ұялы-телефон:</label>
            <input type="text" name="number" placeholder="+7-777-77-77">
            <label for="text">Сіздің сұрағыңыз:</label>
            <textarea name="text" id="text" cols="30" rows="10" style="resize: vertical"></textarea>
            <div class="director_btn">
            <button type="submit">Жіберу</button>

            </div>
        </form>
    </div>


@endsection
