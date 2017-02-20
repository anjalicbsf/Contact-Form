// function openNav() {
// 				    document.getElementById("mySidenav").style.width = "100%";
// 				}
// function closeNav() {
// 				    document.getElementById("mySidenav").style.width = "0";
// 				}


        function loadDoc() {
  			var xhttp = new XMLHttpRequest();
  			xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      		document.getElementById("widget-summary-box").innerHTML =
    		  this.responseText;
    		}
  			};
  			xhttp.open("GET", "../vendor/display_record.php", true);
  			xhttp.send();
		}

// function loadDoc() {
//   var xhttp = new XMLHttpRequest();
//   xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//       document.getElementById("view-table").innerHTML =
//       this.responseText;
//     }
//   };
//   xhttp.open("GET", "vendor/display_record.php", true);
//   xhttp.send();
// }

// $('#mySidenav a').click(function(e){
//     e.preventDefault();
//     $('#admin-data').load(this.getAttribute('href'));
// });				



// $('a').click(function(){
//    $('#admin-data').load($(this).attr('href'));
//    return false;
// });
