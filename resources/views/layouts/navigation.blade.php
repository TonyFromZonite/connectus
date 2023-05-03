<div class="nav-header bg-white shadow-xs border-0">
    <div class="nav-top">
        <a href="{{ url('/') }}"><i class="material-icons text-success display1-size ms-0 me-2">electric_bolt</i>
            <span
                class="mb-0 text-current d-inline-block fredoka-font ls-3 fw-600 font-xxl logo-text">{{ config('app.name') }}.
            </span>
        </a>
        <a href="#" class="mob-menu me-auto ms-2 chat-active-btn"><i
                class="material-icons text-grey-900 font-sm btn-round-md bg-greylight">message</i>
        </a>
        <a href="default-video.html" class="mob-menu me-auto ms-2 chat-active-btn"><i
                class="material-icons text-grey-900 font-sm btn-round-md bg-greylight">movies</i>
        </a>
        <a href="#" class="me-2 menu-search-icon mob-menu">
            <i class="material-icons text-grey-900 font-sm btn-round-md bg-greylight">search</i>
        </a>
        <button class="nav-menu ms-2 me-0"></button>
    </div>


    <form action="" method="GET" class="float-left header-search">
        <div class="mb-0 form-group icon-input">
            <i class="material-icons font-sm text-primary-400" style="margin-top: 1px">search</i>
            <input type="text" name="query" placeholder="Start typing to search.."
                class="pt-2 pb-2 border-0 bg-grey lh-32 ps-5 pe-3 font-xssss fw-500 rounded-xl w350 theme-dark-bg">
        </div>
    </form>
    <a href="{{url('/')}}" class="p-2 text-center ms-0 menu-icon center-menu-icon"><i
            class=" {{ request()->route()->getName() == 'dashboard'? 'bg-primary text-white': '' }} material-icons font-lg bg-greylight btn-round-md theme-dark-bg text-primary-900">home</i></a>
    <a href="{{route('explore')}}" class="  p-2 text-center ms-0 menu-icon center-menu-icon"><i
            class=" {{ request()->route()->getName() == 'explore'? 'bg-primary text-white' : '' }} material-icons font-lg bg-greylight btn-round-md theme-dark-bg text-primary-900 ">bolt</i></a>
    <a href="{{route("videos")}}" class="p-2 text-center ms-0 menu-icon center-menu-icon"><i
            class=" {{ request()->route()->getName() == 'videos'? 'bg-primary text-white': '' }}  material-icons font-lg bg-greylight btn-round-md theme-dark-bg text-primary-900 ">videocam</i></a>
    <a href="default-group.html" class="p-2 text-center ms-0 menu-icon center-menu-icon"><i
            class="material-icons font-lg bg-greylight btn-round-md theme-dark-bg text-primary-900 ">person</i></a>

    <a href="#" class="p-2 text-center ms-auto menu-icon" id="dropdownMenu3" data-bs-toggle="dropdown"
        aria-expanded="false"><span class="dot-count bg-warning"></span><i
            class="material-icons font-xl text-current">notifications</i></a>
    <div class="dropdown-menu dropdown-menu-end p-4 rounded-3 border-0 shadow-lg" aria-labelledby="dropdownMenu3">

        <h4 class="fw-700 font-xss mb-4">Notification</h4>
        <div class="card bg-transparent-card w-100 border-0 pe-5 mb-3">
            <img src="../images/user-8.png" alt="user" class="w40 position-absolute right-0">
            <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block text-left">Hendrix Stamp <span
                    class="text-grey-400 font-xsssss fw-600 float-right mt-1"> 3 min</span></h5>
            <h6 class="text-grey-500 fw-500 font-xssss lh-4">There are many variations of pass..</h6>
        </div>
        <div class="card bg-transparent-card w-100 border-0 pe-5 mb-3">
            <img src="../images/user-4.png" alt="user" class="w40 position-absolute right-0">
            <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block text-left">Goria Coast <span
                    class="text-grey-400 font-xsssss fw-600 float-right mt-1"> 2 min</span></h5>
            <h6 class="text-grey-500 fw-500 font-xssss lh-4">Mobile Apps UI Designer is require..</h6>
        </div>

        <div class="card bg-transparent-card w-100 border-0 pe-5 mb-3">
            <img src="../images/user-7.png" alt="user" class="w40 position-absolute right-0">
            <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block text-left">Surfiya Zakir <span
                    class="text-grey-400 font-xsssss fw-600 float-right mt-1"> 1 min</span></h5>
            <h6 class="text-grey-500 fw-500 font-xssss lh-4">Mobile Apps UI Designer is require..</h6>
        </div>
        <div class="card bg-transparent-card w-100 border-0 pe-5">
            <img src="../images/user-6.png" alt="user" class="w40 position-absolute right-0">
            <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block text-left">Victor Exrixon <span
                    class="text-grey-400 font-xsssss fw-600 float-right mt-1"> 30 sec</span></h5>
            <h6 class="text-grey-500 fw-500 font-xssss lh-4">Mobile Apps UI Designer is require..</h6>
        </div>
    </div>
    <a href="#" class="p-2 text-center ms-3 menu-icon chat-active-btn"><i
            class="material-icons font-xl text-current">chat</i></a>
    <div class="p-2 text-center ms-3 position-relative dropdown-menu-icon menu-icon cursor-pointer">
        <i class="material-icons animation-spin d-inline-block font-xl text-current">settings</i>
        <div class="dropdown-menu-settings switchcolor-wrap">
            <h4 class="fw-700 font-sm mb-4">Settings</h4>
            <h6 class="font-xssss text-grey-500 fw-700 mb-3 d-block">Choose Color Theme</h6>
            <ul>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="red" checked=""><i class="ti-check"></i>
                        <span class="circle-color bg-red" style="background-color: #ff3b30;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="green"><i class="ti-check"></i>
                        <span class="circle-color bg-green" style="background-color: #4cd964;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="blue" checked=""><i
                            class="ti-check"></i>
                        <span class="circle-color bg-blue" style="background-color: #132977;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="pink"><i class="ti-check"></i>
                        <span class="circle-color bg-pink" style="background-color: #ff2d55;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="yellow"><i class="ti-check"></i>
                        <span class="circle-color bg-yellow" style="background-color: #ffcc00;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="orange"><i class="ti-check"></i>
                        <span class="circle-color bg-orange" style="background-color: #ff9500;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="gray"><i class="ti-check"></i>
                        <span class="circle-color bg-gray" style="background-color: #8e8e93;"></span>
                    </label>
                </li>

                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="brown"><i class="ti-check"></i>
                        <span class="circle-color bg-brown" style="background-color: #D2691E;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="darkgreen"><i class="ti-check"></i>
                        <span class="circle-color bg-darkgreen" style="background-color: #228B22;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="deeppink"><i class="ti-check"></i>
                        <span class="circle-color bg-deeppink" style="background-color: #FFC0CB;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="cadetblue"><i class="ti-check"></i>
                        <span class="circle-color bg-cadetblue" style="background-color: #5f9ea0;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="darkorchid"><i class="ti-check"></i>
                        <span class="circle-color bg-darkorchid" style="background-color: #9932cc;"></span>
                    </label>
                </li>
            </ul>

            <div class="card bg-transparent-card border-0 d-block mt-3 text-left">
                <h4 class="d-inline font-xssss mont-font fw-700">Header Background</h4>
                <div class="d-inline float-right mt-1">
                    <label class="toggle toggle-menu-color"><input type="checkbox"><span
                            class="toggle-icon"></span></label>
                </div>
            </div>
            <div class="card bg-transparent-card border-0 d-block mt-3 text-left">
                <h4 class="d-inline font-xssss mont-font fw-700">Menu Position</h4>
                <div class="d-inline float-right mt-1">
                    <label class="toggle toggle-menu"><input type="checkbox"><span
                            class="toggle-icon"></span></label>
                </div>
            </div>
            <div class="card bg-transparent-card border-0 d-block mt-3 text-left">
                <h4 class="d-inline font-xssss mont-font fw-700">Dark Mode</h4>
                <div class="d-inline float-right mt-1">
                    <label class="toggle toggle-dark"><input type="checkbox"><span
                            class="toggle-icon"></span></label>
                </div>
            </div>

        </div>
    </div>


    <a href="default-settings.html" class="p-0 ms-3 menu-icon"><img src=" {{ auth()->user()->profile ?? 'images/profile-4.png'}}" alt="user"
            class="w40 mt--1"></a>

</div>
