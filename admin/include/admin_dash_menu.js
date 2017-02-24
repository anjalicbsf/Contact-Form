// function openNav() {
// 				    document.getElementById("mySidenav").style.width = "100%";
// 				}
// function closeNav() {
// 				    document.getElementById("mySidenav").style.width = "0";
// 				}

jQuery( document ).on( 'load', function() {
	/*var windowurl = window.location.href;
	if(0) {
		var xhttp = new XMLHttpRequest();
		xhttp.open("GET", "../vendor/display_record.php", true);
	}*/
} );

function loadDoc() {

  var xhttp = new XMLHttpRequest();
  var windowurl = window.location.href;
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("widget-summary-box").innerHTML =
      	this.responseText;
    }
  };
  xhttp.open("GET", "../vendor/display_record.php", true);
  //window.location.href = windowurl + '?page_id=list_view';
  xhttp.send();
}

function deleteUser( userID ) {
	console.log(userID);
	var xhttp = new XMLHttpRequest();
	var answer = confirm ("Do you want to delete this record?")
	if(answer){
		console.log('ok delete it');
		$.post('../vendor/delete_function.php', { user_id: userID } ,delete_record());
			
	}
	else {
		console.log('dont delete it');
	}
	// $.post('../vendor/delete_function.php', { user_id: userID } ,delete_record());
}

// {function() {
// 			xhttp.open("GET", "../vendor/display_record.php", true);
// 			var html = xhttp.send();
// 			console.log(html);
// 			if( html != 'undefined' ) {
// 				document.getElementById("widget-summary-box").innerHTML = html;
// 			}
// 		}}



function delete_record(){

 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("widget-summary-box").innerHTML =
      	this.responseText;
      	 console.log('here in delete js for view');

    }
  };

  xhttp.open("GET", "../vendor/delete_record.php", true);
   console.log('here in delete js for view');
  xhttp.send();
}

// $('#mySidenav a').click(function(e){
//     e.preventDefault();
//     $('#admin-data').load(this.getAttribute('href'));
// });				



// $('a').click(function(){
//    $('#admin-data').load($(this).attr('href'));
//    return false;
// });
