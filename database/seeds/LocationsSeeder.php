<?php

use Illuminate\Database\Seeder;
use App\Entity\Location;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$items = [
			[
				'name' => 'Россия',
				'slug' => 'russia',
				'children' => [

//					['name' => 'Москва', 'type' => 'city', 'slug' => 'moscow', 'children' => [
//						['name' => 'Центр', 'type' => 'metro'],
//						['name' => 'Набережная', 'type' => 'metro'],
//					]],
//
//					['name' => 'Петербург', 'type' => 'city', 'slug' => 'spb', 'children' => [
//						['name' => 'Центр', 'type' => 'metro'],
//						['name' => 'Центр', 'type' => 'district'],
//						['name' => 'Рынок', 'type' => 'district'],
//						['name' => 'Рынок', 'type' => 'district'],
//					]],

					['name' => 'Москва', 'type' => 'city', 'slug' => 'moscow', 'children' => [
						['name' => 'Авиамоторная', 'type' => 'metro'],
						['name' => 'Автозаводская', 'type' => 'metro'],
						['name' => 'Академическая', 'type' => 'metro'],
						['name' => 'Александровский сад', 'type' => 'metro'],
						['name' => 'Алексеевская', 'type' => 'metro'],
						['name' => 'Алма-Атинская', 'type' => 'metro'],
						['name' => 'Алтуфьево', 'type' => 'metro'],
						['name' => 'Андроновка', 'type' => 'metro'],
						['name' => 'Аннино', 'type' => 'metro'],
						['name' => 'Арбатская', 'type' => 'metro'],
						['name' => 'Аэропорт', 'type' => 'metro'],
						['name' => 'Бабушкинская', 'type' => 'metro'],
						['name' => 'Багратионовская', 'type' => 'metro'],
						['name' => 'Балтийская', 'type' => 'metro'],
						['name' => 'Баррикадная', 'type' => 'metro'],
						['name' => 'Бауманская', 'type' => 'metro'],
						['name' => 'Беговая', 'type' => 'metro'],
						['name' => 'Белокаменная', 'type' => 'metro'],
						['name' => 'Белорусская', 'type' => 'metro'],
						['name' => 'Беляево', 'type' => 'metro'],
						['name' => 'Бибирево', 'type' => 'metro'],
						['name' => 'Библиотека им. Ленина', 'type' => 'metro'],
						['name' => 'Битцевский парк', 'type' => 'metro'],
						['name' => 'Борисово', 'type' => 'metro'],
						['name' => 'Боровицкая', 'type' => 'metro'],
						['name' => 'Боровское шоссе', 'type' => 'metro'],
						['name' => 'Ботанический сад', 'type' => 'metro'],
						['name' => 'Братиславская', 'type' => 'metro'],
						['name' => 'Бульвар Дм. Донского', 'type' => 'metro'],
						['name' => 'Бульвар Рокоссовского', 'type' => 'metro'],
						['name' => 'Бульвар адмирала Ушакова', 'type' => 'metro'],
						['name' => 'Бунинская аллея', 'type' => 'metro'],
						['name' => 'Бутырская', 'type' => 'metro'],
						['name' => 'ВДНХ', 'type' => 'metro'],
						['name' => 'Варшавская', 'type' => 'metro'],
						['name' => 'Верхние Котлы', 'type' => 'metro'],
						['name' => 'Владыкино', 'type' => 'metro'],
						['name' => 'Водный стадион', 'type' => 'metro'],
						['name' => 'Войковская', 'type' => 'metro'],
						['name' => 'Волгоградский проспект', 'type' => 'metro'],
						['name' => 'Волжская', 'type' => 'metro'],
						['name' => 'Волоколамская', 'type' => 'metro'],
						['name' => 'Воробьевы горы', 'type' => 'metro'],
						['name' => 'Востряково', 'type' => 'metro'],
						['name' => 'Выставочная', 'type' => 'metro'],
						['name' => 'Выхино', 'type' => 'metro'],
						['name' => 'Деловой центр', 'type' => 'metro'],
						['name' => 'Динамо', 'type' => 'metro'],
						['name' => 'Дмитровская', 'type' => 'metro'],
						['name' => 'Добрынинская', 'type' => 'metro'],
						['name' => 'Домодедовская', 'type' => 'metro'],
						['name' => 'Достоевская', 'type' => 'metro'],
						['name' => 'Дубровка', 'type' => 'metro'],
						['name' => 'Жулебино', 'type' => 'metro'],
						['name' => 'ЗИЛ', 'type' => 'metro'],
						['name' => 'Зорге', 'type' => 'metro'],
						['name' => 'Зябликово', 'type' => 'metro'],
						['name' => 'Измайлово', 'type' => 'metro'],
						['name' => 'Измайловская', 'type' => 'metro'],
						['name' => 'Калужская', 'type' => 'metro'],
						['name' => 'Кантемировская', 'type' => 'metro'],
						['name' => 'Каховская', 'type' => 'metro'],
						['name' => 'Каширская', 'type' => 'metro'],
						['name' => 'Киевская', 'type' => 'metro'],
						['name' => 'Китай-город', 'type' => 'metro'],
						['name' => 'Кожуховская', 'type' => 'metro'],
						['name' => 'Коломенская', 'type' => 'metro'],
						['name' => 'Комсомольская', 'type' => 'metro'],
						['name' => 'Коньково', 'type' => 'metro'],
						['name' => 'Коптево', 'type' => 'metro'],
						['name' => 'Котельники', 'type' => 'metro'],
						['name' => 'Красногвардейская', 'type' => 'metro'],
						['name' => 'Краснопресненская', 'type' => 'metro'],
						['name' => 'Красносельская', 'type' => 'metro'],
						['name' => 'Красные ворота', 'type' => 'metro'],
						['name' => 'Крестьянская застава', 'type' => 'metro'],
						['name' => 'Кропоткинская', 'type' => 'metro'],
						['name' => 'Крылатское', 'type' => 'metro'],
						['name' => 'Крымская', 'type' => 'metro'],
						['name' => 'Кузнецкий мост', 'type' => 'metro'],
						['name' => 'Кузьминки', 'type' => 'metro'],
						['name' => 'Кунцевская', 'type' => 'metro'],
						['name' => 'Курская', 'type' => 'metro'],
						['name' => 'Кутузовская', 'type' => 'metro'],
						['name' => 'Ленинский проспект', 'type' => 'metro'],
						['name' => 'Лермонтовский проспект', 'type' => 'metro'],
						['name' => 'Лесопарковая', 'type' => 'metro'],
						['name' => 'Лихоборы', 'type' => 'metro'],
						['name' => 'Локомотив', 'type' => 'metro'],
						['name' => 'Ломоносовский проспект', 'type' => 'metro'],
						['name' => 'Лубянка', 'type' => 'metro'],
						['name' => 'Лужники', 'type' => 'metro'],
						['name' => 'Люблино', 'type' => 'metro'],
						['name' => 'Марксистская', 'type' => 'metro'],
						['name' => 'Марьина роща', 'type' => 'metro'],
						['name' => 'Марьино', 'type' => 'metro'],
						['name' => 'Маяковская', 'type' => 'metro'],
						['name' => 'Медведково', 'type' => 'metro'],
						['name' => 'Международная', 'type' => 'metro'],
						['name' => 'Менделеевская', 'type' => 'metro'],
						['name' => 'Минская', 'type' => 'metro'],
						['name' => 'Митино', 'type' => 'metro'],
						['name' => 'Молодежная', 'type' => 'metro'],
						['name' => 'Мякинино', 'type' => 'metro'],
						['name' => 'Нагатинская', 'type' => 'metro'],
						['name' => 'Нагорная', 'type' => 'metro'],
						['name' => 'Нахимовский проспект', 'type' => 'metro'],
						['name' => 'Нижегородская', 'type' => 'metro'],
						['name' => 'Никулинская', 'type' => 'metro'],
						['name' => 'Новогиреево', 'type' => 'metro'],
						['name' => 'Новокосино', 'type' => 'metro'],
						['name' => 'Новокузнецкая', 'type' => 'metro'],
						['name' => 'Новопеределкино', 'type' => 'metro'],
						['name' => 'Новослободская', 'type' => 'metro'],
						['name' => 'Новохохловская', 'type' => 'metro'],
						['name' => 'Новоясеневская', 'type' => 'metro'],
						['name' => 'Новые черемушки', 'type' => 'metro'],
						['name' => 'Окружная', 'type' => 'metro'],
						['name' => 'Октябрьская', 'type' => 'metro'],
						['name' => 'Октябрьское поле', 'type' => 'metro'],
						['name' => 'Олимпийская деревня', 'type' => 'metro'],
						['name' => 'Орехово', 'type' => 'metro'],
						['name' => 'Отрадное', 'type' => 'metro'],
						['name' => 'Охотный ряд', 'type' => 'metro'],
						['name' => 'Павелецкая', 'type' => 'metro'],
						['name' => 'Панфиловская', 'type' => 'metro'],
						['name' => 'Парк Победы', 'type' => 'metro'],
						['name' => 'Парк культуры', 'type' => 'metro'],
						['name' => 'Партизанская', 'type' => 'metro'],
						['name' => 'Первомайская', 'type' => 'metro'],
						['name' => 'Перово', 'type' => 'metro'],
						['name' => 'Петровско-Разумовская', 'type' => 'metro'],
						['name' => 'Печатники', 'type' => 'metro'],
						['name' => 'Пионерская', 'type' => 'metro'],
						['name' => 'Пл. Гагарина', 'type' => 'metro'],
						['name' => 'Планерная', 'type' => 'metro'],
						['name' => 'Площадь Ильича', 'type' => 'metro'],
						['name' => 'Площадь Суворова', 'type' => 'metro'],
						['name' => 'Площадь революции', 'type' => 'metro'],
						['name' => 'Полежаевская', 'type' => 'metro'],
						['name' => 'Полянка', 'type' => 'metro'],
						['name' => 'Пражская', 'type' => 'metro'],
						['name' => 'Преображенская площадь', 'type' => 'metro'],
						['name' => 'Пролетарская', 'type' => 'metro'],
						['name' => 'Проспект Вернадского', 'type' => 'metro'],
						['name' => 'Проспект мира', 'type' => 'metro'],
						['name' => 'Профсоюзная', 'type' => 'metro'],
						['name' => 'Пушкинская', 'type' => 'metro'],
						['name' => 'Пятницкое шоссе', 'type' => 'metro'],
						['name' => 'Раменки', 'type' => 'metro'],
						['name' => 'Речной вокзал', 'type' => 'metro'],
						['name' => 'Рижская', 'type' => 'metro'],
						['name' => 'Римская', 'type' => 'metro'],
						['name' => 'Ростокино', 'type' => 'metro'],
						['name' => 'Румянцево', 'type' => 'metro'],
						['name' => 'Рязанский проспект', 'type' => 'metro'],
						['name' => 'Савеловская', 'type' => 'metro'],
						['name' => 'Саларьево', 'type' => 'metro'],
						['name' => 'Свиблово', 'type' => 'metro'],
						['name' => 'Севастопольская', 'type' => 'metro'],
						['name' => 'Селигерская', 'type' => 'metro'],
						['name' => 'Семеновская', 'type' => 'metro'],
						['name' => 'Серпуховская', 'type' => 'metro'],
						['name' => 'Славянский бульвар', 'type' => 'metro'],
						['name' => 'Смоленская', 'type' => 'metro'],
						['name' => 'Сокол', 'type' => 'metro'],
						['name' => 'Соколиная гора', 'type' => 'metro'],
						['name' => 'Сокольники', 'type' => 'metro'],
						['name' => 'Солнцево', 'type' => 'metro'],
						['name' => 'Спартак', 'type' => 'metro'],
						['name' => 'Спортивная', 'type' => 'metro'],
						['name' => 'Сретенский бульвар', 'type' => 'metro'],
						['name' => 'Стрешнево', 'type' => 'metro'],
						['name' => 'Строгино', 'type' => 'metro'],
						['name' => 'Студенческая', 'type' => 'metro'],
						['name' => 'Сухаревская', 'type' => 'metro'],
						['name' => 'Сходненская', 'type' => 'metro'],
						['name' => 'Таганская', 'type' => 'metro'],
						['name' => 'Тверская', 'type' => 'metro'],
						['name' => 'Театральная', 'type' => 'metro'],
						['name' => 'Текстильщики', 'type' => 'metro'],
						['name' => 'Теплый стан', 'type' => 'metro'],
						['name' => 'Терешково', 'type' => 'metro'],
						['name' => 'Технопарк', 'type' => 'metro'],
						['name' => 'Тимирязевская', 'type' => 'metro'],
						['name' => 'Третьяковская', 'type' => 'metro'],
						['name' => 'Тропарёво', 'type' => 'metro'],
						['name' => 'Трубная', 'type' => 'metro'],
						['name' => 'Тульская', 'type' => 'metro'],
						['name' => 'Тургеневская', 'type' => 'metro'],
						['name' => 'Тушинская', 'type' => 'metro'],
						['name' => 'Угрешская', 'type' => 'metro'],
						['name' => 'Ул. академика Янгеля', 'type' => 'metro'],
						['name' => 'Улица 1905 года', 'type' => 'metro'],
						['name' => 'Улица Горчакова', 'type' => 'metro'],
						['name' => 'Улица Скобелевская', 'type' => 'metro'],
						['name' => 'Улица Старокачаловская', 'type' => 'metro'],
						['name' => 'Университет', 'type' => 'metro'],
						['name' => 'Филевский парк', 'type' => 'metro'],
						['name' => 'Фили', 'type' => 'metro'],
						['name' => 'Фонвизинская', 'type' => 'metro'],
						['name' => 'Фрунзенская', 'type' => 'metro'],
						['name' => 'Хорошёво', 'type' => 'metro'],
						['name' => 'Царицыно', 'type' => 'metro'],
						['name' => 'Цветной бульвар', 'type' => 'metro'],
						['name' => 'Черкизовская', 'type' => 'metro'],
						['name' => 'Чертановская', 'type' => 'metro'],
						['name' => 'Чеховская', 'type' => 'metro'],
						['name' => 'Чистые пруды', 'type' => 'metro'],
						['name' => 'Чкаловская', 'type' => 'metro'],
						['name' => 'Шаболовская', 'type' => 'metro'],
						['name' => 'Шелепиха', 'type' => 'metro'],
						['name' => 'Шипиловская', 'type' => 'metro'],
						['name' => 'Шоссе Энтузиастов', 'type' => 'metro'],
						['name' => 'Щелковская', 'type' => 'metro'],
						['name' => 'Щукинская', 'type' => 'metro'],
						['name' => 'Электрозаводская', 'type' => 'metro'],
						['name' => 'Юбилейная', 'type' => 'metro'],
						['name' => 'Юго-Западная', 'type' => 'metro'],
						['name' => 'Южная', 'type' => 'metro'],
						['name' => 'Ясенево', 'type' => 'metro'],
					]],
					['name' => 'Санкт-Петербург', 'type' => 'city', 'slug' => 'spb', 'children' => [
						['name' => 'Автово', 'type' => 'metro'],
						['name' => 'Адмиралтейская', 'type' => 'metro'],
						['name' => 'Академическая', 'type' => 'metro'],
						['name' => 'Балтийская', 'type' => 'metro'],
						['name' => 'Бухарестская', 'type' => 'metro'],
						['name' => 'Василеостровская', 'type' => 'metro'],
						['name' => 'Владимирская', 'type' => 'metro'],
						['name' => 'Волковская', 'type' => 'metro'],
						['name' => 'Выборгская', 'type' => 'metro'],
						['name' => 'Горьковская', 'type' => 'metro'],
						['name' => 'Гостиный двор', 'type' => 'metro'],
						['name' => 'Гражданский пр.', 'type' => 'metro'],
						['name' => 'Девяткино', 'type' => 'metro'],
						['name' => 'Достоевская', 'type' => 'metro'],
						['name' => 'Елизаровская', 'type' => 'metro'],
						['name' => 'Звездная', 'type' => 'metro'],
						['name' => 'Звенигородская', 'type' => 'metro'],
						['name' => 'Кировский завод', 'type' => 'metro'],
						['name' => 'Комендантский пр.', 'type' => 'metro'],
						['name' => 'Крестовский остров', 'type' => 'metro'],
						['name' => 'Купчино', 'type' => 'metro'],
						['name' => 'Ладожская', 'type' => 'metro'],
						['name' => 'Ленинский пр.', 'type' => 'metro'],
						['name' => 'Лесная', 'type' => 'metro'],
						['name' => 'Лиговский пр.', 'type' => 'metro'],
						['name' => 'Ломоносовская', 'type' => 'metro'],
						['name' => 'Маяковская', 'type' => 'metro'],
						['name' => 'Международная', 'type' => 'metro'],
						['name' => 'Московская', 'type' => 'metro'],
						['name' => 'Московские ворота', 'type' => 'metro'],
						['name' => 'Нарвская', 'type' => 'metro'],
						['name' => 'Невский пр.', 'type' => 'metro'],
						['name' => 'Новочеркасская', 'type' => 'metro'],
						['name' => 'Обводный канал', 'type' => 'metro'],
						['name' => 'Обухово', 'type' => 'metro'],
						['name' => 'Озерки', 'type' => 'metro'],
						['name' => 'Парк Победы', 'type' => 'metro'],
						['name' => 'Парнас', 'type' => 'metro'],
						['name' => 'Петроградская', 'type' => 'metro'],
						['name' => 'Пионерская', 'type' => 'metro'],
						['name' => 'Пл. Ал. Невского', 'type' => 'metro'],
						['name' => 'Пл. Восстания', 'type' => 'metro'],
						['name' => 'Пл. Ленина', 'type' => 'metro'],
						['name' => 'Пл. Мужества', 'type' => 'metro'],
						['name' => 'Политехническая', 'type' => 'metro'],
						['name' => 'Пр. Большевиков', 'type' => 'metro'],
						['name' => 'Пр. Ветеранов', 'type' => 'metro'],
						['name' => 'Пр. Просвещения', 'type' => 'metro'],
						['name' => 'Приморская', 'type' => 'metro'],
						['name' => 'Пролетарская', 'type' => 'metro'],
						['name' => 'Пушкинская', 'type' => 'metro'],
						['name' => 'Рыбацкое', 'type' => 'metro'],
						['name' => 'Садовая', 'type' => 'metro'],
						['name' => 'Сенная площадь', 'type' => 'metro'],
						['name' => 'Спасская', 'type' => 'metro'],
						['name' => 'Спортивная', 'type' => 'metro'],
						['name' => 'Старая Деревня', 'type' => 'metro'],
						['name' => 'Технологический институт', 'type' => 'metro'],
						['name' => 'Удельная', 'type' => 'metro'],
						['name' => 'Ул. Дыбенко', 'type' => 'metro'],
						['name' => 'Фрунзенская', 'type' => 'metro'],
						['name' => 'Черная речка', 'type' => 'metro'],
						['name' => 'Чернышевская', 'type' => 'metro'],
						['name' => 'Чкаловская', 'type' => 'metro'],
						['name' => 'Электросила', 'type' => 'metro'],
					]],
//					['name' => 'Московская область', 'type' => 'region'],
//					['name' => 'Ленинградская область', 'type' => 'region'],
//					['name' => 'Краснодарский край', 'type' => 'region', 'children' => [
//						['name' => 'Краснодар', 'type' => 'city', 'children' => [
//							['name' => 'Центральный', 'type' => 'district'],
//							['name' => 'Фестивальный', 'type' => 'district'],
//							['name' => 'ЗИП', 'type' => 'district'],
//							['name' => 'Комсомольский', 'type' => 'district'],
//							['name' => 'Черемушки', 'type' => 'district'],
//							['name' => 'Краевая клиническая больница', 'type' => 'district'],
//							['name' => 'Гидростроителей', 'type' => 'district'],
//							['name' => 'Юбилейный', 'type' => 'district'],
//							['name' => 'Шанхай', 'type' => 'district'],
//							['name' => 'Пашковский', 'type' => 'district'],
//							['name' => 'Кубанская набережная', 'type' => 'district'],
//							['name' => 'Северный', 'type' => 'district'],
//							['name' => 'Витаминкомбинат', 'type' => 'district'],
//							['name' => 'им.Маршала Жукова', 'type' => 'district'],
//						]],
//						['name' => 'Сочи', 'type' => 'city'],
//						['name' => 'Абинск', 'type' => 'city'],
//						['name' => 'Анапа', 'type' => 'city'],
//						['name' => 'Апшеронск', 'type' => 'city'],
//						['name' => 'Армавир', 'type' => 'city'],
//						['name' => 'Белореченск', 'type' => 'city'],
//						['name' => 'Геленджик', 'type' => 'city'],
//						['name' => 'Горячий Ключ', 'type' => 'city'],
//						['name' => 'Гулькевичи', 'type' => 'city'],
//						['name' => 'Ейск', 'type' => 'city'],
//						['name' => 'Кореновск', 'type' => 'city'],
//						['name' => 'Кропоткин', 'type' => 'city'],
//						['name' => 'Крымск', 'type' => 'city'],
//						['name' => 'Курганинск', 'type' => 'city'],
//						['name' => 'Лабинск', 'type' => 'city'],
//						['name' => 'Новороссийск', 'type' => 'city'],
//						['name' => 'Приморско-Ахтарск', 'type' => 'city'],
//						['name' => 'Славянск-на-Кубани', 'type' => 'city'],
//						['name' => 'Темрюк', 'type' => 'city'],
//						['name' => 'Тимашёвск', 'type' => 'city'],
//						['name' => 'Тихорецк', 'type' => 'city'],
//						['name' => 'Туапсе', 'type' => 'city'],
//						['name' => 'Усть-Лабинск', 'type' => 'city'],
//					]],
				]
			],
		];

		foreach($items as $item)
		{
			Location::create($item);
		}
    }
}
