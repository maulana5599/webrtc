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
                                            <a class="dropdown-item" href="#" role="button" id="invite-modal" onclick="showPopupInvite()">Invite
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

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Invite Friend</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id='form-invite'>
                            <div class="form">
                                <input type="number" class="form-control value-number" placeholder="Add friend number..">
                            </div>
                            <div class="mt-2">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" onclick="saveInvite()">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tab Content End -->
</aside>
<script>

    let Id = '{{Auth::user()->id}}'
    const getUserFriend = (id) => {
        var url = '{{ route("user.friend", ":id") }}';
        url = url.replace(':id', id);
        setTimeout(() => {
            $.ajax({
                type: "GET",
                url: url,
                success: function (response) {
                if(response.status == 200) {
                    appendContactUser(response.data)
                }
                },
                error: function(jqXhr) {
                    alert(jqXhr.responseText)
                }
            });
        }, 500)
    }

    getUserFriend(Id)

    
    const chatWithPasien = (id, number_phone) => {
        const chat = $('.chats')
        chat.empty()
        var url = '{{ route("join.message", ":id") }}';
        url = url.replace(':id', id);
        $('.chats').addClass('d-flex justify-content-center align-items-center');
        $('.chats').append(`  
            <div class="spinner-border" id="loader" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        `)
        setTimeout(() => {
            $.ajax({
                type: "GET",
                url: url,
                data: {
                    user_number: number_phone
                },
                success: function (response) {
                if(response.status == 200) {
                    $('.chats').removeClass('d-flex justify-content-center align-items-center');
                    $('#loader').remove();
                    $('.chats').append(response.data)
                }
                },
                error: function(jqXhr) {
                    alert(jqXhr.responseText)
                }
            });
        }, 1000);
    }

    const componentContactUser = (data) => {
        const contact = `
            <li class="contacts-item friends active" data-target="${data.friend_user?.id}" onclick="chatWithPasien(${data.friend_user?.id}, '${data.friend_user?.nomer_handphone}')">
                <a class="contacts-link" href="javascript:;">
                    <div class="avatar avatar-online">
                        <img src="./../../assets/media/avatar/2.png" alt="">
                    </div>
                    <div class="contacts-content">
                        <div class="contacts-info">
                            <h6 class="chat-name text-truncate">${data.friend_user?.name}</h6>
                            <div class="chat-time">Just now</div>
                        </div>
                        <div class="contacts-texts">
                            <p class="text-truncate">I’m sorry, I didn’t catch that. Could you
                                please repeat?</p>
                        </div>
                    </div>
                </a>
            </li>
        `;

        return contact
    }

    
    const appendContactUser = (data) => {
        console.log(data.friend)
        if (data?.friend.length > 0 || data.friend != undefined) {
            data?.friend.map((value, index) => {
                let contact = componentContactUser(value)
                $('#chatContactTab').append(contact)
            })
        }
    }

    const showPopupInvite = () => {
        $('#exampleModalCenter').modal('show')   
        return false;
    }

    const saveInvite = () => {
        const value = $('.value-number').val()
        if (value == undefined) {
            alert('Oops number handphone tidak valid')
            return false;
        }

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            },
        })

        let data = {
            'number_phone': value
        }

        $.ajax({
            type: "POST",
            url: '{{route('save.invite')}}',
            data: data,
            success: function (response) {
                console.log(response)
            },
            error: function(jqXhr) {
                alert(jqXhr.responseText)
            }
        });
    }


</script>