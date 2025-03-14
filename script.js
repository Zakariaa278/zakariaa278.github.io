// Gère l'affichage du menu mobile
function menu() {
  const navLinks = document.querySelector(".nav-links");
  navLinks.classList.toggle('mobile-menu');
}

// Change la couleur de fond des navlinks au survol
function colornav(element, isMouseOver) {
  if (isMouseOver) {
    element.style.color = 'rgba(255, 99, 71, 0.6)';
  } else {
    element.style.color = 'white';
  }
}

// Gère l'affichage du mot de passe dans le formulaire
function hidePassword() {
  const eye = document.querySelector(".feather-eye");
  const eyeOff = document.querySelector(".feather-eye-off");
  const passwordField = document.querySelector("input[type=password]");

  eye.onclick = function() {
    eye.style.display = "none";
    eyeOff.style.display = "block";
    passwordField.type = "text";
  };

  eyeOff.onclick = function() {
    eyeOff.style.display = "none";
    eye.style.display = "block";
    passwordField.type = "password";
  };
}
// Fonction pour générer le calendrier
function generateCalendar() {
  var calendarBody = document.getElementById("calendar-body");
  calendarBody.innerHTML = "";

  var currentDate = new Date();
  var year = currentDate.getFullYear();
  var month = currentDate.getMonth();

  var firstDay = new Date(year, month, 1);
  var lastDay = new Date(year, month + 1, 0);

  var startDate = new Date(firstDay);
  startDate.setDate(startDate.getDate() - startDate.getDay());

  var endDate = new Date(lastDay);
  endDate.setDate(endDate.getDate() + (6 - endDate.getDay()));

  var date = new Date(startDate);

  while (date <= endDate) {
    var weekRow = document.createElement("tr");

    for (var i = 0; i < 7; i++) {
      var dayCell = document.createElement("td");
      dayCell.innerText = date.getDate();
      dayCell.addEventListener("click", selectDate);
      weekRow.appendChild(dayCell);

      if (date.getMonth() !== month) {
        dayCell.classList.add("disabled");
      }

      if (date.toDateString() === currentDate.toDateString()) {
        dayCell.classList.add("selected");
      }

      date.setDate(date.getDate() + 1);
    }

    calendarBody.appendChild(weekRow);
  }
}

// Fonction pour sélectionner une date
function selectDate() {
  var selectedCells = document.getElementsByClassName("selected");
  for (var i = 0; i < selectedCells.length; i++) {
    selectedCells[i].classList.remove("selected");
  }

  this.classList.add("selected");
}
generateCalendar();

// Fonction pour envoyer des message dans le forum
function sendMessage(conversationId) {
  var ulId = 'messages' + conversationId;
  var inputId = 'messageInput' + conversationId;
  var input = document.getElementById(inputId);
  var message = input.value.trim();

  if (message !== '') {
    var ul = document.getElementById(ulId);
    var li = document.createElement('li');
    li.textContent = message;
    ul.appendChild(li);
    input.value = '';
  }
}