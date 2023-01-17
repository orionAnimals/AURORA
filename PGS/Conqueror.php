<!DOCTYPE html>
<html lang="en">
<!-- head php -->
<head>
    <title>Conqueror watch online</title>
    <?php
        include 'head.php';
    ?>
</head>
<body>
    <!-- header php -->

    <?php
        include 'header.php';
    ?>
    <!-- ----------------------------- MAIN ----------------------------- -->
    <div class="Wrapper_page">
        <main>
           <div class="wrapper_for_Information_pre_video">
            <!-- Name of the current song -->
               <span class="name_of_the_song">AURORA - Conqueror</span>
            <!-- likes and dislikes -->
               <div class="wrapper_for_likes_dislikes">
                   <button class="likes"><i class="fa-solid fa-heart"></i> 3M</button>
                   <button class="dislikes"><i class="fa-solid fa-heart-crack"></i> 83</button>
               </div>
            <!-- More btn ... -->
                <button class="more_btn_dots_circle"><i class="fa-solid fa-ellipsis-vertical"></i></button>
           </div>
           <!-- video block -->
           <div class="video_main">
               <video src="/video/Conqueror.mp4#t=0.5" preload="metadata"></video>
               <!-- Video player main wrapp -->
               <div class="wrapper_player_vid">
                  <!-- Name, date.... -->
                  <div class="wrapp_name_date_etc">
                     <span class="date_vid"><i class="fa-solid fa-clock"></i> 22.03.2022</span>
                     <span class="vievs_vid"><i class="fa-solid fa-eye"></i> 3.8M</span>
                  </div>
                  <!-- main controls -->
                  <div class="wrapp_controls_vid">
                     <!-- Timeline controls -->
                     <div class="wrapp_timeline_main_vid">
                        <span class="Current_time_vid">00:00</span>
                        <div class="wrapp_timeline_vid">
                           <input type="range" class="timeline_vid" max="100" step="0.01" value="0">
                           <div class="timeline_vid_bar_progress"></div>
                           <div class="timeline_vid_bg"></div>
                        </div>
                        <span class="End_time_vid">05:34</span>
                     </div>
                  <!-- Some buttons for video player -->
                     <div class="wrapp_some_buttons_vid">
                        <div class="wrp_left_btns_vid">
                           <button class="Back_timeline_btn_vid" data-title="-10 sec."><i class="fa-solid fa-arrow-rotate-left"></i></button>
                           <button class="Play-pause_timeline_btn_vid"><i class="PlayPause_ico fa-solid fa-play"></i></button>
                           <button class="Ahead_timeline_btn_vid" data-title="+10 sec."><i class="fa-solid fa-arrow-rotate-right"></i></button>
                        </div>
                        <!-- Sound controls  -->
                        <div class="sound_control_wrapp_vid"></div>
                        <div class="wrp_right_btns_vid"> 
                           <button class="Quality_vid"><i class="fa-solid fa-gears"></i></button>
                           <button class="Full_screen_vid"><i class="fa-solid fa-expand"></i></button>
                        </div>
                     </div>
                  </div>
                  <!-- Timeline etc -->
                  
               </div>
           </div>
            <div class="comments_title">
            <!-- title previous comments -->
                <div class="title_pre__cards">
                    <span>Comments</span>
                </div>
                <!-- comments -->
                <div class="wrapp_for_comment">
                   <span class="img_user">
                      <img src="/img/user.jpg" alt="">
                   </span>
                   <div class="wrapp_name__comment_text">
                      <span class="name_user">
                         Thunder
                      </span>
                      <span class="comment_text">
                         I like this song so much! Thanks for your existing!!!🥰❤️
                      </span>
                   </div>

                   <!-- Likes and dislikes for comment -->
                   <div class="wrapp_likes_and_dislikes_com">
                        <button class="likes gr"><i class="fa-solid fa-heart"></i> 2K</button>
                        <button class="dislikes"><i class="fa-solid fa-heart-crack"></i> 3</button>
                   </div>
                   <button class="more_btn_dots_circle"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                </div>

                <div class="wrapp_for_comment">
                   <span class="img_user">
                      <img src="/img/products_img/Conqueror.jpg" alt="">
                   </span>
                   <div class="wrapp_name__comment_text">
                      <span class="name_user">
                         AURORA
                      </span>
                      <span class="comment_text">
                         Thank you all for such a nice comments!🥹
                      </span>
                   </div>

                   <!-- Likes and dislikes for comment -->
                   <div class="wrapp_likes_and_dislikes_com">
                        <button class="likes"><i class="fa-solid fa-heart"></i> 6.1K</button>
                        <button class="dislikes"><i class="fa-solid fa-heart-crack"></i> 12</button>
                   </div>
                   <button class="more_btn_dots_circle"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                </div>

                <div class="wrapp_for_comment">
                   <span class="img_user">
                      <img src="/img/AURORA.ico" alt="">
                   </span>
                   <div class="wrapp_name__comment_text">
                      <span class="name_user">
                         Aurora's fun club
                      </span>
                      <span class="comment_text">
                         OMG I think that it's the best song I've ever listen to.
                      </span>
                   </div>

                   <!-- Likes and dislikes for comment -->
                   <div class="wrapp_likes_and_dislikes_com">
                        <button class="likes"><i class="fa-solid fa-heart"></i> 22</button>
                        <button class="dislikes"><i class="fa-solid fa-heart-crack"></i> 1</button>
                   </div>
                   <button class="more_btn_dots_circle"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                </div>
            </div>
        </main>
        <aside draggable="true" class="aside_rec_wrapp">
            <div class="sort_rec">
                Sort by...
            </div>
           <div class="Recomendation_scroll_block">
                <div class="rec_card">
                     <!-- wrapp for img and time -->
                     <div class="wrp_img_time_rec">
                        <img src="/img/products_img/Conqueror.jpg" alt="Img previev">
                        <span class="end_time_rec">03:32</span>
                     </div>
                     <!-- wrapp for name and btns -->
                     <div class="wrp_nm_btn_rec">
                        <span class="name_of_the_song_recomend">AURORA - Conqueror.</span>
                        
                        <div class="wrapper_for_date_vievs_rec">
                           <span class="date_published"><i class="fa-solid fa-clock"></i> 20.03.2021</span>
                           <span class="vievs_num"><i class="fa-solid fa-eye"></i> 3.3M</span>
                        </div>
                     </div>
                  </div>
                  <div class="rec_card">
                     <div class="wrp_img_time_rec">
                        <img src="/img/products_img/All_is_soft_inside.jpg" alt="Img previev">
                        <span class="end_time_rec">03:43</span>
                     </div>
                     <div class="wrp_nm_btn_rec">
                        <span class="name_of_the_song_recomend">AURORA - All is soft inside.</span>
                        
                        <div class="wrapper_for_date_vievs_rec">
                           <span class="date_published"><i class="fa-solid fa-clock"></i> 10.08.2022</span>
                           <span class="vievs_num"><i class="fa-solid fa-eye"></i> 1.2M</span>
                        </div>
                     </div>
                  </div>
                <div class="rec_card">
                   
                </div>
                <div class="rec_card">
                   
                </div>
                <div class="rec_card">
                   
                </div>
                <div class="rec_card">
                   
                </div>
                <div class="rec_card">
                   
                </div>
                <div class="rec_card">
                   
                </div>
                <div class="rec_card">
                   
                </div>
                <div class="rec_card">
                   
                </div>
                <div class="rec_card">
                   
                </div>
                <div class="rec_card">
                   
                </div>
           </div>
       </aside>
    </div>
    <!-- ----- JAVASCRIPTS ----- -->

    <!--icons fontavesome.com-->
    <script src="https://kit.fontawesome.com/3b90393ff9.js" crossorigin="anonymous"></script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- js main -->
    <script type="text/javascript" src="/js/script.js"></script>
    <!-- glider js -->
    <script type="text/javascript" src="/js/glider.js"></script>


    <!-- scripts -->
    <script type="text/javascript">
    </script>
</body>
</html>