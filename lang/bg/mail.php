<?php return [
    'common' => [
        'hello' => 'Здравей :firstname',
        'view_order_status_online' => 'Виж състоянието на поръчките си онлайн',
        'view_order_in_backend' => 'Виж състоянието на поръчките си в контролния панел',
        'order_details' => 'Детайли на поръчката',
    ],
    'payment' => [
        'refunded' => [
            'subject' => 'Плащането Ви е възстановено',
            'message' => 'Току-що възстановихме плащането за вашата поръчка **#:number**.',
            'duration' => 'Моля, имайте предвид, че може да отнеме няколко дни, докато получите средствата си.',
        ],
        'paid' => [
            'subject' => 'Благодарим Ви за плащането',
            'message' => 'Току-що получихме плащане за вашата поръчка **#:number**.',
            'process_order' => 'Сега ще започнем да обработваме допълнително поръчката.',
        ],
        'failed' => [
            'subject' => 'Плащането за вашата поръчка е неуспешно',
            'message' => 'Просто искахме да ви уведомим, че плащането за поръчка **#:number** е неуспешно',
            'payment_advice' => 'Моля, влезте в акаунта си и опитайте отново да платите поръчката.',
            'support' => 'Ако продължавате да изпитвате проблеми с плащанията, моля свържете се с нас.',
        ],
    ],
    'order' => [
        'partials' => [
            'billing_address' => 'Адрес на плащане',
            'billing_and_shipping' => 'Адрес за фактуриране и доставка',
            'shipping_address' => 'Адрес за доставка',
            'has_been_paid_on' => 'Поръчката е платена на',
            'currently_pending' => 'Понастоящем плащането за тази поръчка е в процес на изчакване.',
            'track_shipping_status' => 'Можете да проследите състоянието на доставка на вашата поръчка със следната информация:',
        ],
        'state_changed' => [
            'subject' => 'Състоянието на вашата поръчка е променено',
            'message' => 'Ние искаме да ви уведомим, че вашата поръчка **#:number** е актуализирана до нов статус: **:state**',
        ],
        'shipped' => [
            'subject' => 'Поръчката ви беше изпратена',
            'message' => 'Вашата поръчка **#:number** беше изпратена.',
        ],
    ],
    'customer' => [
        'created' => [
            'subject' => 'Добре дошли в нашия магазин, :firstname',
            'confirm_mail' => 'Добре дошли в нашия магазин! Моля, кликнете върху бутона по-долу, за да потвърдите своя имейл адрес.',
            'message' => 'Добре дошли в нашия магазин! Можете да влезете с вашия имейл адрес **:email** и да започнете да пазарувате веднага.',
            'possibilities' => 'Вашият потребителски акаунт ви позволява да следите отворени и минали поръчки.',
            'button' => [
                'confirm' => 'Потвърди имейл адреса си',
                'visit_store' => 'Посетете нашия магазин',
            ],
        ],
    ],
    'checkout' => [
        'succeeded' => [
            'subject' => 'Потвърждение за поръчка #:number',
            'thanks_for_order' => 'Благодаря ви много за вашата поръчка. Получихме следната информация',
            'check_order_status' => 'Можете да проверите състоянието на вашата поръчка, като посетите секцията на акаунти в нашия магазин.',
        ],
        'failed' => [
            'subject' => 'Грешка при плащане при поръчка #:number',
            'problem_message' => 'Съжаляваме много, че възникна проблем по време на процеса на плащане. Ние ще разгледаме проблема и ще се свържем с вас с допълнителна информация.',
            'check_order_status' => 'За да проверите състоянието на вашата поръчка, можете да влезете в нашия магазин по всяко време.',
            'payment_id' => 'Плащане ID',
            'error' => 'Съобщение за грешка',
        ],
    ],
    'admin' => [
        'checkout_succeeded' => [
            'subject' => 'Нова поръчка #:number',
            'order_placed' => 'Следната поръчка беше направена във вашия магазин:',
        ],
        'checkout_failed' => [
            'subject' => 'Плащането не бе успешно #:number',
            'not_processed' => 'Следната поръчка не може да бъде обработена правилно. Възможно е да се наложи да се свържете с клиента.',
            'error_details' => 'Подробности за грешка',
        ],
    ],
];
