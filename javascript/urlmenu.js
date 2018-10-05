			var link = document.getElementsByTagName('link');
		 	link[0].setAttribute('href','../../css/admin.css');
		 	link[1].setAttribute('href','../../fontawesome/css/fontawesome.min.css');
		 	link[2].setAttribute('href','../../fontawesome/css/solid.css');
		 	link[3].setAttribute('href','../../fontawesome/css/regular.css');
		 	link[4].setAttribute('href','../../fontawesome/css/brands.css');

		 	var urlmenu = document.getElementsByClassName('urlmenu');
		 	urlmenu[0].setAttribute('href','../../admin.php'); 			  	/* dashboard */
		 	urlmenu[1].setAttribute('href','../../admin/user/index.php'); 	/* admin/user */
		 	urlmenu[2].setAttribute('href','../../admin/matpel/index.php'); 	/* admin/matpel */
		 	urlmenu[3].setAttribute('href','../../guru/semuaguru/index.php'); 	/* guru/semua guru */
		 	urlmenu[4].setAttribute('href','../../siswa/semuasiswa/index.php'); 	/* guru/semua siswa */

		 	var logout = document.getElementsByClassName('logout')[0].setAttribute('href','../../logout.php');