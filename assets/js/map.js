function initMap() {
				var opt = {
					center: {lat: 49.236575, lng: 28.475822},
					zoom: 13
				}
				var map = new google.maps.Map(document.getElementById("map"), opt);

				var marker1 = new google.maps.Marker({
					position: {lat: 49.250857, lng: 28.542150},
					map: map,
					title: "Ватутіно,72",
				});

				var marker2 = new google.maps.Marker({
					position: {lat: 49.240139, lng: 28.509479},
					map: map,
					title: "Привокзальна площа",
				});

				var marker3 = new google.maps.Marker({
					position: {lat: 49.239903, lng: 28.491736},
					map: map,
					title: "Площа перемоги",
				});

				var marker4 = new google.maps.Marker({
					position: {lat: 49.237894, lng: 28.464672},
					map: map,
					title: "Площа Героїв майдану",
				});

				var marker5 = new google.maps.Marker({
					position: {lat: 49.237162, lng: 28.404109},
					map: map,
					title: "Барське шосе (автовокзал)",
				});


				var marker6 = new google.maps.Marker({
					position: {lat: 49.225181, lng: 28.419207},
					map: map,
					title: "Вул. Келецька",
				});

				var marker7 = new google.maps.Marker({
					position: {lat: 49.270337, lng: 28.473122},
					map: map,
					title: "Вул. Київська, 182",
				});

				var marker8 = new google.maps.Marker({
					position: {lat: 49.232435, lng: 28.467999},
					map: map,
					title: "Площа Майдан незалежності",
				});

				var marker9 = new google.maps.Marker({
					position: {lat: 49.230418, lng: 28.414468},
					map: map,
					title: "Проспект Юності, 21",
				});

				var marker10 = new google.maps.Marker({
					position: {lat: 49.214070, lng: 28.431385},
					map: map,
					title: "Вул. Пирогова (зупинка Електромережа)",
				});

				var marker11 = new google.maps.Marker({
					position: {lat: 49.226971, lng: 28.419893},
					map: map,
					title: "Площа Космонавтів",
				});

				var marker12 = new google.maps.Marker({
					position: {lat: 49.219573, lng: 28.420102},
					map: map,
					title: "Парк Дружба народів",
				});

				var marker13 = new google.maps.Marker({
					position: {lat: 49.234412, lng: 28.423935},
					map: map,
					title: "Хмельницьке Шосе (Лісопарк)",
				});

				var marker14 = new google.maps.Marker({
					position: {lat: 49.228194, lng: 28.455784},
					map: map,
					title: "Вул. Малиновського, 11",
				});

				var marker15 = new google.maps.Marker({
					position: {lat: 49.242882, lng: 28.508275},
					map: map,
					title: "Вінницький Агрегатний Завод",
				});


				var marker16 = new google.maps.Marker({
					position: {lat: 49.239179, lng: 28.495789},
					map: map,
					title: "Вул. Коцюбинського (маг. Ярослав)",
				});

				var marker17 = new google.maps.Marker({
					position: {lat: 49.223162, lng: 28.521143},
					map: map,
					title: "Вул. Волошкова (Олієжиркомбінат)",
				});

				var marker18 = new google.maps.Marker({
					position: {lat: 49.223966, lng: 28.556121},
					map: map,
					title: "Немирівське Шосе, 201",
				});

				var marker19 = new google.maps.Marker({
					position: {lat: 49.222774, lng: 28.554626},
					map: map,
					title: "Немирівське Шосе, 203",
				});

				var marker20 = new google.maps.Marker({
					position: {lat: 49.238768, lng: 28.522199},
					map: map,
					title: "Вул. Шимка (ТОВ Полімер)",
				});

				var marker21 = new google.maps.Marker({
					position: {lat: 49.228519, lng: 28.499918},
					map: map,
					title: "Вул. Привокзальна (Політехнікум)",
				});

				var marker22 = new google.maps.Marker({
					position: {lat: 49.229982, lng: 28.502558},
					map: map,
					title: "Вул. Привокзальна, 30а",
				});

				var marker23 = new google.maps.Marker({
					position: {lat: 49.237736, lng: 28.427974},
					map: map,
					title: "Вул. Максимовича, 12 (Декор Бетон)",
				});

				var marker24 = new google.maps.Marker({
					position: {lat: 49.236361, lng: 28.427040},
					map: map,
					title: "Вул. Максимовича, 8",
				});

				var marker25 = new google.maps.Marker({
					position: {lat: 49.195173, lng: 28.448788},
					map: map,
					title: "Провулок Карбишева, 7",
				});

				var marker26 = new google.maps.Marker({
					position: {lat: 49.193592, lng: 28.451372},
					map: map,
					title: "Провулок Карбишева, 2",
				});

				var marker27 = new google.maps.Marker({
					position: {lat: 49.233865, lng: 28.420338},
					map: map,
					title: "Проспект Космонавтів (Літак)",
				});

				var marker28 = new google.maps.Marker({
					position: {lat: 49.214066, lng: 28.501456},
					map: map,
					title: "Вул. Кутузова, 29 (Вінниця ГАЗ)",
				});

				var marker29 = new google.maps.Marker({
					position: {lat: 49.214896, lng: 28.499646},
					map: map,
					title: "Вул. Щорса (Вінниця ГАЗ)",
				});

				var marker30 = new google.maps.Marker({
					position: {lat: 49.229818, lng: 28.427146},
					map: map,
					title: "Вул. Магістратська (Льодова арена)",
				});

				var marker31 = new google.maps.Marker({
					position: {lat: 49.213538, lng: 28.462334},
					map: map,
					title: "Перший провулок український",
				});
			}