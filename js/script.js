let header = document.querySelector("header");

// after click btn show .search block

let open_search_btn = document.querySelector('#Search__open-pc');
let block_open_search = document.querySelector(".search__pc-block");

open_search_btn.addEventListener("click", activate_BOS);
function activate_BOS() {
	block_open_search.classList.toggle("active");
	header.classList.toggle("width_for_search");
}

// after change .search block to active > hide header-wrapper

document.querySelector('#Search__open-pc').onclick = function(){
	document.querySelector('.header__wrapper_content').style.display = 'none';
};

// close btn search
let close_btn = document.querySelector('#btn_close');

close_btn.addEventListener("click", close__search_fun);
// close search by main
let close__search_fun_by_main = document.querySelector('main');

close__search_fun_by_main.addEventListener("click", close__search_fun);
// close search by main function
function close__search_fun() {
	block_open_search.classList.remove("active");
	header.classList.remove("width_for_search");
	document.querySelector('.header__wrapper_content').style.display = 'flex';
}


// ========== CUSTOM AUDIO PLAYER ==========
let audioPlayers = document.querySelectorAll(".audioplayer");

if (audioPlayers.length) {
  audioPlayers.forEach(function(audioPlayer, i) {

    let audio = audioPlayer.querySelector(".audio");
    let playerButton = audioPlayer.querySelector(".play");

    // playing function play pause icon change, end audio etc...
    playerButton.addEventListener("click",
    function(e) {
      let current = e.currentTarget;
      let audio = current.closest(".audioplayer").querySelector(".audio");
      let btnSvg = current.querySelector(".PlayPause_ico");
      if (!audio.paused) {
        btnSvg.classList.remove("fa-pause");
        btnSvg.classList.add("fa-play");
        audio.pause();
      } else {
        btnSvg.classList.remove("fa-play");
        btnSvg.classList.add("fa-pause");
        audio.play();
      }
      audio.addEventListener('ended', 
      function(e) {
        timeline.value = 0;
        btnSvg.classList.remove("fa-pause");
        btnSvg.classList.add("fa-play");
      });

    });

    // change timeline seek
    let timeline = audioPlayer.querySelector('.timeline');

    timeline.addEventListener('change', function(e) {
      let time = (timeline.value * audio.duration) / 100;
      audio.currentTime = time;
    });


    let curtimetext = audioPlayer.querySelector('.current_timer_song_card');
    let durtimetext = audioPlayer.querySelector('.timer_song_card');

    // loading page > end time shows for audio
    window.addEventListener("load" ,
    function(e) {
      let nt = audio.currentTime * (100 / audio.duration);
      timeline.value = nt;
      // duration of current audio
      let durmins = Math.floor(audio.duration / 60);
      let dursecs = Math.floor(audio.duration - durmins * 60);
      if(dursecs < 10){ dursecs = "0"+dursecs; };
      if(durmins < 10){ durmins = "0"+durmins; };
      durtimetext.innerHTML = durmins+":"+dursecs;
    });

    // current time of current audio
    audio.addEventListener("timeupdate", 
      function(e) {
        let nt = audio.currentTime * (100 / audio.duration);
        timeline.value = nt;
        let curmins = Math.floor(audio.currentTime / 60);
        let cursecs = Math.floor(audio.currentTime - curmins * 60);
        if(cursecs < 10){ cursecs = "0"+cursecs; };
        if(curmins < 10){ curmins = "0"+curmins; };
        curtimetext.innerHTML = curmins+":"+cursecs;
    });

  });

}