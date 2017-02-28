function updateFormClick() {
    var formDetails = $('form[name=updateform]').serialize();
    $.ajax({
        url: 'http://localhost/anjali/Contact-Form/admin/vendor/update-function.php',
        type: 'POST',
        data: formDetails,
        success: function(response) {
            response = jQuery.parseJSON(response);
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
    xhttp.open("GET", "../vendor/display-record.php", true);
    xhttp.send();
}

function deleteUser(userID) {
    var xhttp = new XMLHttpRequest();
    var answer = confirm("Do you want to delete this record?")
    if (answer) {
        $.post('../vendor/delete-function.php', {
            user_id: userID
        }, function test() {
            $('.widget-summary-box').load(document.URL + ' .widget-summary-box');
            delete_record();
            });
    } else {
        
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

    xhttp.open("GET", "../vendor/delete-record.php", true);
    xhttp.send();
}

function update_record() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("widget-summary-box").innerHTML =
                this.responseText;
        }
    };
    xhttp.open("GET", "../vendor/update-record.php", true);
    xhttp.send();
}

function updateUser(userID) {
    $row11 = userID;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("widget-summary-box").innerHTML =
                this.responseText;
        }
    };
    xhttp.open("GET", "../vendor/update-user.php?update=" + $row11, true);
    xhttp.send();
}
