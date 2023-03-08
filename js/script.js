let header = document.querySelector("header");

// after click btn show .search block

let open_search_btn = document.querySelector('#Search__open-pc');
let block_open_search = document.querySelector(".search__pc-block");
// close search
let close__search_fun_by_main = document.querySelector('main');
let close_btn = document.querySelector('#btn_close');
open_search_btn.addEventListener("click", activate_BOS);
function activate_BOS() {
  document.querySelector(".search__pc-block").style.left = "0px";
}
close_btn.addEventListener("click", close__search_fun);
// close search by main
close__search_fun_by_main.addEventListener("click", close__search_fun);
// close search by main function
function close__search_fun() {
  document.querySelector(".search__pc-block").style.left = "-600px";
}


// ========== CUSTOM AUDIO PLAYER ==========



let audioPlayers = document.querySelectorAll(".audioplayer");

if (audioPlayers.length) {
  audioPlayers.forEach(function(audioPlayer, i) {

    let audio = audioPlayer.querySelector(".audio");
    let playerButton = audioPlayer.querySelector(".play");

    
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
      window.addEventListener('keydown',
       function (event) {
        var key = event.which || event.keyCode;
        if (key == 32) { // space
          event.preventDefault();
          if (!audio.paused) {
            audio.pause();
          } else {
            audio.play();
          } 
        } else if (key == 37) { // left arrow
          event.preventDefault();
          audio.currentTime = audio.currentTime - 5;
        } else if (key == 39) { // right arrow
          event.preventDefault();
          audio.currentTime = audio.currentTime + 5;
        }
        
       }
      );

      // Play pause fixed button home page
      play_pause_fixed.onclick = function() {
        if (!audio.paused) {
          audio.pause();
        } else {
          audio.play();
        }
      }

      audio.onended = function(e) {
        timeline.value = 0;
        progressTimeline.style.width = "0px";
        curtimetext.innerHTML = "00:00";
        btnSvg.classList.remove("fa-pause");
        btnSvg.classList.add("fa-play");
        if_audio_is_playing.classList.remove("active");
        new_status.classList.remove("active");
      }
      audio.onpause = function(e) {
        PPF_Ico.classList.remove("fa-pause");
        PPF_Ico.classList.add("fa-play");
        btnSvg.classList.remove("fa-pause");
        btnSvg.classList.add("fa-play");
        if_audio_is_playing.classList.remove("active");
        new_status.classList.remove("active");
        audio.pause();
      }
      audio.onplay = function(e) {
        PPF_Ico.classList.remove("fa-play");
        PPF_Ico.classList.add("fa-pause");
        btnSvg.classList.remove("fa-play");
        btnSvg.classList.add("fa-pause");
        if_audio_is_playing.classList.add("active");
        new_status.classList.add("active");
        audio.play();
      }

      if (!audio.paused) {
        audio.pause();
        btnSvg.classList.remove("fa-pause");
        btnSvg.classList.add("fa-play");
        if_audio_is_playing.classList.remove("active");
        new_status.classList.remove("active");
        // fixed play pause change ico when this audio playing or stop
        // PPF_Ico.classList.remove("fa-pause");
        // PPF_Ico.classList.add("fa-play");
      } else {
        btnSvg.classList.remove("fa-play");
        btnSvg.classList.add("fa-pause");
        audio.play();
        if_audio_is_playing.classList.add("active");
        new_status.classList.add("active");
        // fixed play pause change ico when this audio playing or stop
        // PPF_Ico.classList.remove("fa-play");
        // PPF_Ico.classList.add("fa-pause");
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




    // audio volume controls 
    var sliderVolume = document.querySelector(".Volume");
    var volumeValue = document.querySelector(".volume_progress_bar");
    let mute_btn = document.querySelector(".mute_sound_home");
    let mute_ico_change = document.querySelector(".mute_ico_change");

    sliderVolume.addEventListener("input",
    function(e) {
      audio.volume = sliderVolume.value / 100;
      volumeValue.style.width = sliderVolume.value + "%";
      if (sliderVolume.value == 0) {
        mute_ico_change.classList.remove("fa-volume-high");
        mute_ico_change.classList.add("fa-volume-xmark");
      } else {
        mute_ico_change.classList.add("fa-volume-high");
        mute_ico_change.classList.remove("fa-volume-xmark");
      }
    });
    // mute sound
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

    // timeline for all audio
    var curtimetext = audioPlayer.querySelector('.current_timer_song_card');
    var durtimetext = audioPlayer.querySelector('.timer_song_card');

    // load page's audio > end time shows for audio
    
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
    // change timeline seek
    var timeline = audioPlayer.querySelector(".timeline_card");
    timeline.addEventListener("input",
      function(e) {
        var time = (timeline.value * audio.duration) / 100;
        audio.currentTime = time;
      }
    )
    // Progress bar for input type range cards
    var progressTimeline = audioPlayer.querySelector('.timeline_bar_progress');
    audio.addEventListener("timeupdate",
      function(e) {
        progressTimeline.style.width = audio.currentTime * (100 / audio.duration) + "%";
      }
    )
  });
}


// custom video player


let videoPlayers = document.querySelectorAll(".video_main");

if (videoPlayers.length) {
  videoPlayers.forEach(function(videoPlayer, i) {
    let video = videoPlayer.querySelector(".video");
    let playButton = videoPlayer.querySelector(".play_pause_btn_vid");
    let icoPPV = videoPlayer.querySelector(".PlayPause_ico_VID");

    playButton.addEventListener("click",
    function PPV(e) {
      if (!video.paused) {
        video.pause();
        icoPPV.classList.remove("fa-pause");
        icoPPV.classList.add("fa-play");
      } else {
        video.play();
        icoPPV.classList.remove("fa-play");
        icoPPV.classList.add("fa-pause");
      }
    });

    video.onplay = function(e){
        video.play();
        icoPPV.classList.remove("fa-play");
        icoPPV.classList.add("fa-pause");
    }
    video.onpause = function(e) {
        video.pause();
        icoPPV.classList.remove("fa-pause");
        icoPPV.classList.add("fa-play");
    }

    // timeline for video
    var curtimetext = videoPlayer.querySelector('.Current_time_vid');
    var durtimetext = videoPlayer.querySelector('.End_time_vid');
    var timeline = videoPlayer.querySelector(".timeline_vid");

    // load video > end time shows for video
    video.addEventListener("loadedmetadata",
    function(e) {
      var nt = video.currentTime * (100 / video.duration);
      timeline.value = nt;
      // duration of current video
      var durmins = Math.floor(video.duration / 60);
      var dursecs = Math.floor(video.duration - durmins * 60);
      if(dursecs < 10){ dursecs = "0"+dursecs; };
      if(durmins < 10){ durmins = "0"+durmins; };
      durtimetext.innerHTML = durmins+":"+dursecs;
    });
    
    // current time of current video
    video.addEventListener("timeupdate", 
      function(e) {
        let nt = video.currentTime * (100 / video.duration);
        timeline.value = nt;
        let curmins = Math.floor(video.currentTime / 60);
        let cursecs = Math.floor(video.currentTime - curmins * 60);
        if(cursecs < 10){ cursecs = "0"+cursecs; };
        if(curmins < 10){ curmins = "0"+curmins; };
        curtimetext.innerHTML = curmins+":"+cursecs;
    });


    // change timeline seek
    timeline.addEventListener("input",
      function(e) {
        var time = (timeline.value * video.duration) / 100;
        video.currentTime = time;
      }
    )

    // Progress bar for timeline video
    var progressTimeline = videoPlayer.querySelector('.timeline_vid_bar_progress');
    video.addEventListener("timeupdate",
      function(e) {
        progressTimeline.style.width = video.currentTime * (100 / video.duration) + "%";
      }
    )


  // full screen or exit full screen
  let fullScBtn = document.querySelector(".Full_screen_vid");
  let videoWrapp = document.querySelector(".videoplayer");
  let ico_FCV = document.querySelector(".icon_full_crop");

  fullScBtn.addEventListener("click",
    function(e) {
      if (!document.fullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement) {
        if (videoWrapp.requestFullscreen) {
        videoWrapp.requestFullscreen();
        } else if (videoWrapp.webkitRequestFullscreen) { /* Safari */
          videoWrapp.webkitRequestFullscreen();
        } else if (videoWrapp.msRequestFullscreen) { /* IE11 */
          videoWrapp.msRequestFullscreen();
        }
      } else {
          if(document.exitFullscreen) {
          document.exitFullscreen();
        } else if (document.mozCancelFullScreen) {
          document.mozCancelFullScreen();
        } else if (document.webkitExitFullscreen) {
          document.webkitExitFullscreen();
        }
      }
    }
  )
  var evenListBtnScreenChange = ["webkitfullscreenchange", "fullscreenchange", "mozfullscreenchange", "msfullscreenchange"];
  // Exit full screen or expand => change icons
  for (event of evenListBtnScreenChange) {
    document.addEventListener(event, function(e) {
      if (document.webkitFullscreenElement){
          ico_FCV.classList.remove("fa-expand");
          ico_FCV.classList.add("fa-compress");
      } else {
          ico_FCV.classList.add("fa-expand");
          ico_FCV.classList.remove("fa-compress");
      }
    });
  }

  videoWrapp.addEventListener("dblclick",
    function(e) {
      if (!document.fullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement) {
        if (videoWrapp.requestFullscreen) {
        videoWrapp.requestFullscreen();
        } else if (videoWrapp.webkitRequestFullscreen) { /* Safari */
          videoWrapp.webkitRequestFullscreen();
        } else if (videoWrapp.msRequestFullscreen) { /* IE11 */
          videoWrapp.msRequestFullscreen();
        }
      } else {
          if(document.exitFullscreen) {
          document.exitFullscreen();
        } else if (document.mozCancelFullScreen) {
          document.mozCancelFullScreen();
        } else if (document.webkitExitFullscreen) {
          document.webkitExitFullscreen();
        }
      }
    }
  )


  let videoMain = document.querySelector(".video_main");
  let video_Controls = document.querySelector(".wrapper_player_vid");
  
  videoMain.addEventListener("mousemove",
  function (e) {
    video_Controls.classList.toggle("active");
  });

  videoMain.addEventListener("mouseout",
    function (e){
      video_Controls.classList.remove("active");
    }
  )

    
  // play pause with spacebar or arrows to move timeline
  window.addEventListener('keydown', 
    function (event) {
      var key = event.which || event.keyCode;
      if (key === 32) { // space
        event.preventDefault();
        video.paused ? video.play() : video.pause();
      } else if (key === 37) { // left arrow
        event.preventDefault();
        video.currentTime = video.currentTime - 5;
      } else if (key === 39) { // right arrow
        event.preventDefault();
        video.currentTime = video.currentTime + 5;
      } else if (key === 70) {// F Full screen or compress
        event.preventDefault();
        if (!document.fullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement) {
          if (videoWrapp.requestFullscreen) {
          videoWrapp.requestFullscreen();
          } else if (videoWrapp.webkitRequestFullscreen) { /* Safari */
            videoWrapp.webkitRequestFullscreen();
          } else if (videoWrapp.msRequestFullscreen) { /* IE11 */
            videoWrapp.msRequestFullscreen();
          }
        } else {
            if(document.exitFullscreen) {
            document.exitFullscreen();
          } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
          } else if (document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
          }
        }
      }
  });

  });
}