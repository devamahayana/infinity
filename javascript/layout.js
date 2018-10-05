		var btn = document.getElementById('btn');
		var sidemenu = document.getElementsByClassName('container-sidemenu')[0];
		var logo = document.getElementsByTagName('i')[0];
		var data = document.getElementsByClassName('wrap-data')[0];
		var tanggal = document.getElementById('tanggal');
		var submenu1 = document.getElementById('submenu1');
		var submenu2 = document.getElementById('submenu2');
		var submenu3 = document.getElementById('submenu3');
		var list1 = document.getElementById('list1');
		var list2 = document.getElementById('list2');
		var list3 = document.getElementById('list3');


		function openmenu() {
			btn.setAttribute('onclick','closemenu()');
			sidemenu.style.marginLeft = '0px';
			logo.className = "fas fa-times";
			data.style.width = '70%';

		}
		function closemenu() {
			btn.setAttribute('onclick','openmenu()');
			sidemenu.style.marginLeft = '-200px';
			logo.className = "fas fa-bars";
			data.style.width = '';
		}
		function opensubmenu1() {
			submenu1.setAttribute('onclick','closesubmenu1()');
			list1.className = 'opensub';
		}
		function closesubmenu1() {
			submenu1.setAttribute('onclick','opensubmenu1()');
			list1.className = 'closesub';
		}
		function opensubmenu2() {
			submenu2.setAttribute('onclick','closesubmenu2()');
			list2.className = 'opensub';
		}
		function closesubmenu2() {
			submenu2.setAttribute('onclick','opensubmenu2()');
			list2.className = 'closesub';
		}
		function opensubmenu3() {
			submenu3.setAttribute('onclick','closesubmenu3()');
			list3.className = 'opensub';
		}
		function closesubmenu3() {
			submenu3.setAttribute('onclick','opensubmenu3()');
			list3.className = 'closesub';
		}

		var bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
		var date = new Date();
		var yy = date.getYear();
		var year = (yy < 1000) ? yy + 1900 : yy;

		document.getElementById('tanggal').innerHTML = date.getDate() + ' ' + bulan[date.getMonth()]+' '+year ;