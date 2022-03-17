<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="#" class="brand-link">
<img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">{{ auth()->user()->full_name }}

</span>
</a>

<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">

<div class="info">

 <a class="d-block" href="{{ route('logout') }}" onclick="event.preventDefault();
     document.getElementById('logout-form').submit();">
     {{ __('Logout') }}
 </a>


	<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
	    @csrf
	</form>
</div>
</div>

<div class="form-inline">
<div class="input-group" data-widget="sidebar-search">
<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-search fa-fw"></i>
</button>
</div>
</div>
</div>

<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

@role(['superadmin'])

<li class="nav-item">
<a href="{{ route('users.index') }}" class="nav-link">
<i class="nav-icon fas fa-user-circle"></i>
<p>
Users
</p>
</a>
</li>

<li class="nav-item">
<a href="{{ route('roles.index') }}" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Roles</p>
</a>
</li>

<li class="nav-item">
<a href="{{ route('products.index') }}" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Products</p>
</a>
</li>


<li class="nav-item">
<a href="{{ route('category.index') }}" class="nav-link">
<i class="nav-icon fas fa-th"></i>
<p>
Categories
</p>
</a>
</li>
@endrole
@role(['useradmin'])
<li class="nav-item">
<a href="{{ route('users.index') }}" class="nav-link">
<i class="nav-icon fas fa-user-circle"></i>
<p>
Users
</p>
</a>
</li>
@endrole
@role(['salesTeam'])
<li class="nav-item">
<a href="{{ route('users.index') }}" class="nav-link">
<i class="nav-icon fas fa-user-circle"></i>
<p>
Users
</p>
</a>
</li>
<li class="nav-item">
<a href="{{ route('products.index') }}" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Products</p>
</a>
</li>


<li class="nav-item">
<a href="{{ route('category.index') }}" class="nav-link">
<i class="nav-icon fas fa-th"></i>
<p>
Categories
</p>
</a>
</li>
@endrole
</ul>
</nav>

</div>

</aside>