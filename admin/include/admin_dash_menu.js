function updateFormClick() {
    console.log('in func');
    var formDetails = $('form[name=updateform]').serialize();
    console.log(formDetails); //return;
    $.ajax({
        url: 'http://localhost/anjali/Contact-Form/admin/vendor/update_function.php',
        type: 'POST',
        data: formDetails,
        success: function(response) {
            // alert(response);
            response = jQuery.parseJSON(response);
            // alert(response.status);
            if (response.status) {
                update_record();
            }
        },
        error: function() {
            alert("error");
        }
    });
}

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

function deleteUser(userID) {
    console.log(userID);
    var xhttp = new XMLHttpRequest();
    var answer = confirm("Do you want to delete this record?")
    if (answer) {
        console.log('ok delete it');
        $.post('../vendor/delete_function.php', {
            user_id: userID
        }, function test() {
            $('.widget-summary-box').load(document.URL + ' .widget-summary-box');
            delete_record();
            });
    } else {
        console.log('dont delete it');
    }
}

function delete_record() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("widget-summary-box").innerHTML =
                this.responseText;
        }
    };

    xhttp.open("GET", "../vendor/delete_record.php", true);
    console.log('here in delete js for view');
    xhttp.send();
}

function update_record() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("widget-summary-box").innerHTML =
                this.responseText;
            console.log('here in updatee js for view');

        }
    };
    xhttp.open("GET", "../vendor/update_record.php", true);
    console.log('here in update js for view');
    xhttp.send();
}

function updateUser(userID) {
    $row11 = userID;
    console.log($row11);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("widget-summary-box").innerHTML =
                this.responseText;
        }
    };
    xhttp.open("GET", "../vendor/update_user.php?update=" + $row11, true);
    xhttp.send();
}

function updateFunc(name_test) {
    console.log('in updateFunc');
    $varname = name_test;
    console.log($varname);
}
