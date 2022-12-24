<div class="chat-body">
    <!-- Chat Header Start-->
    <div class="chat-header">
        <!-- Chat Back Button (Visible only in Small Devices) -->
        <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted d-xl-none"
            type="button" data-close="">
            <!-- Default :: Inline SVG -->
            <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>

            <!-- Alternate :: External File link -->
            <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/arrow-left.svg" alt=""> -->
        </button>

        <!-- Chat participant's Name -->
        <div class="media chat-name align-items-center text-truncate">
            <div class="avatar avatar-online d-none d-sm-inline-block mr-3">
                <img src="./../../assets/media/avatar/2.png" alt="">
            </div>

            <div class="media-body align-self-center ">
                <h6 class="text-truncate mb-0">Catherine Richardson</h6>
                <small class="text-muted">Online</small>
            </div>
        </div>

        <!-- Chat Options -->
        <ul class="nav flex-nowrap">
            <li class="nav-item list-inline-item d-none d-sm-block mr-1">
                <a class="nav-link text-muted px-1" data-toggle="collapse"
                    data-target="#searchCollapse" href="#" aria-expanded="false">
                    <!-- Default :: Inline SVG -->
                    <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>

                    <!-- Alternate :: External File link -->
                    <!-- <img src="./../../assets/media/heroicons/outline/search.svg" alt="" class="injectable hw-20"> -->
                </a>
            </li>

            <li class="nav-item list-inline-item d-none d-sm-block mr-1">
                <a class="nav-link text-muted px-1" href="#" title="Add People">
                    <!-- Default :: Inline SVG -->
                    <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>

                    <!-- Alternate :: External File link -->
                    <!-- <img src="./../../assets/media/heroicons/outline/phone.svg" alt="" class="injectable hw-20"> -->
                </a>
            </li>
            <li class="nav-item list-inline-item d-none d-sm-block mr-0">
                <div class="dropdown">
                    <a class="nav-link text-muted px-1" href="#" role="button" title="Details"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!-- Default :: Inline SVG -->
                        <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>

                        <!-- Alternate :: External File link -->
                        <!-- <img src="./../../assets/media/heroicons/outline/dots-vertical.svg" alt="" class="injectable hw-20"> -->
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item align-items-center d-flex" href="#"
                            data-chat-info-toggle="">
                            <!-- Default :: Inline SVG -->
                            <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            <!-- Alternate :: External File link -->
                            <!-- <img src="./../../assets/media/heroicons/outline/information-circle.svg" alt="" class="injectable hw-20 mr-2"> -->
                            <span>View Info</span>
                        </a>

                        <a class="dropdown-item align-items-center d-flex" href="#">
                            <!-- Default :: Inline SVG -->
                            <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"
                                    clip-rule="evenodd" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M17 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2" />
                            </svg>

                            <!-- Alternate :: External File link -->
                            <!-- <img src="./../../assets/media/heroicons/outline/volume-off.svg" alt="" class="injectable hw-20 mr-2"> -->
                            <span>Mute Notifications</span>
                        </a>
                        <a class="dropdown-item align-items-center d-flex" href="#">
                            <!-- Default :: Inline SVG -->
                            <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>

                            <!-- Alternate :: External File link -->
                            <!-- <img src="./../../assets/media/heroicons/outline/photograph.svg" alt="" class="injectable hw-20 mr-2"> -->
                            <span>Wallpaper</span>
                        </a>
                        <a class="dropdown-item align-items-center d-flex" href="#">
                            <!-- Default :: Inline SVG -->
                            <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                            </svg>

                            <!-- Alternate :: External File link -->
                            <!-- <img src="./../../assets/media/heroicons/outline/archive.svg" alt="" class="injectable hw-20 mr-2"> -->
                            <span>Archive</span>
                        </a>
                        <a class="dropdown-item align-items-center d-flex" href="#">
                            <!-- Default :: Inline SVG -->
                            <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>

                            <!-- Alternate :: External File link -->
                            <!-- <img src="./../../assets/media/heroicons/outline/trash.svg" alt="" class="injectable hw-20 mr-2"> -->
                            <span>Delete</span>
                        </a>
                        <a class="dropdown-item align-items-center d-flex text-danger" href="#">
                            <!-- Default :: Inline SVG -->
                            <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                            </svg>

                            <!-- Alternate :: External File link -->
                            <!-- <img src="./../../assets/media/heroicons/outline/ban.svg" alt="" class="injectable hw-20 mr-2"> -->
                            <span>Block</span>
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item list-inline-item d-sm-none mr-0">
                <div class="dropdown">
                    <a class="nav-link text-muted px-1" href="#" role="button" title="Details"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!-- Default :: Inline SVG -->
                        <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>

                        <!-- Alternate :: External File link -->
                        <!-- <img src="./../../assets/media/heroicons/outline/dots-vertical.svg" alt="" class="injectable hw-20"> -->
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item align-items-center d-flex" href="#">
                            <!-- Default :: Inline SVG -->
                            <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>

                            <!-- Alternate :: External File link -->
                            <!-- <img src="./../../assets/media/heroicons/outline/phone.svg" alt="" class="injectable hw-20 mr-2"> -->
                            <span>Call</span>
                        </a>
                        <a class="dropdown-item align-items-center d-flex" href="#"
                            data-toggle="collapse" data-target="#searchCollapse"
                            aria-expanded="false">
                            <!-- Default :: Inline SVG -->
                            <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>

                            <!-- Alternate :: External File link -->
                            <!-- <img src="./../../assets/media/heroicons/outline/search.svg" alt="" class="injectable hw-20 mr-2"> -->
                            <span>Search</span>
                        </a>

                        <a class="dropdown-item align-items-center d-flex" href="#"
                            data-chat-info-toggle="">
                            <!-- Default :: Inline SVG -->
                            <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            <!-- Alternate :: External File link -->
                            <!-- <img src="./../../assets/media/heroicons/outline/information-circle.svg" alt="" class="injectable hw-20 mr-2"> -->
                            <span>View Info</span>
                        </a>

                        <a class="dropdown-item align-items-center d-flex" href="#">
                            <!-- Default :: Inline SVG -->
                            <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"
                                    clip-rule="evenodd" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M17 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2" />
                            </svg>

                            <!-- Alternate :: External File link -->
                            <!-- <img src="./../../assets/media/heroicons/outline/volume-off.svg" alt="" class="injectable hw-20 mr-2"> -->
                            <span>Mute Notifications</span>
                        </a>
                        <a class="dropdown-item align-items-center d-flex" href="#">
                            <!-- Default :: Inline SVG -->
                            <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>

                            <!-- Alternate :: External File link -->
                            <!-- <img src="./../../assets/media/heroicons/outline/photograph.svg" alt="" class="injectable hw-20 mr-2"> -->
                            <span>Wallpaper</span>
                        </a>
                        <a class="dropdown-item align-items-center d-flex" href="#">
                            <!-- Default :: Inline SVG -->
                            <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                            </svg>

                            <!-- Alternate :: External File link -->
                            <!-- <img src="./../../assets/media/heroicons/outline/archive.svg" alt="" class="injectable hw-20 mr-2"> -->
                            <span>Archive</span>
                        </a>
                        <a class="dropdown-item align-items-center d-flex" href="#">
                            <!-- Default :: Inline SVG -->
                            <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>

                            <!-- Alternate :: External File link -->
                            <!-- <img src="./../../assets/media/heroicons/outline/trash.svg" alt="" class="injectable hw-20 mr-2"> -->
                            <span>Delete</span>
                        </a>
                        <a class="dropdown-item align-items-center d-flex text-danger" href="#">
                            <!-- Default :: Inline SVG -->
                            <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                            </svg>

                            <!-- Alternate :: External File link -->
                            <!-- <img src="./../../assets/media/heroicons/outline/ban.svg" alt="" class="injectable hw-20 mr-2"> -->
                            <span>Block</span>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- Chat Header End-->

    <!-- Search Start -->
    <div class="collapse border-bottom px-3" id="searchCollapse">
        <div class="container-xl py-2 px-0 px-md-3">
            <div class="input-group bg-light ">
                <input type="text"
                    class="form-control form-control-md border-right-0 transparent-bg pr-0"
                    placeholder="Search">
                <div class="input-group-append">
                    <span class="input-group-text transparent-bg border-left-0">
                        <!-- Default :: Inline SVG -->
                        <svg class="hw-20 text-muted" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>

                        <!-- Alternate :: External File link -->
                        <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/search.svg" alt="Search icon"> -->
                    </span>
                </div>
            </div>
        </div>

    </div>
    <!-- Search End -->

    <!-- Chat Content Start-->
    <div class="chat-content p-2" id="messageBody">
        <div class="container">

            <!-- Message Day Start -->
            {{-- <div class="message-day">

                <div class="message-divider sticky-top pb-2" data-label="Yesterday">&nbsp;</div>

                <!-- Received Message Start -->
                <div class="message">
                    <div class="message-wrapper">
                        <div class="message-content">
                            <span>I have to give a presentation on global warming on Friday, and I
                                am so nervous.</span>
                        </div>
                    </div>
                    <div class="message-options">
                        <div class="avatar avatar-sm"><img alt=""
                                src="./../../assets/media/avatar/6.png"></div>
                        <span class="message-date">9:12am</span>
                        <div class="dropdown">
                            <a class="text-muted" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <!-- Default :: Inline SVG -->
                                <svg class="hw-18" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>

                                <!-- Alternate :: External File link -->
                                <!-- <img class="injectable hw-18" src="./../../assets/media/heroicons/outline/dots-horizontal.svg" alt="message options"> -->
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <!-- Default :: Inline SVG -->
                                    <svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>

                                    <!-- Alternate :: External File link -->
                                    <!-- <img class="injectable hw-18 mr-2" src="./../../assets/media/heroicons/outline/duplicate.svg" alt="message options"> -->
                                    <span>Copy</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <!-- Default :: Inline SVG -->
                                    <svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                                    </svg>

                                    <!-- Alternate :: External File link -->
                                    <!-- <img class="injectable hw-18 mr-2" src="./../../assets/media/heroicons/outline/reply.svg" alt="message replay"> -->
                                    <span>Replay</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <!-- Default :: Inline SVG -->
                                    <svg class="hw-18 rotate-y mr-2" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                                    </svg>

                                    <!-- Alternate :: External File link -->
                                    <!-- <img class="injectable rotate-y hw-18 mr-2" src="./../../assets/media/heroicons/outline/reply.svg" alt="message forward"> -->
                                    <span>Forward</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <!-- Default :: Inline SVG -->
                                    <svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </svg>

                                    <!-- Alternate :: External File link -->
                                    <!-- <img class="injectable hw-18 mr-2" src="./../../assets/media/heroicons/outline/star.svg" alt="message favourite"> -->
                                    <span>Favourite</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center text-danger"
                                    href="#">
                                    <!-- Default :: Inline SVG -->
                                    <svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>

                                    <!-- Alternate :: External File link -->
                                    <!-- <img class="injectable hw-18 mr-2" src="./../../assets/media/heroicons/outline/trash.svg" alt="message delete"> -->
                                    <span>Delete</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Received Message End -->

                <!-- Self Message Start -->
                <div class="message self">
                    <div class="message-wrapper">
                        <div class="message-content">
                            <span>First of all, you need to understand the subject matter
                                thoroughly. You need to know what is global warming, what causes
                                global warming, and what people should do to abate the effects of
                                global warming.</span>
                        </div>
                    </div>
                    <div class="message-options">
                        <div class="avatar avatar-sm"><img alt=""
                                src="./../../assets/media/avatar/6.png"></div>

                        <span class="message-date">9:12am</span>
                        <span class="message-status">Edited</span>

                        <div class="dropdown">
                            <a class="text-muted" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <!-- Default :: Inline SVG -->
                                <svg class="hw-18" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>

                                <!-- Alternate :: External File link -->
                                <!-- <img class="injectable hw-18" src="./../../assets/media/heroicons/outline/dots-horizontal.svg" alt="message options"> -->
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <!-- Default :: Inline SVG -->
                                    <svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>

                                    <!-- Alternate :: External File link -->
                                    <!-- <img class="injectable hw-18 mr-2" src="./../../assets/media/heroicons/outline/duplicate.svg" alt="message options"> -->
                                    <span>Copy</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <!-- Default :: Inline SVG -->
                                    <svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>

                                    <!-- Alternate :: External File link -->
                                    <!-- <img class="injectable hw-18 mr-2" src="./../../assets/media/heroicons/outline/pencil.svg" alt="message edit"> -->
                                    <span>Edit</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <!-- Default :: Inline SVG -->
                                    <svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                                    </svg>

                                    <!-- Alternate :: External File link -->
                                    <!-- <img class="injectable hw-18 mr-2" src="./../../assets/media/heroicons/outline/reply.svg" alt="message replay"> -->
                                    <span>Replay</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <!-- Default :: Inline SVG -->
                                    <svg class="hw-18 rotate-y mr-2" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                                    </svg>

                                    <!-- Alternate :: External File link -->
                                    <!-- <img class="injectable rotate-y hw-18 mr-2" src="./../../assets/media/heroicons/outline/reply.svg" alt="message forward"> -->
                                    <span>Forward</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <!-- Default :: Inline SVG -->
                                    <svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </svg>

                                    <!-- Alternate :: External File link -->
                                    <!-- <img class="injectable hw-18 mr-2" src="./../../assets/media/heroicons/outline/star.svg" alt="message favourite"> -->
                                    <span>Favourite</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center text-danger"
                                    href="#">
                                    <!-- Default :: Inline SVG -->
                                    <svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>

                                    <!-- Alternate :: External File link -->
                                    <!-- <img class="injectable hw-18 mr-2" src="./../../assets/media/heroicons/outline/trash.svg" alt="message delete"> -->
                                    <span>Delete</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Self Message End -->
            </div> --}}
            <!-- Message Day End -->

            <!-- Message Day Start -->
            <div class="message-day">
                <div class="message-divider sticky-top pb-2" data-label="Today">&nbsp;</div>
                <div id="messageToday"></div>
            </div>
            <!-- Message Day End -->
        </div>

        <!-- Scroll to finish -->
        <div class="chat-finished" id="chat-finished"></div>
    </div>
    <!-- Chat Content End-->

    <!-- Chat Footer Start-->
    <div class="chat-footer">
        <div class="attachment">
            <div class="dropdown">
                <button class="btn btn-secondary btn-icon btn-minimal btn-sm" type="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/plus-circle.svg" alt=""> -->
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">
                        <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <!-- <img class="injectable hw-20 mr-2" src="./../../assets/media/heroicons/outline/photograph.svg" alt=""> -->
                        <span>Gallery</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                        </svg>

                        <!-- <img class="injectable hw-20 mr-2" src="./../../assets/media/heroicons/outline/volume-up.svg" alt=""> -->
                        <span>Audio</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>

                        <!-- <img class="injectable hw-20 mr-2" src="./../../assets/media/heroicons/outline/document.svg" alt=""> -->
                        <span>Document</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>

                        <!-- <img class="injectable hw-20 mr-2" src="./../../assets/media/heroicons/outline/user.svg" alt=""> -->
                        <span>Contact</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>

                        <!-- <img class="injectable hw-20 mr-2" src="./../../assets/media/heroicons/outline/location-marker.svg" alt=""> -->
                        <span>Location</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>

                        <!-- <img class="injectable hw-20 mr-2" src="./../../assets/media/heroicons/outline/chart-square-bar.svg" alt=""> -->
                        <span>Poll</span>
                    </a>
                </div>
            </div>
        </div>

        <textarea class="form-control emojionearea-form-control" id="messageInput" rows="1"
            placeholder="Type your message here..."></textarea>
        <div class="btn btn-primary btn-icon send-icon rounded-circle text-light mb-1" onclick="sendMessage(22)">
            <svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>

            <!-- <img src="./../../assets/media/heroicons/outline/arrow-right.svg" alt="" class="injectable"> -->
        </div>
    </div>
    <!-- Chat Footer End-->
</div>
<script>

    let message = new Array();

    const UserId = {{Auth::user()->id}}
    const fetchMessage = async (idChannel = 22) => {
        var url = '{{ route("fetch.message", ":id") }}';
        url = url.replace(':id', idChannel);
        await fetch(url, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
            },
        })
        .then((response) => {
            return response.json()
        })
        .then((result) => {
            console.log(result)
            // let dataaja =  {
            //         "user_id": 1,
            //         "message": "Hallo"
            //     }
            // message.push(dataaja)
            // appendMessage(dataaja, UserId)
        })
        .catch((error) => {
            alert(error)
        })
    }

    fetchMessage();

    const sendMessage = async (id) => {
        event.preventDefault()        
        const messageInput = $('#messageInput').val();
        if(messageInput == '' || messageInput == undefined) {
            alert('Pesan tidak boleh kosong')
            return false;
        }

        var url = '{{ route("send.message", ":id") }}';
        url = url.replace(':id', id);
        await fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            },
            body: JSON.stringify({
                'message': messageInput
            })
        })
        .then((response) => {
            return response.json();
        })
        .then((result) => {
            console.log(result)
            let message = {
                "user_id": UserId,
                "message": messageInput
            }

            appendOneMessage(message, UserId)
        })
        .catch((error) => {
            alert(error)
        })
    }


    let idChannel = 22;
    window.Echo.channel(`message-${idChannel}`)
        .listen('.MessagePrivate', function(e) {
            if (e.user_id != UserId) {
                appendOneMessage(e, e.user_id)
            }
        })


    const appendMessage = (data, userId) => {
        console.log(userId, UserId)
        if(userId != UserId) {
            console.log('KALO GA SAMA')
            message.map((value, index) => {
                $("#messageToday").append(receivedMessage);
            })

            return false;
        } else {
            message.map((value, index) => {
                $("#messageToday").append(selfMessage);
            })
            return false;
        }
    }

    const appendOneMessage = (data, userId) => {
        console.log(userId, UserId)
        if(userId != UserId) {
            let receiveMessage = receivedSetMessage(data)
            $("#messageToday").append(receiveMessage);
            return false;
        } else {
            let selfMessage = selfSetMessage(data)
            $("#messageToday").append(selfMessage);
            return false;
        }
    }

    const receivedSetMessage = (data) => {
        const receivedMessage = `
                    <div class="message">
                        <div class="message-wrapper">
                            <div class="message-content">
                                <h6>${data?.message}</h6>
                            </div>
                        </div>
                        <div class="message-options">
                            <div class="avatar avatar-sm"><img alt=""
                                    src="https://media.istockphoto.com/id/951331792/photo/portrait-of-uncertain-young-stylish-stubble-man-with-trendy-round-glasses-wears-demin-blue.jpg?s=612x612&w=0&k=20&c=SjjSwn1MLUo9rjYGwXc8xTWnq8LP_g6e9K7Zxe0I3qs=""></div>
                            <span class="message-date">9:12am</span>
                            <div class="dropdown">
                                <a class="text-muted" href="#" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <!-- Default :: Inline SVG -->
                                    <svg class="hw-18" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                    </svg>

                                    <!-- Alternate :: External File link -->
                                    <!-- <img class="injectable hw-18" src="./../../assets/media/heroicons/outline/dots-horizontal.svg" alt="message options"> -->
                                </a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <!-- Default :: Inline SVG -->
                                        <svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>

                                        <!-- Alternate :: External File link -->
                                        <!-- <img class="injectable hw-18 mr-2" src="./../../assets/media/heroicons/outline/download.svg" alt="download"> -->
                                        <span>Download</span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <!-- Default :: Inline SVG -->
                                        <svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                                        </svg>

                                        <!-- Alternate :: External File link -->
                                        <!-- <img class="injectable hw-18 mr-2" src="./../../assets/media/heroicons/outline/reply.svg" alt="message replay"> -->
                                        <span>Replay</span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <!-- Default :: Inline SVG -->
                                        <svg class="hw-18 rotate-y mr-2" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                                        </svg>

                                        <!-- Alternate :: External File link -->
                                        <!-- <img class="injectable rotate-y hw-18 mr-2" src="./../../assets/media/heroicons/outline/reply.svg" alt="message forward"> -->
                                        <span>Forward</span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <!-- Default :: Inline SVG -->
                                        <svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg>

                                        <!-- Alternate :: External File link -->
                                        <!-- <img class="injectable hw-18 mr-2" src="./../../assets/media/heroicons/outline/star.svg" alt="message favourite"> -->
                                        <span>Favourite</span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center text-danger"
                                        href="#">
                                        <!-- Default :: Inline SVG -->
                                        <svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>

                                        <!-- Alternate :: External File link -->
                                        <!-- <img class="injectable hw-18 mr-2" src="./../../assets/media/heroicons/outline/trash.svg" alt="message delete"> -->
                                        <span>Delete</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>`;
            return receivedMessage
    }

    const selfSetMessage = (data) => {

        console.log(data)
        const selfMessage = `
                    <div class="message self">
                        <div class="message-wrapper">
                            <div class="message-content">
                                <span>
                                ${data?.message}
                                </span>
                            </div>
                        </div>
                        <div class="message-options">
                            <div class="avatar avatar-sm"><img alt=""
                                    src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"></div>

                            <span class="message-date">9:12am</span>
                            <span class="message-status">Edited</span>

                            <div class="dropdown">
                                <a class="text-muted" href="#" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <!-- Default :: Inline SVG -->
                                    <svg class="hw-18" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                    </svg>
                                    <!-- <img class="injectable hw-18" src="./../../assets/media/heroicons/outline/dots-horizontal.svg" alt="message options"> -->
                                </a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <!-- Default :: Inline SVG -->
                                        <svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                        </svg>

                                        <!-- Alternate :: External File link -->
                                        <!-- <img class="injectable hw-18 mr-2" src="./../../assets/media/heroicons/outline/duplicate.svg" alt="message options"> -->
                                        <span>Copy</span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <!-- Default :: Inline SVG -->
                                        <svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>

                                        <!-- Alternate :: External File link -->
                                        <!-- <img class="injectable hw-18 mr-2" src="./../../assets/media/heroicons/outline/pencil.svg" alt="message edit"> -->
                                        <span>Edit</span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <!-- Default :: Inline SVG -->
                                        <svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                                        </svg>

                                        <!-- Alternate :: External File link -->
                                        <!-- <img class="injectable hw-18 mr-2" src="./../../assets/media/heroicons/outline/reply.svg" alt="message replay"> -->
                                        <span>Replay</span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <!-- Default :: Inline SVG -->
                                        <svg class="hw-18 rotate-y mr-2" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                                        </svg>

                                        <!-- Alternate :: External File link -->
                                        <!-- <img class="injectable rotate-y hw-18 mr-2" src="./../../assets/media/heroicons/outline/reply.svg" alt="message forward"> -->
                                        <span>Forward</span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <!-- Default :: Inline SVG -->
                                        <svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg>

                                        <!-- Alternate :: External File link -->
                                        <!-- <img class="injectable hw-18 mr-2" src="./../../assets/media/heroicons/outline/star.svg" alt="message favourite"> -->
                                        <span>Favourite</span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center text-danger"
                                        href="#">
                                        <!-- Default :: Inline SVG -->
                                        <svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>

                                        <!-- Alternate :: External File link -->
                                        <!-- <img class="injectable hw-18 mr-2" src="./../../assets/media/heroicons/outline/trash.svg" alt="message delete"> -->
                                        <span>Delete</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
        return selfMessage;
        
    }

    const checkMessage = () => {
        console.log(message)
    }
</script>