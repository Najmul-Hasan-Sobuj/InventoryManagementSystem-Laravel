<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="{{ asset('assets/images/placeholder.jpg') }}"
                            class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold">Victoria Baker</span>
                        <div class="text-size-mini text-muted">
                            <i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
                        </div>
                    </div>

                    <div class="media-right media-middle">
                        <ul class="icons-list">
                            <li>
                                <a href="#"><i class="icon-cog3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->

        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <!-- Main -->
                    <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i>
                    </li>
                    <li class="{{ request()->is('employee*') ? 'active' : '' }}">
                        <a href="{{ route('employee.index') }}">
                            <i class="fa fa-user"></i>
                            <span>Employees</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('customer*') ? 'active' : '' }}">
                        <a href="{{ route('customer.index') }}">
                            <i class="fa fa-users"></i>
                            <span>Customer</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('supplier*') ? 'active' : '' }}">
                        <a href="{{ route('supplier.index') }}">
                            <i class="fa fa-truck"></i>
                            <span>Supplier</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('salary*') ? 'active' : '' }}">
                        <a href="{{ route('salary.index') }}">
                            <i class="fa fa-money"></i>
                            <span>Advanced Salary</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('category*') ? 'active' : '' }}">
                        <a href="{{ route('category.index') }}">
                            <i class="icon-stack2"></i>
                            <span>Category</span>
                        </a>
                    </li>
                    <!-- /main -->
                </ul>
            </div>
        </div>
        <!-- /main navigation -->
    </div>
</div>
