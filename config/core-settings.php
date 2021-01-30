<?php

$contentTypes = \Mediabroker\Core\Models\Category::contentTypeList();

return [

    'sections' => [

        [

            'title' => 'Общие настройки',

            'fields' => [

                [
                    'name' => 'title_template',
                    'type' => 'input.*',
                    'label' => 'Шаблон для HTML-тега Title *',
                    'rules' => 'required|string',
                    'value' => '%HEADER% - %APP_NAME%',
                ],

                [
                    'name' => 'description_template',
                    'type' => 'textarea.*',
                    'label' => 'Шаблон для мета-тега Description *',
                    'rules' => 'required|string',
                    'value' => '%HEADER%',
                ],

                [
                    'name' => 'yandex_metrika_counter',
                    'type' => 'input',
                    'label' => 'Номер счетчика (Яндекс.Метрика)',
                    'rules' => 'nullable|string',
                    'value' => null,
                ],

                [
                    'name' => 'google_analytics_counter',
                    'type' => 'input',
                    'label' => 'Номер счетчика (Google Analytics)',
                    'rules' => 'nullable|string',
                    'value' => null,
                ],

            ]

        ],

        [

            'title' => 'Настройки категорий',

            'fields' => [

                [
                    'name' => 'content_type',
                    'type' => 'select',
                    'label' => 'Тип содержимого *',
                    'rules' => 'required|string|in:' . implode(',', array_keys($contentTypes)),
                    'options' => $contentTypes,
                    'value' => array_keys($contentTypes)[0],
                ],

                [
                    'name' => 'category_title_template',
                    'type' => 'input.*',
                    'label' => 'Шаблон для HTML-тега Title *',
                    'rules' => 'required|string',
                    'value' => '%HEADER% - %APP_NAME%',
                ],

                [
                    'name' => 'category_description_template',
                    'type' => 'textarea.*',
                    'label' => 'Шаблон для мета-тега Description *',
                    'rules' => 'required|string',
                    'value' => '%HEADER%',
                ],

            ]

        ],

        [

            'title' => 'Настройки товаров',

            'fields' => [

                [
                    'name' => 'product_title_template',
                    'type' => 'input.*',
                    'label' => 'Шаблон для HTML-тега Title *',
                    'rules' => 'required|string',
                    'value' => '%HEADER% - %APP_NAME%',
                ],

                [
                    'name' => 'product_description_template',
                    'type' => 'textarea.*',
                    'label' => 'Шаблон для мета-тега Description *',
                    'rules' => 'required|string',
                    'value' => '%HEADER% - %PRICE%',
                ],

            ]

        ],

        [

            'title' => 'Настройки б/у товаров',

            'fields' => [

                [
                    'name' => 'used_product_title_template',
                    'type' => 'input.*',
                    'label' => 'Шаблон для HTML-тега Title *',
                    'rules' => 'required|string',
                    'value' => '%HEADER% - %APP_NAME%',
                ],

                [
                    'name' => 'used_product_description_template',
                    'type' => 'textarea.*',
                    'label' => 'Шаблон для мета-тега Description *',
                    'rules' => 'required|string',
                    'value' => '%HEADER% - %PRICE%',
                ],

            ]

        ],[
            'title' => 'Настройки фильтра',

            'fields' => [

                [
                    'name' => 'filter_type',
                    'type' => 'select',
                    'label' => 'Типы товаров на сайте (от этого параметра зависит режим работы фильтра товаров) *',
                    'rules' => 'required|string|in:only_used,only_new,all',
                    'options' => ['only_new'=>'Только товары от производителей','only_used'=>'Только БУ','all'=>'И товары от производителей, и БУ'],
                    'value' => null,
                ]

            ]],

        [

            'title' => 'Настройки главной страницы',

            'fields' => [

                [
                    'name' => 'home_page_name',
                    'type' => 'input.*',
                    'label' => 'Название *',
                    'rules' => 'required|string',
                    'value' => 'Home Page',
                ],

                [
                    'name' => 'home_page_title',
                    'type' => 'input.*',
                    'label' => 'HTML-тег Title',
                    'rules' => 'nullable|string',
                    'value' => null,
                ],

                [
                    'name' => 'home_page_description',
                    'type' => 'textarea.*',
                    'label' => 'Мета-тег Description',
                    'rules' => 'nullable|string',
                    'value' => null,
                ],

                [
                    'name' => 'home_page_og_title',
                    'type' => 'input.*',
                    'label' => 'Open Graph Title',
                    'rules' => 'nullable|string',
                    'value' => null,
                ],

                [
                    'name' => 'home_page_og_description',
                    'type' => 'textarea.*',
                    'label' => 'Open Graph Description',
                    'rules' => 'nullable|string',
                    'value' => null,
                ],

                [
                    'name' => 'home_page_twitter_title',
                    'type' => 'input.*',
                    'label' => 'Twitter Card Title',
                    'rules' => 'nullable|string',
                    'value' => null,
                ],

                [
                    'name' => 'home_page_twitter_description',
                    'type' => 'textarea.*',
                    'label' => 'Twitter Card Description',
                    'rules' => 'nullable|string',
                    'value' => null,
                ],

            ]

        ],

        [

            'title' => 'Настройки страницы новостей',

            'fields' => [

                [
                    'name' => 'news_page_name',
                    'type' => 'input.*',
                    'label' => 'Название *',
                    'rules' => 'required|string',
                    'value' => 'News Page',
                ],

                [
                    'name' => 'news_page_title',
                    'type' => 'input.*',
                    'label' => 'HTML-тег Title',
                    'rules' => 'nullable|string',
                    'value' => null,
                ],

                [
                    'name' => 'news_page_description',
                    'type' => 'textarea.*',
                    'label' => 'Мета-тег Description',
                    'rules' => 'nullable|string',
                    'value' => null,
                ],

                [
                    'name' => 'news_page_og_title',
                    'type' => 'input.*',
                    'label' => 'Open Graph Title',
                    'rules' => 'nullable|string',
                    'value' => null,
                ],

                [
                    'name' => 'news_page_og_description',
                    'type' => 'textarea.*',
                    'label' => 'Open Graph Description',
                    'rules' => 'nullable|string',
                    'value' => null,
                ],

                [
                    'name' => 'news_page_twitter_title',
                    'type' => 'input.*',
                    'label' => 'Twitter Card Title',
                    'rules' => 'nullable|string',
                    'value' => null,
                ],

                [
                    'name' => 'news_page_twitter_description',
                    'type' => 'textarea.*',
                    'label' => 'Twitter Card Description',
                    'rules' => 'nullable|string',
                    'value' => null,
                ],

            ]

        ],

    ],

];
