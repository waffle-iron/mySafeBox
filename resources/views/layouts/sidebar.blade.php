
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			
			<li class="@yield('login_menu')"><a href="{{url('/logins')}}"><i class="fa fa-user"></i> <span>Logins</span></a></li>
			<li class="@yield('account_menu')"><a href="#"><i class="fa fa-cloud"></i> <span>Online Accounts</span></a></li>
			<li class="@yield('software_menu')"><a href="#"><i class="fa fa-code"></i> <span>Software Licences</span></a></li>
			<li class="@yield('internet_menu')"><a href="#"><i class="fa fa-wifi"></i> <span>Internet</span></a></li>
			<li class="@yield('credit_card_menu')"><a href="#"><i class="fa fa-credit-card"></i> <span>Credit Cards</span></a></li>

			<li class="header">TOOLS</li>
			<li><a href="#"><i class="fa fa-key text-yellow"></i> <span>Password generator</span></a></li>

		</ul>
	</section>
	<!-- /.sidebar -->
</aside>