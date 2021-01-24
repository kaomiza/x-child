// speech recognition
var lang = window.navigator.languages ? window.navigator.languages[0] : null;
lang =
  lang ||
  window.navigator.language ||
  window.navigator.browserLanguage ||
  window.navigator.userLanguage;
if (lang.indexOf("-") !== -1) lang = lang.split("-")[0];
if (lang.indexOf("_") !== -1) lang = lang.split("_")[0];

var say = "ยินดีต้อนรับสู่ฟังก์ชันนิทานเพื่อผู้พิการทางสายตา";
var say2 = "กดปุ่ม spec bar เพื่อเปิดใช้งาน microphone ค้นหานิทานด้วยการพูด";
var confirm = "กดซ้ายยกเลิก กดขวายืนยัน";
var voice = "Thai Female";
var path = window.location.origin;
// upserver
// var path = window.location.origin + '/x-child';
var recognizing = false;
var letStart = false;
var confirm_b = false;
var selectMenu = false;
var search = false;
var listening = false;
var list_focus = -1;
var select_focus = -1;
var num_list = 0;
var list_tale_data = [];
var keyword = $("#keyword_search").val();
var page_Number = 1;
var munu_player = false;

var parameters = {
  onstart: voiceStartCallback,
  onend: voiceEndCallback,
};

var loading_audio = new Audio(path + "/assets/audio/Loading.wav");
var select_audio = new Audio(path + "/assets/audio/pop_drip.wav");
var confirm_audio = new Audio(path + "/assets/audio/Bing.wav");
var cancel_audio = new Audio(path + "/assets/audio/Home.wav");

onload();
function onload() {
  $.get(path + "/Tale/search").done(async (res) => {
    $("#pagination-container").pagination({
      dataSource: res.data,
      pageSize: 5,
      callback: function (data, pagination) {
        var html = simpleTemplating(data);
        $("#data-container").html(html);
      },
    });
  });
}

function simpleTemplating(data) {
  var html = "";
  $.each(data, function (index, item) {
    html =
      html +
      `
        <div class="form-inline p-3 l-` +
      index +
      ` list-tale " onclick="show_tale(` +
      item.doc_id +
      `)">
          <i class="fas fa-file-alt p-3" style="font-size:2vw;color:#2CAB00 ;"></i>
          <div class="ml-1">
            <p class="m-0"><strong class="lt-` +
      index +
      `">` +
      item.doc_name +
      `</strong></p>
            <p class="text-muted m-0"><small>ประเภทนิทาน : ` +
      item.td_name +
      `</small></p>
          </div>
        </div>
    `;
  });
  return html;
}

// start welcome
setTimeout(function () {
  responsiveVoice.speak(say, voice);
  setTimeout(function () {
    responsiveVoice.speak(say2, voice);
    letStart = true;
  }, 5000);
}, 1000);

try {
  var SpeechRecognition =
    window.SpeechRecognition || window.webkitSpeechRecognition;
  var recognition = new SpeechRecognition();
} catch (e) {
  $(".no-browser-support").show();
  $(".app").hide();
}

recognition.continuous = true;
recognition.lang = "th";
recognition.onresult = async function (event) {
  var current = event.resultIndex;
  var transcript = event.results[current][0].transcript;
  transcript = transcript.trim();
  var mobileRepeatBug =
    current == 1 && transcript == event.results[0][0].transcript;
  if (transcript.length != 0) {
    Speak("ต้องการค้นหา " + transcript + " " + confirm);
    recognition.stop();
    confirm_b = true;
    $("#keyword_search").val(transcript);
  }
};

recognition.onstart = function () {
  var audio = new Audio(path + "/assets/audio/start.mp3");
  audio.play();
  recognizing = true;
  // instructions.text(
  //   "Voice recognition activated. Try speaking into the microphone."
  // );
};

recognition.onspeechend = function () {
  var audio = new Audio(path + "/assets/audio/end.mp3");
  audio.play();
  recognition.stop();
  recognizing = false;
  $("#record-btn").html('<i class="fas fa-microphone"></i> กดพูด');
  // instructions.text(
  //   "You were quiet for a while so voice recognition turned itself off."
  // );
};

recognition.onerror = function (event) {
  if (event.error == "no-speech") {
    var audio = new Audio(path + "/assets/audio/end.mp3");
    audio.play();
    Speak("ตรวจไม่พบเสียงพูด โปรดลองอีกครั้ง");
    $("#record-btn").html('<i class="fas fa-microphone"></i> กดพูด');
    recognition.stop();
    recognizing = false;
    // instructions.text("No speech was detected. Try again.");
  }
};

navigator.mediaDevices
  .getUserMedia({ audio: true })
  .then((stream) => {})
  .catch((err) => {
    if (err.includes("NotFoundError: Requested device not found"))
      alert("Mic not detected");
    else alert("Error recording audio");
  });

$(document).keyup(function (event) {
  if ([32, 37, 38, 39, 40].indexOf(event.keyCode) > -1) {
    event.preventDefault();
  }
  var hasFocus = $("input").is(":focus");
  if (
    event.which == 32 &&
    letStart &&
    search == false &&
    confirm_b == false &&
    hasFocus == false
  ) {
    onStart_Record();
  }
  if (event.which == 37 && confirm_b) {
    left();
  }
  if (event.which == 38 && selectMenu) {
    up();
  }
  if (event.which == 39 && confirm_b) {
    right();
  }
  if (event.which == 40 && selectMenu) {
    down();
  }
  // 1
  if ((event.which == 97 || event.which == 49) && munu_player == true) {
    play();
  }
  // 2
  if ((event.which == 98 || event.which == 50) && munu_player == true) {
    stop();
  }
  //3
  if ((event.which == 99 || event.which == 51) && munu_player == true) {
    closeModal();
  }
});

$(document).keydown(function (event) {
  if ([32, 37, 38, 39, 40].indexOf(event.keyCode) > -1) {
    event.preventDefault();
  }
});

function voiceStartCallback() {}

function voiceEndCallback() {
  selectMenu = true;
  confirm_b = true;
  Speak("ฟังซ้ำกด 1 ค้นหาใหม่กดซ้าย กด 2 เพื่อเลือกรายการค้นหา");
}

function reset_data() {
  recognizing = false;
  confirm_b = false;
  selectMenu = false;
  search = false;
  listening = false;
  list_focus = -1;
  select_focus = -1;
  num_list = 0;
  list_tale_data = [];
  page_Number = 1;
  munu_player = false;
  $("#keyword_search").val("");
  onload();
}

function readTextFile(file) {
  console.log(file);
  var rawFile = new XMLHttpRequest();
  rawFile.open("GET", file, false);
  rawFile.onreadystatechange = function () {
    if (rawFile.readyState === 4) {
      if (rawFile.status === 200 || rawFile.status == 0) {
        $("#tale-detail").html(rawFile.responseText);
      }
    }
  };
  rawFile.send(null);
}

async function Speak(word) {
  await responsiveVoice.speak(word, voice);
}

function show_tale(doc_id) {
  $.get(path + "/Tale/getById/" + doc_id).done((res) => {
    $("#detailModalLabel").html(res.data.doc_name);
    readTextFile(path + "/" + res.data.doc_path);
    $("#detailModal").modal("show");
  });
}

function btn_search() {
  var keyword = $("#keyword_search").val();
  if (keyword == "") {
    Speak("โปรดระบุคำค้นหาในการค้นหา");
  } else {
    Search(keyword);
  }
}

async function Search(word) {
  loading_audio.loop = true;
  loading_audio.play();
  search = true;
  $.get(path + "/Tale/search").done(async (res) => {
    setTimeout(function () {
      loading_audio.pause();
      loading_audio.currentTime = 0;
    }, 1000);
    var list_data = [];
    res.data.forEach((element) => {
      var similarity = stringSimilarity.compareTwoStrings(
        word,
        element.doc_name
      );
      if (similarity > 0) {
        console.log(similarity);
        list_data.push(element);
        num_list = num_list + 1;
      }
    });

    $("#pagination-container").pagination({
      dataSource: list_data,
      pageSize: 5,
      callback: function (data, pagination) {
        var html = simpleTemplating(data);
        $("#data-container").html(html);
      },
    });

    if (num_list != 0) {
      selectMenu = true;
      Speak(
        "ผลลัพท์การค้นหา " +
          num_list +
          " รายการ กดขึ้นลงเพื่อเลือก กดขวาเพื่อค้นหาใหม่ กดซ้ายเพื่อฟัง"
      );
      listening = true;
    } else {
      Speak("ไม่พบผลลัพท์ของการค้นหา ลองค้นหาใหม่อีกครั้ง");
      $("#data-container").append(`
        <div class="form-inline p-3 l-0 list-tale " onclick="show_tale(18)">
          <div class="text-center"><strong>Not Found</strong></div>
        </div>
      `);
      reset_data();
    }
  });
}

function play() {
  responsiveVoice.speak($("#tale-detail").text(), voice, parameters);
}

function stop() {
  responsiveVoice.cancel();
}

function closeModal() {
  selectMenu = true;
  confirm_b = true;
  munu_player = false;
  $("#detailModal").modal("hide");
  responsiveVoice.cancel();
}

function left() {
  cancel_audio.play();
  if (confirm_b == true && search == false) {
    reset_data();
    Speak("ยกเลิกการค้นหา เปิดใช้งาน microphone เพื่อค้นหาอีกครั้ง");
  }
  if (confirm_b == true && search == true) {
    reset_data();
    Speak("เปิดใช้งาน microphone เพื่อค้นหาใหม่อีกครั้ง");
  }
}

function right() {
  confirm_audio.play();
  if (confirm_b == true && search == false) {
    var keyword = $("#keyword_search").val();
    if (keyword == "") {
      Speak("โปรดระบุคำค้นหาในการค้นหา");
    } else {
      Search(keyword);
    }
  }
  if (confirm_b == true && search == true) {
    if (list_focus != -1) {
      selectMenu = false;
      confirm_b = false;
      munu_player = true;
      $(".list-tale.active").click();
      Speak("กด 1 เพื่อเล่นนิทาน กด 2 เพื่อหยุดนิทาน กด 3 เพื่อเลือกนิทานใหม่");
    }
  }
}

function up() {
  var container = $("#pagination-container");
  $(".l-" + select_focus).removeClass("active");
  if (list_focus > 0) {
    list_focus = list_focus - 1;
    select_focus = select_focus - 1;
    select_audio.play();
  } else {
    select_audio.play();
    page_Number = Math.ceil(num_list / 5);
    list_focus = num_list - 1;
    container.pagination(page_Number);
    select_focus = $("#data-container").children().length - 1;
  }

  if (list_focus % 5 == 4) {
    page_Number = page_Number - 1;
    container.pagination(page_Number);
    if (select_focus == -1) {
      select_focus = $("#data-container").children().length - 1;
    }
  }
  console.log(select_focus);
  $(".l-" + select_focus).addClass("active");
  Speak($(".lt-" + select_focus).text());
}

function down() {
  var container = $("#pagination-container");
  $(".l-" + select_focus).removeClass("active");
  if (list_focus < num_list - 1) {
    list_focus = list_focus + 1;
    select_focus = select_focus + 1;
    select_audio.play();
  } else {
    page_Number = 1;
    list_focus = 0;
    select_focus = 0;
    container.pagination(page_Number);
    select_audio.play();
  }

  if (list_focus != 0) {
    if (list_focus % 5 == 0) {
      select_focus = 0;
      page_Number = page_Number + 1;
      container.pagination(page_Number);
    }
  }
  console.log(select_focus);
  $(".l-" + select_focus).addClass("active");
  Speak($(".lt-" + select_focus).text());
}

function OnStop_Record() {
  $("#record-btn").html('<i class="fas fa-microphone"></i> กดพูด');
  Speak("ปิดใช้งาน microphone");
  var audio = new Audio(path + "/assets/audio/end.mp3");
  audio.play();
  recognition.stop();
  recognizing = false;
}

function onStart_Record() {
  if (recognizing) {
    OnStop_Record();
  } else {
    $("#record-btn").html(
      '<i class="fas fa-assistive-listening-systems"></i> กำลังฟัง'
    );
    Speak("เปิดใช้งาน microphone");
    recognition.start();
  }
}
