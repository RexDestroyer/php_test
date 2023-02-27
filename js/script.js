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
      num[6]++;
      $('#teleop-link').text(num[6]);
      $('#t-l').val(num[6]);
      break;
    default:
      console.log("amogus");
      break;
  }
}

function decrement(a) {
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

function check(a) {
  switch (a) {
    case "a-lc":
      if ($('#auto-leave_community').val() == "0") {
        $('#auto-leave_community').val("1");
      } else {
        $('#auto-leave_community').val("0");
      }
      break;

    case "a-d":
      if ($('#auto-docked').val() == "0") {
        $('#auto-docked').val("1");
      } else {
        $('#auto-docked').val("0");
      }
      break;

    case "a-de":
      if ($('#auto-docked_engaged').val() == "0") {
        $('#auto-docked_engaged').val("1");
      } else {
        $('#auto-docked_engaged').val("0");
      }
      break;

    case "e-p":
      if ($('#end-park').val() == "0") {
        $('#end-park').val("1");
      } else {
        $('#end-park').val("0");
      }
      break;

    case "e-d":
      if ($('#end-docked').val() == "0") {
        $('#end-docked').val("1");
      } else {
        $('#end-docked').val("0");
      }
      break;

    case "e-de":
      if ($('#end-docked_engaged').val() == "0") {
        $('#end-docked_engaged').val("1");
      } else {
        $('#end-docked_engaged').val("0");
      }
      break;
  }



}
