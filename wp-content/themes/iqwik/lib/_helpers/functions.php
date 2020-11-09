<?php
/**
 * Главное меню
 * @param $id
 * @return array|array[]
 */
function nav_links_tree($id = null) {
	$nav_links = [
		1 => ['id' => 1, 'text' => 'Главная', 'href' => '/', 'level' => 1],
		2 => ['id' => 2, 'text' => 'Компания', 'href' => 'company', 'level' => 1, 'childs' => [
			['id' => 21, 'text' => 'Производители', 'href' => 'company/manufactures', 'level' => 2],
			['id' => 22, 'text' => 'Решения под ключ', 'href' => 'company/turnkey-solutions', 'level' => 2]
		]],
		3 => ['id' => 3, 'text' => 'Теплицы', 'href' => 'greenhouses', 'level' => 1, 'childs' => [
			['id' => 31, 'text' => 'Теплицы на продажу', 'href' => 'greenhouses/greenhouses-for-sale', 'level' => 2, 'childs' => [
				['id' => 311, 'text' => 'Многотоннельные теплицы', 'href' => 'greenhouses/greenhouses-for-sale/polytunnel-greenhouses', 'level' => 3],
				['id' => 312, 'text' => 'Готические теплицы', 'href' => 'greenhouses/greenhouses-for-sale/gothic-greenhouses', 'level' => 3],
				['id' => 313, 'text' => 'Тропические теплицы', 'href' => 'greenhouses/greenhouses-for-sale/tropical-greenhouses', 'level' => 3],
				['id' => 314, 'text' => 'Тоннельные теплицы', 'href' => 'greenhouses/greenhouses-for-sale/tunnel-greenhouses', 'level' => 3],
				['id' => 315, 'text' => 'Каркасные конструкции', 'href' => 'greenhouses/greenhouses-for-sale/backbone-structures', 'level' => 3],
				['id' => 316, 'text' => 'Листовые теплицы', 'href' => 'greenhouses/greenhouses-for-sale/sheet-greenhouses', 'level' => 3],
				['id' => 317, 'text' => 'Сетчатые теплицы', 'href' => 'greenhouses/greenhouses-for-sale/nethouse-greenhouses', 'level' => 3],
				['id' => 318, 'text' => 'Проекты под ключ', 'href' => 'greenhouses/greenhouses-for-sale/turnkey-projects', 'level' => 3],
				['id' => 319, 'text' => 'Тепличные комплексы', 'href' => 'greenhouses/greenhouses-for-sale/greenhouse-kits', 'level' => 3],
				['id' => 320, 'text' => 'Светящиеся многотоннельные теплицы', 'href' => 'greenhouses/greenhouses-for-sale/multi-tunnel-luminous-greenhouse', 'level' => 3]
			]],
			['id' => 32, 'text' => 'Как мы делаем теплицы', 'href' => 'greenhouses/how-we-make-greenhouses', 'level' => 2, 'childs' => [
				['id' => 321, 'text' => 'Проектирование теплиц', 'href' => 'greenhouses/how-we-make-greenhouses/greenhouses-design', 'level' => 3],
				['id' => 322, 'text' => 'Производство теплиц', 'href' => 'greenhouses/how-we-make-greenhouses/greenhouses-fabric', 'level' => 3],
				['id' => 323, 'text' => 'Строительство теплиц', 'href' => 'greenhouses/how-we-make-greenhouses/greenhouses-construction', 'level' => 3],
				['id' => 324, 'text' => 'Стоимость теплиц', 'href' => 'greenhouses/how-we-make-greenhouses/cost-of-greenhouses', 'level' => 3],
			]],
			['id' => 33, 'text' => 'Выращивание в теплицах', 'href' => 'greenhouses/greenhouses-growing', 'level' => 2, 'childs' => [
				['id' => 331, 'text' => 'Овощные теплицы', 'href' => 'greenhouses/greenhouses-growing/vegetables-greenhouses', 'level' => 3],
				['id' => 332, 'text' => 'Гидропонные теплицы', 'href' => 'greenhouses/greenhouses-growing/hydroponic-greenhouses', 'level' => 3],
				['id' => 333, 'text' => 'Теплицы под рассадники', 'href' => 'greenhouses/greenhouses-growing/nursery-greenhouses', 'level' => 3],
				['id' => 334, 'text' => 'Теплицы под саженцы', 'href' => 'greenhouses/greenhouses-growing/greenhouses-for-seedlings', 'level' => 3],
				['id' => 335, 'text' => 'Цветочные теплицы', 'href' => 'greenhouses/greenhouses-growing/flower-greenhouses', 'level' => 3]
			]],
			['id' => 34, 'text' => 'Товары для теплиц', 'href' => 'greenhouses/greenhouses-supplies', 'level' => 2, 'childs' => [
				['id' => 341, 'text' => 'Сетка для теплиц', 'href' => 'greenhouses/greenhouses-supplies/mesh-for-greenhouses', 'level' => 3],
				['id' => 342, 'text' => 'Полимерные материалы для теплиц', 'href' => 'greenhouses/greenhouses-supplies/greenhouse-plastics', 'level' => 3],
				['id' => 343, 'text' => 'Экраны для теплиц', 'href' => 'greenhouses/greenhouses-supplies/screens-for-greenhouses', 'level' => 3],
				['id' => 344, 'text' => 'Каркасы теплиц', 'href' => 'greenhouses/greenhouses-supplies/greenhouse-structures', 'level' => 3],
				['id' => 345, 'text' => 'Материалы теплиц', 'href' => 'greenhouses/greenhouses-supplies/greenhouse-materials', 'level' => 3],
				['id' => 346, 'text' => 'Арки теплиц', 'href' => 'greenhouses/greenhouses-supplies/greenhouses-arch', 'level' => 3],
				['id' => 347, 'text' => 'Профили теплиц', 'href' => 'greenhouses/greenhouses-supplies/greenhouses-profiles', 'level' => 3],
			]],
			['id' => 35, 'text' => 'Проекты', 'href' => 'greenhouses/projects', 'level' => 2, 'childs' => [
				['id' => 351, 'text' => 'Альмерия (Испания)', 'href' => 'greenhouses/projects/almeria-spain', 'level' => 3],
				['id' => 352, 'text' => 'Мурсия (ИСПАНИЯ)', 'href' => 'greenhouses/projects/murcia-spain', 'level' => 3],
				['id' => 353, 'text' => 'Гранада (Испания)', 'href' => 'greenhouses/projects/granada-spain', 'level' => 3],
				['id' => 354, 'text' => 'Канарские острова (Испания)', 'href' => 'greenhouses/projects/canarias-spain', 'level' => 3],
				['id' => 355, 'text' => 'Италия', 'href' => 'greenhouses/projects/italy', 'level' => 3],
				['id' => 356, 'text' => 'Турция', 'href' => 'greenhouses/projects/turkey', 'level' => 3],
				['id' => 357, 'text' => 'Румыния', 'href' => 'greenhouses/projects/romania', 'level' => 3],
				['id' => 358, 'text' => 'Марокко', 'href' => 'greenhouses/projects/morocco', 'level' => 3],
				['id' => 359, 'text' => 'Мексика', 'href' => 'greenhouses/projects/mexico', 'level' => 3],
				['id' => 360, 'text' => 'Чили', 'href' => 'greenhouses/projects/chile', 'level' => 3],
				['id' => 361, 'text' => 'Доминиканская Респ.', 'href' => 'greenhouses/projects/dominican-rep', 'level' => 3],
				['id' => 362, 'text' => 'Вьетнам', 'href' => 'greenhouses/projects/vietnam', 'level' => 3],
				['id' => 363, 'text' => 'Индия', 'href' => 'greenhouses/projects/india', 'level' => 3],
				['id' => 364, 'text' => 'Нигерия', 'href' => 'greenhouses/projects/nigeria', 'level' => 3]
			]]
		]],
		4 => ['id' => 4, 'text' => 'Полив', 'href' => '#', 'data-href' => 'irrigation', 'level' => 1, 'childs' => [
			['id' => 41, 'text' => 'Системы полива', 'href' => 'irrigation/irrigation-systems', 'level' => 2, 'childs' => [
				['id' => 411, 'text' => 'Системы фертигации XILEMA', 'href' => 'irrigation/irrigation-systems/xilema-fertigation', 'level' => 3],
				['id' => 412, 'text' => 'Капельное орошение', 'href' => 'irrigation/irrigation-systems/drip-irrigation', 'level' => 3],
				['id' => 413, 'text' => 'Дождевальное орошение', 'href' => 'irrigation/irrigation-systems/sprinkler-irrigation', 'level' => 3],
				['id' => 414, 'text' => 'Системы микроразбрызгивателей', 'href' => 'irrigation/irrigation-systems/micro-sprinkler-irrigation', 'level' => 3],
				['id' => 415, 'text' => 'Системы рециркуляции', 'href' => 'irrigation/irrigation-systems/recirculating-system', 'level' => 3],
				['id' => 416, 'text' => 'Автоматические системы полива', 'href' => 'irrigation/irrigation-systems/automatic-watering', 'level' => 3],
				['id' => 417, 'text' => 'Гидропонные системы полива', 'href' => 'irrigation/irrigation-systems/hydroponic-farming', 'level' => 3],
				['id' => 418, 'text' => 'Освежительное дождевание', 'href' => 'irrigation/irrigation-systems/fog-irrigation', 'level' => 3]
			]],
			['id' => 42, 'text' => 'Поставщик систем полива', 'href' => 'irrigation/irrigation-company', 'level' => 2, 'childs' => [
				['id' => 421, 'text' => 'Проектирование систем полива', 'href' => 'irrigation/irrigation-company/irrigation-design', 'level' => 3],
				['id' => 422, 'text' => 'Поливальные установки', 'href' => 'irrigation/irrigation-company/irrigation-installations', 'level' => 3],
				['id' => 423, 'text' => 'Сельскохозяйственный полив', 'href' => 'irrigation/irrigation-company/agricultural-irrigation', 'level' => 3],
				['id' => 424, 'text' => 'Садовый полив', 'href' => 'irrigation/irrigation-company/garden-irrigation', 'level' => 3]
			]],
			['id' => 43, 'text' => 'Товары для систем полива', 'href' => 'irrigation/irrigation-supplies', 'level' => 2, 'childs' => [
				['id' => 431, 'text' => 'Узлы систем полива', 'href' => 'irrigation/irrigation-supplies/irrigation-heads', 'level' => 3],
				['id' => 432, 'text' => 'Насосы для систем полива', 'href' => 'irrigation/irrigation-supplies/irrigation-pumps', 'level' => 3],
				['id' => 433, 'text' => 'Контроллеры систем полива', 'href' => 'irrigation/irrigation-supplies/irrigation-controllers', 'level' => 3],
				['id' => 434, 'text' => 'Фильтры для капельного орошения', 'href' => 'irrigation/irrigation-supplies/drip-irrigation-filters', 'level' => 3],
				['id' => 435, 'text' => 'Трубы для систем полива', 'href' => 'irrigation/irrigation-supplies/irrigation-pipes', 'level' => 3],
				['id' => 436, 'text' => 'Микроразбрызгиватели', 'href' => 'irrigation/irrigation-supplies/micro-sprinklers', 'level' => 3],
				['id' => 437, 'text' => 'Разбрызгиватели', 'href' => 'irrigation/irrigation-supplies/sprinklers', 'level' => 3],
				['id' => 438, 'text' => 'Капельные эмиттеры', 'href' => 'irrigation/irrigation-supplies/drip-emitters', 'level' => 3],
				['id' => 439, 'text' => 'Системы круговой ирригации', 'href' => 'irrigation/irrigation-supplies/pivots', 'level' => 3],
				['id' => 440, 'text' => 'Самоходные дождевальные машины', 'href' => 'irrigation/irrigation-supplies/travelling-irrigators', 'level' => 3]
			]]
		]],
		5 => ['id' => 5, 'text' => 'Вода', 'href' => 'water', 'level' => 1, 'childs' => [
			['id' => 51, 'text' => 'Очистка воды', 'href' => 'water/water-purification', 'level' => 2],
			['id' => 52, 'text' => 'Мобильные установки питьевой воды', 'href' => 'water/mobile-drinking-water', 'level' => 2],
			['id' => 53, 'text' => 'Очистка сточных вод', 'href' => 'water/wastewater-treatment', 'level' => 2],
			['id' => 54, 'text' => 'Деминерализация osmaqua', 'href' => 'water/osmaqua-desalination', 'level' => 2],
			['id' => 55, 'text' => 'Рециркуляция воды', 'href' => 'water/water-recycling', 'level' => 2, 'childs' => [
				['id' => 551, 'text' => 'Ультрафиолетовое облучение', 'href' => 'water/water-recycling/ultraviolet-treatment', 'level' => 3],
				['id' => 552, 'text' => 'Озонирование', 'href' => 'water/water-recycling/ozone-treatment', 'level' => 3],
				['id' => 553, 'text' => 'Системы хлорирования', 'href' => 'water/water-recycling/chlorination-equipment', 'level' => 3]
			]],
			['id' => 56, 'text' => 'Бытовые стоки', 'href' => 'water/grey-water', 'level' => 2],
		]],
		6 => ['id' => 6, 'text' => 'Технологии', 'href' => '#', 'data-href' => 'technology', 'level' => 1, 'childs' => [
			['id' => 61, 'text' => 'Вертикальное земледелие', 'href' => 'technology/vertical-farming', 'level' => 2],
			['id' => 62, 'text' => 'Климат-контроль', 'href' => 'technology/climate-control', 'level' => 2, 'childs' => [
				['id' => 621, 'text' => 'Климат-контроллер', 'href' => 'technology/climate-control/climate-controller', 'level' => 3],
				['id' => 622, 'text' => 'Вентиляция', 'href' => 'technology/climate-control/ventilation', 'level' => 3, 'childs' => [
					['id' => 6221, 'text' => 'Принудительная', 'href' => 'technology/climate-control/ventilation/forced', 'level' => 4],
					['id' => 6222, 'text' => 'Естественная вентиляция', 'href' => 'technology/climate-control/ventilation/natural', 'level' => 4]
				]],
				['id' => 623, 'text' => 'Обогрев', 'href' => 'technology/climate-control/heating', 'level' => 3, 'childs' => [
					['id' => 6231, 'text' => 'Водные системы обогрева', 'href' => 'technology/climate-control/heating/water-based', 'level' => 4],
					['id' => 6232, 'text' => 'Воздушные системы обогрева', 'href' => 'technology/climate-control/heating/air-heating', 'level' => 4]
				]],
				['id' => 624, 'text' => 'Системы увлажнения', 'href' => 'technology/climate-control/humification', 'level' => 3, 'childs' => [
					['id' => 6241, 'text' => 'Системы охлажднеия', 'href' => 'technology/climate-control/humification/cooling', 'level' => 4],
					['id' => 6242, 'text' => 'Системы тонкого распыления', 'href' => 'technology/climate-control/humification/fog-system', 'level' => 4],
					['id' => 6243, 'text' => 'Системы туманообразования', 'href' => 'technology/climate-control/humification/fogger', 'level' => 4]
				]],
				['id' => 625, 'text' => 'CO2', 'href' => 'technology/climate-control/co2', 'level' => 3]
			]],
			['id' => 63, 'text' => 'Фитосанитарное лечение', 'href' => 'technology/phytosanitary-treat', 'level' => 2, 'childs' => [
				['id' => 631, 'text' => 'HUMIFITO', 'href' => 'technology/phytosanitary-treat/humifito', 'level' => 3],
				['id' => 632, 'text' => 'Сублиматор Серы', 'href' => 'technology/phytosanitary-treat/sulphur-sublimator', 'level' => 3],
				['id' => 633, 'text' => 'Лечебные насосы', 'href' => 'technology/phytosanitary-treat/treatment-pumps', 'level' => 3]
			]],
			['id' => 64, 'text' => 'Резервуары', 'href' => 'technology/reservoirs', 'level' => 2],
			['id' => 65, 'text' => 'Аксессуары', 'href' => 'technology/complements', 'level' => 2, 'childs' => [
				['id' => 651, 'text' => 'Зажим-вешалка', 'href' => 'technology/complements/clipser-hanger', 'level' => 3],
				['id' => 652, 'text' => 'Зажимы', 'href' => 'technology/complements/clips', 'level' => 3, 'childs' => [
					['id' => 6521, 'text' => 'Поддержка урожая', 'href' => 'technology/complements/clips/crop-support', 'level' => 4],
					['id' => 6522, 'text' => 'Пересадка', 'href' => 'technology/complements/clips/grafting', 'level' => 4]
				]],
				['id' => 653, 'text' => 'Тележки', 'href' => 'technology/complements/trolleys', 'level' => 3, 'childs' => [
					['id' => 6531, 'text' => 'Культивация на высоте', 'href' => 'technology/complements/trolleys/cultivation-work-at-height', 'level' => 4],
					['id' => 6532, 'text' => 'Сборочные тележки', 'href' => 'technology/complements/trolleys/harvesting-trolleys', 'level' => 4]
				]],
				['id' => 654, 'text' => 'Культивационные столы', 'href' => 'technology/complements/cultivation-tables', 'level' => 3],
				['id' => 655, 'text' => 'Системы учета продукции', 'href' => 'technology/complements/production-record-system', 'level' => 3],
				['id' => 656, 'text' => 'Субстраты', 'href' => 'technology/complements/substrates', 'level' => 3],
				['id' => 657, 'text' => 'Сетки', 'href' => 'technology/complements/meshes', 'level' => 3],
				['id' => 658, 'text' => 'Специальная продукция', 'href' => 'technology/complements/special-products', 'level' => 3]

			]],
			['id' => 66, 'text' => 'Консультирование', 'href' => 'technology/advice', 'level' => 2, 'childs' => [
				['id' => 661, 'text' => 'Консультирование', 'href' => 'technology/advice/consulting', 'level' => 3],
				['id' => 662, 'text' => 'Обучение', 'href' => 'technology/advice/training', 'level' => 3]
			]],
			['id' => 67, 'text' => 'Ниокр', 'href' => 'technology/r-d-i', 'level' => 2],
		]],
//		7 => ['id' => 7, 'text' => 'Блог', 'href' => '#', 'data-href' => 'blog', 'level' => 1, 'childs' => [
//			['id' => 71, 'text' => 'Новости', 'href' => 'blog/news', 'level' => 2],
//			['id' => 72, 'text' => 'Статьи', 'href' => 'blog/articles', 'level' => 2]
//		]],
		8 => ['id' => 8, 'text' => 'Контакты', 'href' => 'contact', 'level' => 1]
	];
	return $id ? $nav_links[$id] : $nav_links;
}

/**
 * Слайдер на главной
 */
function get_slider_items() {
	return [
		[
			'img' => 'invernaderos-APR.jpg',
			'title' => 'Теплицы',
			'text' => 'Компания «Novedades Agricolas» под своим брендом «APR» проектирует, изготовляет, строит и устанавливает все типы технологически эффективных, современных и функциональных тепличных конструкций для высокотоварного сельского хозяйства.',
			'href' => 'greenhouses',
		],
		[
			'img' => 'slidexilema1.jpg',
			'title' => 'Полив',
			'text' => 'Компания «Novedades Agricolas» проектирует и устанавливает системы полива в полном соответствии с запросами и требованиями заказчиков.',
			'href' => 'irrigation/irrigation-systems/xilema-fertigation',
		],
		[
			'img' => 'slide22.jpg',
			'title' => '35 лет опыта',
			'text' => 'Более 35 лет сотрудничества с фермерским сообществом в сфере поставки индивидуальных решений под специфические запросы наших клиентов сделали нас ведущей компанией на рынке.',
			'href' => 'company',
		],
	];
}
function get_services_items() {
	return [
		['img' => 'tecboton/greenhouses.jpg', 'text' => 'Таплицы на продажу', 'href' => 'greenhouses/greenhouses-for-sale'],
		['img' => 'tecboton/irrigation.jpg', 'text' => 'Системы полива', 'href' => 'irrigation/irrigation-systems'],
		['img' => 'tecboton/water.jpg', 'text' => 'Вода', 'href' => 'water'],
		['img' => 'tecboton/climatecontrol.jpg', 'text' => 'Климат контроль', 'href' => 'technology/climate-control/climate-controller'],
		['img' => 'tecboton/reservoirs.jpg', 'text' => 'Резервуары', 'href' => 'technology/reservoirs'],
		['img' => 'tecboton/advice.jpg', 'text' => 'Консалтинг', 'href' => 'technology/advice/consulting'],
		['img' => 'tecboton/complements.jpg', 'text' => 'Коплектующие', 'href' => 'technology/complements/clipser-hanger'],
		['img' => 'tecboton/rdi.jpg', 'text' => 'НИОКР', 'href' => 'technology/r-d-i'],
	];
}
