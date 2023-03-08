<aside class="aside_rec_wrapp">
  <div class="Recomendation_scroll_block">
       <div class="rec_card">
            <!-- wrapp for img and time -->
            <div class="wrp_img_time_rec">
               <img src="/img/products_img/Conqueror.jpg" alt="Img previev">
               <span class="end_time_rec timer_song_cardRec">00:00</span>
               <audio src="/audio/Conqueror.mp3" class="hidden_audio_rec">Something wrong with your browser...</audio>
            </div>
            <!-- wrapp for name and btns -->
            <div class="wrp_info_rec">
               <span class="name_of_the_song_recomend">AURORA - Conqueror.(Video)</span>
               <div class="wrapper_for_date_vievs_rec">
                  <span class="date_published"><i class="fa-solid fa-clock"></i> 20.03.2021</span>
                  <span class="vievs_num"><i class="fa-solid fa-eye"></i> 3.3M</span>
               </div>
            </div>
         </div>
         <div class="rec_card">
            <!-- wrapp for img and time -->
            <div class="wrp_img_time_rec">
               <img src="/img/products_img/Awakening.jpg" alt="Img previev">
               <span class="end_time_rec timer_song_cardRec">00:00</span>
               <audio src="/audio/Awakening.mp3" class="hidden_audio_rec">Something wrong with your browser...</audio>
            </div>
            <!-- wrapp for name and btns -->
            <div class="wrp_info_rec">
               <span class="name_of_the_song_recomend">AURORA - Awakening.(Audio)</span>
               <div class="wrapper_for_date_vievs_rec">
                  <span class="date_published"><i class="fa-solid fa-clock"></i> 20.03.2021</span>
                  <span class="vievs_num"><i class="fa-solid fa-eye"></i> 3.3M</span>
               </div>
            </div>
         </div>
         <div class="rec_card">
            <!-- wrapp for img and time -->
            <div class="wrp_img_time_rec">
               <img src="/img/products_img/Home.jpg" alt="Img previev">
               <span class="end_time_rec timer_song_cardRec">00:00</span>
               <audio src="/audio/Home.mp3" class="hidden_audio_rec">Something wrong with your browser...</audio>
            </div>
            <!-- wrapp for name and btns -->
            <div class="wrp_info_rec">
               <span class="name_of_the_song_recomend">AURORA - Home.(Audio)</span>
               <div class="wrapper_for_date_vievs_rec">
                  <span class="date_published"><i class="fa-solid fa-clock"></i> 20.03.2021</span>
                  <span class="vievs_num"><i class="fa-solid fa-eye"></i> 3.3M</span>
               </div>
            </div>
         </div>
         <div class="rec_card">
            <!-- wrapp for img and time -->
            <div class="wrp_img_time_rec">
               <img src="/img/products_img/Runaway.jpg" alt="Img previev">
               <span class="end_time_rec timer_song_cardRec">00:00</span>
               <audio src="/audio/Runaway.mp3" class="hidden_audio_rec">Something wrong with your browser...</audio>
            </div>
            <!-- wrapp for name and btns -->
            <div class="wrp_info_rec">
               <span class="name_of_the_song_recomend">AURORA - Runaway.(Video)</span>
               <div class="wrapper_for_date_vievs_rec">
                  <span class="date_published"><i class="fa-solid fa-clock"></i> 20.03.2021</span>
                  <span class="vievs_num"><i class="fa-solid fa-eye"></i> 3.3M</span>
               </div>
            </div>
         </div>
  </div>
</aside>
<script type="text/javascript">
   let recCards = document.querySelectorAll(".rec_card");

   if (recCards.length) {
      recCards.forEach(function(recCard, i, e) {

      var audioRec = recCard.querySelector(".hidden_audio_rec");
      var durtimetextRec = recCard.querySelector(".timer_song_cardRec");
      audioRec.addEventListener("loadedmetadata",
       function(e) {
         // duration of current audioRec
         var durmins = Math.floor(audioRec.duration / 60);
         var dursecs = Math.floor(audioRec.duration - durmins * 60);
         if(dursecs < 10){ dursecs = "0"+dursecs; };
         if(durmins < 10){ durmins = "0"+durmins; };
         durtimetextRec.innerHTML = durmins+":"+dursecs;
       });
      })
   }
</script>



                                                                  <!-- Aside recomendation -->