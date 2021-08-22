function sweetSuccessBtn(title = 'Alert', text = "Succes", btn = "OK"){

    swal({
        title: title,
        text: text,
        icon: "success",
        button: btn,
      });

}

function sweetSuccess(title = 'Alert', text = "Succes"){

    swal({
        title: title,
        text: text,
        icon: "success",
        timer: 2000,
        button: false,
      });

}

function sweetFailure(title = "Alert", text = "Echec"){
    swal({
        title: title,
        text: text,
        icon: "error",
        timer: 2000,
        button: false,
      });
}


function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
} 
