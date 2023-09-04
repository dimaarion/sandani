<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Artisan;
class IndexController extends Controller
{


    public function index()
    {
        $reviews = DB::table('reviews')
            ->orderBy('id', 'desc')
            ->get();
        $advantages = [
            [
                'alt' => 'Собственное производство пластиковых и светопрозрачных конструкций',
                'img' => '/storage/img/advantages/sob-pr.png',
                'txt' => [
                    'Собственное производство пластиковых и светопрозрачных конструкций из немецкого профиля Salamander в Бендерах с 1996 г.',
                    'Заказывая окна у нас вы не переплачиваете посредникам.'
                ]
            ],
            [
                'alt' => 'Профиль salamander надежен и соответствует всем европейским стандартам',
                'img' => '/storage/img/advantages/nad.png',
                'txt' => [
                    'Профиль salamander надежен и соответствует всем европейским стандартам.',
                    'Прошел все экспертизы по пожарной и санитарной безопасности.',
                    'Безопасен и удобен для всех возрастов, а также не вызывает аллергенных реакций.'
                ]
            ],
            [
                'alt' => 'В производстве мы используем профиль Salamander от производителя',
                'img' => '/storage/img/advantages/garant.png',
                'txt' => [
                    'В производстве мы используем профиль Salamander от производителя.',
                    'Вся наша продукция лицензирована и сертифицирована.',
                    'Фирма ООО Сандани дает гарантию на всю свою продукцию.'
                ]
            ],
            [
                'alt' => 'Доставляем продукцию на собственном транспорте ',
                'img' => '/storage/img/advantages/transp.png',
                'txt' => [
                    'Доставляем продукцию на собственном транспорте и осуществляем установку в день доставки. ',
                ]
            ],
            [
                'alt' => 'Используем немецкую фурнитуру MACO и G-U',
                'img' => '/storage/img/advantages/furnitura.png',
                'txt' => [
                    'Используем немецкую фурнитуру MACO (Mayer & Co Beschläge GmbH) и G-U (Gretsch-Unitas GmbH). Высокая надежность и качество — проверено временем.',
                ]
            ],
            [
                'alt' => 'Оплата наличными или банковской картой',
                'img' => '/storage/img/advantages/card.png',
                'txt' => [
                    'Оплата наличными или банковской картой, есть возможность оплаты в рассрочку и в кредит.',
                ]
            ]
        ];
        return view('welcome', [
            "menu" => $this->getMenu(),
            "sertifikati" => $this->galleryImgTxt('public/img/sertifikati'),
            "gallery" => $this->galleryImgTxt('public/img/gallery'),
            "services" => $this->galleryImgTxt('public/img/services'),
            "advantages" => $advantages,
            "reviews" => $reviews
        ]);
    }

    public function services()
    {
        return view('pages.services', ["menu" => $this->getMenu()]);
    }

    public function contact()
    {
        return view('pages.contact', ["menu" => $this->getMenu()]);
    }

    public function certificate()
    {
        return view('pages.certificate', ["menu" => $this->getMenu(), "sertifikati" => $this->galleryImgTxt('public/img/sertifikati')]);
    }

    public function production()
    {
        return view('pages.production', ["menu" => $this->getMenu()]);
    }

    public function dealers()
    {
        return view('pages.dealers', ["menu" => $this->getMenu()]);
    }
    public function credit()
    {
        return view('pages.credit', ["menu" => $this->getMenu()]);
    }

    public function remontOkon()
    {
        $advantages = [
            [
                'alt' => 'Замена или регулировка фурнитуры',
                'img' => '/storage/img/advantages/furnitura.png',
                'h5' => "Замена или регулировка фурнитуры",
                'txt' => [
                    'Отрегулировать и заменить вышедшую из строя фурнитуру можно самостоятельно, если иметь достаточно знаний и навыков в производстве и сборке металлопластиковых конструкций.',
                    'Но если у вас не достаточно знаний или времени, то специалисты фирмы ООО Сандани выполнят ремонт и регулировку, и если ремонт невозможен заменят ее.'
                ]
            ],
            [
                'alt' => 'Замена стеклопакета',
                'img' => '/storage/img/advantages/zamena.png',
                'h5' => "Замена стеклопакета",
                'txt' => [
                    'Неисправный стеклопакет следует срочно заменить.',
                    'Так как наша фирма ООО Сандани имеет производственные мощности для самостоятельного изготовления стеклопакетов, мы можем изготовить для вас стеклопакет с однокамерного на двухкамерный или энергосберегающий. '
                ]
            ],
            [
                'alt' => 'Замена уплотнителей',
                'img' => '/storage/img/advantages/uplotnitel.png',
                'h5' => "Замена уплотнителей",
                'txt' => [
                    'Мастер по ремонту определит какой именно вам нужен уплотнитель, и производит ее замену. ',
                    'Уплотнители  EPDM (резина на основе каучука) не дубеют и не крошатся на морозе, сохраняют свои свойства более 2-х лет. '
                ]
            ],
            [
                'alt' => 'Замена москитных сеток',
                'img' => '/storage/img/advantages/setka.png',
                'h5' => "Замена москитных сеток",
                'txt' => [
                    'Фирма ООО Сандани изготовит для вас высококачественные и прочные москитные сетки.',
                    'Которые навсегда избавят вас от вредных  насекомых, не теряя при этом  свои свойства.'
                ]
            ]
        ];

        $questions = [
            [
                'question' => 'Какой ремонт вы можете сделать?',
                'answer' => ['Наши специалисты обладают высокой квалификацией для выполнения сложных ремонтных работ. Регулировка фурнитуры, замена уплотнителей, замена стеклопакетов, установка новых петель, замков и другие сложные задачи.']
            ],[
                'question' => 'Сколько времени займет замена стеклопакета?',
                'answer' => [
                    'После принятия заявки мы сразу отправим к вам специалиста. Он снимет размеры, и определит какой стеклопакет подходит к вашему профилю. На изготовление стеклопакета уходит 1-2 дня. Установка будет производиться в удобное для вас время.'                   ]
            ],[
                'question' => 'Почему потеют пластиковые окна?',
                'answer' => [
                    'Если на внутреннем стекле образуется конденсат, а вода стекает на подоконник. Однако это не означает, что окна были изготовлены или установлены некачественно. Причина – высокая влажность в помещении. Регулярная вентиляция поможет решить эту проблему.',
                    'Также при заказе окон следует обратить внимание на ширину подоконника. Оконная рама не должна полностью закрывать радиатор. Но если запотевание происходит с внутренней стороны стеклопакетов. Это значит, что по какой-то причине произошла разгерметизация и требуется замена стеклопакета.'
                ]
            ],[
                'question' => 'Не закрывается пластиковое окна ?',
                'answer' => [
                    'При закрытии створки она может цепляться за раму, эту неисправность можно устранить и самому. Для этого нужно найти в петлях отверстия под шестигранник. Вращая шестигранник в ту или иную сторону можно регулировать наклон створки. Но все же лучше обратиться к специалисту. ',
                    ]
            ],[
                'question' => 'Как снять ручку с пластикового окна?',
                'answer' => [
                    'Оконные ручки для пластиковых окон имеют декоративную накладку в основании, которая плотно прилегает к створке. Сначала ее нужно потянуть на себя и повернуть на 90 градусов. Затем открутите винты и снимите ручку. Повторите ту же процедуру в обратном порядке, чтобы установить ее на место.',
                ]
            ]
        ];
        return view('pages.remont-okon', ["menu" => $this->getMenu(), 'advantages' => $advantages, 'questions' => $questions]);
    }

    public function okna()
    {
        return view('pages.okna', ["menu" => $this->getMenu()]);
    }

    public function dveri()
    {
        return view('pages.dveri', ["menu" => $this->getMenu()]);
    }

    public function osteklBalkonov()
    {
        return view('pages.osteklenie-balkonov', ["menu" => $this->getMenu()]);
    }

    public function dveriDlSobak()
    {
        return view('pages.dveri-dl-sobak', ["menu" => $this->getMenu()]);
    }

    public function calculatorGet()
    {
        return view('pages.calculator', ["menu" => $this->getMenu()]);
    }

    public function installationWindow()
    {
        $advantages = [
            [
                'alt' => 'Демонтаж старого окна',
                'img' => '/storage/img/advantages/demontag.png',
                'h5' => 'Демонтаж старого окна',

            ],
            [
                'alt' => 'Изготовление, доставка, установка и регулировка',
                'img' => '/storage/img/advantages/transp.png',
                'h5' => 'Изготовление, доставка, установка и регулировка',

            ],
            [
                'alt' => 'Монтаж отливов, карнизов и подоконников',
                'img' => '/storage/img/advantages/furnitura.png',
                'h5' => 'Монтаж отливов, карнизов и подоконников',

            ],
            [
                'alt' => 'Вынос строительного мусора',
                'img' => '/storage/img/advantages/uborka.png',
                'h5' => 'Вынос строительного мусора',

            ]
        ];

        $stagesWork = [
            [
                "title" => "Подготовка рабочей зоны",
                "txt" => "Перед началом работ наши монтажники подготовят помещение к&nbsp;строительным работам.
                Чтобы избежать попадания пыли на&nbsp;мебель и&nbsp;повреждений от&nbsp;осколков бетона,
                нужно накрыть ее&nbsp;картоном и&nbsp;строительной пленкой."

            ], [
                "title" => "Демонтаж старой конструкции и подготовка проема к монтажу",
                "txt" => "На данном этапе аккуратно снимаются створки, вынимается старая рама из проема,
                очищается проем от неровностей из бетона или кирпича мешающих установке новой рамы."

            ], [
                "title" => "Подготовка оконной рамы к установке",
                "txt" => "Перед монтажом оконной рамы в&nbsp;проем в&nbsp;ней просверливаются отверстия для анкеров,
                устанавливается фурнитура: ручки, колпачки, накладки, и.&nbsp;т.&nbsp;д.
                Аккуратно снимается защитная пленка с&nbsp;наружной стороны рамы."

            ], [
                "title" => "Монтаж оконной рамы в проем",
                "txt" => "Монтаж рамы начинается с&nbsp;выравнивания ее&nbsp;по&nbsp;уровню с&nbsp;помощью распорных
                клиньев и&nbsp;закреплением рамы к&nbsp;стене анкерными болтами через заранее просверленные отверстия
                в&nbsp;раме на&nbsp;расстоянии 150&nbsp;мм от&nbsp;угла рамы или горизонтального или вертикального импоста.
                Далее, после закрепления рамы, оконный шов заполняется монтажной пеной."

            ], [
                "title" => "Установка отливов, карнизов и подоконников",
                "txt" => "Подоконники, отливы, карнизы подрезаются по&nbsp;размеру окна.
                Подоконники выпускаются разной ширины от&nbsp;100 до&nbsp;600&nbsp;мм.
                Ширина подоконника зависит от&nbsp;условий установленных заказчиком."

            ], [
                "title" => "Завершение монтажа",
                "txt" => "После установки рамы, отливов, карнизов, подоконников,
                монтажники устанавливают стеклопакеты, навешивают створки и&nbsp;регулируют фурнитуру,
                вставляют колпачки на&nbsp;верхнюю и&nbsp;нижнюю створки.
                Убирают за&nbsp;собой мусор в&nbsp;мешки, выносят старые конструкции на&nbsp;лестничную площадку
                или к мусорному контейнеру все зависит от&nbsp;условий договора с&nbsp;заказчиком. За&nbsp;отдельную
                плату монтажники вывезут старые рамы на&nbsp;утилизацию."

            ]
        ];
        $profile = [
            ['name' => 'WDS-300', 'img' => '/storage/img/profile/wds300.png', 'imgBrand' => '/storage/img/profile/wds.png',
                'description' => [
                    'Монтажная ширина – 60 мм',
                    'Количество камер – 3',
                    'Теплоизоляция – 0,72 м2оС/Вт',
                    'Стеклопакет – 24-32 мм, возможна установка стекла 6 мм',
                    'Шумоизоляция — до класса 4 (VDI 2719)'
                ]
            ],
            ['name' => 'WDS-500', 'img' => '/storage/img/profile/wds500.png', 'imgBrand' => '/storage/img/profile/wds.png',
                'description' => [
                    'Монтажная ширина – 70 мм',
                    'Количество камер – 5',
                    'Теплоизоляция – R 0,89 м²°С/Вт',
                    'Стеклопакет – 24-32 и 40 мм, возможна установка стекла 6 мм',
                    'Шумоизоляция — до класса 4 (VDI 2719)'
                ]],
            ['name' => 'S-5', 'img' => '/storage/img/profile/wds_5s.png', 'imgBrand' => '/storage/img/profile/wds.png',
                'description' => [
                    'Монтажная ширина – 60 мм',
                    'Количество камер – 5',
                    'Стеклопакет – 32 мм, возможна установка стекла 6 мм, стекла с энергосберегающим напылением 4i-10Ar-4-10Ar-4i ',
                    'фурнитура — противовзломная'
                ]],
            ['name' => 'name', 'img' => '/storage/img/profile/wds300.png', 'imgBrand' => '/storage/img/profile/wds.png', 'description' => ['description']],
            ['name' => 'name', 'img' => '/storage/img/profile/wds300.png', 'imgBrand' => '/storage/img/profile/wds.png', 'description' => ['description']],
            ['name' => 'name', 'img' => '/storage/img/profile/wds300.png', 'imgBrand' => '/storage/img/profile/wds.png', 'description' => ['description']],
            ['name' => 'name', 'img' => '/storage/img/profile/wds300.png', 'imgBrand' => '/storage/img/profile/wds.png', 'description' => ['description']],
            ['name' => 'name', 'img' => '/storage/img/profile/wds300.png', 'imgBrand' => '/storage/img/profile/wds.png', 'description' => ['description']],
            ['name' => 'name', 'img' => '/storage/img/profile/wds300.png', 'imgBrand' => '/storage/img/profile/wds.png', 'description' => ['description']]
        ];
        $profile = array_chunk($profile, 3);
        return view('pages.install-window', ["menu" => $this->getMenu(), 'advantages' => $advantages, "stagesWork" => $stagesWork]);
    }

    public function installationDoors()
    {
        $advantages = [
            [
                'alt' => 'Демонтаж старой двери',
                'img' => '/storage/img/advantages/demontag.png',
                'h5' => 'Демонтаж старой двери',

            ],
            [
                'alt' => 'Изготовление, доставка и установка двери',
                'img' => '/storage/img/advantages/transp.png',
                'h5' => 'Изготовление, доставка и установка двери',

            ],
            [
                'alt' => 'Проверка и регулировка механизма доводчика и фурнитуры',
                'img' => '/storage/img/advantages/furnitura.png',
                'h5' => 'Проверка и регулировка механизма доводчика и фурнитуры',

            ],
            [
                'alt' => 'Уборка помещения и вынос демонтированных конструкций',
                'img' => '/storage/img/advantages/uborka.png',
                'h5' => 'Уборка помещения и вынос демонтированных конструкций',

            ]
        ];
        $stagesWork = [
            [
                "title" => "Подготовка рабочей зоны",
                "txt" => "Перед началом работ наши монтажники подготовят помещение к&nbsp;строительным работам.
                Чтобы избежать попадания пыли на&nbsp;мебель и&nbsp;повреждений от&nbsp;осколков бетона,
                нужно накрыть ее&nbsp;картоном и&nbsp;строительной пленкой."

            ], [
                "title" => "Демонтаж старого дверного полотна подготовка проема к монтажу",
                "txt" => "На данном этапе снимается дверное полотно, вынимается старая рама из проема,
                очищается проем от неровностей из бетона или кирпича мешающих установке новой рамы."

            ], [
                "title" => "Монтаж профиля в дверной проем",
                "txt" => "Монтаж дверной рамы начинается с&nbsp;выравнивания ее&nbsp;по&nbsp;уровню с&nbsp;помощью распорных
                клиньев и&nbsp;закреплением рамы к&nbsp;стене анкерными болтами через заранее просверленные отверстия.
                Далее, после закрепления рамы, шов между рамой и стеной заполняется монтажной пеной."

            ], [
                "title" => "Монтаж даводчиков и фурнитуры и завершение установки",
                "txt" => "Производится проверка механизма доводчика и фурнитуры.
                Убирают за&nbsp;собой мусор в&nbsp;мешки, выносят старые конструкции на&nbsp;лестничную площадку
                или к мусорному контейнеру все зависит от&nbsp;условий договора с&nbsp;заказчиком. За&nbsp;отдельную
                плату монтажники вывезут старые рамы на&nbsp;утилизацию."

            ]
        ];
        $profile = [

            ['name' => 'WDS-Двери', 'img' => '/storage/img/profile/door60.png', 'imgBrand' => '/storage/img/profile/wds.png',
                'description' => [
                    'Монтажная ширина – 60 мм',
                    'Усиленная конструкция',
                    'Защита от продувания',
                    'Теплый порог',
                ]
            ],
            ['name' => 'WDS-Двери', 'img' => '/storage/img/profile/door70.png', 'imgBrand' => '/storage/img/profile/wds.png',
                'description' => [
                    'Монтажная ширина – 70 мм',
                    'Усиленная конструкция',
                    'Защита от продувания',
                    'Теплый порог',
                ]],
            ['name' => 'Salamander bluEvolution 92', 'img' => '/storage/img/profile/doors-SL-BL92.png', 'imgBrand' => '/storage/img/profile/salamander.png',
                'description' => [
                    'Монтажная ширина – 92 мм',
                    'Количество камер – 6',
                    'Стеклопакет – теплосберегающие толщиной остекленения 60мм',
                    'Теплоизоляция – до 1/Ud = 1,41 м²K/Вт',
                    'Звукоизоляция - до 47 дБ',
                    'фурнитура — противовзломная  до RC 2'
                ]],
            ['name' => 'Salamander bluEvolution 82', 'img' => '/storage/img/profile/doors-SL-BL-82.png', 'imgBrand' => '/storage/img/profile/salamander.png',
                'description' => [
                    'Монтажная ширина – 82 мм',
                    'Количество камер – 6',
                    'Стеклопакет – теплосберегающие толщиной остекленения 54мм',
                    'Теплоизоляция – до 1/Uw = 1,49 м2K/Вт ',
                    'Звукоизоляция - до 47 дБ',
                    'фурнитура — противовзломная  до RC 2',

                ]],
            ['name' => 'Salamander bluEvolution 73', 'img' => '/storage/img/profile/door-BL-73.png', 'imgBrand' => '/storage/img/profile/salamander.png',
                'description' => [
                    'Монтажная ширина – 73 мм',
                    'Количество камер – 4',
                    'Стеклопакет –  толщина остекленения 44мм',
                    'Теплоизоляция – до Uf 1,2 Вт/(м²K) ',
                    'Звукоизоляция - до 46 дБ',
                    'фурнитура — противовзломная  до RC 2',

                ]],
            ['name' => 'Salamander Streamline', 'img' => '/storage/img/profile/door-streamline.png', 'imgBrand' => '/storage/img/profile/salamander.png',
                'description' => [
                    'Монтажная ширина – 76 мм',
                    'Количество камер – 3',
                    'Стеклопакет –  толщина остекленения 32мм',
                    'Теплоизоляция – до 1/Ud = 1,20 м²K/Вт ',
                    'Звукоизоляция - до 46 дБ',
                    'фурнитура — противовзломная  до RC 2',

                ]],

        ];
        $profile = array_chunk($profile, 3);


        return view('pages.install-doors', ["menu" => $this->getMenu(), "advantages" => $advantages, "stagesWork" => $stagesWork, 'profile' => $profile]);

    }

    public function installRoller()
    {
        $advantages = [
            [
                'alt' => 'Защита частной жизни',
                'img' => '/storage/img/advantages/nad.png',
                'txt' => [
                    'Защита частной жизни от посторонних взглядов, особенно если квартира находится на первом этаже.',
                    'Снижение расходов на коммунальные услуги — потери тепла в отопительный период могут быть снижены за счет создания оптимальных условий температуры в помещении.'
                ]
            ],
            [
                'alt' => 'Шумоподавление',
                'img' => '/storage/img/advantages/humm.png',
                'txt' => [
                    'Шумоподавление — алюминиевые профили и пенный наполнитель эффективно блокируют все звуки обеспечивая вам комфортный отдых.',

                ]
            ],
            [
                'alt' => 'В производстве мы используем профиль Salamander от производителя',
                'img' => '/storage/img/advantages/nad2.png',
                'txt' => [
                    'Защита от проникновения злоумышленниками — гарантируется надежными комплектующими и крепежами уникальной конструкции из высокопрочного алюминия.',
                ]
            ],
            [
                'alt' => 'Доставляем продукцию на собственном транспорте ',
                'img' => '/storage/img/advantages/nad3.png',
                'txt' => [
                    'Защита от яркого солнечного света и жара, сохраняет прохладу в помещении, предотвращает выгорание штор, обоев и мебели.',
                    'Защита от непогоды — защищает от града, снега, дождя и порывистого ветра.'
                ]
            ]
        ];
        $alytex = [
            [
                'alt' => 'Фасад без лишних деталей',
                'img' => '/storage/img/advantages/garant2.png',
                'txt' => [
                    'Фасад без лишних деталей — рольставней не видно в открытом положении та как короб скрыт.',
                ]
            ],
            [
                'alt' => 'Двойная защита',
                'img' => '/storage/img/advantages/nad.png',
                'txt' => [
                    'Двойная защита — встроенная москитная сетка не даст насекомым проникнуть в ваш дом.',

                ]
            ],
            [
                'alt' => 'Индивидуальное оформление',
                'img' => '/storage/img/advantages/palitra.png',
                'txt' => [
                    'Индивидуальное оформление — выбор цветовой палитры, до пяти форм защитных коробов, перфорированные и не перфорированные профили.',
                ]
            ],
            [
                'alt' => 'Безопасность',
                'img' => '/storage/img/advantages/nad2.png',
                'txt' => [
                    'Безопасность — гарантия безопасности вашего имущества класса взломостойкость p1.',
                ]
            ]
        ];

        $profile = [
            'ar40' => [
                [
                    'title' => 'Высота профиля',
                    'descriptor' => '40 мм'
                ],
                [
                    'title' => 'Тип профиля',
                    'descriptor' => 'перфорированный/неперфорированный'
                ],
                [
                    'title' => 'Размеры ворот (max)',
                    'descriptor' => 'Ширина: 3200 мм, высота: 3085 мм'
                ],
                [
                    'title' => 'Направляющие шины',
                    'descriptor' => 'Стандартные/специальные (угловые, дистанцирующие, сдвоенные)'
                ],
                [
                    'title' => 'Направляющие шины',
                    'descriptor' => 'Скрытые, 45° и 20°, а также полукруглые и круглые короба'
                ]
            ],
            'ar555' => [
                [
                    'title' => 'Высота профиля',
                    'descriptor' => '55 мм'
                ],
                [
                    'title' => 'Тип профиля',
                    'descriptor' => 'перфорированный/неперфорированный'
                ],
                [
                    'title' => 'Размеры ворот (max)',
                    'descriptor' => 'Ширина: 3750 мм, высота: 3250 мм'
                ],
                [
                    'title' => 'Направляющие шины',
                    'descriptor' => 'Стандартные/специальные (угловые, дистанцирующие, сдвоенные)'
                ],
                [
                    'title' => 'Направляющие шины',
                    'descriptor' => 'Скрытые, 45° и 20°, а также полукруглые и круглые короба'
                ]
            ]
        ];

        return view('pages.install-roller-systems', [
            'menu' => $this->getMenu(),
            'advantages' => $advantages,
            'alytex' => $alytex,
            'profile' => $profile
        ]);
    }
    public function cache(){
        Artisan::call('config:cache');
        Artisan::call('view:clear');
        Artisan::call('route:cache');
        return "Cleared!";
    }
}
