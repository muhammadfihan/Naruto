<template>

<div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<div class="d-flex align-items-center flex-wrap mr-1">
									<div class="d-flex flex-column">
										<h2 class="text-white font-weight-bold my-2 mr-5">Admin Dashboard</h2>
										<div class="d-flex align-items-center font-weight-bold my-2">
                                            
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container mb-13">      
                    <div class="row">
									<div class="col-lg-6 col-xxl-4">
										<!--begin::Mixed Widget 4-->
										<div class="card card-custom bg-radial-gradient-success gutter-b card-stretch">
											<!--begin::Header-->
											<div class="card-header border-0 py-5 " >
                                                <a class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												</a>
                                              <button type="submit" @click="showModal(data)" class="btn btn-white text-success font-weight-bolder">Atur Presensi</button>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body d-flex flex-column p-0">
												<!--begin::Chart-->
												 <div class="card-body" style="text-align:center;">
                                                	<div class="date text-white" style="font-size:25px;">
                                                        <span id="dayname">Day</span>,&nbsp;
                                                        <span id="daynum">00</span>&nbsp;
                                                        <span id="month">Month</span>&nbsp;
                                                        <span id="year">Year</span>
                                                    </div>
                                                    <div class="time text-white" style="font-size:40px;font-weight: 600; color: #124EB2;">
                                                        <span id="hour">00</span>:
                                                        <span id="minutes">00</span>:
                                                        <span id="seconds">00</span>
                                                    </div>
                                                    
                                                </div>
												<!--end::Chart-->
												<!--begin::Stats-->
												<div class="card-spacer bg-white card-rounded flex-grow-1">
													<!--begin::Row-->
													<div class="row m-0"  v-for="(data) in jamabsen" :key="data.id">
														<div class="col px-8 py-6 mr-8">
															<div class="font-size-lg text-muted font-weight-bold">Jam Masuk</div>
															<div class="font-size-h4 font-weight-bolder">{{data.jam_masuk}}</div>
														</div>
														<div class="col px-8 py-6">
															<div class="font-size-lg text-muted font-weight-bold">Jam Pulang</div>
															<div class="font-size-h4 font-weight-bolder">{{data.jam_pulang}}</div>
														</div>
													</div>
													<!--end::Row-->
													<!--begin::Row-->
													<div class="row m-0">
														<div class="col px-8 py-6 mr-8">
															<div class="font-size-lg text-muted font-weight-bold">Hadir</div>
															<div class="d-flex flex-column w-50 mr-2">
																		<span class="label label-lg label-light-success label-inline font-weight-bold py-4 font-weight-bolder">{{hadir}}</span>
															</div>
														</div>
														<div class="col px-8 py-6"  v-for="(data) in admin" :key="data.id">
															<div class="font-size-lg text-muted font-weight-bold">Tidak Hadir</div>
															<div class="d-flex flex-column w-50 mr-2">
																		<span class="label label-lg label-light-danger label-inline font-weight-bold py-4 font-weight-bolder">{{(data.jumlah_karyawan)-(hadir)}}</span>
															</div>
														</div>
													</div>
													<!--end::Row-->
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Mixed Widget 4-->
									</div>
									<div class="col-lg-6 col-xxl-8">
										<!--begin::Advance Table Widget 1-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 py-5">
												<h3 class="card-title align-items-start flex-column" v-for="(data) in admin" :key="data.id">
													<span class="card-label font-weight-bolder text-dark">Pegawai Hari ini </span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">{{data.nama_perusahaan}}</span>
												</h3>
												  <div class="card-toolbar" style="margin-top:-13px">
													<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
														<!--begin::Trigger Modal-->
														<a href="#" class="btn btn-success font-weight-bolder font-size-sm" aria-haspopup="true" aria-expanded="false" data-toggle="modal" @click="showModal()">Atur Hari Kerja</a>
                                                    </div>
                                                </div>
											</div>
											
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body py-0">
												<!--begin::Table-->
												<div class="table-responsive">
													<table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
														<thead>
															<tr class="text-left">
																<th class="pr-0" style="width: 50px">Pegawai</th>
																<th style="min-width: 150px"></th>
																<th style="min-width: 150px">Jam Masuk</th>
																<th style="min-width: 150px">Keterangan</th>
															</tr>
														</thead>
														<tbody>
															<tr v-for="(data) in absendashboard" :key="data.id">
																<td class="pr-0">
																	<div class="symbol symbol-50 symbol-light mt-1">
																		<span class="symbol-label">
																			<img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
																		</span>
																	</div>
																</td>
																<td class="pl-0">
																	<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{data.name}}</a>
																	<span class="text-muted font-weight-bold text-muted d-block">{{data.email}}</span>
																</td>
																<td>
																	<span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{data.jam_masuk}}</span>
																</td>
																<td>
																	<div class="d-flex flex-column w-50 mr-2">
																		<span v-if="data.keterangan == 'On Time'" class="label label-lg label-light-success label-inline font-weight-bold py-4">{{data.keterangan}}</span>
                                                                        <span v-if="data.keterangan == 'Terlambat'" class="label label-lg label-light-danger label-inline font-weight-bold py-4">{{data.keterangan}}</span>
																	</div>
																</td>
															
															</tr>

														</tbody>
													</table>
												</div>
												<!--end::Table-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Advance Table Widget 1-->
									</div>
								</div>
                    
                    <div class="row">
									<div class="col-lg-12">
										<!--begin::List Widget 11-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0">
												<h3 class="card-title font-weight-bolder text-dark">Informasi</h3>
												<div class="card-toolbar">
													<div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
														<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-ver"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover py-5">
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-drop"></i>
																		</span>
																		<span class="navi-text">New Group</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-list-3"></i>
																		</span>
																		<span class="navi-text">Contacts</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-rocket-1"></i>
																		</span>
																		<span class="navi-text">Groups</span>
																		<span class="navi-link-badge">
																			<span class="label label-light-primary label-inline font-weight-bold">new</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-bell-2"></i>
																		</span>
																		<span class="navi-text">Calls</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-gear"></i>
																		</span>
																		<span class="navi-text">Settings</span>
																	</a>
																</li>
																<li class="navi-separator my-3"></li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-magnifier-tool"></i>
																		</span>
																		<span class="navi-text">Help</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-bell-2"></i>
																		</span>
																		<span class="navi-text">Privacy</span>
																		<span class="navi-link-badge">
																			<span class="label label-light-danger label-rounded font-weight-bold">5</span>
																		</span>
																	</a>
																</li>
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-0">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-9 bg-light-warning rounded p-5">
													<!--begin::Icon-->
													<span class="svg-icon svg-icon-warning mr-5">
														<span class="svg-icon svg-icon-lg">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																	<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</span>
													<!--end::Icon-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 mr-2">
														<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Group lunch celebration</a>
														<span class="text-muted font-weight-bold">Due in 2 Days</span>
													</div>
													<!--end::Title-->
													<!--begin::Lable-->
													<span class="font-weight-bolder text-warning py-1 font-size-lg">+28%</span>
													<!--end::Lable-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center bg-light-success rounded p-5 mb-9">
													<!--begin::Icon-->
													<span class="svg-icon svg-icon-success mr-5">
														<span class="svg-icon svg-icon-lg">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																	<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</span>
													<!--end::Icon-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 mr-2">
														<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Home navigation optimization</a>
														<span class="text-muted font-weight-bold">Due in 2 Days</span>
													</div>
													<!--end::Title-->
													<!--begin::Lable-->
													<span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span>
													<!--end::Lable-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center bg-light-danger rounded p-5 mb-9">
													<!--begin::Icon-->
													<span class="svg-icon svg-icon-danger mr-5">
														<span class="svg-icon svg-icon-lg">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
																	<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</span>
													<!--end::Icon-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 mr-2">
														<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Rebrand strategy planning</a>
														<span class="text-muted font-weight-bold">Due in 2 Days</span>
													</div>
													<!--end::Title-->
													<!--begin::Lable-->
													<span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span>
													<!--end::Lable-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center bg-light-info rounded p-5">
													<!--begin::Icon-->
													<span class="svg-icon svg-icon-info mr-5">
														<span class="svg-icon svg-icon-lg">
															<!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
																	<path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
																	<path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
																	<path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</span>
													<!--end::Icon-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 mr-2">
														<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Product goals strategy meet-up</a>
														<span class="text-muted font-weight-bold">Due in 2 Days</span>
													</div>
													<!--end::Title-->
													<!--begin::Lable-->
													<span class="font-weight-bolder text-info py-1 font-size-lg">+8%</span>
													<!--end::Lable-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::List Widget 11-->
									</div>
								</div>
                                

                    </div>
        </div>
</div>                        
           <div class="modal fade" id="editabsen" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
															<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title" id="editabsen">Edit Absen</h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<i aria-hidden="true" class="ki ki-close" @click="closeModal()"></i>
																		</button>
																	</div>
																	<div class="modal-body">
																		<div >
																		<form @submit.prevent="aturabsen()">
																			<div class="form-group row">
														<label for="example-time-input" class="col-2 col-form-label">Jam Masuk</label>
														<div class="col-10">
															<input v-model="form.jam_masuk" class="form-control" type="time" />
														</div>
													</div>

                                                                       <div class="form-group row">
														<label for="example-time-input" class="col-2 col-form-label">Jam Pulang</label>
														<div class="col-10">
															<input v-model="form.jam_pulang" class="form-control" type="time" id="example-time-input" />
														</div>
													</div>
                                                                             
																		</form>
                                                                       
																    </div>
                                                                     <div class="modal-footer">
																		 <button type="submit"  data-dismiss="modal" @click="aturabsen()" class="btn btn-success font-weight-bold">Update</button>
                                                                        <button type="button"  data-dismiss="modal" @click="closeModal()" class="btn btn-primary font-weight-bold">Tutup</button>
																	</div>
																	</div>
																	
																</div>
															</div>
														</div>          
                        
        
</template>

<script>
import router from '../router';
const date = new Date();
export default {
    name: "AdminDashboard",
    data() {
            return {
                jamabsen : [],
                admin : [],
                absendashboard:[],
                hadir : [],
                form : new Form({
                    id : "",
                    jam_masuk : "",
                    jam_pulang : "",
                }),
                loggedIn: localStorage.getItem("loggedIn"),
                token: localStorage.getItem("token"),
                name: localStorage.getItem("name"),
                role: localStorage.getItem("role")
            };
        },
    
    methods: {
		format(time){
        return time.replace(/(?:0)?(\d+):(?:0)?(\d+).*/,'$1 Jam $2 Menit');
		},
        tampiljam(){
             this.$axios.get('/sanctum/csrf-cookie').then(response => {
            this.$axios.get('/api/tampil',{
                headers: {Authorization: "Bearer " + this.token},
            })
                .then(response => {
                    this.jamabsen = response.data.data;
                })
                .catch(function (error) {
                    console.error(error);
                });
        })
        },
         showModal(data) {
            $("#editabsen").modal("show");
            this.form.fill(data)
        },
        closeModal() {
            $("#editabsen").modal("hide");
        },
        aturabsen() {
            this.$axios.get('/sanctum/csrf-cookie').then(response => {
              this.form.post('/api/aturjamabsen', {
                    headers: {Authorization: "Bearer " + this.token},
                }).then((response) => {
                if (response.data.success){
                    Swal.fire({
                        icon: "success",
                        title: "Berhasil",
                        text: "Berhasil Mengisi Jam Absen",
                        showConfirmButton: false,
                        timer: 1600,
                    })
                    $("#editabsen").modal("hide")
                      this.tampiljam()
                    this.getprofile()
                }
                
            
            }
        )
            })
        },
         updateabsen() {
              axios.post('/api/updateabsen', 
               {
                    id:this.form.id,
                    jam_masuk: this.form.jam_masuk,
                    jam_pulang: this.form.jam_pulang,
                },
                {
                    headers: { Authorization: "Bearer " + this.token }
                }).then((response) => {
                if (response.data.success){
                    Swal.fire({
                        icon: "success",
                        title: "Berhasil",
                        text: "Berhasil Update",
                        showConfirmButton: false,
                        timer: 1600,
                    })
                    $("#editabsen").modal("hide")
                    this.tampiljam()
                }
            
            })
           
        },

        getprofile(){
            this.$axios.get('/sanctum/csrf-cookie').then(response => {
            this.$axios.get('/api/getakunAdmin',{
                headers: {Authorization: "Bearer " + this.token},
            })
                .then(response => {
                    this.admin = response.data.data;
                })
                .catch(function (error) {
                    console.error(error);
                });
        })
        },
        counthadir(){
        this.$axios.get('/sanctum/csrf-cookie').then(response => {
            this.$axios.get('/api/counthadir',{
                headers: {Authorization: "Bearer " + this.token},
            })
                .then(response => {
                    this.hadir = response.data.data;
                })
                .catch(function (error) {
                    console.error(error);
                });
        })
    },
    },
    

    mounted(){
        // this.initClock();
        this.getprofile();
        this.tampiljam();
        this.counthadir();
        // this.kamera();
       

    },
    created(){
         this.$axios.get('/sanctum/csrf-cookie').then(response => {
            this.$axios.get('/api/absendashboard',{
                headers: {Authorization: "Bearer " + this.token},
            })
                .then(response => {
                    this.absendashboard = response.data.data;
                })
                .catch(function (error) {
                    console.error(error);
                });
        })
    },
    beforeDestroy() {
       
    },
     beforeMount() {
     this.timer =  setInterval(function(){
            var now = new Date();
            var dname = now.getDay(),
            mo = now.getMonth(),
            dnum = now.getDate(),
            yr = now.getFullYear(),
            hou = now.getHours(),
            min = now.getMinutes(),
            sec = now.getSeconds()
            
            
            if(hou == 24){
                hou = 0;
            }
            if(hou > 24){
                hou = hou - 24;
            }

            Number.prototype.pad = function(digits){
                for(var n = this.toString(); n.length < digits; n = 0 + n);
                return n;
            }

            var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
            var week = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
            var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds"];
            var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2)];
            for(var i = 0; i < ids.length; i++)
            document.getElementById(ids[i]).innerHTML = values[i];
            }, 1000);
            },
            beforeUnmount() {
                clearInterval(this.timer);
            },

}
</script>

<style scoped>

</style>
