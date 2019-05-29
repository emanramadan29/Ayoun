<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar"  >

    <ul class="sidebar-menu tree" data-widget="tree">
        <li class="@yield('Home')">
            <a href="/home">
                <i class="fa fa-fw fa-home "></i>
                <span>@lang('lang.Home')</span>
            </a>
        </li>

        <li class="@yield('About')">
            <a href="/admin/account">
                <i class="fas fa-user-circle"></i>
                <span>@lang('lang.account')</span>
            </a>
        </li>

        <li class="@yield('About')">
            <a href="/admin/shipments">
                <i class="fas fa-dolly"></i>
                <span>@lang('lang.shipments')</span>
            </a>
        </li>

        <li class="header">@lang('lang.3yoonk')</li>
        <li class="@yield('About')">
            <a href="/admin/slider">
                <i class="fa fa-fw fa-slideshare"></i>
                <span>@lang('lang.slider')</span>
            </a>
        </li>

        <li class="@yield('About')">
            <a href="/admin/company">
                <i class="fas fa-tag"></i>
                <span>@lang('lang.brand')</span>
            </a>
        </li>
        <li class="@yield('About')">
            <a href="/admin/items">
                <i class="fas fa-plus"></i>
                <span>@lang('lang.adddepartment')</span>
            </a>
        </li>


        <li class="@yield('About')">
            <a href="/admin/color">
                <i class="fas fa-plus"></i>
                <span>@lang('lang.color')</span>
            </a>
        </li>




        <li class="@yield('About')">
            <a href="/admin/product">
                <i class="fas fa-plus"></i>
                <span>@lang('lang.addproduct')</span>
            </a>
        </li>


        <li class="@yield('About')">
            <a href="/admin/addproduct">
                <i class="fas fa-glasses"></i>
                <span>@lang('lang.products')</span>
            </a>
        </li>



        <li class="@yield('About')">
            <a href="/admin/country">
                <i class="fas fa-globe-americas"></i>
                <span>@lang('lang.countries')</span>
            </a>

        </li>



        <li class="@yield('About')">
            <a href="/admin/city">
                <i class="fas fa-city"></i>
                <span>@lang('lang.cities')</span>
            </a>
        </li>

        <li class="@yield('About')">
            <a href="/admin/abouts">
                <i class="fa fa-fw fa-info-circle "></i>
                <span>@lang('lang.about')</span>
            </a>
        </li>

        <li class="@yield('About')">
            <a href="/admin/socials">
                <i class="fas fa-city"></i>
                <span>@lang('lang.SocialMedia')</span>
            </a>
        </li>

        <li class="@yield('About')">
            <a href="/admin/branches">
                <i class="fas fa-city"></i>
                <span>@lang('lang.branch')</span>
            </a>
        </li>
        <li class="@yield('messages')">
            <a href="/admin/messages">
                <i class="fa fa-fw fa-envelope "></i>
                <span>@lang('lang.messages')</span>
            </a>
        </li>
        <li class="@yield('About')">
            <a href="/admin/photos">
                <i class="fas fa-city"></i>
                <span>@lang('lang.photo1')</span>
            </a>
        </li>
        <li class="@yield('About')">
            <a href="/admin/photo2">
                <i class="fas fa-city"></i>
                <span>@lang('lang.photo2')</span>
            </a>
        </li>




    </ul>
  </section>
</aside>
