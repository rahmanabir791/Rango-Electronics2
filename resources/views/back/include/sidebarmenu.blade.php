<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile active">
            <a href="{{route('dashboard')}}" class="nav-link">
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
                    <span class="text-secondary text-small">Admin</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" data-bs-toggle="collapse" href="#All_add" aria-expanded="false" aria-controls="ui-basic">--}}
{{--                <span class="menu-title">All ADD Section</span>--}}
{{--                <i class="menu-arrow"></i>--}}
{{--                <i class="mdi mdi-contacts menu-icon"></i>--}}
{{--            </a>--}}
{{--            <div class="collapse" id="All_add">--}}
{{--                <ul class="nav flex-column sub-menu">--}}
{{--                    <li class="nav-item"> <a class="nav-link" href="{{route('addslider')}}">Add Slider</a></li>--}}
{{--                    <li class="nav-item"> <a class="nav-link" href="{{route('add-category')}}">Add Category</a></li>--}}
{{--                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Add Brand</a></li>--}}
{{--                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Add Products</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </li>--}}

        <li class="nav-item">
            <a class="nav-link" href="{{route('Add-manageSlider')}}">
                <span class="menu-title">ADD & Manage Slider</span>
                <i class="mdi mdi-play-box-outline menu-icon" style="color: #c8b7ef;"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('add_manage-category')}}">
                <span class="menu-title">ADD & Manage Category</span>
                <i class="mdi mdi-sitemap menu-icon" style="color: #d6c8f9;"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('add_manage-Brands')}}">
                <span class="menu-title">ADD & Manage Brands</span>
                <i class="mdi mdi-account-badge menu-icon" style="color: #cbbaf2;"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('add-product')}}">
                <span class="menu-title">ADD Product</span>
                <i class="mdi mdi-play-box-outline menu-icon" style="color: #c8b7ef;"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-manage" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Products Manage</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
            <div class="collapse" id="ui-manage">
                <ul class="nav flex-column sub-menu">
                    @php
                        $categories = \App\Models\Back\Category\Category::orderBy('id', 'DESC')->get();
                    @endphp
                    @foreach($categories as $category)
                    <li class="nav-item"> <a class="nav-link" href="{{route('manage-product', [ 'category_id' => $category->id])}}"> {{$category->CategoryName}}</a></li>
                    @endforeach
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('add.manage.service') }}">
                <span class="menu-title">Add and Manage Services</span>
                <i class="mdi mdi-cash-multiple menu-icon" style="color: #cfbef9;"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('contact.info')}}">
                <span class="menu-title">Contact INFO</span>
                <i class="mdi mdi-message-alert menu-icon" style="color: #d7c9f8;"></i>
            </a>
        </li>


        <li class="nav-item sidebar-actions">
              <span class="nav-link">
                <div class="border-bottom">
                  <h6 class="font-weight-normal mb-3">Front View</h6>
                </div>
                <a href="{{route('home')}}"><button class="btn btn-block btn-lg btn-gradient-primary mt-4"><i class="fa-solid fa-users-viewfinder menu-icon" style="color: #6c46f6;"></i> Front View</button></a>

              </span>
        </li>
    </ul>
</nav>
