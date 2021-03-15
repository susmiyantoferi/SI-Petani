<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
    <li class="{{ request()->is('ladang') ? 'active' : '' }}"><a href="/ladang"><i class="fa fa-book"></i> <span>Master Ladang</span></a></li>
    <li class="{{ request()->is('pendapatan') ? 'active' : '' }}"><a href="/pendapatan"><i class="fa fa-book"></i> <span>Master Pendapatan</span></a></li>
    <li class="{{ request()->is('pengeluaran') ? 'active' : '' }}"><a href="/pengeluaran"><i class="fa fa-book"></i> <span>Master Pengeluaran</span></a></li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-share"></i> <span>Multilevel</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
        </li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
      </ul>
    </li>
    
  </ul>