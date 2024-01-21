<!DOCTYPE html>
<html lang="en">

<head>
	@include('layouts.partials.head')
</head>

<body>

	<!--*******************
        Preloader start
    ********************-->
	<div id="preloader" style="display: none;">
		<div class="sk-three-bounce">
			<div class="sk-child sk-bounce1"></div>
			<div class="sk-child sk-bounce2"></div>
			<div class="sk-child sk-bounce3"></div>
		</div>
	</div>
	<!--*******************
        Preloader end
    ********************-->

	<!--**********************************
        Main wrapper start
    ***********************************-->




	<div id="main-wrapper" class="show">

		<!--**********************************
            Nav header start
        ***********************************-->
		<div class="nav-header">
			<a href="index.html" class="brand-logo" aria-label="Gymove">
				<img class="logo-abbr" width="50" src="https://img.freepik.com/premium-vector/cute-indonesian-ghost-kuntilanak-vector-illustration_547110-118.jpg?w=740" alt="">


				<h4 class="logo-compact mt-2">SIKUNTI <span style="font-size: 10px">Sistem Keuangan Informatika</span>
				</h4>
				<h4 class="brand-title mt-2">SIKUNTI <span style="font-size: 10px">Sistem Keuangan Informatika </span>
				</h4>
			</a>

			<div class="nav-control">
				<div class="hamburger">
					<span class="line"></span><span class="line"></span><span class="line"></span>
				</div>
			</div>
		</div>
		<!--**********************************
            Nav header end
        ***********************************-->


		<!--**********************************
            Header start
        ***********************************-->
		<header class="header">
			<div class="header-content">
				<nav class="navbar navbar-expand">
					<div class="collapse navbar-collapse justify-content-between">
						<div class="header-left">
							<div class="dashboard_bar">
								Dashboard
							</div>
						</div>
						<ul class="navbar-nav header-right">



							<li class="nav-item dropdown header-profile">
								<a class="nav-link" href="javascript:void(0)" role="button" data-bs-toggle="dropdown">
									<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9tOgIOdgEt9Arku3C1n05m92V1W8WOOQkOg&usqp=CAU" width="20" alt="">
									<div class="header-info">
										<span class="text-black"><strong>Muh. Syahri Romadhoni</strong></span>
										<p class="fs-12 mb-0">dhonxvi4@gmail.com</p>
									</div>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="/setting" class="dropdown-item ai-icon">
										<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
											width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
											stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
										<span class="ms-2">Profile </span>
									</a>
									<a href="/logout" class="dropdown-item ai-icon">
										<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
											width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
											stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
											<polyline points="16 17 21 12 16 7"></polyline>
											<line x1="21" y1="12" x2="9" y2="12">
											</line>
										</svg>
										<span class="ms-2">Logout </span>
									</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

		<!--**********************************
            Sidebar start
        ***********************************-->
		<div class="deznav">
			<div class="deznav-scroll mm-active">
				<ul class="metismenu mm-show" id="menu">
					<li class=""><a href="/" class="ai-icon mm-active" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>
					<li><a href="/kelas" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Data Jurusan</span>
						</a>
					</li>
					<li><a href="/mahasiswa" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-television"></i>
							<span class="nav-text">Data Mahasiswa</span>
						</a>
					</li>
					<li><a href="/tagihan" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-calculator"></i>
							<span class="nav-text">Tagihan</span>
						</a>
					</li>
                    <li><a href="/transaksi" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-book"></i>
                        <span class="nav-text">Transaksi</span>
                    </a>
                </li>
				</ul>
				<div class="add-menu-sidebar">
					<img src="https://cdn-icons-png.flaticon.com/512/1053/1053210.png" width="50" alt="" class="me-3">
					<a href="/agenda" class="font-w500 mb-0">Logout</a>
				</div>
				<div class="copyright">
					<p><strong>T2S System</strong> © 2023 All Rights Reserved</p>
					<p>Made with <span class="heart"></span> by Yosi Bagus</p>
				</div>
			</div>
		</div>
		<!--**********************************
            Sidebar end
        ***********************************-->


		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body default-height">
			<div class="container-fluid">
                @yield('content')

			</div>
		</div>
		<!--**********************************
            Content body end
        ***********************************-->



		<!--**********************************
            Footer start
        ***********************************-->
		<footer class="footer">
			<div class="copyright">
				<p>Copyright © Designed &amp; Developed by <a href="https://www.instagram.com/msrdhon_/" target="_blank">MsRDhon</a> 2023</p>
			</div>
		</footer>
		<!--**********************************
            Footer end
        ***********************************-->
	</div>
	<!--**********************************
        Main wrapper end

        ***********************************-->

	<!-- Required vendors -->
	<script src="{{ asset('vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('vendor/chart-js/chart.bundle.min.js') }}"></script>
	<script src="{{ asset('vendor/owl-carousel/owl.carousel.js') }}"></script>
	<!-- Chart piety plugin files -->
	<script src="{{ asset('vendor/peity/jquery.peity.min.js') }}"></script>

	<!-- Apex Chart -->
	<script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script>

	<!-- Datatable -->
	<script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
	<!-- Dashboard 1 -->
	<script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>

	<script src="{{ asset('js/plugins-init/datatables.init.js') }}"></script>
	<script src="{{ asset('js/custom.min.js') }}"></script>
	<script src="{{ asset('js/deznav-init.js') }}"></script>
	<script>
		(function () {
			'use strict'

			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.querySelectorAll('.needs-validation')

			// Loop over them and prevent submission
			Array.prototype.slice.call(forms)
				.forEach(function (form) {
					form.addEventListener('submit', function (event) {
						if (!form.checkValidity()) {
							event.preventDefault()
							event.stopPropagation()
						}

						form.classList.add('was-validated')
					}, false)
				})
		})()
	</script>


</body>

</html>
