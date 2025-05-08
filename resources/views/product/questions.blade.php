@extends("layouts.head2")
@section("title")
Жиі қойылатын сұрақтар
@endsection
@section("main")
    <div class="content">
        <div class="container">

            <div class="bailanys" style="border:1px solid black; padding:0px 30px 30px">
                <h1 style="text-align: center">Жиі қойылатын сұрақтар</h1>

                <!-- Вопрос 1 -->
                <div class="faq-item">
                    <button class="faq-title">1. Мектептің жұмыс уақыты қандай?</button>
                    <div class="faq-content">
                        <p>Біздің мектептің жұмыс уақыты дүйсенбі мен жұма аралығында, таңғы 8:00-ден 17:00-ге дейін. Сенбі мен жексенбі күндері демалыс.</p>
                    </div>
                </div>

                <!-- Вопрос 2 -->
                <div class="faq-item">
                    <button class="faq-title">2. Мектепке қалай қабылдануға болады?</button>
                    <div class="faq-content">
                        <p>Мектепке қабылдау үшін қажетті құжаттар: балаңыздың туу туралы куәлігі, ата-анасының жеке куәлігінің көшірмесі және мекенжай анықтамасы. Қабылдау туралы толық ақпаратты мектептің әкімшілігінен ала аласыз.</p>
                    </div>
                </div>

                <!-- Вопрос 3 -->
                <div class="faq-item">
                    <button class="faq-title">3. Мектептегі оқу ақысы бар ма?</button>
                    <div class="faq-content">
                        <p>Жалпы білім беру мемлекеттік мектеп болғандықтан, оқу ақысы талап етілмейді. Алайда, кейбір қосымша қызметтер мен іс-шаралар үшін ақылы түрде ұсыныс жасалуы мүмкін.</p>
                    </div>
                </div>

                <!-- Вопрос 4 -->
                <div class="faq-item">
                    <button class="faq-title">4. Мектепте қандай үйірмелер мен қосымша сабақтар бар?</button>
                    <div class="faq-content">
                        <p>Мектепте түрлі үйірмелер мен қосымша сабақтар ұсынылады, оның ішінде: музыка, би, спорт, робототехника, әдебиет және тағы басқа. Қосымша сабақтар мен үйірмелер туралы ақпаратты мектептен алуға болады.</p>
                    </div>
                </div>

                <!-- Вопрос 5 -->
                <div class="faq-item">
                    <button class="faq-title">5. Мектепте оқушыларға арналған спорттық секциялар бар ма?</button>
                    <div class="faq-content">
                        <p>Иә, мектепте спорттық секциялар бар. Оқушылар волейбол, футбол, баскетбол және басқа да спорт түрлеріне қатыса алады.</p>
                    </div>
                </div>

                <!-- Вопрос 6 -->
                <div class="faq-item">
                    <button class="faq-title">6. Мектепте қандай мәдени іс-шаралар ұйымдастырылады?</button>
                    <div class="faq-content">
                        <p>Мектепте мәдени іс-шаралар үнемі өткізіледі, олар: концерттер, көрмелер, мерекелік шаралар және Ахмет Байтұрсынұлының шығармашылығына арналған іс-шаралар. Оқушылар осы іс-шараларға белсене қатыса алады.</p>
                    </div>
                </div>

                <!-- Вопрос 7 -->
                <div class="faq-item">
                    <button class="faq-title">7. Мектепте көмек көрсету бағдарламалары бар ма?</button>
                    <div class="faq-content">
                        <p>Иә, әлеуметтік жағдайы төмен отбасылардан шыққан оқушыларға арналған көмек көрсету бағдарламалары бар. Бұл бағдарламалар материалдық көмек, жеңілдікті жол жүру билеттері және басқа да қолдау түрлерін қамтиды.</p>
                    </div>
                </div>

                <!-- Вопрос 8 -->
                <div class="faq-item">
                    <button class="faq-title">8. Мектепке қайталап қабылдау мүмкін бе?</button>
                    <div class="faq-content">
                        <p>Егер бала мектепті аяқтамаған болса, оның оқу үлгерімі мен басқа да критерийлеріне байланысты мектепке қайта қабылдау мүмкіндігі қарастырылады. Бұл мәселе мектеп әкімшілігімен келісіліп шешіледі.</p>
                    </div>
                </div>

                <!-- Вопрос 9 -->
                <div class="faq-item">
                    <button class="faq-title">9. Оқушылардың қауіпсіздігі қалай қамтамасыз етіледі?</button>
                    <div class="faq-content">
                        <p>Мектепте оқушылардың қауіпсіздігіне ерекше назар аударылады. Барлық оқу және спорт ғимараттары бейнебақылау жүйелерімен жабдықталған. Сондай-ақ, мектепте тәртіп сақшылары мен қауіпсіздік қызметкерлері жұмыс істейді.</p>
                    </div>
                </div>

                <!-- Вопрос 10 -->
                <div class="faq-item">
                    <button class="faq-title">10. Мектепте ағылшын тілі мен басқа тілдерде сабақтар бар ма?</button>
                    <div class="faq-content">
                        <p>Иә, мектепте ағылшын тілі пәні міндетті түрде оқытылады. Сонымен қатар, қосымша тілдер бойынша да сабақтар ұйымдастырылуы мүмкін. Қосымша тілдер туралы толық ақпаратты мектептің оқу бөлімінен алуға болады.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
    
    <style>
    .faq-item {
        margin-bottom: 10px;
    }
    
    .faq-title {
        background-color: #f0f0f0;
        padding: 10px;
        width: 100%;
        text-align: left;
        font-size: 16px;
        border: 1px solid #ccc;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    
    .faq-title:hover {
        background-color: #dcdcdc;
    }
    
    .faq-content {
        display: none;
        padding: 10px;
        background-color: #f9f9f9;
        border: 1px solid #eee;
        margin-top: 5px;
        transition: max-height 0.3s ease-out;
        overflow: hidden;
    }
    
    .faq-content.open {
        display: block;
    }
    </style>


<script>
    document.querySelectorAll('.faq-title').forEach(item => {
        item.addEventListener('click', () => {
            const content = item.nextElementSibling;
            content.classList.toggle('open');
        });
    });
</script>

@endsection