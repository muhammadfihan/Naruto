<template>
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-3 wizard d-flex flex-column flex-lg-row flex-column-fluid wizard" id="kt_login">
				<!--begin::Aside-->
				<div class="login-aside d-flex flex-column flex-row-auto">
					<!--begin::Aside Top-->
					<div class="d-flex flex-column-auto flex-column pt-15 px-30">
						<!--begin::Aside header-->
						<a href="#" class="login-logo py-6">
							<img src="assets/media/logos/custom.png" class="max-h-70px" style="border-radius:10px" alt="" />
						</a>
						<!--end::Aside header-->
						<!--begin: Wizard Nav-->
						<div class="wizard-nav pt-5 pt-lg-30">
							<!--begin::Wizard Steps-->
							<div class="wizard-steps">
								<!--begin::Wizard Step 1 Nav-->
								<div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
									<div class="wizard-wrapper">
										<div class="wizard-icon">
											<i class="wizard-check ki ki-check"></i>
											<span class="wizard-number">1</span>
										</div>
										<div class="wizard-label">
											<h3 class="wizard-title">Pengaturan Akun</h3>
											<div class="wizard-desc">Lengkapi data akun berikut</div>
										</div>
									</div>
								</div>
								<!--end::Wizard Step 1 Nav-->
								<!--begin::Wizard Step 2 Nav-->
								<div class="wizard-step" data-wizard-type="step">
									<div class="wizard-wrapper">
										<div class="wizard-icon">
											<i class="wizard-check ki ki-check"></i>
											<span class="wizard-number">2</span>
										</div>
										<div class="wizard-label">
											<h3 class="wizard-title">Alamat Perusahaan</h3>
											<div class="wizard-desc">Atur alamat sesuai lokasi anda</div>
										</div>
									</div>
								</div>
								<!--end::Wizard Step 2 Nav-->
								<!--begin::Wizard Step 3 Nav-->
								<div class="wizard-step" data-wizard-type="step">
									<div class="wizard-wrapper">
										<div class="wizard-icon">
											<i class="wizard-check ki ki-check"></i>
											<span class="wizard-number">3</span>
										</div>
										<div class="wizard-label">
											<h3 class="wizard-title">Profile Perusahaan</h3>
											<div class="wizard-desc">Lengkapi profile perusahaan</div>
										</div>
									</div>
								</div>
								<!--end::Wizard Step 3 Nav-->
								<!--begin::Wizard Step 4 Nav-->
								<div class="wizard-step" data-wizard-type="step">
									<div class="wizard-wrapper">
										<div class="wizard-icon">
											<i class="wizard-check ki ki-check"></i>
											<span class="wizard-number">4</span>
										</div>
										<div class="wizard-label">
											<h3 class="wizard-title">Selesai</h3>
											<div class="wizard-desc">Lihat hasil dan submit</div>
										</div>
									</div>
								</div>
								<!--end::Wizard Step 4 Nav-->
							</div>
							<!--end::Wizard Steps-->
						</div>
						<!--end: Wizard Nav-->
					</div>
					<!--end::Aside Top-->
					<!--begin::Aside Bottom-->
					<div class="aside-img-wizard d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center pt-2 pt-lg-5" style="background-position-y: calc(100% + 3rem); background-image: url(assets/media/svg/illustrations/features.svg)"></div>
					<!--end::Aside Bottom-->
				</div>
				<!--begin::Aside-->
				<!--begin::Content-->
				<div class="login-content flex-column-fluid d-flex flex-column p-10">
					<!--begin::Top-->
                    <div class="text-right d-flex justify-content-center">
						<div class="top-signup text-right d-flex justify-content-end pt-5 pb-lg-0 pb-10">
							<span class="font-weight-bold text-muted font-size-h4">Having issues?</span>
							<a href="javascript:;" class="font-weight-bolder text-primary font-size-h4 ml-2" id="kt_login_signup">Get Help</a>
						</div>
					</div>
					<!--end::Top-->
					<!--begin::Wrapper-->
					<div class="d-flex flex-row-fluid flex-center">
						<!--begin::Signin-->
						<div class="login-form login-form-signup">
							<!--begin::Form-->
							<form class="form" novalidate="novalidate" id="kt_login_signup_form">
								<!--begin: Wizard Step 1-->
								<div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
									<!--begin::Title-->
									<!--begin::Title-->
									<!--begin::Form Group-->
                                    <div class="form-group">
										<h3 class="font-weight-bolder text-dark" style="font-size:30px">Pendaftaran Akun</h3>
										<div class="text-muted font-weight-bold font-size-h4">Sudah punya akun ?
										<a href="#" @click="toAdmin()" class="text-primary font-weight-bolder">Login</a></div>
									</div>
                                    <div class="form-group">
										<label class="font-size-h6 font-weight-bolder text-dark">Username</label>
										<input type="email" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6"  placeholder="Username"  v-model="name" />
									</div>
									<div class="form-group">
										<label class="font-size-h6 font-weight-bolder text-dark">Email</label>
										<input type="email" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6"  placeholder="Email Perusahaan"  v-model="email" />
									</div>
									<!--end::Form Group-->
									<!--begin::Form Group-->
									<div class="form-group">
										<label class="font-size-h6 font-weight-bolder text-dark">Password</label>
										<input type="password" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6"  placeholder="Password"  v-model="password" />
									</div>
									<!--end::Form Group-->
									<!--begin::Form Group-->
									<!--end::Form Group-->
								</div>
								<!--end: Wizard Step 1-->
								<!--begin: Wizard Step 2-->
								<div class="pb-5" data-wizard-type="step-content">
									<!--begin::Title-->
									<div class="pt-lg-0 pt-5 pb-15">
										<h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Alamat Perusahaan</h3>
										<div class="text-muted font-weight-bold font-size-h4">Have a Different Address ?
										<a href="#" class="text-primary font-weight-bolder">Add Address</a></div>
									</div>
									<!--begin::Title-->
									<!--begin::Row-->
									<div class="row">
										<div class="col-xl-6">
											<!--begin::Input-->
											<div class="form-group">
												<label class="font-size-h6 font-weight-bolder text-dark">Provinsi</label>
												<input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" placeholder="Provinsi" v-model="provinsi" />
											</div>
											<!--end::Input-->
										</div>
										<div class="col-xl-6">
											<!--begin::Input-->
											<div class="form-group">
												<label class="font-size-h6 font-weight-bolder text-dark">Kota</label>
												<input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6"  placeholder="Kota" v-model="kota" />
											</div>
											<!--end::Input-->
										</div>
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row">
										<div class="col-xl-6">
											<!--begin::Input-->
											<div class="form-group">
												<label class="font-size-h6 font-weight-bolder text-dark">No NPWP</label>
												<input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6"  placeholder="Nomor NPWP" v-model="npwp"  />
											</div>
											<!--end::Input-->
										</div>
										<div class="col-xl-6">
											<!--begin::Input-->
											<div class="form-group">
												<label class="font-size-h6 font-weight-bolder text-dark">Kode Pos</label>
												<input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" placeholder="Kode Pos" v-model="kode_pos" />
											</div>
											<!--end::Input-->
										</div>
                                        <div class="col-xl-12">
											<!--begin::Input-->
											<div class="form-group">
												<label class="font-size-h6 font-weight-bolder text-dark">Detail Alamat</label>
												<input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" placeholder="Detail Alamat" v-model="det_alamat" />
											</div>
											<!--end::Input-->
										</div>
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<!--end::Row-->
								</div>
								<!--end: Wizard Step 2-->
								<!--begin: Wizard Step 3-->
								<div class="pb-5" data-wizard-type="step-content">
									<!--begin::Title-->
									<div class="pt-lg-0 pt-5 pb-15">
										<h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Profile Perusahaan</h3>
										<div class="text-muted font-weight-bold font-size-h4">Lengkapi Data Berikut
										<a href="#" class="text-primary font-weight-bolder">Identitas Perusahaan</a></div>
									</div>
									<!--begin::Title-->
									<!--begin::Row-->
									<div class="row">
                                         <div class="col-xl-12">
											<!--begin::Input-->
											<div class="form-group">
												<label class="font-size-h6 font-weight-bolder text-dark">Nama Perusahaan</label>
												<input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" placeholder="Nama Perusahaan" v-model="nama_perusahaan" />
											</div>
											<!--end::Input-->
										</div>
                                        <div class="col-xl-12">
											<!--begin::Input-->
											<div class="form-group">
												<label class="font-size-h6 font-weight-bolder text-dark">Jabatan Pendaftar</label>
												<input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" placeholder="Jabatan Pendaftar" v-model="jabatan" />
											</div>
											<!--end::Input-->
										</div>
                                        <div class="col-xl-12">
											<!--begin::Input-->
											<div class="form-group">
												<label class="font-size-h6 font-weight-bolder text-dark">Jumlah Karyawan</label>
												<input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" placeholder="Jumlah Karyawan" v-model="jumlah_karyawan" />
											</div>
											<!--end::Input-->
										</div>
                                        <div class="col-xl-12">
											<!--begin::Input-->
											<div class="form-group">
												<label class="font-size-h6 font-weight-bolder text-dark">Bidang</label>
												<input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" placeholder="Perusahaan Bergerak Dibidang" v-model="bidang" />
											</div>
											<!--end::Input-->
										</div>
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<!--end::Row-->
								</div>
								<!--end: Wizard Step 3-->
								<!--begin: Wizard Step 4-->
								<div class="pb-5" data-wizard-type="step-content">
									<!--begin::Title-->
									<div class="pt-lg-0 pt-5 pb-15">
										<h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Detail Pendaftaran</h3>
									</div>
									<!--end::Title-->
									<!--begin::Section-->
									<h4 class="font-weight-bolder mb-3">Akun Perusahaan</h4>
									<div class="text-dark-50 font-weight-bold line-height-lg mb-8">
										<div>{{name}}</div>
										<div>{{email}}</div>
										<div>Jabatan sebagai : {{jabatan}}</div>
									</div>
									<!--end::Section-->
									<!--begin::Section-->
									<h4 class="font-weight-bolder mb-3">Detail Alamat</h4>
									<div class="text-dark-50 font-weight-bold line-height-lg mb-8">
										<div>{{provinsi}}</div>
										<div>{{kota}}</div>
										<div>{{kode_pos}}</div>
										<div>{{det_alamat}}</div>
									</div>
									<!--end::Section-->
									<!--begin::Section-->
									<h4 class="font-weight-bolder mb-3">Profile Perusahaan</h4>
									<div class="text-dark-50 font-weight-bold line-height-lg mb-8">
										<div>Nama Perushaan : {{nama_perusahaan}}</div>
										<div>Email : {{email}}</div>
										<div>No NPWP : {{npwp}}</div>
										<div>Jumlah Karyawan : {{jumlah_karyawan}}</div>

									</div>
									<!--end::Section-->
								</div>
								<!--end: Wizard Step 4-->
								<!--begin: Wizard Actions-->
								<div class="d-flex justify-content-between pt-3">
									<div class="mr-2">
										<button type="button" class="btn btn-light-primary font-weight-bolder font-size-h6 pl-6 pr-8 py-4 my-3 mr-3" data-wizard-type="action-prev">
										<span class="svg-icon svg-icon-md mr-1">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Left-2.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)" x="14" y="7" width="2" height="10" rx="1" />
													<path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>Previous</button>
									</div>
									<div>
										<button class="btn btn-primary font-weight-bolder font-size-h6 pl-5 pr-8 py-4 my-3" data-wizard-type="action-submit" type="submit" @click="register">Submit
										<span class="svg-icon svg-icon-md ml-2">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
													<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span></button>
										<button type="button" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3" data-wizard-type="action-next">Next Step
										<span class="svg-icon svg-icon-md ml-1">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
													<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span></button>
									</div>
								</div>
								<!--end: Wizard Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Signin-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->

		<!--end::Page Scripts-->

</template>

<script>
import Dashboard from "./Dashboard";
export default {
    components: {Dashboard},
    mounted() {

    },
    data() {
        return {
            name: "",
            email: "",
            password: "",
            nama_perusahaan:"",
            provinsi:"",
            npwp:"",
            kota:"",
            det_alamat:"",
            bidang:"",
            kode_pos:"",
            jabatan : "",
            jumlah_karyawan: "",
            role :"",
            error: null,
            loggedIn: localStorage.getItem("loggedIn"),
            token: localStorage.getItem("token"),

        }
    },
    methods: {
       Landing(){
            this.$router.push('/'); 
      },
       toAdmin(){
            this.$router.push('/Login'); 
      },
        register(e) {
            e.preventDefault()
            if (this.password.length > 0) {
                axios.get('/sanctum/csrf-cookie').then(response => {
                    axios.post('api/register', {
                        name: this.name,
                        email: this.email,
                        nama_perusahaan:this.nama_perusahaan,
                        jabatan:this.jabatan,
                        bidang:this.bidang,
                        kota:this.kota,
                        npwp:this.npwp,
                        kode_pos:this.kode_pos,
                        provinsi:this.provinsi,
                        det_alamat:this.det_alamat,
                        jumlah_karyawan:this.jumlah_karyawan,
                        role:this.role,
                        password: this.password
                    })
                        .then(response => {
                            if (response.data.success) {
								 Swal.fire({
								icon: 'success',
								title: 'Perusahaan anda berhasil daftar',
								text: 'Anda akan diarahkan ke halaman login',
								showConfirmButton: false,
								timer: 2000
							})
                               this.$router.push("/Login")
                            }
							else {
                                this.error = response.data.message
                            }
                        })
                        .catch(function (error) {
                            console.error(error);
                        });

                })
            }
        },
        login(e) {
            e.preventDefault()
            if (this.password.length > 0) {
                this.$axios.get('/sanctum/csrf-cookie').then(response => {
                    this.$axios.post('api/login', {
                        email: this.email,
                        password: this.password
                    })
                        .then(response => {
                            console.log(response.data)
                            if (response.data.success) {
                                window.localStorage.setItem("loggedIn", true)
                                window.localStorage.setItem("token", response.data.token)
                                window.localStorage.setItem("role", response.data.user.role)
                                window.localStorage.setItem("name", response.data.user.name)

                                if (response.data.user.role == 'Manager') {
                                    this.$router.push("/ManagerDashboard")
                                } else if (response.data.user.role == 'Admin') {
                                    this.$router.push("/AdminDashboard")
                                } else if (response.data.user.role == 'Pegawai') {
                                    this.$router.push("/PegawaiDashboard")
                                }
                                this.loggedIn = true;
                            } else {
                                this.error = response.data.message
                            }
                        })
                        .catch(function (error) {
                            console.error(error);
                        });
                })
            }
        }
    },
    beforeRouteEnter(to, from, next) {
        if (JSON.parse(window.localStorage.getItem("loggedIn"))) {
            if (window.localStorage.getItem("role") == 'Manager') {
                return next("/ManagerDashboard");
            } else if (window.localStorage.getItem("role") == 'Admin') {
                return next("/AdminDashboard");
            } else if (window.localStorage.getItem("role") == 'Pegawai') {
                return next("/PegawaiDashboard");
            }
        }
        next();
    },

}
</script>

