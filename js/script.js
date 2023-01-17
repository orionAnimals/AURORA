let header = document.querySelector("header");

// after click btn show .search block

let open_search_btn = document.querySelector('#Search__open-pc');
let block_open_search = document.querySelector(".search__pc-block");

open_search_btn.addEventListener("click", activate_BOS);
function activate_BOS() {
	document.querySelector(".search__pc-block").style.left = "0px";
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
  document.querySelector(".search__pc-block").style.left = "-600px";
	header.classList.remove("width_for_search");
	document.querySelector('.header__wrapper_content').style.display = 'flex';
}


// ========== CUSTOM AUDIO PLAYER ==========



let audioPlayers = document.querySelectorAll(".audioplayer");

if (audioPlayers.length) {
  audioPlayers.forEach(function(audioPlayer, i) {

    let audio = audioPlayer.querySelector(".audio");
    let playerButton = audioPlayer.querySelector(".play");

    var curtimetext = audioPlayer.querySelector('.current_timer_song_card');
    var durtimetext = audioPlayer.querySelector('.timer_song_card');

    // load page > end time shows for audio
    audio.addEventListener("loadedmetadata",
    function(e) {
      var nt = audio.currentTime * (100 / audio.duration);
      timeline.value = nt;
      // duration of current audio
      var durmins = Math.floor(audio.duration / 60);
      var dursecs = Math.floor(audio.duration - durmins * 60);
      if(dursecs < 10){ dursecs = "0"+dursecs; };
      if(durmins < 10){ durmins = "0"+durmins; };
      durtimetext.innerHTML = durmins+":"+dursecs;
    });
    // current time of current audio
    window.addEventListener("scroll", 
      function(e) {
        var nt = audio.currentTime * (100 / audio.duration);
        timeline.value = nt;
        var curmins = Math.floor(audio.currentTime / 60);
        var cursecs = Math.floor(audio.currentTime - curmins * 60);
        if(cursecs < 10){ cursecs = "0"+cursecs; };
        if(curmins < 10){ curmins = "0"+curmins; };
        curtimetext.innerHTML = curmins+":"+cursecs;
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
    playerButton.addEventListener("click",
    function(e) {
      let current = e.currentTarget;
      var audio = current.closest(".audioplayer").querySelector(".audio");
      let btnSvg = current.querySelector(".PlayPause_ico");
      let new_status = current.closest(".audioplayer").querySelector(".new_status");
      let if_audio_is_playing = current.closest(".audioplayer").querySelector(".if_audio_is_playing");
      let play_pause_fixed = document.querySelector(".Play_pause_fixed_btns");
      let PPF_Ico = document.querySelector(".PPF_Ico");
      


      
  // play pause with spacebar or arrows to move timeline
    window.addEventListener('keydown', function (event) {
      var key = event.which || event.keyCode
      if (key === 32) { // space
        event.preventDefault();
        audio.paused ? audio.play() : audio.pause()
      } else if (key == 37) { // left arrow
        event.preventDefault();
        audio.currentTime = audio.currentTime - 10;
      } else if (key == 39) { // right arrow
        event.preventDefault();
        audio.currentTime = audio.currentTime + 10;
      }
    });




      // Play pause fixed button home page
      play_pause_fixed.onclick = function() {
        if (!audio.paused) {
          PPF_Ico.classList.remove("fa-pause");
          PPF_Ico.classList.add("fa-play");
          btnSvg.classList.remove("fa-pause");
          btnSvg.classList.add("fa-play");
          if_audio_is_playing.classList.remove("active");
          new_status.classList.remove("active");
          audio.pause();
        } else {
          PPF_Ico.classList.remove("fa-play");
          PPF_Ico.classList.add("fa-pause");
          btnSvg.classList.remove("fa-play");
          btnSvg.classList.add("fa-pause");
          if_audio_is_playing.classList.add("active");
          new_status.classList.add("active");
          audio.play();
        }
    }
      audio.onended = function(e) {
        timeline.value = 0;
        ProgressTimeline.style.width = "0px";
        curtimetext.innerHTML = "00:00";
        btnSvg.classList.remove("fa-pause");
        btnSvg.classList.add("fa-play");
        if_audio_is_playing.classList.remove("active");
        new_status.classList.remove("active");
      }
      if (!audio.paused) {
        audio.pause();
        btnSvg.classList.remove("fa-pause");
        btnSvg.classList.add("fa-play");
        if_audio_is_playing.classList.remove("active");
        new_status.classList.remove("active");
        // fixed play pause change ico when this audio playing or stop
        PPF_Ico.classList.remove("fa-pause");
        PPF_Ico.classList.add("fa-play");
      } else {
        btnSvg.classList.remove("fa-play");
        btnSvg.classList.add("fa-pause");
        audio.play();
        if_audio_is_playing.classList.add("active");
        new_status.classList.add("active");
        // fixed play pause change ico when this audio playing or stop
        PPF_Ico.classList.remove("fa-play");
        PPF_Ico.classList.add("fa-pause");
      }




      audio.addEventListener("play",
       function(e){ 
          var audios = document.getElementsByTagName('audio');
          for(i=0; i < audios.length; i++) {
            audio_s = audios[i];
            if (audio_s !== event.target) {
              audio_s.pause();
            } else {
              audio_s.play();
            }
          }
      }, true);
      // end
    });




    // fixed volume controls 
    var sliderVolume = document.querySelector(".Volume");
    var volumeValue = document.querySelector(".volume_progress_bar");

    sliderVolume.addEventListener("input",
    function(e) {
      audio.volume = sliderVolume.value / 100;
      sliderVolume.min = 0;
      sliderVolume.max = 100;
      volumeValue.style.width = audio.volume * 100 + "%";
    });
    // mute sound
    let mute_btn = document.querySelector(".mute_sound_home");
    let mute_ico_change = document.querySelector(".mute_ico_change");

    mute_btn.addEventListener("click",
      function() {
        if (!audio.muted) {
          audio.muted = true;
          mute_ico_change.classList.remove("fa-volume-high");
          mute_ico_change.classList.add("fa-volume-xmark");
        } else {
          audio.muted = false;
          mute_ico_change.classList.add("fa-volume-high");
          mute_ico_change.classList.remove("fa-volume-xmark");
        }
      }
    )

    
    // change timeline seek
    var timeline = audioPlayer.querySelector(".timeline_card");
    timeline.addEventListener("input",
      function(e) {
        var time = (timeline.value * audio.duration) / 100;
        audio.currentTime = time;
      }
    )
    // Progress bar for input type range cards
    var ProgressTimeline = audioPlayer.querySelector('.timeline_bar_progress');
    audio.addEventListener("timeupdate",
      function(e) {
        ProgressTimeline.style.width = audio.currentTime * (100 / audio.duration) + "%";
      }
    )
  });
}


// custom input type range







