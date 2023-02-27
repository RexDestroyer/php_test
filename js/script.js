
var num = [0, 0, 0, 0, 0, 0, 0];

function increment(a) {
  switch (a) {
    case "auto-bottom":
      num[0]++;
      $('#auto-bottom').text(num[0]);
      $('#a-b').val(num[0]);
      break;
    case "auto-middle":
      num[1]++;
      $('#auto-middle').text(num[1]);
      $('#a-m').val(num[1]);
      break;
    case "auto-top":
      num[2]++;
      $('#auto-top').text(num[2]);
      $('#a-t').val(num[2]);
      break;
    case "teleop-bottom":
      num[3]++;
      $('#teleop-bottom').text(num[3]);
      $('#t-b').val(num[3]);
      break;
    case "teleop-middle":
      num[4]++;
      $('#teleop-middle').text(num[4]);
      $('#t-m').val(num[4]);
      break;
    case "teleop-top":
      num[5]++;
      $('#teleop-top').text(num[5]);
      $('#t-t').val(num[5]);
      break;
    case "teleop-link":
      //  var nums = [$('#a-b'), $('#a-m'), $('#a-t'), $('#t-b'), $('#t-m'), $('#t-t')]
      var sum = 0;
      for (var i = 0; i < 6; i++) {
        sum += num[i];
      }

      if (((sum >= 5) && ($('#t-l').val() == 0)) ||
        ((sum >= 10) && ($('#t-l').val() == 1)) || ((sum >= 15) && ($('#t-l').val() == 2)) ||
        ((sum >= 20) && ($('#t-l').val() == 3)) || ((sum >= 25) && ($('#t-l').val() == 4))) {
        num[6]++;
        $('#teleop-link').text(num[6]);
        $('#t-l').val(num[6]);
      }
      break;
    default:
      console.log("amogus");
      break;
  }
}

function decrement(a) {
  if ($('#' + a).text() > 0) {
    switch (a) {
      case "auto-bottom":
        num[0]--;
        $('#auto-bottom').text(num[0]);
        $('#a-b').val(num[0]);
        break;
      case "auto-middle":
        num[1]--;
        $('#auto-middle').text(num[1]);
        $('#a-m').val(num[1]);
        break;
      case "auto-top":
        num[2]--;
        $('#auto-top').text(num[2]);
        $('#a-t').val(num[2]);
        break;
      case "teleop-bottom":
        num[3]--;
        $('#teleop-bottom').text(num[3]);
        $('#t-b').val(num[3]);
        break;
      case "teleop-middle":
        num[4]--;
        $('#teleop-middle').text(num[4]);
        $('#t-m').val(num[4]);
        break;
      case "teleop-top":
        num[5]--;
        $('#teleop-top').text(num[5]);
        $('#t-t').val(num[5]);
        break;
      case "teleop-link":
        num[6]--;
        $('#teleop-link').text(num[6]);
        $('#t-l').val(num[6]);
        break;
      default:
        console.log("amogus");
        break;
    }
  }
}

function cronometro() {
  const tag = document.querySelector("#time");
  let segundos = 0;
  const limite = "02:30";
  const match = setInterval(function () {
    segundos++;
    const minutos = Math.floor(segundos / 60);
    const segundosRestantes = segundos % 60;
    const cronometro = `${minutos < 10 ? '0' : ''}${minutos}:${segundosRestantes < 10 ? '0' : ''}${segundosRestantes}`;
    tag.innerHTML = cronometro;
    if (cronometro === limite) {
      clearInterval(match);
    }
  }, 1000);
}

const checkboxes = document.querySelectorAll("input[type='checkbox']");

checkboxes.forEach(input => {input.addEventListener("change", () => {
  if (checkbox.checked) {
    checkbox.value = "1";
    console.log(checkbox.value);
  } else {
    checkbox.value = "0";
    console.log(checkbox.value);
    
  }
})});

  const checkboxes_auto = document.querySelectorAll('input[name*="auto-docked"]');

checkboxes_auto.forEach(function(checkbox) {
  checkbox.addEventListener('click', function() {
    checkboxes_auto.forEach(function(cb) {
      if (cb.checked && cb !== this) {
        cb.checked = false;
      }
    }, this);
  });
});

const checkboxes_end = document.querySelectorAll('input[name*="end"]');

checkboxes_end.forEach(function(checkbox) {
  checkbox.addEventListener('click', function() {
    checkboxes_end.forEach(function(cb) {
      if (cb.checked && cb !== this) {
        cb.checked = false;
      }
    }, this);
  });
});






