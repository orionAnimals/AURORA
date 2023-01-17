<!DOCTYPE html>
<html lang="en">
<!-- head php -->
<head>
    <title>AURORA Official website  | Listen online music AURORA</title>
    <?php
        require 'PGS/head.php' ;
    ?>
</head>
<body>
    <?php
        require 'PGS/header.php';
    ?>
   <div class="wrapp_fixed_controlsRBTMN">
        <div class="Sound_controlls_wrapp">
            <div class="Wrapper_volume_controll">
                <input type="range" class="Volume" value="30" min="0" max="100" step="0.01">
                <div class="volume_progress_bar"></div>
                <div class="volume_bar_bg"></div>
            </div>
            <button class="mute_sound_home">
                <i class="fa-solid fa-volume-high mute_ico_change"></i>
            </button>
        </div>
        <!-- Play pause and sound main fixed btns -->
        <button class="Play_pause_fixed_btns">
            <i class="fa-solid fa-play PPF_Ico"></i>
        </button>
   </div>
   <!-- controls bottom -->
    <!-- ----------------------------- MAIN ----------------------------- -->
    <main>
        <!-- Banner after header -->
        <div class="Banner__with-something-new">
            <!-- container for banner content -->
            <div class="container_banner">
                <div class="Banner__text-wrap">
                    <span class="title__main-in-Banner">The gods we can touch.</span>
                    <!-- container for align items with button -->
                    <div class="container_for_ai_btn">
                        <!-- wrapper for previev songs banner -->
                        <div class="wrapper_songs_list_banner">
                            <div class="songs_banner audioplayer">
                                <img src="img/products_img/The_seed.jpg" alt="The seed">
                                <!-- if audio is playing show it -->
                                <span class="now_is_playing_banner if_audio_is_playing">Playing now <i class="fa-solid fa-music"></i></span>
                                <div class="wrapp_controls_card_banner">
                                    <span class="open_full_btn_card">
                                        <a class="link_style" href="PGS/The_woman_I_am.php" data-title="Open video in full page.">
                                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                        </a>
                                    </span>
                                    <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                                        <i class="PlayPause_ico fa-solid fa-play"></i>
                                    </button>

                                    <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                    <div class="wrapper_timeline">
                                        <span class="current_timer_song_card times">00:00</span>
                                        <div class="Wrapp_progress_timeline">
                                            <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                            <div class="timeline_bar_progress"></div>
                                            <div class="timeline_bg"></div>
                                        </div>
                                        <span class="timer_song_card times">00:00</span>
                                    </div>
                                    <span class="name_song_in_banner">The seed.</span>
                                    <audio class="audio" id="music" hidden>
                                        <source src="audio/The_seed.mp3" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                    <!-- fix for bug :) -->
                                    <span class="new_status hidden"></span>
                                </div>
                            </div>
                            <div class="songs_banner audioplayer">
                                <img src="img/products_img/forgotten_love.jpg" alt="Forgotten love">
                                <span class="now_is_playing_banner if_audio_is_playing">Playing now <i class="fa-solid fa-music"></i></span>
                                <div class="wrapp_controls_card_banner">
                                    <span class="open_full_btn_card">
                                        <a class="link_style" href="PGS/The_woman_I_am.php" data-title="Open video in full page.">
                                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                        </a>
                                    </span>
                                    <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                                        <i class="PlayPause_ico fa-solid fa-play"></i>
                                    </button>

                                    <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                    <div class="wrapper_timeline">
                                        <span class="current_timer_song_card times">00:00</span>
                                        <div class="Wrapp_progress_timeline">
                                            <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                            <div class="timeline_bar_progress"></div>
                                            <div class="timeline_bg"></div>
                                        </div>
                                        <span class="timer_song_card times">00:00</span>
                                    </div>
                                    <span class="name_song_in_banner">Forgotten love.</span>

                                    <audio class="audio" id="music" hidden>
                                        <source src="audio/Forgotten_love.mp3" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                    <span class="new_status hidden"></span>
                                </div>
                            </div>
                            <div class="songs_banner audioplayer">
                                <img src="img/products_img/Awakening.jpg" alt="Awakening">
                                <span class="now_is_playing_banner if_audio_is_playing">Playing now <i class="fa-solid fa-music"></i></span>
                                <div class="wrapp_controls_card_banner">
                                    <span class="open_full_btn_card">
                                        <a class="link_style" href="PGS/The_woman_I_am.php" data-title="Open video in full page.">
                                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                        </a>
                                    </span>
                                    <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                                        <i class="PlayPause_ico fa-solid fa-play"></i>
                                    </button>

                                    <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                    <div class="wrapper_timeline">
                                        <span class="current_timer_song_card times">00:00</span>
                                        <div class="Wrapp_progress_timeline">
                                            <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                            <div class="timeline_bar_progress"></div>
                                            <div class="timeline_bg"></div>
                                        </div>
                                        <span class="timer_song_card times">00:00</span>
                                    </div>
                                    <span class="name_song_in_banner">Awakening.</span>

                                    <audio class="audio" id="music" hidden>
                                        <source src="audio/Awakening.mp3" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                    <span class="new_status hidden"></span>
                                </div>
                            </div>
                            <div class="songs_banner audioplayer">
                                <img src="img/products_img/The_woman_I_am.jpg" alt="The woman I am">
                                <span class="now_is_playing_banner if_audio_is_playing">Playing now <i class="fa-solid fa-music"></i></span>
                                <div class="wrapp_controls_card_banner">
                                    <span class="open_full_btn_card">
                                        <a class="link_style" href="PGS/The_woman_I_am.php" data-title="Open video in full page.">
                                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                        </a>
                                    </span>
                                    <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                                        <i class="PlayPause_ico fa-solid fa-play"></i>
                                    </button>

                                    <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>

                                    <div class="wrapper_timeline">
                                        <!-- time current -->
                                        <span class="current_timer_song_card times">00:00</span>
                                        <!-- track for timeline -->
                                        <div class="Wrapp_progress_timeline">
                                            <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                            <div class="timeline_bar_progress"></div>
                                            <div class="timeline_bg"></div>
                                        </div>
                                        <!-- end time -->
                                        <span class="timer_song_card times">00:00</span>
                                    </div>
                                    <span class="name_song_in_banner">The woman I am.</span>

                                    <audio class="audio" id="music" hidden>
                                        <source src="audio/The_woman_I_am.mp3" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                    <span class="new_status hidden"></span>
                                </div>
                            </div>
                        </div>
                        <!-- Btn listen all -->
                        <a href="#" class="Button__listen_all_banner">Listen all <i class="fa-solid fa-music"></i></a>
                    </div>
                </div>
                <!-- Playlist links social -->
                <div class="Playlist_lnks__Banner">
                    <a href="#" class="link_icon"><i class="fa-brands fa-spotify"></i></a>
                    <a href="#" class="link_icon"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" class="link_icon"><i class="fa-brands fa-apple"></i></a>
                    <a href="#" class="link_icon"><i class="fa-brands fa-deezer"></i></a>
                    <a href="#" class="link_icon"><i class="fa-solid fa-music"></i></a>
                </div>
            </div>
        </div>
        <!-- title previous slider -->
        <div class="title_pre__cards">
            <span>New</span>
        </div>

        <!-- slider carousel main -->
        <div class="cards__main">
            <!-- btn slider prev -->
                <button class="prev controls_slider"><i class="fa-solid fa-circle-chevron-left"></i></button>
                <!-- slider -->
                <div class="wrapper__cards__slider FSlider">                           
                    <!-- cards  -->
                    <div class="card audioplayer">
                        <div class="wrapper_for_img">
                            <span class="new_status">NEW</span>
                            <img src="img/products_img/Hunting_Shadows.jpg" alt="Previev Image song">
                            <div class="if_audio_is_playing">
                                <!-- timeline -->
                                <div class="wrapper_timeline">
                                    <!-- time current -->
                                    <span class="current_timer_song_card">00:00</span>
                                    <!-- track for timeline -->
                                    <div class="Wrapp_progress_timeline">
                                        <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                        <div class="timeline_bar_progress"></div>
                                        <div class="timeline_bg"></div>
                                    </div>
                                    <!-- end time -->
                                    <span class="timer_song_card"></span>
                                </div>
                                <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                <div class="More_menu_cards_wrapper">
                                    <nav>
                                        <ul>
                                            <li>Report <i class="fa-sharp fa-solid fa-triangle-exclamation"></i></li>
                                            <li>Share</li>
                                            <li>Lyrics</li>
                                        </ul>
                                    </nav>
                                </div>

                                <span class="open_full_btn_card"><a class="link_style" href="PGS/The_woman_I_am.php" data-title="Open video in full page.">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a></span>
                                <!-- button for play or pause song -->
                                <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                                    <i class="PlayPause_ico fa-solid fa-play"></i>
                                </button>
                            </div>
                        </div>
                            <!-- audio -->
                            <audio class="audio" id="music" hidden>
                                <source src="audio/Hunting_Shadows.mp3" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        <span class="Type">Audio</span>
                        <span class="card_name_product"><a href="../The_woman_I_am.html">AURORA - Hunting Shadows</a></span> 
                    </div>

                    <div class="card audioplayer">
                        <div class="wrapper_for_img">
                            <span class="new_status">NEW</span>
                            <img src="img/products_img/Stjernestov.jpg" alt="Previev Image song">
                            <div class="if_audio_is_playing">
                                <!-- timeline -->
                                <div class="wrapper_timeline">
                                    <!-- time current -->
                                    <span class="current_timer_song_card">00:00</span>
                                    <!-- track for timeline -->
                                    <div class="Wrapp_progress_timeline">
                                        <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                        <div class="timeline_bar_progress"></div>
                                        <div class="timeline_bg"></div>
                                    </div>
                                    <!-- end time -->
                                    <span class="timer_song_card"></span>
                                </div>
                                <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                <span class="open_full_btn_card"><a class="link_style" href="PGS/Conqueror.php" data-title="Open video in full page.">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a></span>
                                <!-- button for play or pause song -->
                                <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                                    <i class="PlayPause_ico fa-solid fa-play"></i>
                                </button>
                            </div>
                        </div>
                            <!-- audio -->
                            <audio class="audio" id="music" hidden>
                                <source src="audio/Stjernestov.mp3" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        <span class="Type">Audio</span>
                        <span class="card_name_product"><a href="PGS/Conqueror.php">AURORA - Stjernestøv</a></span> 
                    </div>

                    <div class="card audioplayer">
                        <div class="wrapper_for_img">
                            <span class="new_status">NEW</span>
                            <img src="img/products_img/The_seed.jpg" alt="Previev Image song">
                            <div class="if_audio_is_playing">
                                <!-- timeline -->
                                <div class="wrapper_timeline">
                                    <!-- time current -->
                                    <span class="current_timer_song_card">00:00</span>
                                    <!-- track for timeline -->
                                    <div class="Wrapp_progress_timeline">
                                        <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                        <div class="timeline_bar_progress"></div>
                                        <div class="timeline_bg"></div>
                                    </div>
                                    <!-- end time -->
                                    <span class="timer_song_card"></span>
                                </div>
                                <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                <span class="open_full_btn_card"><a class="link_style" href="../The_woman_I_am.html" data-title="Open video in full page.">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a></span>
                                <!-- button for play or pause song -->
                                <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                                    <i class="PlayPause_ico fa-solid fa-play"></i>
                                </button>
                            </div>
                        </div>
                            <!-- audio -->
                            <audio class="audio" id="music" hidden>
                                <source src="audio/The_seed.mp3" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        <span class="Type">Audio</span>
                        <span class="card_name_product"><a href="../The_woman_I_am.html">AURORA - The seed</a></span> 
                    </div>

                    <div class="card audioplayer">
                        <div class="wrapper_for_img">
                            <span class="new_status">NEW</span>
                            <img src="img/products_img/Forgotten_love.jpg" alt="Previev Image song">
                            <div class="if_audio_is_playing">
                                <!-- timeline -->
                                <div class="wrapper_timeline">
                                    <!-- time current -->
                                    <span class="current_timer_song_card">00:00</span>
                                    <!-- track for timeline -->
                                    <div class="Wrapp_progress_timeline">
                                        <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                        <div class="timeline_bar_progress"></div>
                                        <div class="timeline_bg"></div>
                                    </div>
                                    <!-- end time -->
                                    <span class="timer_song_card"></span>
                                </div>
                                <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                <span class="open_full_btn_card"><a class="link_style" href="../The_woman_I_am.html" data-title="Open video in full page.">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a></span>
                                <!-- button for play or pause song -->
                                <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                                    <i class="PlayPause_ico fa-solid fa-play"></i>
                                </button>
                            </div>
                        </div>
                            <!-- audio -->
                            <audio class="audio" id="music" hidden>
                                <source src="audio/Forgotten_love.mp3" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        <span class="Type">Audio</span>
                        <span class="card_name_product"><a href="../The_woman_I_am.html">AURORA - Forgotten love</a></span> 
                    </div>
                    <div class="card audioplayer">
                        <div class="wrapper_for_img">
                            <span class="new_status">NEW</span>
                            <img src="img/products_img/Awakening.jpg" alt="Previev Image song">
                            <div class="if_audio_is_playing">
                                <!-- timeline -->
                                <div class="wrapper_timeline">
                                    <!-- time current -->
                                    <span class="current_timer_song_card">00:00</span>
                                    <!-- track for timeline -->
                                    <div class="Wrapp_progress_timeline">
                                        <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                        <div class="timeline_bar_progress"></div>
                                        <div class="timeline_bg"></div>
                                    </div>
                                    <!-- end time -->
                                    <span class="timer_song_card"></span>
                                </div>
                                <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                <span class="open_full_btn_card"><a class="link_style" href="../The_woman_I_am.html" data-title="Open video in full page.">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a></span>
                                <!-- button for play or pause song -->
                                <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                                    <i class="PlayPause_ico fa-solid fa-play"></i>
                                </button>
                            </div>
                        </div>
                            <!-- audio -->
                            <audio class="audio" id="music" hidden>
                                <source src="audio/Awakening.mp3" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        <span class="Type">Audio</span>
                        <span class="card_name_product"><a href="../The_woman_I_am.html">AURORA - Awakening</a></span> 
                    </div>

                    <div class="card audioplayer">
                        <div class="wrapper_for_img">
                            <span class="new_status">NEW</span>
                            <img src="img/products_img/Runaway.jpg" alt="Previev Image song">
                            <div class="if_audio_is_playing">
                                <!-- timeline -->
                                <div class="wrapper_timeline">
                                    <!-- time current -->
                                    <span class="current_timer_song_card">00:00</span>
                                    <!-- track for timeline -->
                                    <div class="Wrapp_progress_timeline">
                                        <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                        <div class="timeline_bar_progress"></div>
                                        <div class="timeline_bg"></div>
                                    </div>
                                    <!-- end time -->
                                    <span class="timer_song_card"></span>
                                </div>
                                <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                <span class="open_full_btn_card"><a class="link_style" href="../The_woman_I_am.html" data-title="Open video in full page.">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a></span>
                                <!-- button for play or pause song -->
                                <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                                    <i class="PlayPause_ico fa-solid fa-play"></i>
                                </button>
                            </div>
                        </div>
                            <!-- audio -->
                            <audio class="audio" id="music" hidden>
                                <source src="audio/Runaway.mp3" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        <span class="Type">Video</span>
                        <span class="card_name_product"><a href="../The_woman_I_am.html">AURORA - Runaway</a></span> 
                    </div>

                    <div class="card audioplayer">
                        <div class="wrapper_for_img">
                            <span class="new_status">NEW</span>
                            <img src="img/products_img/Giving_into_the_love.jpg" alt="Previev Image song">
                            <div class="if_audio_is_playing">
                                <!-- timeline -->
                                <div class="wrapper_timeline">
                                    <!-- time current -->
                                    <span class="current_timer_song_card">00:00</span>
                                    <!-- track for timeline -->
                                    <div class="Wrapp_progress_timeline">
                                        <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                        <div class="timeline_bar_progress"></div>
                                        <div class="timeline_bg"></div>
                                    </div>
                                    <!-- end time -->
                                    <span class="timer_song_card"></span>
                                </div>
                                <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                <span class="open_full_btn_card"><a class="link_style" href="../The_woman_I_am.html" data-title="Open video in full page.">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a></span>
                                <!-- button for play or pause song -->
                                <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                                    <i class="PlayPause_ico fa-solid fa-play"></i>
                                </button>
                            </div>
                        </div>
                            <!-- audio -->
                            <audio class="audio" id="music" hidden>
                                <source src="audio/Giving_into_the_love.mp3" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        <span class="Type">Video</span>
                        <span class="card_name_product"><a href="../The_woman_I_am.html">AURORA - Giving into the love</a></span> 
                    </div>

                    <div class="card audioplayer">
                        <div class="wrapper_for_img">
                            <span class="new_status">NEW</span>
                            <img src="img/products_img/All_is_soft_inside.jpg" alt="Previev Image song">
                            <div class="if_audio_is_playing">
                                <!-- timeline -->
                                <div class="wrapper_timeline">
                                    <!-- time current -->
                                    <span class="current_timer_song_card">00:00</span>
                                    <!-- track for timeline -->
                                    <div class="Wrapp_progress_timeline">
                                        <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                        <div class="timeline_bar_progress"></div>
                                        <div class="timeline_bg"></div>
                                    </div>
                                    <!-- end time -->
                                    <span class="timer_song_card"></span>
                                </div>
                                <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                <span class="open_full_btn_card"><a class="link_style" href="../The_woman_I_am.html" data-title="Open video in full page.">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a></span>
                                <!-- button for play or pause song -->
                                <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                                    <i class="PlayPause_ico fa-solid fa-play"></i>
                                </button>
                            </div>
                        </div>
                            <!-- audio -->
                            <audio class="audio" id="music" hidden>
                                <source src="audio/All_is_soft_inside.mp3" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        <span class="Type">Audio</span>
                        <span class="card_name_product"><a href="../The_woman_I_am.html">AURORA - All is soft inside</a></span> 
                    </div>
                </div>
                <button class="next controls_slider"><i class="fa-solid fa-circle-chevron-right"></i></button>
        </div>

        <!-- ------------------Recomendation songs all without slider--------------------- -->

        <div class="title_pre__cards">
            <span>All songs by</span>
        </div>
        <div class="wrapper_all_songs_home">           
                <!-- cards  -->
            <div class="card audioplayer">
                <div class="wrapper_for_img">
                <span class="new_status hidden"></span>
                    <img src="img/products_img/Under_stars.jpg" alt="Previev Image song">
                    <div class="if_audio_is_playing">
                        <!-- timeline -->
                        <div class="wrapper_timeline">
                            <!-- time current -->
                            <span class="current_timer_song_card">00:00</span>
                            <!-- track for timeline -->
                            <div class="Wrapp_progress_timeline">
                                <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                <div class="timeline_bar_progress"></div>
                                <div class="timeline_bg"></div>
                            </div>
                            <!-- end time -->
                            <span class="timer_song_card"></span>
                        </div>
                        <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                        <span class="open_full_btn_card"><a class="link_style" href="../The_woman_I_am.html" data-title="Open video in full page.">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a></span>
                        <!-- button for play or pause song -->
                        <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                            <i class="PlayPause_ico fa-solid fa-play"></i>
                        </button>
                    </div>
                </div>
                    <!-- audio -->
                    <audio class="audio" id="music" hidden>
                        <source src="audio/Under_stars.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                <span class="Type">Audio</span>
                <span class="card_name_product"><a href="../The_woman_I_am.html">AURORA - Under Stars</a></span> 
            </div>

            <div class="card audioplayer">
                <div class="wrapper_for_img">
                <span class="new_status hidden"></span>
                    <img src="img/products_img/Conqueror.jpg" alt="Previev Image song">
                    <div class="if_audio_is_playing">
                        <!-- timeline -->
                        <div class="wrapper_timeline">
                            <!-- time current -->
                            <span class="current_timer_song_card">00:00</span>
                            <!-- track for timeline -->
                            <div class="Wrapp_progress_timeline">
                                <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                <div class="timeline_bar_progress"></div>
                                <div class="timeline_bg"></div>
                            </div>
                            <!-- end time -->
                            <span class="timer_song_card"></span>
                        </div>
                        <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                        <span class="open_full_btn_card"><a class="link_style" href="PGS/Conqueror.php" data-title="Open video in full page.">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a></span>
                        <!-- button for play or pause song -->
                        <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                            <i class="PlayPause_ico fa-solid fa-play"></i>
                        </button>
                    </div>
                </div>
                    <!-- audio -->
                    <audio class="audio" id="music" hidden>
                        <source src="audio/Conqueror.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                <span class="Type">Video</span>
                <span class="card_name_product"><a href="PGS/Conqueror.php">AURORA - Conqueror</a></span> 
            </div>

            <div class="card audioplayer">
                <div class="wrapper_for_img">
                <span class="new_status hidden"></span>
                    <img src="img/products_img/The_Innocent.jpg" alt="Previev Image song">
                    <div class="if_audio_is_playing">
                        <!-- timeline -->
                        <div class="wrapper_timeline">
                            <!-- time current -->
                            <span class="current_timer_song_card">00:00</span>
                            <!-- track for timeline -->
                            <div class="Wrapp_progress_timeline">
                                <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                <div class="timeline_bar_progress"></div>
                                <div class="timeline_bg"></div>
                            </div>
                            <!-- end time -->
                            <span class="timer_song_card"></span>
                        </div>
                        <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                        <span class="open_full_btn_card"><a class="link_style" href="../The_woman_I_am.html" data-title="Open video in full page.">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a></span>
                        <!-- button for play or pause song -->
                        <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                            <i class="PlayPause_ico fa-solid fa-play"></i>
                        </button>
                    </div>
                </div>
                    <!-- audio -->
                    <audio class="audio" id="music" hidden>
                        <source src="audio/The_Innocent.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                <span class="Type">Audio</span>
                <span class="card_name_product"><a href="../The_woman_I_am.html">AURORA - The Innocent</a></span> 
            </div>

            <div class="card audioplayer">
                <div class="wrapper_for_img">
                    <span class="new_status hidden"></span>
                    <img src="img/products_img/The_woman_I_am.jpg" alt="Previev Image song">
                    <div class="if_audio_is_playing">
                        <!-- timeline -->
                        <div class="wrapper_timeline">
                            <!-- time current -->
                            <span class="current_timer_song_card">00:00</span>
                            <!-- track for timeline -->
                            <div class="Wrapp_progress_timeline">
                                <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                <div class="timeline_bar_progress"></div>
                                <div class="timeline_bg"></div>
                            </div>
                            <!-- end time -->
                            <span class="timer_song_card">00:00</span>
                        </div>
                        <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                        <span class="open_full_btn_card"><a class="link_style" href="../The_woman_I_am.html" data-title="Open video in full page.">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a></span>
                        <!-- button for play or pause song -->
                        <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                            <i class="PlayPause_ico fa-solid fa-play"></i>
                        </button>
                    </div>
                </div>
                    <!-- audio -->
                    <audio class="audio" id="music" hidden>
                        <source src="audio/The_woman_I_am.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                <span class="Type">Audio</span>
                <span class="card_name_product"><a href="../The_woman_I_am.html">AURORA - The woman I am</a></span> 
            </div>


            <div class="card audioplayer">
                <div class="wrapper_for_img">
                <span class="new_status hidden"></span>
                    <img src="img/products_img/Nature_boy.png" alt="Previev Image song">
                    <div class="if_audio_is_playing">
                        <!-- timeline -->
                        <div class="wrapper_timeline">
                            <!-- time current -->
                            <span class="current_timer_song_card">00:00</span>
                            <!-- track for timeline -->
                            <div class="Wrapp_progress_timeline">
                                <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                <div class="timeline_bar_progress"></div>
                                <div class="timeline_bg"></div>
                            </div>
                            <!-- end time -->
                            <span class="timer_song_card">00:00</span>
                        </div>
                        <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                        <span class="open_full_btn_card"><a class="link_style" href="../The_woman_I_am.html" data-title="Open video in full page.">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a></span>
                        <!-- button for play or pause song -->
                        <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                            <i class="PlayPause_ico fa-solid fa-play"></i>
                        </button>
                    </div>
                </div>
                    <!-- audio -->
                    <audio class="audio" id="music" hidden>
                        <source src="audio/Nature_boy.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                <span class="Type">Audio</span>
                <span class="card_name_product"><a href="../The_woman_I_am.html">AURORA - Nature boy</a></span> 
            </div>
            
            <div class="card audioplayer">
                <div class="wrapper_for_img">
                <span class="new_status hidden"></span>
                    <img src="img/products_img/little-boy-in-the-grass.jpg" alt="Previev Image song">
                    <div class="if_audio_is_playing">
                        <!-- timeline -->
                        <div class="wrapper_timeline">
                            <!-- time current -->
                            <span class="current_timer_song_card">00:00</span>
                            <!-- track for timeline -->
                            <div class="Wrapp_progress_timeline">
                                <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                <div class="timeline_bar_progress"></div>
                                <div class="timeline_bg"></div>
                            </div>
                            <!-- end time -->
                            <span class="timer_song_card">00:00</span>
                        </div>
                        <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                        <span class="open_full_btn_card"><a class="link_style" href="../The_woman_I_am.html" data-title="Open video in full page.">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a></span>
                        <!-- button for play or pause song -->
                        <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                            <i class="PlayPause_ico fa-solid fa-play"></i>
                        </button>
                    </div>
                </div>
                    <!-- audio -->
                    <audio class="audio" id="music" hidden>
                        <source src="audio/little-boy-in-the-grass.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                <span class="Type">Audio</span>
                <span class="card_name_product"><a href="../The_woman_I_am.html">AURORA - Little Boy In The Grass</a></span> 
            </div>

            <div class="card audioplayer">
                <div class="wrapper_for_img">
                <span class="new_status hidden"></span>
                    <img src="img/products_img/Murder_song.jpg" alt="Previev Image song">
                    <div class="if_audio_is_playing">
                        <!-- timeline -->
                        <div class="wrapper_timeline">
                            <!-- time current -->
                            <span class="current_timer_song_card">00:00</span>
                            <!-- track for timeline -->
                            <div class="Wrapp_progress_timeline">
                                <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                <div class="timeline_bar_progress"></div>
                                <div class="timeline_bg"></div>
                            </div>
                            <!-- end time -->
                            <span class="timer_song_card">00:00</span>
                        </div>
                        <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                        <span class="open_full_btn_card"><a class="link_style" href="../The_woman_I_am.html" data-title="Open video in full page.">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a></span>
                        <!-- button for play or pause song -->
                        <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                            <i class="PlayPause_ico fa-solid fa-play"></i>
                        </button>
                    </div>
                </div>
                    <!-- audio -->
                    <audio class="audio" id="music" hidden>
                        <source src="audio/Murder_song.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                <span class="Type">Video</span>
                <span class="card_name_product"><a href="../The_woman_I_am.html">AURORA - Murder Song (5, 4, 3, 2, 1)</a></span> 
            </div>

            <div class="card audioplayer">
                <div class="wrapper_for_img">
                    <span class="new_status">NEW</span>
                    <img src="img/products_img/All_is_soft_inside.jpg" alt="Previev Image song">
                    <div class="if_audio_is_playing">
                        <!-- timeline -->
                        <div class="wrapper_timeline">
                            <!-- time current -->
                            <span class="current_timer_song_card">00:00</span>
                            <!-- track for timeline -->
                            <div class="Wrapp_progress_timeline">
                                <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                <div class="timeline_bar_progress"></div>
                                <div class="timeline_bg"></div>
                            </div>
                            <!-- end time -->
                            <span class="timer_song_card">00:00</span>
                        </div>
                        <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                        <span class="open_full_btn_card"><a class="link_style" href="../The_woman_I_am.html" data-title="Open video in full page.">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a></span>
                        <!-- button for play or pause song -->
                        <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                            <i class="PlayPause_ico fa-solid fa-play"></i>
                        </button>
                    </div>
                </div>
                    <!-- audio -->
                    <audio class="audio" id="music" hidden>
                        <source src="audio/All_is_soft_inside.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                <span class="Type">Audio</span>
                <span class="card_name_product"><a href="../The_woman_I_am.html">AURORA - All is soft inside</a></span> 
            </div>

            <div class="card audioplayer">
                <div class="wrapper_for_img">
                <span class="new_status hidden"></span>
                 <img src="img/products_img/Home.jpg" alt="Previev Image song">
                    <div class="if_audio_is_playing">
                        <!-- timeline -->
                        <div class="wrapper_timeline">
                            <!-- time current -->
                            <span class="current_timer_song_card">00:00</span>
                            <!-- track for timeline -->
                            <div class="Wrapp_progress_timeline">
                                <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                <div class="timeline_bar_progress"></div>
                                <div class="timeline_bg"></div>
                            </div>
                            <!-- end time -->
                            <span class="timer_song_card">00:00</span>
                        </div>
                        <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                        <span class="open_full_btn_card"><a class="link_style" href="../The_woman_I_am.html" data-title="Open video in full page.">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a></span>
                        <!-- button for play or pause song -->
                        <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                            <i class="PlayPause_ico fa-solid fa-play"></i>
                        </button>
                    </div>
                </div>
                    <!-- audio -->
                    <audio class="audio" id="music" preload="auto" hidden>
                        <source src="audio/Home.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                <span class="Type">Audio</span>
                <span class="card_name_product"><a href="../The_woman_I_am.html">AURORA - Home</a></span> 
            </div>
            <div class="card audioplayer">
                <div class="wrapper_for_img">
                    <span class="new_status">NEW</span>
                    <img src="img/products_img/Awakening.jpg" alt="Previev Image song">
                    <div class="if_audio_is_playing">
                        <!-- timeline -->
                        <div class="wrapper_timeline">
                            <!-- time current -->
                            <span class="current_timer_song_card">00:00</span>
                            <!-- track for timeline -->
                            <div class="Wrapp_progress_timeline">
                                <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                <div class="timeline_bar_progress"></div>
                                <div class="timeline_bg"></div>
                            </div>
                            <!-- end time -->
                            <span class="timer_song_card"></span>
                        </div>
                        <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                        <span class="open_full_btn_card"><a class="link_style" href="../The_woman_I_am.html" data-title="Open video in full page.">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a></span>
                        <!-- button for play or pause song -->
                        <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                            <i class="PlayPause_ico fa-solid fa-play"></i>
                        </button>
                    </div>
                </div>
                    <!-- audio -->
                    <audio class="audio" id="music" hidden>
                        <source src="audio/Awakening.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                <span class="Type">Audio</span>
                <span class="card_name_product"><a href="../The_woman_I_am.html">AURORA - Awakening</a></span> 
            </div>

            <div class="card audioplayer">
                <div class="wrapper_for_img">
                    <span class="new_status">NEW</span>
                    <img src="img/products_img/Runaway.jpg" alt="Previev Image song">
                    <div class="if_audio_is_playing">
                        <!-- timeline -->
                        <div class="wrapper_timeline">
                            <!-- time current -->
                            <span class="current_timer_song_card">00:00</span>
                            <!-- track for timeline -->
                            <div class="Wrapp_progress_timeline">
                                <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                <div class="timeline_bar_progress"></div>
                                <div class="timeline_bg"></div>
                            </div>
                            <!-- end time -->
                            <span class="timer_song_card"></span>
                        </div>
                        <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                        <span class="open_full_btn_card"><a class="link_style" href="../The_woman_I_am.html" data-title="Open video in full page.">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a></span>
                        <!-- button for play or pause song -->
                        <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                            <i class="PlayPause_ico fa-solid fa-play"></i>
                        </button>
                    </div>
                </div>
                    <!-- audio -->
                    <audio class="audio" id="music" hidden>
                        <source src="audio/Runaway.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                <span class="Type">Video</span>
                <span class="card_name_product"><a href="../The_woman_I_am.html">AURORA - Runaway</a></span> 
            </div>

            <div class="card audioplayer">
                <div class="wrapper_for_img">
                    <span class="new_status">NEW</span>
                    <img src="img/products_img/Giving_into_the_love.jpg" alt="Previev Image song">
                    <div class="if_audio_is_playing">
                        <!-- timeline -->
                        <div class="wrapper_timeline">
                            <!-- time current -->
                            <span class="current_timer_song_card">00:00</span>
                            <!-- track for timeline -->
                            <div class="Wrapp_progress_timeline">
                                <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                <div class="timeline_bar_progress"></div>
                                <div class="timeline_bg"></div>
                            </div>
                            <!-- end time -->
                            <span class="timer_song_card"></span>
                        </div>
                        <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                        <span class="open_full_btn_card"><a class="link_style" href="../The_woman_I_am.html" data-title="Open video in full page.">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a></span>
                        <!-- button for play or pause song -->
                        <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                            <i class="PlayPause_ico fa-solid fa-play"></i>
                        </button>
                    </div>
                </div>
                    <!-- audio -->
                    <audio class="audio" id="music" hidden>
                        <source src="audio/Giving_into_the_love.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                <span class="Type">Video</span>
                <span class="card_name_product"><a href="../The_woman_I_am.html">AURORA - Giving into the love</a></span> 
            </div>





            <div class="card audioplayer">
                <div class="wrapper_for_img">
                <span class="new_status hidden"></span>
                    <img src="img/products_img/Nature_boy.png" alt="Previev Image song">
                    <div class="if_audio_is_playing">
                        <!-- timeline -->
                        <div class="wrapper_timeline">
                            <!-- time current -->
                            <span class="current_timer_song_card">00:00</span>
                            <!-- track for timeline -->
                            <div class="Wrapp_progress_timeline">
                                <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                <div class="timeline_bar_progress"></div>
                                <div class="timeline_bg"></div>
                            </div>
                            <!-- end time -->
                            <span class="timer_song_card">00:00</span>
                        </div>
                        <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                        <span class="open_full_btn_card"><a class="link_style" href="../The_woman_I_am.html" data-title="Open video in full page.">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a></span>
                        <!-- button for play or pause song -->
                        <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                            <i class="PlayPause_ico fa-solid fa-play"></i>
                        </button>
                    </div>
                </div>
                    <!-- audio -->
                    <audio class="audio" id="music" hidden>
                        <source src="audio/Nature_boy.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                <span class="Type">Audio</span>
                <span class="card_name_product"><a href="../The_woman_I_am.html">AURORA - Nature boy</a></span> 
            </div>
            
            <div class="card audioplayer">
                <div class="wrapper_for_img">
                <span class="new_status hidden"></span>
                    <img src="img/products_img/little-boy-in-the-grass.jpg" alt="Previev Image song">
                    <div class="if_audio_is_playing">
                        <!-- timeline -->
                        <div class="wrapper_timeline">
                            <!-- time current -->
                            <span class="current_timer_song_card">00:00</span>
                            <!-- track for timeline -->
                            <div class="Wrapp_progress_timeline">
                                <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                <div class="timeline_bar_progress"></div>
                                <div class="timeline_bg"></div>
                            </div>
                            <!-- end time -->
                            <span class="timer_song_card">00:00</span>
                        </div>
                        <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                        <span class="open_full_btn_card"><a class="link_style" href="../The_woman_I_am.html" data-title="Open video in full page.">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a></span>
                        <!-- button for play or pause song -->
                        <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                            <i class="PlayPause_ico fa-solid fa-play"></i>
                        </button>
                    </div>
                </div>
                    <!-- audio -->
                    <audio class="audio" id="music" hidden>
                        <source src="audio/little-boy-in-the-grass.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                <span class="Type">Audio</span>
                <span class="card_name_product"><a href="../The_woman_I_am.html">AURORA - Little Boy In The Grass</a></span> 
            </div>

            <div class="card audioplayer">
                <div class="wrapper_for_img">
                <span class="new_status hidden"></span>
                    <img src="img/products_img/Murder_song.jpg" alt="Previev Image song">
                    <div class="if_audio_is_playing">
                        <!-- timeline -->
                        <div class="wrapper_timeline">
                            <!-- time current -->
                            <span class="current_timer_song_card">00:00</span>
                            <!-- track for timeline -->
                            <div class="Wrapp_progress_timeline">
                                <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                <div class="timeline_bar_progress"></div>
                                <div class="timeline_bg"></div>
                            </div>
                            <!-- end time -->
                            <span class="timer_song_card">00:00</span>
                        </div>
                        <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                        <span class="open_full_btn_card"><a class="link_style" href="../The_woman_I_am.html" data-title="Open video in full page.">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a></span>
                        <!-- button for play or pause song -->
                        <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                            <i class="PlayPause_ico fa-solid fa-play"></i>
                        </button>
                    </div>
                </div>
                    <!-- audio -->
                    <audio class="audio" id="music" hidden>
                        <source src="audio/Murder_song.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                <span class="Type">Video</span>
                <span class="card_name_product"><a href="../The_woman_I_am.html">AURORA - Murder Song (5, 4, 3, 2, 1)</a></span> 
            </div>

            <div class="card audioplayer">
                <div class="wrapper_for_img">
                    <span class="new_status">NEW</span>
                    <img src="img/products_img/All_is_soft_inside.jpg" alt="Previev Image song">
                    <div class="if_audio_is_playing">
                        <!-- timeline -->
                        <div class="wrapper_timeline">
                            <!-- time current -->
                            <span class="current_timer_song_card">00:00</span>
                            <!-- track for timeline -->
                            <div class="Wrapp_progress_timeline">
                                <input type="range" class="timeline_card timeline" max="100" step="0.01" value="0">
                                <div class="timeline_bar_progress"></div>
                                <div class="timeline_bg"></div>
                            </div>
                            <!-- end time -->
                            <span class="timer_song_card">00:00</span>
                        </div>
                        <button class="More_btn_card"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                        <span class="open_full_btn_card"><a class="link_style" href="../The_woman_I_am.html" data-title="Open video in full page.">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a></span>
                        <!-- button for play or pause song -->
                        <button id="play_pause_btn_card playbutton" class="play_btn_card play">
                            <i class="PlayPause_ico fa-solid fa-play"></i>
                        </button>
                    </div>
                </div>
                    <!-- audio -->
                    <audio class="audio" id="music" hidden>
                        <source src="audio/All_is_soft_inside.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                <span class="Type">Audio</span>
                <span class="card_name_product"><a href="../The_woman_I_am.html">AURORA - All is soft inside</a></span> 
            </div>
        </div>
    </main>
    <!-- ----- JAVASCRIPTS ----- -->

    <!--icons fontavesome.com-->
    <script src="https://kit.fontawesome.com/3b90393ff9.js" crossorigin="anonymous"></script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- js main -->
    <script type="text/javascript" src="js/script.js"></script>
    <!-- glider js -->
    <script type="text/javascript" src="js/glider.js"></script>
    <!-- scripts -->
    <script type="text/javascript">
        // slider home page
        new Glider(document.querySelector(".FSlider"), {
        slidesToShow: 1,
        slidesToScroll: 1,
        duration: 0.5,
        draggable: false,
        dots: false, 
        arrows: {
            prev: ".prev",
            next: ".next"
        },
            responsive: [
                {
                  // If Screen Size More than 590px
                  breakpoint: 590,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    duration: 0.5,
                    draggable: false,
                  }
                },
                {
                  // If Screen Size More than 1100px
                  breakpoint: 1100,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    duration: 0.5,
                    draggable: false,
                  }
                },
                {
                  // If Screen Size More than 1350px
                  breakpoint: 1350,
                  settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    duration: 0.5,  
                    draggable: false,
                    }
                },
            ]
        });
    </script>
</body>
</html>