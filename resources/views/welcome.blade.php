
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <!-- Viewport-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
        <!-- SEO Meta Tags-->
        <meta name="keywords" content="quicky, chat, messenger, conversation, social, communication" />
        <meta name="description"
            content="Quicky is a Bootstrap based modern and fully responsive Messaging template to help build Messaging or Chat application fast and easy." />
        <meta name="subject" content="communication">
        <meta name="copyright" content="frontendmatters">
        <meta name="revised" content="Tuesday, November 10th, 2020, 08:00 am" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Quicky - HTML Chat Template</title>
        <!-- Favicon and Touch Icons-->
        <link rel="apple-touch-icon" sizes="180x180" href="./../../apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./../../favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./../../favicon-16x16.png">
        <link rel="shortcut icon" href="./../../favicon.ico" />
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="{{asset('admin')}}/css/inter.css">
        <link rel="stylesheet" href="{{asset('admin')}}/css/app.min.css">
        <script type="application/javascript" src="{{ asset('js/app.js') }}"></script>

    </head>

    <body class="chats-tab-open">

        <!-- Main Layout Start -->
        <div class="main-layout">
            <!-- Navigation Start -->
            <div class="navigation navbar navbar-light bg-primary">
                <!-- Logo Start -->
                <a class="d-none d-xl-block bg-light rounded p-1" href="./../../index.html">
                    <svg height="30" width="30" viewBox="0 0 512 511">
                        <g>
                            <path
                                d="m120.65625 512.476562c-7.25 0-14.445312-2.023437-20.761719-6.007812-10.929687-6.902344-17.703125-18.734375-18.117187-31.660156l-1.261719-41.390625c-51.90625-46.542969-80.515625-111.890625-80.515625-183.992188 0-68.816406 26.378906-132.101562 74.269531-178.199219 47.390625-45.609374 111.929688-70.726562 181.730469-70.726562s134.339844 25.117188 181.730469 70.726562c47.890625 46.097657 74.269531 109.382813 74.269531 178.199219 0 68.8125-26.378906 132.097657-74.269531 178.195313-47.390625 45.609375-111.929688 70.730468-181.730469 70.730468-25.164062 0-49.789062-3.253906-73.195312-9.667968l-46.464844 20.5c-5.035156 2.207031-10.371094 3.292968-15.683594 3.292968zm135.34375-471.976562c-123.140625 0-216 89.816406-216 208.925781 0 60.667969 23.957031 115.511719 67.457031 154.425781 8.023438 7.226563 12.628907 17.015626 13.015625 27.609376l.003906.125 1.234376 40.332031 45.300781-19.988281c8.15625-3.589844 17.355469-4.28125 25.921875-1.945313 20.132812 5.554687 41.332031 8.363281 63.066406 8.363281 123.140625 0 216-89.816406 216-208.921875 0-119.109375-92.859375-208.925781-216-208.925781zm-125.863281 290.628906 74.746093-57.628906c5.050782-3.789062 12.003907-3.839844 17.101563-.046875l55.308594 42.992187c16.578125 12.371094 40.304687 8.007813 51.355469-9.433593l69.519531-110.242188c6.714843-10.523437-6.335938-22.417969-16.292969-14.882812l-74.710938 56.613281c-5.050781 3.792969-12.003906 3.839844-17.101562.046875l-55.308594-41.988281c-16.578125-12.371094-40.304687-8.011719-51.355468 9.429687l-69.554688 110.253907c-6.714844 10.523437 6.335938 22.421874 16.292969 14.886718zm0 0"
                                data-original="#000000" class="active-path" data-old_color="#000000" fill="#665dfe" />
                        </g>
                    </svg>
                </a>
                <!-- Logo End -->

                <!-- Main Nav Start -->
                <ul class="nav nav-minimal flex-row flex-grow-1 justify-content-between flex-xl-column justify-content-xl-center"
                    id="mainNavTab" role="tablist">

                    <!-- Chats Tab Start -->
                    <li class="nav-item">
                        <a class="nav-link p-0 py-xl-3 active" id="chats-tab" href="#chats-content" title="Chats">
                            <!-- Default :: Inline SVG -->
                            <svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                            </svg>

                            <!-- Alternate :: External File link -->
                            <!-- <img class="injectable hw-24" src="./../../assets/media/heroicons/outline/chat-alt-2.svg" alt="Chat icon"> -->
                        </a>
                    </li>
                    <!-- Chats Tab End -->

                    <!-- Calls Tab Start -->
                    <li class="nav-item">
                        <a class="nav-link p-0 py-xl-3 " id="calls-tab" href="#calls-content" title="Calls">
                            <!-- Default :: Inline SVG -->
                            <svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>

                            <!-- Alternate :: External File link -->
                            <!-- <img class="injectable hw-24" src="./../../assets/media/heroicons/outline/phone.svg" alt="Phone icon"> -->
                        </a>
                    </li>
                    <!-- Calls Tab End -->

                    <!-- Friends Tab Start -->
                    <li class="nav-item">
                        <a class="nav-link p-0 py-xl-3" id="friends-tab" href="#friends-content" title="Friends">
                            <!-- Default :: Inline SVG -->
                            <svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>

                            <!-- Alternate :: External File link -->
                            <!-- <img class="injectable hw-24" src="./../../assets/media/heroicons/outline/users.svg" alt="Friends icon"> -->
                        </a>
                    </li>
                    <!-- Friends Tab End -->

                    <!-- Profile Tab Start -->
                    <li class="nav-item">
                        <a class="nav-link p-0 py-xl-3" id="profile-tab" href="#profile-content" title="Profile">
                            <!-- Default :: Inline SVG -->
                            <svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            <!-- Alternate :: External File link -->
                            <!-- <img class="injectable hw-24" src="./../../assets/media/heroicons/outline/user-circle.svg" alt="Profile icon"> -->
                        </a>
                    </li>
                    <!-- Profile Tab End -->
                </ul>
                <!-- Main Nav End -->
            </div>
            <!-- Navigation End -->

            <!-- Sidebar Start -->
            <aside class="sidebar">
                <!-- Tab Content Start -->
                <div class="tab-content">
                    <!-- Chat Tab Content Start -->
                    <div class="tab-pane active" id="chats-content">
                        <div class="d-flex flex-column h-100">
                            <div class="hide-scrollbar h-100" id="chatContactsList">

                                <!-- Chat Header Start -->
                                <div class="sidebar-header sticky-top p-2">

                                    <div class="d-flex justify-content-between align-items-center">
                                        <!-- Chat Tab Pane Title Start -->
                                        <h5 class="font-weight-semibold mb-0">Chats</h5>
                                        <!-- Chat Tab Pane Title End -->

                                        <ul class="nav flex-nowrap">

                                            <li class="nav-item list-inline-item mr-1">
                                                <a class="nav-link text-muted px-1" href="#" title="Notifications"
                                                    role="button" data-toggle="modal" data-target="#notificationModal">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/bell.svg" alt=""> -->
                                                </a>
                                            </li>

                                            <li class="nav-item list-inline-item d-block d-xl-none mr-1">
                                                <a class="nav-link text-muted px-1" href="#" title="Appbar"
                                                    data-toggle-appbar="">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-20" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path
                                                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                                        </path>
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="hw-20" src="./../../assets/media/heroicons/outline/view-grid.svg" alt="" class="injectable hw-20"> -->
                                                </a>
                                            </li>

                                            <li class="nav-item list-inline-item mr-0">
                                                <div class="dropdown">
                                                    <a class="nav-link text-muted px-1" href="#" role="button"
                                                        title="Details" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                        </svg>

                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img  class="injectable hw-20" src="./../../assets/media/heroicons/outline/dots-vertical.svg" alt=""> -->
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" role="button"
                                                            data-toggle="modal" data-target="#startConversation">New
                                                            Chat</a>
                                                        <a class="dropdown-item" href="#" role="button"
                                                            data-toggle="modal" data-target="#createGroup">Create
                                                            Group</a>
                                                        <a class="dropdown-item" href="#" role="button"
                                                            data-toggle="modal" data-target="#inviteOthers">Invite
                                                            Others</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- Sidebar Header Start -->
                                    <div class="sidebar-sub-header">
                                        <!-- Sidebar Header Dropdown Start -->
                                        <div class="dropdown mr-2">
                                            <!-- Dropdown Button Start -->
                                            <button class="btn btn-outline-default dropdown-toggle" type="button"
                                                data-chat-filter-list="" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                All Chats
                                            </button>
                                            <!-- Dropdown Button End -->

                                            <!-- Dropdown Menu Start -->
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" data-chat-filter="" data-select="all-chats"
                                                    href="#">All Chats</a>
                                                <a class="dropdown-item" data-chat-filter="" data-select="friends"
                                                    href="#">Friends</a>
                                                <a class="dropdown-item" data-chat-filter="" data-select="groups"
                                                    href="#">Groups</a>
                                                <a class="dropdown-item" data-chat-filter="" data-select="unread"
                                                    href="#">Unread</a>
                                                <a class="dropdown-item" data-chat-filter="" data-select="archived"
                                                    href="#">Archived</a>
                                            </div>
                                            <!-- Dropdown Menu End -->
                                        </div>
                                        <!-- Sidebar Header Dropdown End -->

                                        <!-- Sidebar Search Start -->
                                        <form class="form-inline">
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control search border-right-0 transparent-bg pr-0"
                                                    placeholder="Search users">
                                                <div class="input-group-append">
                                                    <div class="input-group-text transparent-bg border-left-0"
                                                        role="button">
                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                                        </svg>

                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/search.svg" alt=""> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- Sidebar Search End -->
                                    </div>
                                    <!-- Sidebar Header End -->
                                </div>
                                <!-- Chat Header End -->

                                <!-- Chat Contact List Start -->
                                <ul class="contacts-list" id="chatContactTab" data-chat-list="">
                                    <!-- Chat Item Start -->
                                    <li class="contacts-item friends active">
                                        <a class="contacts-link" href="javascript:;">
                                            <div class="avatar avatar-online">
                                                <img src="./../../assets/media/avatar/2.png" alt="">
                                            </div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name text-truncate">Catherine Richardson</h6>
                                                    <div class="chat-time">Just now</div>
                                                </div>
                                                <div class="contacts-texts">
                                                    <p class="text-truncate">I’m sorry, I didn’t catch that. Could you
                                                        please repeat?</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- Chat Item End -->

                                    <!-- Chat Item Start -->
                                    <li class="contacts-item groups">
                                        <a class="contacts-link" href="./chat-2.html">
                                            <div class="avatar bg-success text-light">
                                                <span>
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-24" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable" src="./../../assets/media/heroicons/outline/user-group.svg" alt=""> -->
                                                </span>
                                            </div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name">Themeforest Group</h6>
                                                    <div class="chat-time"><span>10:20 pm</span></div>
                                                </div>
                                                <div class="contacts-texts">
                                                    <p class="text-truncate"><span>Jeny: </span>That’s pretty common. I
                                                        heard that a lot of people had the same experience.</p>
                                                    <div class="d-inline-flex align-items-center ml-1">
                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="hw-16 text-muted" viewBox="0 0 20 20"
                                                            fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                                clip-rule="evenodd" />
                                                        </svg>

                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img class="injectable hw-16 text-muted" src="./../../assets/media/heroicons/solid/lock-closed.svg" alt=""> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- Chat Item End -->

                                    <!-- Chat Item Start -->
                                    <li class="contacts-item friends unread">
                                        <a class="contacts-link" href="#">
                                            <div class="avatar avatar-offline bg-info text-light">
                                                <span>EW</span>
                                            </div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name">Eva Walker</h6>
                                                    <div class="chat-time">09:36 am</div>
                                                </div>
                                                <div class="contacts-texts">
                                                    <p class="text-truncate">You’re kidding! I drive a motorcycle as
                                                        well. What type of bike do you have?</p>
                                                    <div class="badge badge-rounded badge-primary ml-1">2</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- Chat Item End -->

                                    <!-- Chat Item Start -->
                                    <li class="contacts-item friends">
                                        <a class="contacts-link" href="#">
                                            <div class="avatar avatar-busy"><img src="./../../assets/media/avatar/3.png"
                                                    alt=""></div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name">Christopher Garcia</h6>
                                                    <div class="chat-time"><span>Yesterday</span></div>
                                                </div>
                                                <div class="contacts-texts">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-20 text-muted" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-20 text-muted" src="./../../assets/media/heroicons/solid/photograph.svg" alt=""> -->
                                                    <p class="text-truncate">Photo</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- Chat Item End -->

                                    <!-- Chat Item Start -->
                                    <li class="contacts-item unread">
                                        <a class="contacts-link" href="#">
                                            <div class="avatar avatar-online">
                                                <img src="./../../assets/media/avatar/4.png" alt="">
                                            </div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name">Christina Turner</h6>
                                                    <div class="chat-time">
                                                        <span>31/05/20</span>
                                                    </div>
                                                </div>
                                                <div class="contacts-texts">
                                                    <p class="text-truncate">I’m working hard in Maths, Physics and
                                                        Chemistry. I have planning to appear in I.I.T. after XII.</p>
                                                    <div class="badge badge-rounded badge-primary ml-1">10</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- Chat Item End -->

                                    <!-- Chat Item Start -->
                                    <li class="contacts-item friends">
                                        <a class="contacts-link" href="#">
                                            <div class="avatar avatar-offline">
                                                <img src="./../../assets/media/avatar/5.png" alt="">
                                            </div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name">Tammy Martinez</h6>
                                                    <div class="chat-time">
                                                        <span>24/04/20</span>
                                                    </div>
                                                </div>
                                                <div class="contacts-texts">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-20 text-muted" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-20 text-muted" src="./../../assets/media/heroicons/solid/document-report.svg" alt=""> -->
                                                    <p class="text-truncate">project_guidelines.docs</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- Chat Item End -->

                                    <!-- Chat Item Start -->
                                    <li class="contacts-item friends">
                                        <a class="contacts-link" href="#">
                                            <div class="avatar avatar-online"><img
                                                    src="./../../assets/media/avatar/6.png" alt=""></div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name">Bonnie Torres</h6>
                                                    <div class="chat-time"><span>20/04/20</span></div>
                                                </div>
                                                <div class="contacts-texts">
                                                    <p class="text-truncate">Catch you later! Bye-bye!</p>
                                                    <div class="d-inline-flex align-items-center ml-1">
                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="hw-16 text-muted" viewBox="0 0 20 20"
                                                            fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM12.293 7.293a1 1 0 011.414 0L15 8.586l1.293-1.293a1 1 0 111.414 1.414L16.414 10l1.293 1.293a1 1 0 01-1.414 1.414L15 11.414l-1.293 1.293a1 1 0 01-1.414-1.414L13.586 10l-1.293-1.293a1 1 0 010-1.414z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img class="injectable hw-16 text-muted" src="./../../assets/media/heroicons/solid/volume-off.svg" alt=""> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- Chat Item End -->

                                    <!-- Chat Item Start -->
                                    <li class="contacts-item friends">
                                        <a class="contacts-link" href="#">
                                            <div class="avatar avatar-offline"><img
                                                    src="./../../assets/media/avatar/7.png" alt=""></div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name">Jacqueline James</h6>
                                                    <div class="chat-time"><span>15/02/20</span></div>
                                                </div>
                                                <div class="contacts-texts">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-16 text-muted" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path
                                                            d="M14.414 7l3.293-3.293a1 1 0 00-1.414-1.414L13 5.586V4a1 1 0 10-2 0v4.003a.996.996 0 00.617.921A.997.997 0 0012 9h4a1 1 0 100-2h-1.586z" />
                                                        <path
                                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-16 text-muted" src="./../../assets/media/heroicons/solid/phone-incoming.svg" alt=""> -->
                                                    <p class="text-truncate">Missed call</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- Chat Item End -->

                                    <!-- Chat Item Start -->
                                    <li class="contacts-item archived">
                                        <a class="contacts-link" href="#">
                                            <div class="avatar avatar-away"><img src="./../../assets/media/avatar/8.png"
                                                    alt=""></div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name">Annie Richardson</h6>
                                                    <div class="chat-time"><span>26/12/19</span></div>
                                                </div>
                                                <div class="contacts-texts">
                                                    <p class="text-truncate">I think I have everything I need, thank
                                                        you!</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- Chat Item End -->
                                </ul>
                                <!-- Chat Contact List End -->
                            </div>
                        </div>
                    </div>
                    <!-- Chats Tab Content End -->

                    <!-- Calls Tab Content Start -->
                    <div class="tab-pane" id="calls-content">
                        <div class="d-flex flex-column h-100">
                            <div class="hide-scrollbar h-100" id="callContactsList">
                                <!-- Chat Header Start -->
                                <div class="sidebar-header sticky-top p-2">

                                    <div class="d-flex justify-content-between align-items-center">
                                        <!-- Chat Tab Pane Title Start -->
                                        <h5 class="font-weight-semibold mb-0">Calls</h5>
                                        <!-- Chat Tab Pane Title End -->

                                        <ul class="nav flex-nowrap">

                                            <li class="nav-item list-inline-item mr-1">
                                                <a class="nav-link text-muted px-1" href="#" title="Notifications"
                                                    role="button" data-toggle="modal" data-target="#notificationModal">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img src="./../../assets/media/heroicons/outline/bell.svg" alt="" class="injectable hw-20"> -->
                                                </a>
                                            </li>

                                            <li class="nav-item list-inline-item mr-0">
                                                <div class="dropdown">
                                                    <a class="nav-link text-muted px-1" href="#" role="button"
                                                        title="Details" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                        </svg>

                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img src="./../../assets/media/heroicons/outline/dots-vertical.svg" alt="" class="injectable hw-20"> -->
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" role="button"
                                                            data-toggle="modal" data-target="#startConversation">New
                                                            Chat</a>
                                                        <a class="dropdown-item" href="#" role="button"
                                                            data-toggle="modal" data-target="#createGroup">Create
                                                            Group</a>
                                                        <a class="dropdown-item" href="#" role="button"
                                                            data-toggle="modal" data-target="#inviteOthers">Invite
                                                            Others</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- Sidebar Header Start -->
                                    <div class="sidebar-sub-header">
                                        <!-- Sidebar Header Dropdown Start -->
                                        <div class="dropdown mr-2">
                                            <!-- Dropdown Button Start -->
                                            <button class="btn btn-outline-default dropdown-toggle" type="button"
                                                data-chat-filter-list="" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                All Chats
                                            </button>
                                            <!-- Dropdown Button End -->

                                            <!-- Dropdown Menu Start -->
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" data-chat-filter="" data-select="all-chats"
                                                    href="#">All Chats</a>
                                                <a class="dropdown-item" data-chat-filter="" data-select="friends"
                                                    href="#">Friends</a>
                                                <a class="dropdown-item" data-chat-filter="" data-select="groups"
                                                    href="#">Groups</a>
                                                <a class="dropdown-item" data-chat-filter="" data-select="unread"
                                                    href="#">Unread</a>
                                                <a class="dropdown-item" data-chat-filter="" data-select="archived"
                                                    href="#">Archived</a>
                                            </div>
                                            <!-- Dropdown Menu End -->
                                        </div>
                                        <!-- Sidebar Header Dropdown End -->

                                        <!-- Sidebar Search Start -->
                                        <form class="form-inline">
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control search border-right-0 transparent-bg pr-0"
                                                    placeholder="Search users">
                                                <div class="input-group-append">
                                                    <div class="input-group-text transparent-bg border-left-0"
                                                        role="button">
                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                                        </svg>

                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/search.svg" alt=""> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- Sidebar Search End -->
                                    </div>
                                    <!-- Sidebar Header End -->
                                </div>
                                <!-- Chat Header End -->

                                <!-- Call Contact List Start -->
                                <ul class="contacts-list" id="callLogTab" data-call-list="">

                                    <!-- Call Item Start -->
                                    <li class="contacts-item incoming active">
                                        <a href="#" class="media-link"></a>
                                        <div class="contacts-link">
                                            <div class="avatar">
                                                <img src="./../../assets/media/avatar/2.png" alt="">
                                            </div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name text-truncate">Catherine Richardson</h6>
                                                </div>
                                                <div class="contacts-texts">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path
                                                            d="M14.414 7l3.293-3.293a1 1 0 00-1.414-1.414L13 5.586V4a1 1 0 10-2 0v4.003a.996.996 0 00.617.921A.997.997 0 0012 9h4a1 1 0 100-2h-1.586z" />
                                                        <path
                                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-16 text-muted mr-1" src="./../../assets/media/heroicons/solid/phone-incoming.svg" alt=""> -->
                                                    <p class="text-muted mb-0">Just now</p>
                                                </div>
                                            </div>
                                            <div class="contacts-action">
                                                <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted"
                                                    type="button">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Call Item End -->

                                    <!-- Call Item Start -->
                                    <li class="contacts-item outgoing">
                                        <a href="#" class="media-link"></a>
                                        <div class="contacts-link outgoing">
                                            <div class="avatar bg-info text-light">
                                                <span>EW</span>
                                            </div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name text-truncate">Eva Walker</h6>
                                                </div>
                                                <div class="contacts-texts">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path
                                                            d="M17.924 2.617a.997.997 0 00-.215-.322l-.004-.004A.997.997 0 0017 2h-4a1 1 0 100 2h1.586l-3.293 3.293a1 1 0 001.414 1.414L16 5.414V7a1 1 0 102 0V3a.997.997 0 00-.076-.383z" />
                                                        <path
                                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-16 text-muted mr-1" src="./../../assets/media/heroicons/solid/phone-outgoing.svg" alt=""> -->
                                                    <p class="text-muted mb-0">5 mins ago</p>
                                                </div>
                                            </div>
                                            <div class="contacts-action">
                                                <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted"
                                                    type="button">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Call Item End -->

                                    <!-- Call Item Start -->
                                    <li class="contacts-item missed">
                                        <a href="#" class="media-link"></a>
                                        <div class="contacts-link missed">
                                            <div class="avatar">
                                                <img src="./../../assets/media/avatar/3.png" alt="">
                                            </div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name text-truncate">Christopher Garcia</h6>
                                                </div>
                                                <div class="contacts-texts">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-16 text-danger mr-1" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path
                                                            d="M14.414 7l3.293-3.293a1 1 0 00-1.414-1.414L13 5.586V4a1 1 0 10-2 0v4.003a.996.996 0 00.617.921A.997.997 0 0012 9h4a1 1 0 100-2h-1.586z" />
                                                        <path
                                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-16 text-danger mr-1" src="./../../assets/media/heroicons/solid/phone-incoming.svg" alt=""> -->
                                                    <p class="text-danger mb-0">20 mins ago</p>
                                                </div>
                                            </div>
                                            <div class="contacts-action">
                                                <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted"
                                                    type="button">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Call Item End -->

                                    <!-- Call Item Start -->
                                    <li class="contacts-item outgoing">
                                        <a href="#" class="media-link"></a>
                                        <div class="contacts-link outgoing">
                                            <div class="avatar">
                                                <img src="./../../assets/media/avatar/4.png" alt="">
                                            </div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name text-truncate">Christina Turner</h6>
                                                </div>
                                                <div class="contacts-texts">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path
                                                            d="M17.924 2.617a.997.997 0 00-.215-.322l-.004-.004A.997.997 0 0017 2h-4a1 1 0 100 2h1.586l-3.293 3.293a1 1 0 001.414 1.414L16 5.414V7a1 1 0 102 0V3a.997.997 0 00-.076-.383z" />
                                                        <path
                                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-16 text-muted mr-1" src="./../../assets/media/heroicons/solid/phone-outgoing.svg" alt=""> -->
                                                    <p class="text-muted mb-0">4 hour ago</p>
                                                </div>
                                            </div>
                                            <div class="contacts-action">
                                                <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted"
                                                    type="button">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Call Item End -->

                                    <!-- Call Item Start -->
                                    <li class="contacts-item incoming">
                                        <a href="#" class="media-link"></a>
                                        <div class="contacts-link incoming">
                                            <div class="avatar">
                                                <img src="./../../assets/media/avatar/5.png" alt="">
                                            </div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name text-truncate">Tammy Martinez</h6>
                                                </div>
                                                <div class="contacts-texts">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path
                                                            d="M14.414 7l3.293-3.293a1 1 0 00-1.414-1.414L13 5.586V4a1 1 0 10-2 0v4.003a.996.996 0 00.617.921A.997.997 0 0012 9h4a1 1 0 100-2h-1.586z" />
                                                        <path
                                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-16 text-muted mr-1" src="./../../assets/media/heroicons/solid/phone-incoming.svg" alt=""> -->
                                                    <p class="text-muted mb-0">Yesterday</p>
                                                </div>
                                            </div>
                                            <div class="contacts-action">
                                                <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted"
                                                    type="button">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Call Item End -->

                                    <!-- Call Item Start -->
                                    <li class="contacts-item incoming">
                                        <a href="#" class="media-link"></a>
                                        <div class="contacts-link incoming">
                                            <div class="avatar">
                                                <img src="./../../assets/media/avatar/6.png" alt="">
                                            </div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name text-truncate">Bonnie Torres</h6>
                                                </div>
                                                <div class="contacts-texts">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path
                                                            d="M14.414 7l3.293-3.293a1 1 0 00-1.414-1.414L13 5.586V4a1 1 0 10-2 0v4.003a.996.996 0 00.617.921A.997.997 0 0012 9h4a1 1 0 100-2h-1.586z" />
                                                        <path
                                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-16 text-muted mr-1" src="./../../assets/media/heroicons/solid/phone-incoming.svg" alt=""> -->
                                                    <p class="text-muted mb-0">12/06/2020</p>
                                                </div>
                                            </div>
                                            <div class="contacts-action">
                                                <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted"
                                                    type="button">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Call Item End -->

                                    <!-- Call Item Start -->
                                    <li class="contacts-item outgoing">
                                        <a href="#" class="media-link"></a>
                                        <div class="contacts-link outgoing">
                                            <div class="avatar">
                                                <img src="./../../assets/media/avatar/7.png" alt="">
                                            </div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name text-truncate">Jacqueline James</h6>
                                                </div>
                                                <div class="contacts-texts">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path
                                                            d="M17.924 2.617a.997.997 0 00-.215-.322l-.004-.004A.997.997 0 0017 2h-4a1 1 0 100 2h1.586l-3.293 3.293a1 1 0 001.414 1.414L16 5.414V7a1 1 0 102 0V3a.997.997 0 00-.076-.383z" />
                                                        <path
                                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-16 text-muted mr-1" src="./../../assets/media/heroicons/solid/phone-outgoing.svg" alt=""> -->
                                                    <p class="text-muted mb-0">16/05/2020</p>
                                                </div>
                                            </div>
                                            <div class="contacts-action">
                                                <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted"
                                                    type="button">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Call Item End -->

                                </ul>
                                <!-- Call Contact List Start -->
                            </div>
                        </div>
                    </div>
                    <!-- Calls Tab Content End -->

                    <!-- Friends Tab Content Start -->
                    <div class="tab-pane" id="friends-content">
                        <div class="d-flex flex-column h-100">
                            <div class="hide-scrollbar" id="friendsList">
                                <!-- Chat Header Start -->
                                <div class="sidebar-header sticky-top p-2">

                                    <div class="d-flex justify-content-between align-items-center">
                                        <!-- Chat Tab Pane Title Start -->
                                        <h5 class="font-weight-semibold mb-0">Friends</h5>
                                        <!-- Chat Tab Pane Title End -->

                                        <ul class="nav flex-nowrap">

                                            <li class="nav-item list-inline-item mr-1">
                                                <a class="nav-link text-muted px-1" href="#" title="Notifications"
                                                    role="button" data-toggle="modal" data-target="#notificationModal">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img src="./../../assets/media/heroicons/outline/bell.svg" alt="" class="injectable hw-20"> -->
                                                </a>
                                            </li>

                                            <li class="nav-item list-inline-item mr-0">
                                                <div class="dropdown">
                                                    <a class="nav-link text-muted px-1" href="#" role="button"
                                                        title="Details" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                        </svg>

                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img src="./../../assets/media/heroicons/outline/dots-vertical.svg" alt="" class="injectable hw-20"> -->
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" role="button"
                                                            data-toggle="modal" data-target="#startConversation">New
                                                            Chat</a>
                                                        <a class="dropdown-item" href="#" role="button"
                                                            data-toggle="modal" data-target="#createGroup">Create
                                                            Group</a>
                                                        <a class="dropdown-item" href="#" role="button"
                                                            data-toggle="modal" data-target="#inviteOthers">Invite
                                                            Others</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- Sidebar Header Start -->
                                    <div class="sidebar-sub-header">
                                        <!-- Sidebar Header Dropdown Start -->
                                        <div class="dropdown mr-2">
                                            <!-- Dropdown Button Start -->
                                            <button class="btn btn-outline-default dropdown-toggle" type="button"
                                                data-chat-filter-list="" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                All Chats
                                            </button>
                                            <!-- Dropdown Button End -->

                                            <!-- Dropdown Menu Start -->
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" data-chat-filter="" data-select="all-chats"
                                                    href="#">All Chats</a>
                                                <a class="dropdown-item" data-chat-filter="" data-select="friends"
                                                    href="#">Friends</a>
                                                <a class="dropdown-item" data-chat-filter="" data-select="groups"
                                                    href="#">Groups</a>
                                                <a class="dropdown-item" data-chat-filter="" data-select="unread"
                                                    href="#">Unread</a>
                                                <a class="dropdown-item" data-chat-filter="" data-select="archived"
                                                    href="#">Archived</a>
                                            </div>
                                            <!-- Dropdown Menu End -->
                                        </div>
                                        <!-- Sidebar Header Dropdown End -->

                                        <!-- Sidebar Search Start -->
                                        <form class="form-inline">
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control search border-right-0 transparent-bg pr-0"
                                                    placeholder="Search users">
                                                <div class="input-group-append">
                                                    <div class="input-group-text transparent-bg border-left-0"
                                                        role="button">
                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                                        </svg>

                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/search.svg" alt=""> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- Sidebar Search End -->
                                    </div>
                                    <!-- Sidebar Header End -->
                                </div>
                                <!-- Chat Header End -->

                                <!-- Friends Contact List Start -->
                                <ul class="contacts-list" id="friendsTab" data-friends-list="">
                                    <!-- Item Series Start -->
                                    <li>
                                        <small class="font-weight-medium text-uppercase text-muted">A</small>
                                    </li>
                                    <!-- Item Series End -->

                                    <!-- friends Item Start -->
                                    <li class="contacts-item active">
                                        <a class="contacts-link" href="#">
                                            <div class="avatar">
                                                <img src="./../../assets/media/avatar/3.png" alt="">
                                            </div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name text-truncate">Albert K. Johansen</h6>
                                                </div>
                                                <div class="contacts-texts">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-16 text-muted mr-1" src="./../../assets/media/heroicons/solid/location-marker.svg" alt=""> -->
                                                    <p class="text-muted mb-0">San Fransisco, CA</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- friends Item End -->

                                    <!-- friends Item Start -->
                                    <li class="contacts-item">
                                        <a class="contacts-link" href="#">
                                            <div class="avatar">
                                                <img src="./../../assets/media/avatar/3.png" alt="">
                                            </div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name text-truncate">Alice R. Botello</h6>
                                                </div>
                                                <div class="contacts-texts">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-16 text-muted mr-1" src="./../../assets/media/heroicons/solid/location-marker.svg" alt=""> -->
                                                    <p class="text-muted mb-0">Brentwood, NY</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- friends Item End -->

                                    <!-- Item Series Start -->
                                    <li>
                                        <small class="font-weight-medium text-uppercase text-muted">b</small>
                                    </li>
                                    <!-- Item Series End -->

                                    <!-- friends Item Start -->
                                    <li class="contacts-item">
                                        <a class="contacts-link" href="#">
                                            <div class="avatar">
                                                <img src="./../../assets/media/avatar/3.png" alt="">
                                            </div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name text-truncate">Brittany K. Williams</h6>
                                                </div>
                                                <div class="contacts-texts">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-16 text-muted mr-1" src="./../../assets/media/heroicons/solid/location-marker.svg" alt=""> -->
                                                    <p class="text-muted mb-0">Scranton, PA</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- friends Item End -->

                                    <!-- Item Series Start -->
                                    <li>
                                        <small class="font-weight-medium text-uppercase text-muted">C</small>
                                    </li>
                                    <!-- Item Series End -->

                                    <!-- friends Item Start -->
                                    <li class="contacts-item">
                                        <a class="contacts-link" href="#">
                                            <div class="avatar">
                                                <img src="./../../assets/media/avatar/3.png" alt="">
                                            </div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name text-truncate">Christopher Garcia</h6>
                                                </div>
                                                <div class="contacts-texts">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-16 text-muted mr-1" src="./../../assets/media/heroicons/solid/location-marker.svg" alt=""> -->
                                                    <p class="text-muted mb-0">Riverside, CA</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- friends Item End -->

                                    <!-- friends Item Start -->
                                    <li class="contacts-item">
                                        <a class="contacts-link" href="#">
                                            <div class="avatar">
                                                <img src="./../../assets/media/avatar/3.png" alt="">
                                            </div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name text-truncate">Casey Mcbride</h6>
                                                </div>
                                                <div class="contacts-texts">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-16 text-muted mr-1" src="./../../assets/media/heroicons/solid/location-marker.svg" alt=""> -->
                                                    <p class="text-muted mb-0">Zephyr, NC</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- friends Item End -->

                                    <!-- Item Series Start -->
                                    <li>
                                        <small class="font-weight-medium text-uppercase text-muted">G</small>
                                    </li>
                                    <!-- Item Series End -->

                                    <!-- friends Item Start -->
                                    <li class="contacts-item">
                                        <a class="contacts-link" href="#">
                                            <div class="avatar">
                                                <img src="./../../assets/media/avatar/3.png" alt="">
                                            </div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name text-truncate">Gemma Mendez</h6>
                                                </div>
                                                <div class="contacts-texts">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-16 text-muted mr-1" src="./../../assets/media/heroicons/solid/location-marker.svg" alt=""> -->
                                                    <p class="text-muted mb-0">Frederick, MD</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- friends Item End -->

                                    <!-- Item Series Start -->
                                    <li>
                                        <small class="font-weight-medium text-uppercase text-muted">k</small>
                                    </li>
                                    <!-- Item Series End -->

                                    <!-- friends Item Start -->
                                    <li class="contacts-item">
                                        <a class="contacts-link" href="#">
                                            <div class="avatar">
                                                <img src="./../../assets/media/avatar/3.png" alt="">
                                            </div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name text-truncate">Katelyn Valdez</h6>
                                                </div>
                                                <div class="contacts-texts">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-16 text-muted mr-1" src="./../../assets/media/heroicons/solid/location-marker.svg" alt=""> -->
                                                    <p class="text-muted mb-0">Jackson, TN</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- friends Item End -->

                                    <!-- friends Item Start -->
                                    <li class="contacts-item">
                                        <a class="contacts-link" href="#">
                                            <div class="avatar">
                                                <img src="./../../assets/media/avatar/3.png" alt="">
                                            </div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name text-truncate">Katherine Schneider</h6>
                                                </div>
                                                <div class="contacts-texts">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-16 text-muted mr-1" src="./../../assets/media/heroicons/solid/location-marker.svg" alt=""> -->
                                                    <p class="text-muted mb-0">Saginaw, MI</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- friends Item End -->

                                    <!-- Item Series Start -->
                                    <li>
                                        <small class="font-weight-medium text-uppercase text-muted">m</small>
                                    </li>
                                    <!-- Item Series End -->

                                    <!-- friends Item Start -->
                                    <li class="contacts-item">
                                        <a class="contacts-link" href="#">
                                            <div class="avatar">
                                                <img src="./../../assets/media/avatar/3.png" alt="">
                                            </div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name text-truncate">Maizie Edwards</h6>
                                                </div>
                                                <div class="contacts-texts">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-16 text-muted mr-1" src="./../../assets/media/heroicons/solid/location-marker.svg" alt=""> -->
                                                    <p class="text-muted mb-0">Greensboro, NC</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- friends Item End -->

                                    <!-- Item Series Start -->
                                    <li>
                                        <small class="font-weight-medium text-uppercase text-muted">s</small>
                                    </li>
                                    <!-- Item Series End -->

                                    <!-- friends Item Start -->
                                    <li class="contacts-item">
                                        <a class="contacts-link" href="#">
                                            <div class="avatar">
                                                <img src="./../../assets/media/avatar/3.png" alt="">
                                            </div>
                                            <div class="contacts-content">
                                                <div class="contacts-info">
                                                    <h6 class="chat-name text-truncate">Susan K. Taylor</h6>
                                                </div>
                                                <div class="contacts-texts">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-16 text-muted mr-1" src="./../../assets/media/heroicons/solid/location-marker.svg" alt=""> -->
                                                    <p class="text-muted mb-0">Centerville, VA</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- friends Item End -->

                                </ul>
                                <!-- Friends Contact List End -->
                            </div>
                        </div>
                    </div>
                    <!-- Friends Tab Content End -->

                    <!-- Profile Tab Content Start -->
                    <div class="tab-pane" id="profile-content">
                        <div class="d-flex flex-column h-100">
                            <div class="hide-scrollbar">
                                <!-- Sidebar Header Start -->
                                <div class="sidebar-header sticky-top p-2 mb-3">
                                    <h5 class="font-weight-semibold">Profile</h5>
                                    <p class="text-muted mb-0">Personal Information & Settings</p>
                                </div>
                                <!-- Sidebar Header end -->

                                <!-- Sidebar Content Start -->
                                <div class="container-xl">
                                    <div class="row">
                                        <div class="col">

                                            <!-- Card Start -->
                                            <div class="card card-body card-bg-5">

                                                <!-- Card Details Start -->
                                                <div class="d-flex flex-column align-items-center">
                                                    <div class="avatar avatar-lg mb-3">
                                                        <img class="avatar-img" src="./../../assets/media/avatar/3.png"
                                                            alt="">
                                                    </div>

                                                    <div class="d-flex flex-column align-items-center">
                                                        <h5>Catherine Richardson</h5>
                                                    </div>

                                                    <div class="d-flex">
                                                        <button class="btn btn-outline-default mx-1" type="button">
                                                            <!-- Default :: Inline SVG -->
                                                            <svg class="hw-18 d-none d-sm-inline-block" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                                            </svg>

                                                            <!-- Alternate :: External File link -->
                                                            <!-- <img class="injectable hw-18 d-sm-inline-block" src="./../../assets/media/heroicons/outline/logout.svg" alt=""> -->
                                                            <span>Logout</span>
                                                        </button>
                                                        <button class="btn btn-outline-default mx-1 d-xl-none"
                                                            data-profile-edit="" type="button">
                                                            <!-- Default :: Inline SVG -->
                                                            <svg class="hw-18 d-none d-sm-inline-block" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            </svg>

                                                            <!-- Alternate :: External File link -->
                                                            <!-- <img class="injectable hw-18 d-sm-inline-block" src="./../../assets/media/heroicons/outline/cog.svg" alt=""> -->
                                                            <span>Settings</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- Card Details End -->

                                                <!-- Card Options Start -->
                                                <div class="card-options">
                                                    <div class="dropdown">
                                                        <button
                                                            class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted text-muted"
                                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <!-- Default :: Inline SVG -->
                                                            <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                            </svg>

                                                            <!-- Alternate :: External File link -->
                                                            <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/dots-vertical.svg" alt=""> -->
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Change Profile Picture</a>
                                                            <a class="dropdown-item" href="#">Change Number</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Card Options End -->

                                            </div>
                                            <!-- Card End -->

                                            <!-- Card Start -->
                                            <div class="card mt-3">

                                                <!-- List Group Start -->
                                                <ul class="list-group list-group-flush">

                                                    <!-- List Group Item Start -->
                                                    <li class="list-group-item py-2">
                                                        <div class="media align-items-center">
                                                            <div class="media-body">
                                                                <p class="small text-muted mb-0">Local Time</p>
                                                                <p class="mb-0">10:25 PM</p>
                                                            </div>
                                                            <!-- Default :: Inline SVG -->
                                                            <svg class="text-muted hw-20 ml-1" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>

                                                            <!-- Alternate :: External File link -->
                                                            <!-- <img class="injectable text-muted hw-20 ml-1" src="./../../assets/media/heroicons/outline/clock.svg" alt=""> -->
                                                        </div>
                                                    </li>
                                                    <!-- List Group Item End -->

                                                    <!-- List Group Item Start -->
                                                    <li class="list-group-item py-2">
                                                        <div class="media align-items-center">
                                                            <div class="media-body">
                                                                <p class="small text-muted mb-0">Birthdate</p>
                                                                <p class="mb-0">20/11/1992</p>
                                                            </div>
                                                            <!-- Default :: Inline SVG -->
                                                            <svg class="text-muted hw-20 ml-1" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                            </svg>

                                                            <!-- Alternate :: External File link -->
                                                            <!-- <img class="injectable text-muted hw-20 ml-1" src="./../../assets/media/heroicons/outline/calendar.svg" alt=""> -->
                                                        </div>
                                                    </li>
                                                    <!-- List Group Item End -->

                                                    <!-- List Group Item Start -->
                                                    <li class="list-group-item py-2">
                                                        <div class="media align-items-center">
                                                            <div class="media-body">
                                                                <p class="small text-muted mb-0">Phone</p>
                                                                <p class="mb-0">+01-222-364522</p>
                                                            </div>
                                                            <!-- Default :: Inline SVG -->
                                                            <svg class="text-muted hw-20 ml-1" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                            </svg>

                                                            <!-- Alternate :: External File link -->
                                                            <!-- <img class="injectable text-muted hw-20 ml-1" src="./../../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                                        </div>
                                                    </li>
                                                    <!-- List Group Item End -->

                                                    <!-- List Group Item Start -->
                                                    <li class="list-group-item py-2">
                                                        <div class="media align-items-center">
                                                            <div class="media-body">
                                                                <p class="small text-muted mb-0">Email</p>
                                                                <p class="mb-0">catherine.richardson@gmail.com</p>
                                                            </div>

                                                            <!-- Default :: Inline SVG -->
                                                            <svg class="text-muted hw-20 ml-1" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                            </svg>

                                                            <!-- Alternate :: External File link -->
                                                            <!-- <img class="injectable text-muted hw-20 ml-1" src="./../../assets/media/heroicons/outline/mail.svg" alt=""> -->
                                                        </div>
                                                    </li>
                                                    <!-- List Group Item End -->

                                                    <!-- List Group Item Start -->
                                                    <li class="list-group-item py-2">
                                                        <div class="media align-items-center">
                                                            <div class="media-body">
                                                                <p class="small text-muted mb-0">Website</p>
                                                                <p class="mb-0">www.catherichardson.com</p>
                                                            </div>
                                                            <!-- Default :: Inline SVG -->
                                                            <svg class="text-muted hw-20 ml-1" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>

                                                            <!-- Alternate :: External File link -->
                                                            <!-- <img class="injectable text-muted hw-20 ml-1" src="./../../assets/media/heroicons/outline/globe.svg" alt=""> -->
                                                        </div>
                                                    </li>
                                                    <!-- List Group Item End -->

                                                    <!-- List Group Item Start -->
                                                    <li class="list-group-item pt-2">
                                                        <div class="media align-items-center">
                                                            <div class="media-body">
                                                                <p class="small text-muted mb-0">Address</p>
                                                                <p class="mb-0">1134 Ridder Park Road, San Fransisco, CA
                                                                    94851</p>
                                                            </div>
                                                            <!-- Default :: Inline SVG -->
                                                            <svg class="text-muted hw-20 ml-1" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                                            </svg>

                                                            <!-- Alternate :: External File link -->
                                                            <!-- <img class="injectable text-muted hw-20 ml-1" src="./../../assets/media/heroicons/outline/dashboard.svg" alt=""> -->
                                                        </div>
                                                    </li>
                                                    <!-- List Group Item End -->

                                                </ul>
                                                <!-- List Group End -->

                                            </div>
                                            <!-- Card End -->

                                            <!-- Card Start -->
                                            <div class="card my-3">

                                                <!-- List Group Start -->
                                                <ul class="list-group list-group-flush">

                                                    <!-- List Group Item Start -->
                                                    <li class="list-group-item py-2">
                                                        <div class="media align-items-center">
                                                            <div class="media-body">
                                                                <p class="small text-muted mb-0">Facebook</p>
                                                                <a class="font-size-sm font-weight-medium"
                                                                    href="#">@cathe.richardson</a>
                                                            </div>
                                                            <!-- Default :: Inline SVG -->
                                                            <svg class="text-muted hw-20 ml-1" viewBox="0 0 24 24"
                                                                fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path
                                                                    d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                                            </svg>

                                                            <!-- Alternate :: External File link -->
                                                            <!-- <img class="injectable text-muted hw-20 ml-1" src="./../../assets/media/icons/facebook.svg" alt=""> -->
                                                        </div>
                                                    </li>
                                                    <!-- List Group Item End -->

                                                    <!-- List Group Item Start -->
                                                    <li class="list-group-item py-2">
                                                        <div class="media align-items-center">
                                                            <div class="media-body">
                                                                <p class="small text-muted mb-0">Twitter</p>
                                                                <a class="font-size-sm font-weight-medium"
                                                                    href="#">@cathe.richardson</a>
                                                            </div>
                                                            <!-- Default :: Inline SVG -->
                                                            <svg class="text-muted hw-20 ml-1" viewBox="0 0 24 24"
                                                                fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path
                                                                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                                                            </svg>

                                                            <!-- Alternate :: External File link -->
                                                            <!-- <img class="injectable text-muted hw-20 ml-1" src="./../../assets/media/icons/twitter.svg" alt=""> -->
                                                        </div>
                                                    </li>
                                                    <!-- List Group Item End -->

                                                    <!-- List Group Item Start -->
                                                    <li class="list-group-item py-2">
                                                        <div class="media align-items-center">
                                                            <div class="media-body">
                                                                <p class="small text-muted mb-0">Instagram</p>
                                                                <a class="font-size-sm font-weight-medium"
                                                                    href="#">@cathe.richardson</a>
                                                            </div>
                                                            <!-- Default :: Inline SVG -->
                                                            <svg class="text-muted hw-20 ml-1" viewBox="0 0 24 24"
                                                                fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <rect x="2" y="2" width="20" height="20" rx="5"
                                                                    ry="5" />
                                                                <path
                                                                    d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                                                            </svg>

                                                            <!-- Alternate :: External File link -->
                                                            <!-- <img class="injectable text-muted hw-20 ml-1" src="./../../assets/media/icons/instagram.svg" alt=""> -->
                                                        </div>
                                                    </li>
                                                    <!-- List Group Item End -->

                                                    <!-- List Group Item Start -->
                                                    <li class="list-group-item py-2">
                                                        <div class="media align-items-center">
                                                            <div class="media-body">
                                                                <p class="small text-muted mb-0">Linkedin</p>
                                                                <a class="font-size-sm font-weight-medium"
                                                                    href="#">@cathe.richardson</a>
                                                            </div>
                                                            <!-- Default :: Inline SVG -->
                                                            <svg class="text-muted hw-20 ml-1" viewBox="0 0 24 24"
                                                                fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path
                                                                    d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                                                <rect x="2" y="9" width="4" height="12" />
                                                                <circle cx="4" cy="4" r="2" />
                                                            </svg>

                                                            <!-- Alternate :: External File link -->
                                                            <!-- <img class="injectable text-muted hw-20 ml-1" src="./../../assets/media/icons/linkedin.svg" alt=""> -->
                                                        </div>
                                                    </li>
                                                    <!-- List Group Item End -->

                                                </ul>
                                                <!-- List Group End -->

                                            </div>
                                            <!-- Card End -->

                                        </div>
                                    </div>
                                </div>
                                <!-- Sidebar Content End -->
                            </div>
                        </div>
                    </div>
                    <!-- Profile Tab Content End -->
                </div>
                <!-- Tab Content End -->
            </aside>
            <!-- Sidebar End -->

            <!-- Main Start -->
            <main class="main main-visible">

                <!-- Chats Page Start -->
                <div class="chats">
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
                                <div class="message-day">

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

                                    <!-- Received Message Start -->
                                    <div class="message">
                                        <div class="message-wrapper">
                                            <div class="message-content">
                                                <span>I have done a lot of research on the subject, and I know I can
                                                    answer any questions I will receive from the audience.</span>
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

                                    <!-- Received Message Start -->
                                    <div class="message">
                                        <div class="message-wrapper">
                                            <div class="message-content">
                                                <span>I should talk about more precisely the sequence of my
                                                    presentation?</span>
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
                                            <div class="message-content"><span>Yes, what you should present first,
                                                    second and third…</span></div>
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

                                    <!-- Message Start -->
                                    <div class="message">
                                        <div class="message-wrapper">
                                            <div class="message-content">
                                                <div class="document">
                                                    <div
                                                        class="btn btn-primary btn-icon rounded-circle text-light mr-2">
                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="hw-24" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                                        </svg>

                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img class="injectable hw-24" src="./../../assets/media/heroicons/outline/document.svg" alt=""> -->
                                                    </div>

                                                    <div class="document-body">
                                                        <h6>
                                                            <a href="#" class="text-reset"
                                                                title="global-warming-data-2020.xlxs">global-warming-data-2020.xlxs</a>
                                                        </h6>

                                                        <ul class="list-inline small mb-0">
                                                            <li class="list-inline-item">
                                                                <span class="text-muted">79.2 KB</span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span class="text-muted text-uppercase">xlxs</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
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
                                    </div>
                                    <!-- Message End -->

                                    <!-- Received Message Start -->
                                    <div class="message">
                                        <div class="message-wrapper">
                                            <div class="message-content"><span>If that is the case, then I already have
                                                    an outline. To make it easy for my audience to follow the
                                                    presentation, I intend to post the outline on the board at all time
                                                    during my speech.</span></div>
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
                                                        <svg class="hw-18  rotate-y mr-2" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
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
                                </div>
                                <!-- Message Day End -->

                                <!-- Message Day Start -->
                                <div class="message-day">

                                    <div class="message-divider sticky-top pb-2" data-label="Today">&nbsp;</div>

                                    <!-- Self Message Start -->
                                    <div class="message self">
                                        <div class="message-wrapper">
                                            <div class="message-content"><span>Good idea! By the way, do you have any
                                                    facts to back you up? For example, change of climate, yearly
                                                    disasters…</span></div>
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
                                    <!-- Received Message Start -->
                                    <div class="message">
                                        <div class="message-wrapper">
                                            <div class="message-content">
                                                <h6>I have shared some photos, Please have a look.</h6>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <a class="popup-media"
                                                            href="./../../assets/media/shared-photos/01.jpg">
                                                            <img class="img-fluid rounded"
                                                                src="./../../assets/media/shared-photos/01.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="popup-media"
                                                            href="./../../assets/media/shared-photos/02.jpg">
                                                            <img class="img-fluid rounded"
                                                                src="./../../assets/media/shared-photos/02.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="popup-media"
                                                            href="./../../assets/media/shared-photos/03.jpg">
                                                            <img class="img-fluid rounded"
                                                                src="./../../assets/media/shared-photos/03.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
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
                                    </div>
                                    <!-- Received Message End -->

                                    <!-- Received Message Start -->
                                    <div class="message">
                                        <div class="message-wrapper">
                                            <div class="message-content"><span>No, I have not thought about that. I
                                                    better get some statistics from the Internet. I should not have any
                                                    problems since the Internet has all kinds of data.</span></div>
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
                                                        <svg class="hw-18  rotate-y mr-2" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
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
                                            <div class="message-content"><span>Pictures will keep your audience from
                                                    being bored. In order for you to succeed, you need to keep them
                                                    interested and involved.</span></div>
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

                                    <!-- Received Message Start -->
                                    <div class="message">
                                        <div class="message-wrapper">
                                            <div class="message-content"><span>You are absolutely right. I will take
                                                    time to practice and to learn to relax and express myself really
                                                    well. Wish me luck, Catherine!</span></div>
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
                                            <div class="message-content"><span>I know you. You can do it. Good luck,
                                                    Jennifer!</span></div>
                                        </div>
                                        <div class="message-options">
                                            <div class="avatar avatar-sm"><img alt=""
                                                    src="./../../assets/media/avatar/6.png"></div>

                                            <span class="message-date">Just now</span>

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
                            <div class="btn btn-primary btn-icon send-icon rounded-circle text-light mb-1"
                                role="button">
                                <svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>

                                <!-- <img src="./../../assets/media/heroicons/outline/arrow-right.svg" alt="" class="injectable"> -->
                            </div>
                        </div>
                        <!-- Chat Footer End-->
                    </div>

                    <!-- Chat Info Start -->
                    <div class="chat-info">
                        <div class="d-flex h-100 flex-column">

                            <!-- Chat Info Header Start -->
                            <div class="chat-info-header px-2">
                                <div class="container-fluid">
                                    <ul class="nav justify-content-between align-items-center">
                                        <!-- Sidebar Title Start -->
                                        <li class="text-center">
                                            <h5 class="text-truncate mb-0">Profile Details</h5>
                                        </li>
                                        <!-- Sidebar Title End -->

                                        <!-- Close Sidebar Start -->
                                        <li class="nav-item list-inline-item">
                                            <a class="nav-link text-muted px-0" href="#" data-chat-info-close="">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-22" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                </svg>

                                                <!-- Alternate :: External File link -->
                                                <!-- <img class="injectable hw-22" src="./../../assets/media/heroicons/outline/x.svg" alt=""> -->

                                            </a>
                                        </li>
                                        <!-- Close Sidebar End -->
                                    </ul>
                                </div>
                            </div>
                            <!-- Chat Info Header End  -->

                            <!-- Chat Info Body Start  -->
                            <div class="hide-scrollbar flex-fill">

                                <!-- User Profile Start -->
                                <div class="text-center p-3">

                                    <!-- User Profile Picture -->
                                    <div class="avatar avatar-xl mx-5 mb-3">
                                        <img class="avatar-img" src="./../../assets/media/avatar/2.png" alt="">
                                    </div>

                                    <!-- User Info -->
                                    <h5 class="mb-1">Catherine Richardson</h5>
                                    <p class="text-muted d-flex align-items-center justify-content-center">
                                        <!-- Default :: Inline SVG -->
                                        <svg class="hw-18 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>

                                        <!-- Alternate :: External File link -->
                                        <!-- <img class="injectable mr-1 hw-18" src="./../../assets/media/heroicons/outline/location-marker.svg" alt=""> -->
                                        <span>San Fransisco, CA</span>
                                    </p>

                                    <!-- User Quick Options -->
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="btn btn-outline-default btn-icon rounded-circle mx-1">
                                            <!-- Default :: Inline SVG -->
                                            <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                            </svg>

                                            <!-- Alternate :: External File link -->
                                            <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/user-add.svg" alt=""> -->
                                        </div>
                                        <div class="btn btn-primary btn-icon rounded-circle text-light mx-1">
                                            <!-- Default :: Inline SVG -->
                                            <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>

                                            <!-- Alternate :: External File link -->
                                            <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/heart.svg" alt=""> -->
                                        </div>
                                        <div class="btn btn-danger btn-icon rounded-circle text-light mx-1">
                                            <!-- Default :: Inline SVG -->
                                            <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                            </svg>

                                            <!-- Alternate :: External File link -->
                                            <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/ban.svg" alt=""> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- User Profile End -->

                                <!-- User Information Start -->
                                <div class="chat-info-group">
                                    <a class="chat-info-group-header" data-toggle="collapse" href="#profile-info"
                                        role="button" aria-expanded="true" aria-controls="profile-info">
                                        <h6 class="mb-0">User Information</h6>

                                        <!-- Default :: Inline SVG -->
                                        <svg class="hw-20 text-muted" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>

                                        <!-- Alternate :: External File link -->
                                        <!-- <img class="injectable text-muted hw-20" src="./../../assets/media/heroicons/outline/information-circle.svg" alt=""> -->
                                    </a>

                                    <div class="chat-info-group-body collapse show" id="profile-info">
                                        <div class="chat-info-group-content list-item-has-padding">
                                            <!-- List Group Start -->
                                            <ul class="list-group list-group-flush ">

                                                <!-- List Group Item Start -->
                                                <li class="list-group-item border-0">
                                                    <p class="small text-muted mb-0">Phone</p>
                                                    <p class="mb-0">+01-222-364522</p>
                                                </li>
                                                <!-- List Group Item End -->

                                                <!-- List Group Item Start -->
                                                <li class="list-group-item border-0">
                                                    <p class="small text-muted mb-0">Email</p>
                                                    <p class="mb-0">catherine.richardson@gmail.com</p>
                                                </li>
                                                <!-- List Group Item End -->

                                                <!-- List Group Item Start -->
                                                <li class="list-group-item border-0">
                                                    <p class="small text-muted mb-0">Address</p>
                                                    <p class="mb-0">1134 Ridder Park Road, San Fransisco, CA 94851</p>
                                                </li>
                                                <!-- List Group Item End -->
                                            </ul>
                                            <!-- List Group End -->
                                        </div>
                                    </div>
                                </div>
                                <!-- User Information End -->

                                <!-- Shared Media Start -->
                                <div class="chat-info-group">
                                    <a class="chat-info-group-header" data-toggle="collapse" href="#shared-media"
                                        role="button" aria-expanded="true" aria-controls="shared-media">
                                        <h6 class="mb-0">Last Media</h6>

                                        <!-- Default :: Inline SVG -->
                                        <svg class="hw-20 text-muted" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>

                                        <!-- Alternate :: External File link -->
                                        <!-- <img class="injectable text-muted hw-20" src="./../../assets/media/heroicons/outline/photograph.svg" alt=""> -->
                                    </a>

                                    <div class="chat-info-group-body collapse show" id="shared-media">
                                        <div class="chat-info-group-content">
                                            <!-- Shared Media -->
                                            <div class="form-row">
                                                <div class="col-4 col-md-2 col-xl-4">
                                                    <a href="#">
                                                        <img src="./../../assets/media/shared-photos/01.jpg"
                                                            class="img-fluid rounded border" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-4 col-md-2 col-xl-4">
                                                    <a href="#">
                                                        <img src="./../../assets/media/shared-photos/02.jpg"
                                                            class="img-fluid rounded border" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-4 col-md-2 col-xl-4">
                                                    <a href="#">
                                                        <img src="./../../assets/media/shared-photos/03.jpg"
                                                            class="img-fluid rounded border" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Shared Media End -->

                                <!-- Shared Files Start -->
                                <div class="chat-info-group">
                                    <a class="chat-info-group-header" data-toggle="collapse" href="#shared-files"
                                        role="button" aria-expanded="true" aria-controls="shared-files">
                                        <h6 class="mb-0">Documents</h6>

                                        <!-- Default :: Inline SVG -->
                                        <svg class="hw-20 text-muted" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                        </svg>

                                        <!-- Alternate :: External File link -->
                                        <!-- <img class="injectable text-muted hw-20" src="./../../assets/media/heroicons/outline/document.svg" alt=""> -->
                                    </a>

                                    <div class="chat-info-group-body collapse show" id="shared-files">
                                        <div class="chat-info-group-content list-item-has-padding">
                                            <!-- List Group Start -->
                                            <ul class="list-group list-group-flush">

                                                <!-- List Group Item Start -->
                                                <li class="list-group-item">
                                                    <div class="document">
                                                        <div
                                                            class="btn btn-primary btn-icon rounded-circle text-light mr-2">
                                                            <!-- Default :: Inline SVG -->
                                                            <svg class="hw-24" fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                                            </svg>

                                                            <!-- Alternate :: External File link -->
                                                            <!-- <img class="injectable hw-24" src="./../../assets/media/heroicons/outline/document.svg" alt=""> -->
                                                        </div>

                                                        <div class="document-body">
                                                            <h6 class="text-truncate">
                                                                <a href="#" class="text-reset"
                                                                    title="effects-of-global-warming.docs">Effects-of-global-warming.docs</a>
                                                            </h6>

                                                            <ul class="list-inline small mb-0">
                                                                <li class="list-inline-item">
                                                                    <span class="text-muted">79.2 KB</span>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <span class="text-muted text-uppercase">docs</span>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="document-options ml-1">
                                                            <div class="dropdown">
                                                                <button
                                                                    class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted"
                                                                    type="button" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                    <!-- Default :: Inline SVG -->
                                                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                                        stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                                    </svg>

                                                                    <!-- Alternate :: External File link -->
                                                                    <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/dots-vertical.svg" alt=""> -->
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Download</a>
                                                                    <a class="dropdown-item" href="#">Share</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- List Group Item End -->

                                                <!-- List Group Item Start -->
                                                <li class="list-group-item">
                                                    <div class="document">
                                                        <div
                                                            class="btn btn-primary btn-icon rounded-circle text-light mr-2">
                                                            <!-- Default :: Inline SVG -->
                                                            <svg class="hw-24" fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                                            </svg>

                                                            <!-- Alternate :: External File link -->
                                                            <!-- <img class="injectable hw-24" src="./../../assets/media/icons/excel-file.svg" alt=""> -->
                                                        </div>

                                                        <div class="document-body">
                                                            <h6 class="text-truncate">
                                                                <a href="#" class="text-reset"
                                                                    title="global-warming-data-2020.xlxs">Global-warming-data-2020.xlxs</a>
                                                            </h6>

                                                            <ul class="list-inline small mb-0">
                                                                <li class="list-inline-item">
                                                                    <span class="text-muted">79.2 KB</span>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <span class="text-muted text-uppercase">xlxs</span>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="document-options ml-1">
                                                            <div class="dropdown">
                                                                <button
                                                                    class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted"
                                                                    type="button" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                    <!-- Default :: Inline SVG -->
                                                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                                        stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                                    </svg>

                                                                    <!-- Alternate :: External File link -->
                                                                    <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/dots-vertical.svg" alt=""> -->
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">View</a>
                                                                    <a class="dropdown-item" href="#">Share</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- List Group Item End -->

                                                <!-- List Group Item Start -->
                                                <li class="list-group-item">
                                                    <div class="document">
                                                        <div
                                                            class="btn btn-primary btn-icon rounded-circle text-light mr-2">
                                                            <!-- Default :: Inline SVG -->
                                                            <svg class="hw-24" fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                                            </svg>

                                                            <!-- Alternate :: External File link -->
                                                            <!-- <img class="injectable hw-24" src="./../../assets/media/icons/powerpoint-file.svg" alt=""> -->
                                                        </div>

                                                        <div class="document-body">
                                                            <h6 class="text-truncate">
                                                                <a href="#" class="text-reset"
                                                                    title="great-presentation-on global-warming-2020.ppt">Great-presentation-on
                                                                    global-warming-2020.ppt</a>
                                                            </h6>

                                                            <ul class="list-inline small mb-0">
                                                                <li class="list-inline-item">
                                                                    <span class="text-muted">79.2 KB</span>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <span class="text-muted text-uppercase">ppt</span>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="document-options ml-1">
                                                            <div class="dropdown">
                                                                <button
                                                                    class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted"
                                                                    type="button" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                    <!-- Default :: Inline SVG -->
                                                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                                        stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                                    </svg>

                                                                    <!-- Alternate :: External File link -->
                                                                    <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/dots-vertical.svg" alt=""> -->
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Download</a>
                                                                    <a class="dropdown-item" href="#">Share</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- List Group Item End -->
                                            </ul>
                                            <!-- List Group End -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Shared Files End -->

                            </div>
                            <!-- Chat Info Body Start  -->

                        </div>
                    </div>
                    <!-- Chat Info End -->
                </div>
                <!-- Chats Page End -->

                <!-- Call Log Page Start -->
                <div class="calls px-0 py-2 p-xl-3">
                    <div class="container-xl">
                        <div class="row">
                            <div class="col">
                                <div class="card card-bg-1 mb-3">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center">
                                            <div class="avatar avatar-lg mb-3">
                                                <img class="avatar-img" src="./../../assets/media/avatar/2.png" alt="">
                                            </div>

                                            <div class="d-flex flex-column align-items-center">
                                                <h5 class="mb-1">Catherine Richardson</h5>
                                                <p class="text-white rounded px-2 bg-primary">+01-202-265462</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-options">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted"
                                                type="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                </svg>

                                                <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/dots-vertical.svg" alt=""> -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Clear Call Log</a>
                                                <a class="dropdown-item" href="#">Block</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="chat-closer d-xl-none">
                                        <!-- Chat Back Button (Visible only in Small Devices) -->
                                        <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted"
                                            type="button" data-close="">
                                            <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                            </svg>

                                            <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/arrow-left.svg" alt=""> -->
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row calls-log">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="avatar avatar-primary mr-2">
                                                <span>
                                                    <svg class="hw-24" viewBox="0 0 20 20" fill="currentColor">
                                                        <path
                                                            d="M14.414 7l3.293-3.293a1 1 0 00-1.414-1.414L13 5.586V4a1 1 0 10-2 0v4.003a.996.996 0 00.617.921A.997.997 0 0012 9h4a1 1 0 100-2h-1.586z" />
                                                        <path
                                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                    </svg>

                                                    <!-- <img class="injectable hw-24" src="./../../assets/media/heroicons/solid/phone-incoming.svg" alt=""> -->
                                                </span>
                                            </div>

                                            <div class="media-body">
                                                <h6>Incoming Call</h6>

                                                <div
                                                    class="d-flex flex-column flex-sm-row align-items-sm-center align-items-start">
                                                    <p class="text-muted mb-0">Just now</p><span
                                                        class="d-none d-sm-block text-muted mx-2">•</span>
                                                    <p class="text-muted mb-0">2m 35s</p>
                                                </div>
                                            </div>

                                            <div class="media-options ml-1 d-none d-sm-block">
                                                <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted"
                                                    type="button">
                                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                    </svg>

                                                    <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="avatar avatar-primary mr-2">
                                                <span>
                                                    <svg class="hw-24" viewBox="0 0 20 20" fill="currentColor">
                                                        <path
                                                            d="M17.924 2.617a.997.997 0 00-.215-.322l-.004-.004A.997.997 0 0017 2h-4a1 1 0 100 2h1.586l-3.293 3.293a1 1 0 001.414 1.414L16 5.414V7a1 1 0 102 0V3a.997.997 0 00-.076-.383z" />
                                                        <path
                                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                    </svg>

                                                    <!-- <img class="injectable hw-24" src="./../../assets/media/heroicons/solid/phone-outgoing.svg" alt=""> -->
                                                </span>
                                            </div>

                                            <div class="media-body">
                                                <h6>Outgoing Call</h6>

                                                <div
                                                    class="d-flex flex-column flex-sm-row align-items-sm-center align-items-start">
                                                    <p class="text-muted mb-0">5 mins ago</p><span
                                                        class="d-none d-sm-block text-muted mx-2">•</span>
                                                    <p class="text-muted mb-0">12m 25s</p>
                                                </div>
                                            </div>

                                            <div class="media-options ml-1 d-none d-sm-block">
                                                <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted"
                                                    type="button">
                                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                    </svg>

                                                    <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="avatar avatar-primary mr-2">
                                                <span>
                                                    <svg class="hw-24" viewBox="0 0 20 20" fill="currentColor">
                                                        <path
                                                            d="M14.414 7l3.293-3.293a1 1 0 00-1.414-1.414L13 5.586V4a1 1 0 10-2 0v4.003a.996.996 0 00.617.921A.997.997 0 0012 9h4a1 1 0 100-2h-1.586z" />
                                                        <path
                                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                    </svg>
                                                    <!-- <img class="injectable hw-24" src="./../../assets/media/heroicons/solid/phone-incoming.svg" alt=""> -->
                                                </span>
                                            </div>

                                            <div class="media-body">
                                                <h6 class="text-danger">Missed Call</h6>

                                                <div
                                                    class="d-flex flex-column flex-sm-row align-items-sm-center align-items-start">
                                                    <p class="text-muted mb-0">18 mins ago</p>
                                                </div>
                                            </div>

                                            <div class="media-options ml-1 d-none d-sm-block">
                                                <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted"
                                                    type="button">
                                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                    </svg>
                                                    <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="avatar avatar-primary mr-2">
                                                <span>
                                                    <svg class="hw-24" viewBox="0 0 20 20" fill="currentColor">
                                                        <path
                                                            d="M17.924 2.617a.997.997 0 00-.215-.322l-.004-.004A.997.997 0 0017 2h-4a1 1 0 100 2h1.586l-3.293 3.293a1 1 0 001.414 1.414L16 5.414V7a1 1 0 102 0V3a.997.997 0 00-.076-.383z" />
                                                        <path
                                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                    </svg>

                                                    <!-- <img class="injectable hw-24" src="./../../assets/media/heroicons/solid/phone-outgoing.svg" alt=""> -->
                                                </span>
                                            </div>

                                            <div class="media-body">
                                                <h6>Outgoing Call</h6>

                                                <div
                                                    class="d-flex flex-column flex-sm-row align-items-sm-center align-items-start">
                                                    <p class="text-muted mb-0">Yesterday at 10:45PM</p><span
                                                        class="d-none d-sm-block text-muted mx-2">•</span>
                                                    <p class="text-muted mb-0">25m 18s</p>
                                                </div>
                                            </div>

                                            <div class="media-options ml-1 d-none d-sm-block">
                                                <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted"
                                                    type="button">
                                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                    </svg>
                                                    <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="avatar avatar-primary mr-2">
                                                <span>
                                                    <svg class="hw-24" viewBox="0 0 20 20" fill="currentColor">
                                                        <path
                                                            d="M14.414 7l3.293-3.293a1 1 0 00-1.414-1.414L13 5.586V4a1 1 0 10-2 0v4.003a.996.996 0 00.617.921A.997.997 0 0012 9h4a1 1 0 100-2h-1.586z" />
                                                        <path
                                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                    </svg>
                                                    <!-- <img class="injectable hw-24" src="./../../assets/media/heroicons/solid/phone-incoming.svg" alt=""> -->
                                                </span>
                                            </div>

                                            <div class="media-body">
                                                <h6>Incoming Call</h6>

                                                <div
                                                    class="d-flex flex-column flex-sm-row align-items-sm-center align-items-start">
                                                    <p class="text-muted mb-0">16/05/2020 at 11:49AM</p><span
                                                        class="d-none d-sm-block text-muted mx-2">•</span>
                                                    <p class="text-muted mb-0">0m 56s</p>
                                                </div>
                                            </div>

                                            <div class="media-options ml-1 d-none d-sm-block">
                                                <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted"
                                                    type="button">
                                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                    </svg>
                                                    <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="avatar avatar-primary mr-2">
                                                <span>
                                                    <svg class="hw-24" viewBox="0 0 20 20" fill="currentColor">
                                                        <path
                                                            d="M14.414 7l3.293-3.293a1 1 0 00-1.414-1.414L13 5.586V4a1 1 0 10-2 0v4.003a.996.996 0 00.617.921A.997.997 0 0012 9h4a1 1 0 100-2h-1.586z" />
                                                        <path
                                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                    </svg>
                                                    <!-- <img class="injectable hw-24" src="./../../assets/media/heroicons/solid/phone-incoming.svg" alt=""> -->
                                                </span>
                                            </div>

                                            <div class="media-body">
                                                <h6>Incoming Call</h6>

                                                <div
                                                    class="d-flex flex-column flex-sm-row align-items-sm-center align-items-start">
                                                    <p class="text-muted mb-0">14/05/2020 at 11:49AM</p><span
                                                        class="d-none d-sm-block text-muted mx-2">•</span>
                                                    <p class="text-muted mb-0">24m 19s</p>
                                                </div>
                                            </div>

                                            <div class="media-options ml-1 d-none d-sm-block">
                                                <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted"
                                                    type="button">
                                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                    </svg>
                                                    <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Call Log Page End -->

                <!-- Friends Page Start -->
                <div class="friends px-0 py-2 p-xl-3">
                    <div class="container-xl">
                        <div class="row">
                            <div class="col">
                                <div class="card card-body card-bg-1 mb-3">
                                    <div class="d-flex flex-column align-items-center">
                                        <div class="avatar avatar-lg mb-3">
                                            <img class="avatar-img" src="./../../assets/media/avatar/3.png" alt="">
                                        </div>

                                        <div class="d-flex flex-column align-items-center">
                                            <h5 class="mb-1">Catherine Richardson</h5>
                                            <!-- <p class="text-white rounded px-2 bg-primary">+01-202-265462</p> -->
                                            <div class="d-flex mt-2">
                                                <div class="btn btn-primary btn-icon rounded-circle text-light mx-2">
                                                    <svg class="hw-24" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                                    </svg>
                                                    <!-- <img class="injectable hw-24" src="./../../assets/media/heroicons/outline/chat.svg" alt=""> -->
                                                </div>
                                                <div class="btn btn-success btn-icon rounded-circle text-light mx-2">
                                                    <svg class="hw-24" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                    </svg>

                                                    <!-- <img class="injectable hw-24" src="./../../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-options">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted"
                                                type="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                </svg>

                                                <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/dots-vertical.svg" alt=""> -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Remove</a>
                                                <a class="dropdown-item" href="#">Block</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="chat-closer d-xl-none">
                                        <!-- Chat Back Button (Visible only in Small Devices) -->
                                        <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted"
                                            type="button" data-close="">
                                            <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                            </svg>

                                            <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/arrow-left.svg" alt=""> -->
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row friends-info">
                            <div class="col">
                                <div class="card">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <p class="small text-muted mb-0">Local Time</p>
                                                    <p class="mb-0">10:25 PM</p>
                                                </div>
                                                <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                <!-- <img class="injectable text-muted hw-20" src="./../../assets/media/heroicons/outline/clock.svg" alt=""> -->
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <p class="small text-muted mb-0">Birthdate</p>
                                                    <p class="mb-0">20/11/1992</p>
                                                </div>
                                                <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>

                                                <!-- <img class="injectable text-muted hw-20" src="./../../assets/media/heroicons/outline/calendar.svg" alt=""> -->
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <p class="small text-muted mb-0">Phone</p>
                                                    <p class="mb-0">+01-222-364522</p>
                                                </div>
                                                <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                </svg>
                                                <!-- <img class="injectable text-muted hw-20" src="./../../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <p class="small text-muted mb-0">Email</p>
                                                    <p class="mb-0">catherine.richardson@gmail.com</p>
                                                </div>
                                                <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                </svg>
                                                <!-- <img class="injectable text-muted hw-20" src="./../../assets/media/heroicons/outline/mail.svg" alt=""> -->
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <p class="small text-muted mb-0">Website</p>
                                                    <p class="mb-0">www.catherichardson.com</p>
                                                </div>
                                                <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                <!-- <img class="injectable text-muted hw-20" src="./../../assets/media/heroicons/outline/globe.svg" alt=""> -->
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <p class="small text-muted mb-0">Address</p>
                                                    <p class="mb-0">1134 Ridder Park Road, San Fransisco, CA 94851</p>
                                                </div>
                                                <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                                </svg>
                                                <!-- <img class="injectable text-muted hw-20" src="./../../assets/media/heroicons/outline/dashboard.svg" alt=""> -->
                                            </div>
                                        </li>
                                    </ul>
                                </div>


                                <div class="card">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <p class="small text-muted mb-0">Facebook</p>
                                                    <a class="font-size-sm font-weight-medium"
                                                        href="#">@cathe.richardson</a>
                                                </div>
                                                <svg class="text-muted hw-20" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path
                                                        d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                                </svg>
                                                <!-- <img class="injectable text-muted hw-20" src="./../../assets/media/icons/facebook.svg" alt=""> -->
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <p class="small text-muted mb-0">Twitter</p>
                                                    <a class="font-size-sm font-weight-medium"
                                                        href="#">@cathe.richardson</a>
                                                </div>
                                                <svg class="text-muted hw-20" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path
                                                        d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                                                </svg>
                                                <!-- <img class="injectable text-muted hw-20" src="./../../assets/media/icons/twitter.svg" alt=""> -->
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <p class="small text-muted mb-0">Instagram</p>
                                                    <a class="font-size-sm font-weight-medium"
                                                        href="#">@cathe.richardson</a>
                                                </div>
                                                <svg class="text-muted hw-20" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                                                </svg>
                                                <!-- <img class="injectable text-muted hw-20" src="./../../assets/media/icons/instagram.svg" alt=""> -->
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <p class="small text-muted mb-0">Linkedin</p>
                                                    <a class="font-size-sm font-weight-medium"
                                                        href="#">@cathe.richardson</a>
                                                </div>
                                                <svg class="text-muted hw-20" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path
                                                        d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                                    <rect x="2" y="9" width="4" height="12" />
                                                    <circle cx="4" cy="4" r="2" />
                                                </svg>
                                                <!-- <img class="injectable text-muted hw-20" src="./../../assets/media/icons/linkedin.svg" alt=""> -->
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Friends Page End -->

                <!-- Profile Settings Start -->
                <div class="profile">
                    <div class="page-main-heading sticky-top py-2 px-3 mb-3">

                        <!-- Chat Back Button (Visible only in Small Devices) -->
                        <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted d-xl-none" type="button"
                            data-close="">
                            <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/arrow-left.svg" alt=""> -->
                        </button>

                        <div class="pl-2 pl-xl-0">
                            <h5 class="font-weight-semibold">Settings</h5>
                            <p class="text-muted mb-0">Update Personal Information &amp; Settings</p>
                        </div>
                    </div>

                    <div class="container-xl px-2 px-sm-3">
                        <div class="row">
                            <div class="col">
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h6 class="mb-1">Account</h6>
                                        <p class="mb-0 text-muted small">Update personal &amp; contact information</p>
                                    </div>

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="firstName">First Name</label>
                                                    <input type="text" class="form-control form-control-md"
                                                        id="firstName" placeholder="Type your first name"
                                                        value="Catherine">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="lastName">Last Name</label>
                                                    <input type="text" class="form-control form-control-md"
                                                        id="lastName" placeholder="Type your last name"
                                                        value="Richardson">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="mobileNumber">Mobile number</label>
                                                    <input type="text" class="form-control form-control-md"
                                                        id="mobileNumber" placeholder="Type your mobile number"
                                                        value="+01-222-364522">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="birthDate">Birth date</label>
                                                    <input type="text" class="form-control form-control-md"
                                                        id="birthDate" placeholder="dd/mm/yyyy" value="20/11/1992">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="emailAddress">Email address</label>
                                                    <input type="email" class="form-control form-control-md"
                                                        id="emailAddress" placeholder="Type your email address"
                                                        value="catherine.richardson@gmail.com">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="webSite">Website</label>
                                                    <input type="text" class="form-control form-control-md" id="webSite"
                                                        placeholder="Type your website" value="www.catherichardson.com">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="Address">Address</label>
                                                    <input type="text" class="form-control form-control-md" id="Address"
                                                        placeholder="Type your address"
                                                        value="1134 Ridder Park Road, San Fransisco, CA 94851">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer d-flex justify-content-end">
                                        <button type="button" class="btn btn-link text-muted mx-1">Reset</button>
                                        <button type="button" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h6 class="mb-1">Social network profiles</h6>
                                        <p class="mb-0 text-muted small">Update personal &amp; contact information</p>
                                    </div>

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="facebookId">Facebook</label>
                                                    <input type="text" class="form-control form-control-md"
                                                        id="facebookId" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="twitterId">Twitter</label>
                                                    <input type="text" class="form-control form-control-md"
                                                        id="twitterId" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="instagramId">Instagram</label>
                                                    <input type="text" class="form-control form-control-md"
                                                        id="instagramId" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="linkedinId">Linkedin</label>
                                                    <input type="text" class="form-control form-control-md"
                                                        id="linkedinId" placeholder="Username">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer d-flex justify-content-end">
                                        <button type="button" class="btn btn-link text-muted mx-1">Reset</button>
                                        <button type="button" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h6 class="mb-1">Password</h6>
                                        <p class="mb-0 text-muted small">Update personal &amp; contact information</p>
                                    </div>

                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="current-password">Current Password</label>
                                                        <input type="password" class="form-control form-control-md"
                                                            id="current-password" placeholder="Current password"
                                                            autocomplete="on">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="new-password">New Password</label>
                                                        <input type="password" class="form-control form-control-md"
                                                            id="new-password" placeholder="New password"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="repeat-password">Repeat Password</label>
                                                        <input type="password" class="form-control form-control-md"
                                                            id="repeat-password" placeholder="Repeat password"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="card-footer d-flex justify-content-end">
                                        <button type="button" class="btn btn-link text-muted mx-1">Reset</button>
                                        <button type="button" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h6 class="mb-1">Privacy</h6>
                                        <p class="mb-0 text-muted small">Update personal &amp; contact information</p>
                                    </div>

                                    <div class="card-body p-0">
                                        <ul class="list-group list-group-flush list-group-sm-column">

                                            <li class="list-group-item py-2">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="mb-0">Profile Picture</p>
                                                        <p class="small text-muted mb-0">Select who can see my profile
                                                            picture</p>
                                                    </div>
                                                    <div class="dropdown mr-2">
                                                        <button class="btn btn-outline-default dropdown-toggle"
                                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            Public
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Public</a>
                                                            <a class="dropdown-item" href="#">Friends</a>
                                                            <a class="dropdown-item" href="#">Selected Friends</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-group-item py-2">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="mb-0">Last Seen</p>
                                                        <p class="small text-muted mb-0">Select who can see my last seen
                                                        </p>
                                                    </div>
                                                    <div class="dropdown mr-2">
                                                        <button class="btn btn-outline-default dropdown-toggle"
                                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            Public
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Public</a>
                                                            <a class="dropdown-item" href="#">Friends</a>
                                                            <a class="dropdown-item" href="#">Selected Friends</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-group-item py-2">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="mb-0">Groups</p>
                                                        <p class="small text-muted mb-0">Select who can add you in
                                                            groups</p>
                                                    </div>
                                                    <div class="dropdown mr-2">
                                                        <button class="btn btn-outline-default dropdown-toggle"
                                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            Public
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Public</a>
                                                            <a class="dropdown-item" href="#">Friends</a>
                                                            <a class="dropdown-item" href="#">Selected Friends</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-group-item py-2">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="mb-0">Status</p>
                                                        <p class="small text-muted mb-0">Select who can see my status
                                                            updates</p>
                                                    </div>
                                                    <div class="dropdown mr-2">
                                                        <button class="btn btn-outline-default dropdown-toggle"
                                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            Public
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Public</a>
                                                            <a class="dropdown-item" href="#">Friends</a>
                                                            <a class="dropdown-item" href="#">Selected Friends</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-group-item py-2">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="mb-0">Read receipts</p>
                                                        <p class="small text-muted mb-0">If turn off this option you
                                                            won't be able to see read recipts</p>
                                                    </div>
                                                    <div class="custom-control custom-switch mr-2">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="readReceiptsSwitch" checked="">
                                                        <label class="custom-control-label"
                                                            for="readReceiptsSwitch">&nbsp;</label>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="card-footer d-flex justify-content-end">
                                        <button type="button" class="btn btn-link text-muted mx-1">Reset</button>
                                        <button type="button" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h6 class="mb-1">Security</h6>
                                        <p class="mb-0 text-muted small">Update personal &amp; contact information</p>
                                    </div>

                                    <div class="card-body p-0">
                                        <ul class="list-group list-group-flush list-group-sm-column">
                                            <li class="list-group-item py-2">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="mb-0">Use two-factor authentication</p>
                                                        <p class="small text-muted mb-0">Ask for a code if attempted
                                                            login from an unrecognised device or browser.</p>
                                                    </div>
                                                    <div class="custom-control custom-switch mr-2">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="twoFactorSwitch" checked="">
                                                        <label class="custom-control-label"
                                                            for="twoFactorSwitch">&nbsp;</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item py-2">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="mb-0">Get alerts about unrecognised logins</p>
                                                        <p class="small text-muted mb-0">You will be notified if anyone
                                                            logs in from a device or browser you don't usually use</p>
                                                    </div>
                                                    <div class="custom-control custom-switch mr-2">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="unrecognisedSwitch" checked="">
                                                        <label class="custom-control-label"
                                                            for="unrecognisedSwitch">&nbsp;</label>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="card-footer d-flex justify-content-end">
                                        <button class="btn btn-link text-muted mx-1">Reset</button>
                                        <button class="btn btn-primary" type="button">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Profile Settings End -->

            </main>
            <!-- Main End -->

            <!-- App Add-ons Start -->
            <div class="appbar">
                <div class="appbar-wrapper hide-scrollbar">

                    <!-- Chat Back Button (Visible only in Small Devices) -->
                    <div class="d-flex justify-content-center border-bottom w-100">
                        <button class="btn btn-secondary btn-icon m-0 btn-minimal btn-sm text-muted d-xl-none"
                            type="button" data-apps-close="">
                            <!-- Default :: Inline SVG -->
                            <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>

                            <!-- Alternate :: External File link -->
                            <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/arrow-left.svg" alt=""> -->
                        </button>
                    </div>


                    <div class="appbar-head">
                        <!-- Default :: Inline SVG -->
                        <svg class="hw-20" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                            </path>
                        </svg>

                        <!-- Alternate :: External File link -->
                        <!-- <img class="hw-20" src="./../../assets/media/heroicons/outline/view-grid.svg" alt="" class="injectable hw-20"> -->
                        <h6 class="mb-0 mt-1">Apps</h6>
                    </div>


                    <!-- Appbar Nav Start -->
                    <ul class="nav nav-minimal appbar-nav" id="appNavTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="translator-tab" data-toggle="tab" href="#translator" role="tab"
                                aria-controls="translator" aria-selected="true">
                                <!-- <img class="injectable hw-22" src="./../../assets/media/heroicons/outline/translate.svg" alt=""> -->

                                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="notes-tab" data-toggle="tab" href="#notes" role="tab"
                                aria-controls="notes" aria-selected="false">
                                <!-- <img class="injectable hw-22" src="./../../assets/media/heroicons/outline/collection.svg" alt=""> -->
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>

                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="todo-tab" data-toggle="tab" href="#todo" role="tab"
                                aria-controls="todo" aria-selected="false">
                                <!-- <img class="injectable hw-22" src="./../../assets/media/heroicons/outline/clipboard-check.svg" alt=""> -->
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="quick-settings-tab" data-toggle="tab" href="#quick-settings"
                                role="tab" aria-controls="quick-settings" aria-selected="false">
                                <!-- <img class="injectable hw-22" src="./../../assets/media/heroicons/outline/cog.svg" alt=""> -->
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <!-- Appbar Nav End -->
                </div>

                <!-- Tab panes -->
                <div class="tab-content appnavbar-content">
                    <div class="tab-pane h-100 active" id="app-welcome" role="tabpanel">
                        <div class="appnavbar-content-wrapper">
                            <div class="d-flex flex-column justify-content-center text-center h-100 w-100">
                                <div class="container">
                                    <div class="avatar avatar-lg mb-2">
                                        <img class="avatar-img" src="./../../assets/media/avatar/4.png" alt="">
                                    </div>

                                    <h5>Hey, Christina!</h5>
                                    <p class="text-muted">Please select a app to Start using it.</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane h-100" id="translator" role="tabpanel" aria-labelledby="translator-tab">
                        <div class="appnavbar-content-wrapper">
                            <div class="appnavbar-scrollable-wrapper">
                                <div class="appnavbar-heading sticky-top">
                                    <ul class="nav justify-content-between align-items-center">
                                        <!-- Sidebar Title Start -->
                                        <li class="text-center">
                                            <h5 class="text-truncate mb-0">Translator</h5>
                                        </li>
                                        <!-- Sidebar Title End -->

                                        <!-- Close Sidebar Start -->
                                        <li class="nav-item list-inline-item">
                                            <div data-appcontent-close="">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-22" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>

                                                <!-- Alternate :: External File link -->
                                                <!-- <img class="injectable hw-22" src="./../../assets/media/heroicons/outline/x.svg" alt=""> -->

                                            </div>
                                        </li>
                                        <!-- Close Sidebar End -->
                                    </ul>
                                </div>

                                <div class="appnavbar-body">
                                    <div class="appnavbar-body-title">
                                        <div class="dropdown w-100">
                                            <!-- Dropdown Button Start -->
                                            <button class="btn btn-outline-default btn-block dropdown-toggle"
                                                type="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">English</button>
                                            <!-- Dropdown Button End -->

                                            <!-- Dropdown Menu Start -->
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">English</a>
                                                <a class="dropdown-item" href="#">Hindi</a>
                                                <a class="dropdown-item" href="#">Irish</a>
                                                <a class="dropdown-item" href="#">Latin</a>
                                                <a class="dropdown-item" href="#">Russian</a>
                                            </div>
                                            <!-- Dropdown Menu End -->
                                        </div>

                                        <img class="injetable hw-16 text-muted mx-1"
                                            src="./../../assets/media/heroicons/outline/arrow-right.svg" alt="">

                                        <div class="dropdown w-100">
                                            <!-- Dropdown Button Start -->
                                            <button class="btn btn-outline-default btn-block dropdown-toggle"
                                                type="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Latin</button>
                                            <!-- Dropdown Button End -->

                                            <!-- Dropdown Menu Start -->
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">English</a>
                                                <a class="dropdown-item" href="#">Hindi</a>
                                                <a class="dropdown-item" href="#">Irish</a>
                                                <a class="dropdown-item" href="#">Latin</a>
                                                <a class="dropdown-item" href="#">Russian</a>
                                            </div>
                                            <!-- Dropdown Menu End -->
                                        </div>
                                    </div>

                                    <div class="translator-container p-2">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="6" placeholder="Write text here"
                                                name="description">Rise and shine, buddy! It’s time to show this world who you are. I hope your morning is filled with peace and harmony, and you are ready to start your day. Hope that you’re starting it with a smile!</textarea>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <p class="mb-0">Et surge inluminare buddy! Aliquam quis es ut ostenderet
                                                    hoc mundo. Utinam impleatur concordiam mane et dies incipere velis.
                                                    Spes autem quae erant incipiens cum risu!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="appnavbar-footer">
                                    <div class="btn btn-primary btn-block">Translate</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane h-100" id="notes" role="tabpanel" aria-labelledby="notes-tab">
                        <div class="appnavbar-content-wrapper">
                            <div class="appnavbar-scrollable-wrapper">
                                <div class="appnavbar-heading sticky-top">
                                    <ul class="nav justify-content-between align-items-center">
                                        <!-- Sidebar Title Start -->
                                        <li class="text-center">
                                            <h5 class="text-truncate mb-0">Notes</h5>
                                        </li>
                                        <!-- Sidebar Title End -->

                                        <!-- Close Sidebar Start -->
                                        <li class="nav-item list-inline-item">
                                            <div data-appcontent-close="">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-22" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>

                                                <!-- Alternate :: External File link -->
                                                <!-- <img class="injectable hw-22" src="./../../assets/media/heroicons/outline/x.svg" alt=""> -->

                                            </div>
                                        </li>
                                        <!-- Close Sidebar End -->
                                    </ul>
                                </div>

                                <div class="appnavbar-body">
                                    <div class="appnavbar-body-title">
                                        <!-- Sidebar Header Dropdown Start -->
                                        <div class="dropdown mr-2">
                                            <!-- Dropdown Button Start -->
                                            <button class="btn btn-outline-default dropdown-toggle" type="button"
                                                data-notes-filter-list="" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">All Notes</button>
                                            <!-- Dropdown Button End -->

                                            <!-- Dropdown Menu Start -->
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" data-notes-filter="" data-select="all-chats"
                                                    href="#">All Notes</a>
                                                <a class="dropdown-item" data-notes-filter="" data-select="friends"
                                                    href="#">Personal</a>
                                                <a class="dropdown-item" data-notes-filter="" data-select="groups"
                                                    href="#">Work</a>
                                                <a class="dropdown-item" data-notes-filter="" data-select="unread"
                                                    href="#">Favourite</a>
                                                <a class="dropdown-item" data-notes-filter="" data-select="archived"
                                                    href="#">Important</a>
                                            </div>
                                            <!-- Dropdown Menu End -->
                                        </div>
                                        <!-- Sidebar Header Dropdown End -->

                                        <!-- Sidebar Search Start -->
                                        <form class="form-inline">
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control search border-right-0 transparent-bg pr-0"
                                                    placeholder="Search notes">
                                                <div class="input-group-append">
                                                    <div class="input-group-text transparent-bg border-left-0"
                                                        role="button">
                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                                        </svg>

                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/search.svg" alt=""> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- Sidebar Search End -->
                                    </div>

                                    <div class="note-container">
                                        <div class="note">
                                            <div class="note-body">
                                                <div class="note-added-on">Sunday, 20/12/2020 at 12:26 PM</div>
                                                <h5 class="note-title">Metting with John Doe</h5>
                                                <p class="note-description">Lorem ipsum dolor sit amet consectetur
                                                    adipisicing elit. Quis, dolorum odio vitae sapiente eius obcaecati.
                                                </p>
                                            </div>
                                            <div class="note-footer">
                                                <div class="note-tools">
                                                    <span class="badge badge-info">Personal</span>
                                                </div>
                                                <div class="note-tools">
                                                    <div class="dropdown">
                                                        <button
                                                            class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted"
                                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/dots-vertical.svg" alt=""> -->
                                                            <svg class="hw-20" xmlns="http://www.w3.org/2000/svg"
                                                                height="24" width="24" fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                            </svg>

                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Personal</a>
                                                            <a class="dropdown-item" href="#">Work</a>
                                                            <a class="dropdown-item" href="#">Favourite</a>
                                                            <a class="dropdown-item" href="#">Important</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="note">
                                            <div class="note-body">
                                                <div class="note-added-on">Sunday, 20/12/2020 at 12:26 PM</div>
                                                <h5 class="note-title">Metting with John Doe</h5>
                                                <p class="note-description">Lorem ipsum dolor sit amet consectetur
                                                    adipisicing elit. Quis, dolorum odio vitae sapiente eius obcaecati.
                                                </p>
                                            </div>
                                            <div class="note-footer">
                                                <div class="note-tools">
                                                    <span class="badge badge-danger">Important</span>
                                                </div>
                                                <div class="note-tools">
                                                    <div class="dropdown">
                                                        <button
                                                            class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted"
                                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/dots-vertical.svg" alt=""> -->
                                                            <svg class="hw-20" xmlns="http://www.w3.org/2000/svg"
                                                                height="24" width="24" fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Personal</a>
                                                            <a class="dropdown-item" href="#">Work</a>
                                                            <a class="dropdown-item" href="#">Favourite</a>
                                                            <a class="dropdown-item" href="#">Important</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="note">
                                            <div class="note-body">
                                                <div class="note-added-on">Sunday, 20/12/2020 at 12:26 PM</div>
                                                <h5 class="note-title">Metting with John Doe</h5>
                                                <p class="note-description">Lorem ipsum dolor sit amet consectetur
                                                    adipisicing elit. Quis, dolorum odio vitae sapiente eius obcaecati.
                                                </p>
                                            </div>
                                            <div class="note-footer">
                                                <div class="note-tools">
                                                    <span class="badge badge-primary">Favourite</span>
                                                </div>
                                                <div class="note-tools">
                                                    <div class="dropdown">
                                                        <button
                                                            class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted"
                                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/dots-vertical.svg" alt=""> -->
                                                            <svg class="hw-20" xmlns="http://www.w3.org/2000/svg"
                                                                height="24" width="24" fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Personal</a>
                                                            <a class="dropdown-item" href="#">Work</a>
                                                            <a class="dropdown-item" href="#">Favourite</a>
                                                            <a class="dropdown-item" href="#">Important</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="note">
                                            <div class="note-body">
                                                <div class="note-added-on">Sunday, 20/12/2020 at 12:26 PM</div>
                                                <h5 class="note-title">Metting with John Doe</h5>
                                                <p class="note-description">Lorem ipsum dolor sit amet consectetur
                                                    adipisicing elit. Quis, dolorum odio vitae sapiente eius obcaecati.
                                                </p>
                                            </div>
                                            <div class="note-footer">
                                                <div class="note-tools">
                                                    <span class="badge badge-warning">Work</span>
                                                </div>
                                                <div class="note-tools">
                                                    <div class="dropdown">
                                                        <button
                                                            class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted"
                                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/dots-vertical.svg" alt=""> -->
                                                            <svg class="hw-20" xmlns="http://www.w3.org/2000/svg"
                                                                height="24" width="24" fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Personal</a>
                                                            <a class="dropdown-item" href="#">Work</a>
                                                            <a class="dropdown-item" href="#">Favourite</a>
                                                            <a class="dropdown-item" href="#">Important</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="appnavbar-footer">
                                    <div class="btn btn-primary btn-block" role="button" data-toggle="modal"
                                        data-target="#addNoteModal">Add new note</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane h-100" id="todo" role="tabpanel" aria-labelledby="todo-tab">
                        <div class="appnavbar-content-wrapper">
                            <div class="appnavbar-scrollable-wrapper">
                                <div class="appnavbar-heading sticky-top">
                                    <ul class="nav justify-content-between align-items-center">
                                        <!-- Sidebar Title Start -->
                                        <li class="text-center">
                                            <h5 class="text-truncate mb-0">To-do List</h5>
                                        </li>
                                        <!-- Sidebar Title End -->

                                        <!-- Close Sidebar Start -->
                                        <li class="nav-item list-inline-item">
                                            <div data-appcontent-close="">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-22" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>

                                                <!-- Alternate :: External File link -->
                                                <!-- <img class="injectable hw-22" src="./../../assets/media/heroicons/outline/x.svg" alt=""> -->

                                            </div>
                                        </li>
                                        <!-- Close Sidebar End -->
                                    </ul>
                                </div>

                                <div class="appnavbar-body">
                                    <div class="appnavbar-body-title">
                                        <!-- Sidebar Header Dropdown Start -->
                                        <div class="dropdown mr-2">
                                            <!-- Dropdown Button Start -->
                                            <button class="btn btn-outline-default dropdown-toggle" type="button"
                                                data-tasks-filter-list="" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">All Tasks</button>
                                            <!-- Dropdown Button End -->

                                            <!-- Dropdown Menu Start -->
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" data-task-filter="" data-select="all-tasks"
                                                    href="#">All Tasks</a>
                                                <a class="dropdown-item" data-task-filter="" data-select="active"
                                                    href="#">Active</a>
                                                <a class="dropdown-item" data-task-filter="" data-select="finished"
                                                    href="#">Finished</a>
                                            </div>
                                            <!-- Dropdown Menu End -->
                                        </div>
                                        <!-- Sidebar Header Dropdown End -->

                                        <!-- Sidebar Search Start -->
                                        <form class="form-inline">
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control search border-right-0 transparent-bg pr-0"
                                                    placeholder="Search notes">
                                                <div class="input-group-append">
                                                    <div class="input-group-text transparent-bg border-left-0"
                                                        role="button">
                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                                        </svg>

                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/search.svg" alt=""> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- Sidebar Search End -->
                                    </div>

                                    <div class="todo-container">

                                        <div class="todo-title">
                                            <h6 class="mb-0">20/07/2020</h6>
                                            <p class="text-muted">6 Task remaining</p>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <ul class="todo-list">
                                                    <li class="todo-item todo-task-done">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck1" checked>
                                                            <label class="custom-control-label"
                                                                for="customCheck1">&nbsp;</label>
                                                        </div>
                                                        <h6 class="todo-title" data-toggle="modal"
                                                            data-target="#taskModal">Dinner with friends</h6>
                                                    </li>
                                                    <li class="todo-item">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck2">
                                                            <label class="custom-control-label"
                                                                for="customCheck2">&nbsp;</label>
                                                        </div>
                                                        <h6 class="todo-title" data-toggle="modal"
                                                            data-target="#taskModal">Watching movie at 10:30PM</h6>
                                                    </li>
                                                    <li class="todo-item todo-task-done">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck3" checked>
                                                            <label class="custom-control-label"
                                                                for="customCheck3">&nbsp;</label>
                                                        </div>
                                                        <h6 class="todo-title" data-toggle="modal"
                                                            data-target="#taskModal">Watching a football match</h6>
                                                    </li>
                                                    <li class="todo-item">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck4">
                                                            <label class="custom-control-label"
                                                                for="customCheck4">&nbsp;</label>
                                                        </div>
                                                        <h6 class="todo-title" data-toggle="modal"
                                                            data-target="#taskModal">Coffie with girlfriend</h6>
                                                    </li>
                                                    <li class="todo-item">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck5">
                                                            <label class="custom-control-label"
                                                                for="customCheck5">&nbsp;</label>
                                                        </div>
                                                        <h6 class="todo-title" data-toggle="modal"
                                                            data-target="#taskModal">Meeting with design team</h6>
                                                    </li>




                                                </ul>
                                            </div>
                                        </div>

                                        <div class="todo-title mt-2">
                                            <h6 class="mb-0">21/07/2020</h6>
                                            <p class="text-muted">6 Task remaining</p>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <ul class="todo-list">
                                                    <li class="todo-item">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck6">
                                                            <label class="custom-control-label"
                                                                for="customCheck6">&nbsp;</label>
                                                        </div>
                                                        <h6 class="todo-title" data-toggle="modal"
                                                            data-target="#taskModal">Dinner with friends</h6>
                                                    </li>
                                                    <li class="todo-item">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck7">
                                                            <label class="custom-control-label"
                                                                for="customCheck7">&nbsp;</label>
                                                        </div>
                                                        <h6 class="todo-title" data-toggle="modal"
                                                            data-target="#taskModal">Watching movie at 10:30PM</h6>
                                                    </li>
                                                    <li class="todo-item">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck8">
                                                            <label class="custom-control-label"
                                                                for="customCheck8">&nbsp;</label>
                                                        </div>
                                                        <h6 class="todo-title" data-toggle="modal"
                                                            data-target="#taskModal">Watching a football match</h6>
                                                    </li>
                                                    <li class="todo-item">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck9">
                                                            <label class="custom-control-label"
                                                                for="customCheck9">&nbsp;</label>
                                                        </div>
                                                        <h6 class="todo-title" data-toggle="modal"
                                                            data-target="#taskModal">Coffie with girlfriend</h6>
                                                    </li>
                                                    <li class="todo-item">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck10">
                                                            <label class="custom-control-label"
                                                                for="customCheck10">&nbsp;</label>
                                                        </div>
                                                        <h6 class="todo-title" data-toggle="modal"
                                                            data-target="#taskModal">Meeting with design team</h6>
                                                    </li>




                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="appnavbar-footer">
                                    <div class="btn btn-primary btn-block" role="button" data-toggle="modal"
                                        data-target="#addTaskModal">Add new task</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane h-100" id="quick-settings" role="tabpanel"
                        aria-labelledby="quick-settings-tab">
                        <div class="appnavbar-content-wrapper">
                            <div class="appnavbar-scrollable-wrapper">
                                <div class="appnavbar-heading sticky-top">
                                    <ul class="nav justify-content-between align-items-center">
                                        <!-- Sidebar Title Start -->
                                        <li class="text-center">
                                            <h5 class="text-truncate mb-0">Settings</h5>
                                        </li>
                                        <!-- Sidebar Title End -->

                                        <!-- Close Sidebar Start -->
                                        <li class="nav-item list-inline-item">
                                            <div data-appcontent-close="">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-22" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>

                                                <!-- Alternate :: External File link -->
                                                <!-- <img class="injectable hw-22" src="./../../assets/media/heroicons/outline/x.svg" alt=""> -->

                                            </div>
                                        </li>
                                        <!-- Close Sidebar End -->
                                    </ul>
                                </div>

                                <div class="appnavbar-body">
                                    <div class="settings-container">
                                        <ul class="list-group border list-group-flush">
                                            <li class="list-group-item py-2">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="mb-0">Last seen</p>
                                                    </div>
                                                    <div class="custom-control custom-switch ml-2">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="quickSettingSwitch1" checked="">
                                                        <label class="custom-control-label"
                                                            for="quickSettingSwitch1">&nbsp;</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item py-2">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="mb-0">Read receipts</p>
                                                    </div>
                                                    <div class="custom-control custom-switch ml-2">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="quickSettingSwitch2" checked="">
                                                        <label class="custom-control-label"
                                                            for="quickSettingSwitch2">&nbsp;</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item py-2">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="mb-0">Media auto download</p>
                                                    </div>
                                                    <div class="custom-control custom-switch ml-2">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="quickSettingSwitch3" checked="">
                                                        <label class="custom-control-label"
                                                            for="quickSettingSwitch3">&nbsp;</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item py-2">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="mb-0">Notifications</p>
                                                    </div>
                                                    <div class="custom-control custom-switch ml-2">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="quickSettingSwitch4" checked="">
                                                        <label class="custom-control-label"
                                                            for="quickSettingSwitch4">&nbsp;</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item py-2">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="mb-0">Auto backup</p>
                                                    </div>
                                                    <div class="custom-control custom-switch ml-2">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="quickSettingSwitch5" checked="">
                                                        <label class="custom-control-label"
                                                            for="quickSettingSwitch5">&nbsp;</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item py-2">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="mb-0">Screen Lock</p>
                                                    </div>
                                                    <div class="custom-control custom-switch ml-2">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="quickSettingSwitch6">
                                                        <label class="custom-control-label"
                                                            for="quickSettingSwitch6">&nbsp;</label>

                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="appnavbar-footer">
                                    <div class="btn btn-primary btn-block">Save settings</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- App Add-ons End -->

            <div class="backdrop"></div>

            <!-- All Modals Start -->

            <!-- Modal 1 :: Start a Conversation-->
            <div class="modal modal-lg-fullscreen fade" id="startConversation" tabindex="-1" role="dialog"
                aria-labelledby="startConversationLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-zoom">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="startConversationLabel">New Chat</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body p-0 hide-scrollbar">
                            <div class="row">
                                <div class="col-12">
                                    <!-- Search Start -->
                                    <form class="form-inline w-100 p-2 border-bottom">
                                        <div class="input-group w-100 bg-light">
                                            <input type="text"
                                                class="form-control form-control-md search border-right-0 transparent-bg pr-0"
                                                placeholder="Search">
                                            <div class="input-group-append">
                                                <div class="input-group-text transparent-bg border-left-0"
                                                    role="button">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/search.svg" alt=""> -->
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Search End -->
                                </div>

                                <div class="col-12">
                                    <!-- List Group Start -->
                                    <ul class="list-group list-group-flush">

                                        <!-- List Group Item Start -->
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="avatar avatar-online mr-2">
                                                    <img src="./../../assets/media/avatar/1.png" alt="">
                                                </div>

                                                <div class="media-body">
                                                    <h6 class="text-truncate">
                                                        <a href="#" class="text-reset">Catherine Richardson</a>
                                                    </h6>

                                                    <p class="text-muted mb-0">Online</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- List Group Item End -->

                                        <!-- List Group Item Start -->
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="avatar avatar-online mr-2">
                                                    <img src="./../../assets/media/avatar/2.png" alt="">
                                                </div>

                                                <div class="media-body">
                                                    <h6 class="text-truncate">
                                                        <a href="#" class="text-reset">Katherine Schneider</a>
                                                    </h6>

                                                    <p class="text-muted mb-0">Online</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- List Group Item End -->

                                        <!-- List Group Item Start -->
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="avatar avatar-offline mr-2">
                                                    <img src="./../../assets/media/avatar/3.png" alt="">
                                                </div>

                                                <div class="media-body">
                                                    <h6 class="text-truncate">
                                                        <a href="#" class="text-reset">Brittany K. Williams</a>
                                                    </h6>

                                                    <p class="text-muted mb-0">Offline</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- List Group Item End -->

                                        <!-- List Group Item Start -->
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="avatar avatar-busy mr-2">
                                                    <img src="./../../assets/media/avatar/4.png" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="text-truncate"><a href="#" class="text-reset">Christina
                                                            Turner</a></h6>
                                                    <p class="text-muted mb-0">Busy</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- List Group Item End -->

                                        <!-- List Group Item Start -->
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="avatar avatar-away mr-2">
                                                    <img src="./../../assets/media/avatar/5.png" alt="">
                                                </div>

                                                <div class="media-body">
                                                    <h6 class="text-truncate"><a href="#" class="text-reset">Annie
                                                            Richardson</a></h6>
                                                    <p class="text-muted mb-0">Away</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- List Group Item End -->

                                    </ul>
                                    <!-- List Group End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 2 :: Create Group -->
            <div class="modal modal-lg-fullscreen fade" id="createGroup" tabindex="-1" role="dialog"
                aria-labelledby="createGroupLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-zoom">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title js-title-step" id="createGroupLabel">&nbsp;</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body py-0 hide-scrollbar">
                            <div class="row hide pt-2" data-step="1" data-title="Create a New Group">

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="groupName">Group name</label>
                                        <input type="text" class="form-control form-control-md" id="groupName"
                                            placeholder="Type group name here">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Choose profile picture</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="profilePictureInput"
                                                accept="image/*">
                                            <label class="custom-file-label" for="profilePictureInput">Choose
                                                file</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group mb-0">
                                                <label>Group privacy</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group rounded p-2 border">
                                                <div class="custom-control custom-radio">
                                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                                        id="exampleRadios1" value="option1" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Public group
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group rounded p-2 border">
                                                <div class="custom-control custom-radio">
                                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                                        id="exampleRadios2" value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Private group
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row hide pt-2" data-step="2" data-title="Add Group Members">
                                <div class="col-12 px-0">
                                    <!-- Search Start -->
                                    <form class="form-inline w-100 px-2 pb-2 border-bottom">
                                        <div class="input-group w-100 bg-light">
                                            <input type="text"
                                                class="form-control form-control-md search border-right-0 transparent-bg pr-0"
                                                placeholder="Search">
                                            <div class="input-group-append">
                                                <div class="input-group-text transparent-bg border-left-0"
                                                    role="button">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/search.svg" alt=""> -->
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Search End -->
                                </div>

                                <div class="col-12 px-0">
                                    <!-- List Group Start -->
                                    <ul class="list-group list-group-flush">

                                        <!-- List Group Item Start -->
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="avatar avatar-online mr-2">
                                                    <img src="./../../assets/media/avatar/1.png" alt="">
                                                </div>

                                                <div class="media-body">
                                                    <h6 class="text-truncate">
                                                        <a href="#" class="text-reset">Catherine Richardson</a>
                                                    </h6>

                                                    <p class="text-muted mb-0">Online</p>
                                                </div>

                                                <div class="media-options">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" value=""
                                                            id="chx-user-1" checked="">
                                                        <label class="custom-control-label" for="chx-user-1"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="media-label" for="chx-user-1"></label>
                                        </li>
                                        <!-- List Group Item End -->

                                        <!-- List Group Item Start -->
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="avatar avatar-online mr-2">
                                                    <img src="./../../assets/media/avatar/2.png" alt="">
                                                </div>

                                                <div class="media-body">
                                                    <h6 class="text-truncate">
                                                        <a href="#" class="text-reset">Katherine Schneider</a>
                                                    </h6>

                                                    <p class="text-muted mb-0">Online</p>
                                                </div>

                                                <div class="media-options">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" value=""
                                                            id="chx-user-2" checked="">
                                                        <label class="custom-control-label" for="chx-user-2"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="media-label" for="chx-user-2"></label>
                                        </li>
                                        <!-- List Group Item End -->

                                        <!-- List Group Item Start -->
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="avatar avatar-offline mr-2">
                                                    <img src="./../../assets/media/avatar/3.png" alt="">
                                                </div>

                                                <div class="media-body">
                                                    <h6 class="text-truncate">
                                                        <a href="#" class="text-reset">Brittany K. Williams</a>
                                                    </h6>

                                                    <p class="text-muted mb-0">Offline</p>
                                                </div>
                                                <div class="media-options">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" value=""
                                                            id="chx-user-3">
                                                        <label class="custom-control-label" for="chx-user-3"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="media-label" for="chx-user-3"></label>
                                        </li>
                                        <!-- List Group Item End -->

                                        <!-- List Group Item Start -->
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="avatar avatar-busy mr-2">
                                                    <img src="./../../assets/media/avatar/4.png" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="text-truncate"><a href="#" class="text-reset">Christina
                                                            Turner</a></h6>
                                                    <p class="text-muted mb-0">Busy</p>
                                                </div>
                                                <div class="media-options">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" value=""
                                                            id="chx-user-4" checked="">
                                                        <label class="custom-control-label" for="chx-user-4"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="media-label" for="chx-user-4"></label>
                                        </li>
                                        <!-- List Group Item End -->

                                        <!-- List Group Item Start -->
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="avatar avatar-away mr-2">
                                                    <img src="./../../assets/media/avatar/5.png" alt="">
                                                </div>

                                                <div class="media-body">
                                                    <h6 class="text-truncate"><a href="#" class="text-reset">Annie
                                                            Richardson</a></h6>
                                                    <p class="text-muted mb-0">Away</p>
                                                </div>
                                                <div class="media-options">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" value=""
                                                            id="chx-user-5">
                                                        <label class="custom-control-label" for="chx-user-5"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="media-label" for="chx-user-5"></label>
                                        </li>
                                        <!-- List Group Item End -->

                                    </ul>
                                    <!-- List Group End -->
                                </div>
                            </div>

                            <div class="row pt-2 h-100 hide" data-step="3" data-title="Finished">
                                <div class="col-12">
                                    <div class="d-flex justify-content-center align-items-center flex-column h-100">
                                        <div class="btn btn-success btn-icon rounded-circle text-light mb-3">
                                            <!-- Default :: Inline SVG -->
                                            <svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7" />
                                            </svg>

                                            <!-- Alternate :: External File link -->
                                            <!-- <img class="injectable hw-24" src="./../../assets/media/heroicons/outline/check.svg" alt=""> -->
                                        </div>
                                        <h6>Group Created Successfully</h6>
                                        <p class="text-muted text-center">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Dolores cumque laborum fugiat vero pariatur provident!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link text-muted js-btn-step mr-auto"
                                data-orientation="cancel" data-dismiss="modal"></button>
                            <button type="button" class="btn btn-secondary  js-btn-step"
                                data-orientation="previous"></button>
                            <button type="button" class="btn btn-primary js-btn-step" data-orientation="next"></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 3 :: Invite Others -->
            <div class="modal modal-lg-fullscreen fade" id="inviteOthers" tabindex="-1" role="dialog"
                aria-labelledby="inviteOthersLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-zoom">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="inviteOthersLabel">Invite Others</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body hide-scrollbar">
                            <form>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="inviteEmailAddress">Email address</label>
                                            <input type="email" class="form-control form-control-md"
                                                id="inviteEmailAddress" placeholder="Type email address here" value="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="inviteMessage">Invitation message</label>
                                            <textarea class="form-control form-control-md no-resize hide-scrollbar"
                                                id="inviteMessage" placeholder="Write your message here"
                                                rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link text-muted" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send Invitation</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 4 :: Notifications -->
            <div class="modal modal-lg-fullscreen fade" id="notificationModal" tabindex="-1" role="dialog"
                aria-labelledby="notificationModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-zoom">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="notificationModalLabel">Notifications</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body p-0 hide-scrollbar">
                            <div class="row">

                                <div class="col-12">
                                    <!-- List Group Start -->
                                    <ul class="list-group list-group-flush  py-2">

                                        <!-- List Group Item Start -->
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="btn btn-primary btn-icon rounded-circle text-light mr-2">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-24" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-24" src="./../../assets/media/heroicons/outline/user-add.svg" alt=""> -->
                                                </div>

                                                <div class="media-body">
                                                    <h6>
                                                        <a href="#">Catherine richardson</a> send you a friend request
                                                    </h6>

                                                    <p class="text-muted mb-0">5 mins ago</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center mt-2">
                                                <button type="button"
                                                    class="btn btn-outline-danger mx-1">Reject</button>
                                                <button type="button" class="btn btn-primary mx-1">Accept</button>
                                            </div>

                                        </li>
                                        <!-- List Group Item End -->

                                        <!-- List Group Item Start -->
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="btn btn-primary btn-icon rounded-circle text-light mr-2">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-24" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-24" src="./../../assets/media/heroicons/outline/check-circle.svg" alt=""> -->
                                                </div>

                                                <div class="media-body">
                                                    <h6>
                                                        <a href="#">Katelyn Valdez</a> accepted your friend request
                                                    </h6>

                                                    <p class="text-muted mb-0">25 mins ago</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- List Group Item End -->

                                        <!-- List Group Item Start -->
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="btn btn-primary btn-icon rounded-circle text-light mr-2">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-24" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-24" src="./../../assets/media/heroicons/outline/photograph.svg" alt=""> -->
                                                </div>

                                                <div class="media-body">
                                                    <h6>
                                                        <a href="#">Eva Walker</a> updated profile picture
                                                    </h6>

                                                    <p class="text-muted mb-0">5 mins ago</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- List Group Item End -->

                                        <!-- List Group Item Start -->
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="btn btn-primary btn-icon rounded-circle text-light mr-2">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-24" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-24" src="./../../assets/media/heroicons/outline/check-circle.svg" alt=""> -->
                                                </div>

                                                <div class="media-body">
                                                    <h6>
                                                        <a href="#">Bonnie Torres</a> accepted your friend request
                                                    </h6>

                                                    <p class="text-muted mb-0">5 mins ago</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- List Group Item End -->

                                        <!-- List Group Item Start -->
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="btn btn-primary btn-icon rounded-circle text-light mr-2">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-24" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-24" src="./../../assets/media/heroicons/outline/photograph.svg" alt=""> -->
                                                </div>

                                                <div class="media-body">
                                                    <h6>
                                                        <a href="#">Christopher Garcia</a> updated profile picture
                                                    </h6>

                                                    <p class="text-muted mb-0">5 mins ago</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- List Group Item End -->


                                    </ul>
                                    <!-- List Group End -->
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-link text-muted">Clear all</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 5 :: Add Note -->
            <div class="modal modal-lg-fullscreen fade" id="addNoteModal" tabindex="-1" role="dialog"
                aria-labelledby="addNoteModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-zoom">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addNoteModalLabel">Add new note</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="addNoteName" class="col-form-label">Note title:</label>
                                    <input type="text" class="form-control" id="addNoteName" value=""
                                        placeholder="Add note title here">
                                </div>
                                <div class="form-group">
                                    <label for="addNoteDetails" class="col-form-label">Note details:</label>
                                    <textarea class="form-control hide-scrollbar" id="addNoteDetails" rows="4"
                                        placeholder="Add note descriptions"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Note tag:</label>
                                    <select class="custom-select font-size-sm shadow-none">
                                        <option selected>Personal</option>
                                        <option value="1">Important</option>
                                        <option value="2">Work</option>
                                        <option value="3">Favourite</option>
                                    </select>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light border" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Add task</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 6 :: Edit Task -->
            <div class="modal modal-lg-fullscreen fade" id="taskModal" tabindex="-1" role="dialog"
                aria-labelledby="taskModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-zoom">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="taskModalLabel">Edit task</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="editTaskName" class="col-form-label">Task name:</label>
                                    <input type="text" class="form-control" id="editTaskName"
                                        value="Dinner with friends" placeholder="Add task name here">
                                </div>
                                <div class="form-group">
                                    <label for="editTaskDetails" class="col-form-label">Task details:</label>
                                    <textarea class="form-control hide-scrollbar" id="editTaskDetails" rows="4"
                                        placeholder="Add task descriptions">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis temporibus vel, molestiae nobis dolor aut sapiente. Vero possimus molestias consequatur quod, quo rem autem molestiae, accusantium nemo culpa eos doloremque?
                      </textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light border" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Finish</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 7 :: Add Task -->
            <div class="modal modal-lg-fullscreen fade" id="addTaskModal" tabindex="-1" role="dialog"
                aria-labelledby="addTaskModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-zoom">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addTaskModalLabel">Add new task</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="addTaskName" class="col-form-label">Task name:</label>
                                    <input type="text" class="form-control" id="addTaskName" value=""
                                        placeholder="Add task name here">
                                </div>
                                <div class="form-group">
                                    <label for="addTaskDetails" class="col-form-label">Task details:</label>
                                    <textarea class="form-control hide-scrollbar" id="addTaskDetails" rows="4"
                                        placeholder="Add task descriptions"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light border" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Add task</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- All Modals End -->
        </div>
        <!-- Main Layout End -->


        <!-- Javascript Files -->
        <script src="{{asset('admin')}}/js/jquery.min.js"></script>
        <script src="{{asset('admin')}}/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('admin')}}/js/jquery.magnific-popup.min.js"></script>
        <script src="{{asset('admin')}}/js/svg-inject.min.js"></script>
        <script src="{{asset('admin')}}/js/modal-steps.min.js"></script>
        <script src="{{asset('admin')}}/js/emojionearea.min.js"></script>
        <script src="{{asset('admin')}}/js/app.js"></script>

        <script>
            // Scroll to end of chat
            document.querySelector('.chat-finished').scrollIntoView({
                block: 'end',               // "start" | "center" | "end" | "nearest",
                behavior: 'auto'          //"auto"  | "instant" | "smooth",
            });

        </script>
        <script>
            window.Echo.channel("maulana-channel")
            .listen('.MaulanaMessage', function (e) {
                   console.log(e.message)
                   $("#messages").empty()
                    alert(22)
                })
        </script>
    </body>

</html>