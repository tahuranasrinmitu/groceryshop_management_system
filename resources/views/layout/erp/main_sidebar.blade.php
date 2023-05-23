<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="{{asset('assets/admin1.jpg')}}" alt="image" />
                </div>
                <div class="profile-name">
                    <p class="name">
                    Tahura Nasrin Mitu
                    </p>
                    <p class="designation">
                        Supper Admin
                    </p>
                </div>
            </div>
        </li>
        @include('layout.erp.menu.dashboard')
        @include('layout.erp.menu.user')
        @include('layout.erp.menu.uom')
        @include('layout.erp.menu.categories')
        @include('layout.erp.menu.product')
        @include('layout.erp.menu.purchase')
        @include('layout.erp.menu.purchase_return')
        @include('layout.erp.menu.manufacturer')
        @include('layout.erp.menu.suppliers')
        @include('layout.erp.menu.status')
        @include('layout.erp.menu.stock')
        @include('layout.erp.menu.customer')
        @include('layout.erp.menu.sales')
        @include('layout.erp.menu.sales_return')
        @include('layout.erp.menu.report')
        @include('layout.erp.menu.settings')
        <li class="nav-item">
            <a class="nav-link" href="pages/documentation.html">
                <i class="far fa-file-alt menu-icon"></i>
                <span class="menu-title">Documentation</span>
            </a>
        </li>
    </ul>
</nav>
