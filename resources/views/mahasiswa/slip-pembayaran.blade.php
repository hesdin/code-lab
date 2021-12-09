@extends('layouts.main')

@section('title', 'Slip Pembayaran')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="callout callout-info">
			{{-- <h5>I am an info callout!</h5> --}}
			<p>Silahkan tambah mata kuliah, nanti akan mucul icon upload di bagian action, klik untuk upload .</p>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="card card-light">
			<div class="card-header">
				<h3 class="card-title">Mata Kuliah</h3>
				<a type="button" class="ml-2" data-toggle="modal" data-target="#tambahProdi"><i
						class="fas fa-plus-square"></i></a>
			</div>

			<!-- /.card-header -->
			<div class="card-body table-responsive p-0">
				<table class="table table-hover text-nowrap">
					<thead>
						<tr>
							<th>No</th>
							<th>Mata Kuliah</th>
                            <th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Web</td>
                            <td>
                                <span class="badge bg-danger">Belum diupload</span>
                            </td>
							<td>
                                <a class="text-warning" href=""><i class="fas fa-file-upload"></i></a>
								<a type="button" class="text-danger delete" idProdi=><i class="fas fa-trash"></i></a>
							</td>
						</tr>

                        <tr>
							<td>1</td>
							<td>Web</td>
                            <td>
                                <span class="badge bg-success">Berhasil diupload</span>
                            </td>
							<td>
                                <a class="text-warning" href=""><i class="fas fa-file-upload"></i></a>
								<a type="button" class="text-danger delete" idProdi=><i class="fas fa-trash"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="d-flex justify-content-end pr-4">
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>

	{{-- <div class="col-md-3 mt-n5">
		<svg class="animated" id="freepik_stories-image-upload" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><style>svg#freepik_stories-image-upload:not(.animated) .animable {opacity: 0;}svg#freepik_stories-image-upload.animated #freepik--Shadow--inject-24 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) lightSpeedRight;animation-delay: 0s;}svg#freepik_stories-image-upload.animated #freepik--upload-window--inject-24 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) lightSpeedRight;animation-delay: 0s;}svg#freepik_stories-image-upload.animated #freepik--Character--inject-24 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) slideDown;animation-delay: 0s;}            @keyframes lightSpeedRight {              from {                transform: translate3d(50%, 0, 0) skewX(-20deg);                opacity: 0;              }              60% {                transform: skewX(10deg);                opacity: 1;              }              80% {                transform: skewX(-2deg);              }              to {                opacity: 1;                transform: translate3d(0, 0, 0);              }            }                    @keyframes slideDown {                0% {                    opacity: 0;                    transform: translateY(-30px);                }                100% {                    opacity: 1;                    transform: translateY(0);                }            }        </style><g id="freepik--Shadow--inject-24" style="transform-origin: 250px 416.24px 0px;" class="animable"><ellipse id="freepik--path--inject-24" cx="250" cy="416.24" rx="193.89" ry="11.32" style="fill: rgb(245, 245, 245); transform-origin: 250px 416.24px 0px;" class="animable"></ellipse></g><g id="freepik--upload-window--inject-24" style="transform-origin: 204.491px 188.905px 0px;" class="animable"><g id="ellzaawv0ahvk"><rect x="98.3" y="177" width="1" height="13.33" style="fill: rgb(64, 123, 255); transform-origin: 98.8px 183.665px 0px; transform: rotate(-1.87deg);" class="animable"></rect></g><g id="el1l2k8h06uyh"><rect x="97.81" y="165.51" width="1" height="6.34" style="fill: rgb(64, 123, 255); transform-origin: 98.31px 168.68px 0px; transform: rotate(-1.87deg);" class="animable"></rect></g><path d="M112.2,261.87H303.06a7.56,7.56,0,0,0,7.59-7.85L306.4,123.79a8.18,8.18,0,0,0-8.1-7.85H107.44a7.57,7.57,0,0,0-7.6,7.85L104.09,254A8.19,8.19,0,0,0,112.2,261.87Z" style="fill: rgb(64, 123, 255); transform-origin: 205.245px 188.905px 0px;" id="el3ikeupywwzh" class="animable"></path><path d="M112.81,261.87H303.67a7.57,7.57,0,0,0,7.6-7.85L307,123.79a8.19,8.19,0,0,0-8.11-7.85H108.05a7.56,7.56,0,0,0-7.59,7.85L104.71,254A8.18,8.18,0,0,0,112.81,261.87Z" style="fill: rgb(64, 123, 255); transform-origin: 205.865px 188.905px 0px;" id="el4bv0wvs4zni" class="animable"></path><g id="eladdetumloy6"><path d="M112.81,261.87H303.67a7.57,7.57,0,0,0,7.6-7.85L307,123.79a8.19,8.19,0,0,0-8.11-7.85H108.05a7.56,7.56,0,0,0-7.59,7.85L104.71,254A8.18,8.18,0,0,0,112.81,261.87Z" style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 205.865px 188.905px 0px;" class="animable"></path></g><g id="ella6cl09vgra"><path d="M298.43,119.86H107.56l-.64,0c-4.89.4-4.19,7.82.74,7.82H298.85c4.92,0,5.14-7.42.22-7.82C298.86,119.87,298.64,119.86,298.43,119.86Z" style="fill: rgb(64, 123, 255); opacity: 0.5; transform-origin: 203.12px 123.77px 0px;" class="animable"></path></g><path d="M112.38,123.79a1.73,1.73,0,0,1-1.74,1.79,1.87,1.87,0,0,1-1.86-1.79,1.73,1.73,0,0,1,1.74-1.8A1.86,1.86,0,0,1,112.38,123.79Z" style="fill: rgb(250, 250, 250); transform-origin: 110.58px 123.785px 0px;" id="elr6wymbm1g2a" class="animable"></path><path d="M118.5,123.79a1.72,1.72,0,0,1-1.74,1.79,1.88,1.88,0,0,1-1.86-1.79,1.73,1.73,0,0,1,1.74-1.8A1.86,1.86,0,0,1,118.5,123.79Z" style="fill: rgb(250, 250, 250); transform-origin: 116.7px 123.785px 0px;" id="elfqefk9hjou" class="animable"></path><g id="el8wbcygbltmp"><ellipse cx="122.82" cy="123.79" rx="1.77" ry="1.83" style="fill: rgb(250, 250, 250); transform-origin: 122.82px 123.79px 0px; transform: rotate(-45.49deg);" class="animable"></ellipse></g><path d="M116.51,248.87H299.13a2.73,2.73,0,0,0,2.75-2.84l-3.5-107.11a3,3,0,0,0-2.94-2.84H112.83a2.73,2.73,0,0,0-2.75,2.84L113.57,246A3,3,0,0,0,116.51,248.87Z" style="fill: rgb(255, 255, 255); transform-origin: 205.98px 192.475px 0px;" id="el48p8nj3mpco" class="animable"></path><g id="el5xcy4f6uomb"><g style="opacity: 0.3; transform-origin: 205.98px 192.475px 0px;" class="animable"><polygon points="250.53 235.62 247.19 235.62 247.19 234.67 249.55 234.67 249.47 232.31 250.42 232.28 250.53 235.62" style="fill: rgb(64, 123, 255); transform-origin: 248.86px 233.95px 0px;" id="eltzqr1smr97r" class="animable"></polygon><path d="M241.88,235.62h-5.31v-1h5.31Zm-10.62,0H226v-1h5.31Zm-10.62,0h-5.31v-1h5.31Zm-10.62,0h-5.31v-1H210Zm-10.61,0h-5.32v-1h5.32Zm-10.62,0h-5.31v-1h5.31Zm-10.62,0h-5.31v-1h5.31Z" style="fill: rgb(64, 123, 255); transform-origin: 207.37px 235.12px 0px;" id="elwapk029opre" class="animable"></path><polygon points="167.55 235.62 164.24 235.62 164.14 232.31 165.08 232.28 165.16 234.67 167.55 234.67 167.55 235.62" style="fill: rgb(64, 123, 255); transform-origin: 165.845px 233.95px 0px;" id="elhjs5ecp1wfk" class="animable"></polygon><path d="M164,227l-.17-5.31,1,0,.17,5.31Zm-.34-10.62-.18-5.31.95,0,.17,5.31Zm-.35-10.62-.17-5.31.94,0,.18,5.31Zm-.35-10.61-.17-5.31.95,0,.17,5.31Zm-.34-10.62-.18-5.31.95,0,.17,5.31Zm-.35-10.63-.17-5.3.94,0,.18,5.31Zm-.35-10.61-.17-5.31.95,0,.17,5.31Z" style="fill: rgb(64, 123, 255); transform-origin: 163.375px 192.49px 0px;" id="elem5leq9r9l" class="animable"></path><polygon points="161.54 152.66 161.43 149.33 164.76 149.33 164.76 150.28 162.41 150.28 162.48 152.63 161.54 152.66" style="fill: rgb(64, 123, 255); transform-origin: 163.095px 150.995px 0px;" id="elg8uj1whedhl" class="animable"></polygon><path d="M239.1,150.28h-5.31v-.95h5.31Zm-10.62,0h-5.31v-.95h5.31Zm-10.62,0h-5.31v-.95h5.31Zm-10.62,0h-5.31v-.95h5.31Zm-10.62,0h-5.31v-.95h5.31Zm-10.62,0h-5.31v-.95H186Zm-10.62,0h-5.31v-.95h5.31Z" style="fill: rgb(64, 123, 255); transform-origin: 204.585px 149.805px 0px;" id="ellu52vqhbcrb" class="animable"></path><polygon points="246.87 152.66 246.79 150.28 244.41 150.28 244.41 149.33 247.71 149.33 247.82 152.63 246.87 152.66" style="fill: rgb(64, 123, 255); transform-origin: 246.115px 150.995px 0px;" id="elgfusryzh96k" class="animable"></polygon><path d="M249.3,227l-.17-5.31.94,0,.18,5.31ZM249,216.38l-.17-5.31.95,0,.17,5.31Zm-.34-10.61-.18-5.31.95,0,.17,5.31Zm-.35-10.62-.17-5.31.94,0,.18,5.31Zm-.35-10.62-.17-5.31.95,0,.17,5.31Zm-.34-10.62-.18-5.31,1,0,.17,5.31Zm-.35-10.62-.17-5.31.94,0,.18,5.31Z" style="fill: rgb(64, 123, 255); transform-origin: 248.675px 192.49px 0px;" id="el4ui98sz1zq2" class="animable"></path></g></g><path d="M224.82,206H189.91a12.6,12.6,0,0,1-12.49-12.1,11.71,11.71,0,0,1,10.11-12.06,13.48,13.48,0,0,1,13.07-10.07,14.31,14.31,0,0,1,12.22,6.9,11.37,11.37,0,0,1,3.39-.51,12.19,12.19,0,0,1,12,10.83,9.33,9.33,0,0,1,5.3,8,8.66,8.66,0,0,1-8.69,9Zm-24.22-31.9a11.14,11.14,0,0,0-11,9l-.17.89-.9.06a9.39,9.39,0,0,0-8.81,9.74,10.24,10.24,0,0,0,10.16,9.84h34.91a6.31,6.31,0,0,0,6.36-6.57,7,7,0,0,0-4.49-6.21l-.72-.28,0-.77a9.84,9.84,0,0,0-9.73-9.34,9.14,9.14,0,0,0-3.48.68l-1,.4-.49-.94A12,12,0,0,0,200.6,174.12Z" style="fill: rgb(64, 123, 255); transform-origin: 205.464px 188.885px 0px;" id="el0bwuw8a4m9q" class="animable"></path><polygon points="214.76 194.68 205.13 185.35 196.11 194.68 201.39 194.68 201.71 204.32 209.8 204.32 209.48 194.68 214.76 194.68" style="fill: rgb(64, 123, 255); transform-origin: 205.435px 194.835px 0px;" id="el21tbmrmzrb0i" class="animable"></polygon></g><g id="freepik--Character--inject-24" style="transform-origin: 325.039px 259.98px 0px;" class="animable"><path d="M367,156.8c.92,1.33,1.66,2.45,2.42,3.69s1.48,2.44,2.18,3.69c1.4,2.48,2.7,5,3.89,7.64a80.54,80.54,0,0,1,3.24,8.08,61.43,61.43,0,0,1,2.36,8.65l.38,2.28.05.29.06.36c0,.35.08.65.09,1a11.48,11.48,0,0,1,0,1.18l-.05.63-.11.7a8.76,8.76,0,0,1-.38,1.46,8.64,8.64,0,0,1-.7,1.52,8.46,8.46,0,0,1-2.21,2.52,10,10,0,0,1-4.51,1.92,14.44,14.44,0,0,1-3.26.16,19.08,19.08,0,0,1-2.65-.31,39,39,0,0,1-4.57-1.17,63.76,63.76,0,0,1-8-3.3,71.28,71.28,0,0,1-7.42-4.14l2.88-6.38a150.91,150.91,0,0,0,15.08,3.26,26.31,26.31,0,0,0,3.39.29,5.53,5.53,0,0,0,2.15-.24c.06-.05-.17-.12-.83.32a3.45,3.45,0,0,0-1.2,1.59,3.2,3.2,0,0,0-.15.48l-.06.32a1.59,1.59,0,0,1,0,.17c0,.05,0,0,0,0l0-.13,0-.21-.45-1.68a79.56,79.56,0,0,0-5.62-13.59c-1.13-2.26-2.37-4.49-3.63-6.7-.63-1.11-1.28-2.2-1.93-3.29s-1.35-2.23-1.93-3.14Z" style="fill: rgb(255, 181, 115); transform-origin: 364.748px 179.7px 0px;" id="eli5tdxt5epug" class="animable"></path><path d="M351.79,187.81l-4.34-4.32-4.31,9.61s4.08,2.27,7.71.62Z" style="fill: rgb(255, 181, 115); transform-origin: 347.465px 188.906px 0px;" id="elr2n0g68r2rn" class="animable"></path><polygon points="341.04 180.04 337.84 188.16 343.13 193.1 347.45 183.49 341.04 180.04" style="fill: rgb(255, 181, 115); transform-origin: 342.645px 186.57px 0px;" id="elk2iii957ds9" class="animable"></polygon><g id="elqjze5amveej"><rect x="264.45" y="152.05" width="84.54" height="84.54" style="fill: rgb(64, 123, 255); transform-origin: 306.72px 194.32px 0px; transform: rotate(9.99deg);" class="animable"></rect></g><g id="el8rx4eihi9jh"><rect x="264.45" y="152.05" width="84.54" height="84.54" style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 306.72px 194.32px 0px; transform: rotate(9.99deg);" class="animable"></rect></g><g id="elo448fwlyisc"><rect x="268.56" y="156.16" width="76.31" height="76.31" style="fill: rgb(255, 255, 255); transform-origin: 306.715px 194.315px 0px; transform: rotate(9.99deg);" class="animable"></rect></g><g id="elzvh1om477oq"><circle cx="303.04" cy="176.97" r="14.09" style="fill: rgb(64, 123, 255); opacity: 0.3; transform-origin: 303.04px 176.97px 0px; transform: rotate(-35.01deg);" class="animable"></circle></g><g id="elwb7app3n5sd"><polygon points="320.66 197.48 295.47 215.12 283.89 198.58 264.88 211.89 262.52 225.28 337.67 238.51 340.03 225.13 320.66 197.48" style="fill: rgb(64, 123, 255); opacity: 0.2; transform-origin: 301.275px 217.995px 0px;" class="animable"></polygon></g><path d="M324.79,126.51c0,.67-.32,1.22-.76,1.23s-.8-.53-.81-1.19.33-1.22.76-1.22S324.78,125.85,324.79,126.51Z" style="fill: rgb(38, 50, 56); transform-origin: 324.005px 126.535px 0px;" id="elejziny7y7rb" class="animable"></path><path d="M324.53,127.72a24.15,24.15,0,0,1-3.06,5.76,3.85,3.85,0,0,0,3.19.53Z" style="fill: rgb(255, 86, 82); transform-origin: 323.065px 130.934px 0px;" id="el5gw37u4hq04" class="animable"></path><path d="M327.14,122.77a.4.4,0,0,1-.3-.06,3,3,0,0,0-2.78-.45.39.39,0,0,1-.3-.73,3.92,3.92,0,0,1,3.53.54.39.39,0,0,1,.1.54A.4.4,0,0,1,327.14,122.77Z" style="fill: rgb(38, 50, 56); transform-origin: 325.487px 122.054px 0px;" id="elkollv4gjq6r" class="animable"></path><path d="M344.07,129.05c-.42,6.14.06,18.53,4.75,22,0,0-1.15,5-12.28,6.41-12.23,1.53-6.61-5.34-6.61-5.34,6.48-2.44,5.69-7.37,3.94-11.88Z" style="fill: rgb(255, 181, 115); transform-origin: 338.731px 143.366px 0px;" id="elcs4osydhd9" class="animable"></path><path d="M374.39,394.57l-.07,0a.8.8,0,0,1-.42-.83.89.89,0,0,1,.34-.68c.94-.8,3.68-.45,3.8-.44a.21.21,0,0,1,.16.14.19.19,0,0,1-.06.2C377.5,393.48,375.38,394.91,374.39,394.57Zm3.13-1.64c-.93-.07-2.47-.08-3,.39a.54.54,0,0,0-.2.4c0,.37.14.44.19.47C375,394.44,376.51,393.68,377.52,392.93Z" style="fill: rgb(64, 123, 255); transform-origin: 376.049px 393.579px 0px;" id="el3ftkz08lx7k" class="animable"></path><path d="M376.63,392.68c-1-.33-2-.9-2.15-1.48a.64.64,0,0,1,.32-.74,1.05,1.05,0,0,1,.85-.15c1.21.25,2.47,2.29,2.53,2.37a.18.18,0,0,1,0,.2.18.18,0,0,1-.17.1A5.08,5.08,0,0,1,376.63,392.68Zm-.92-1.95-.14,0a.66.66,0,0,0-.55.1c-.21.14-.18.25-.17.3.16.53,1.72,1.27,2.77,1.46A5.07,5.07,0,0,0,375.71,390.73Z" style="fill: rgb(64, 123, 255); transform-origin: 376.333px 391.629px 0px;" id="eluabr1hb8f2" class="animable"></path><path d="M313.67,408.24c-1.06,0-2.08-.15-2.43-.62a.75.75,0,0,1,0-.86,1,1,0,0,1,.62-.45c1.37-.38,4.26,1.26,4.38,1.33a.2.2,0,0,1,.09.21.19.19,0,0,1-.15.16A15.1,15.1,0,0,1,313.67,408.24Zm-1.31-1.6a1.48,1.48,0,0,0-.38,0,.59.59,0,0,0-.38.28c-.14.24-.09.36,0,.43.38.53,2.47.54,4,.33A8.67,8.67,0,0,0,312.36,406.64Z" style="fill: rgb(64, 123, 255); transform-origin: 313.719px 407.246px 0px;" id="elf5zdqauqzqc" class="animable"></path><path d="M316.16,408l-.08,0c-1-.44-3-2.23-2.82-3.16,0-.22.19-.49.73-.55a1.44,1.44,0,0,1,1.08.34c1.05.86,1.28,3.08,1.28,3.18a.18.18,0,0,1-.08.17A.15.15,0,0,1,316.16,408Zm-2-3.35H314c-.35,0-.37.18-.38.22-.09.56,1.25,2,2.26,2.57a4.56,4.56,0,0,0-1.08-2.54A1.05,1.05,0,0,0,314.15,404.66Z" style="fill: rgb(64, 123, 255); transform-origin: 314.8px 406.143px 0px;" id="elhovaahhkhh" class="animable"></path><polygon points="325.23 407.81 316.98 407.81 316.16 388.71 324.41 388.71 325.23 407.81" style="fill: rgb(255, 181, 115); transform-origin: 320.695px 398.26px 0px;" id="elu45hbih2dk" class="animable"></polygon><polygon points="386.92 390.39 379.27 392.49 369.48 374.58 377.13 372.48 386.92 390.39" style="fill: rgb(255, 181, 115); transform-origin: 378.2px 382.485px 0px;" id="el5xtp4r1ww0u" class="animable"></polygon><path d="M378.12,391.66l8.26-4.23a.73.73,0,0,1,.88.19l4.79,5.78a1.22,1.22,0,0,1-.41,1.86c-2.9,1.42-4.39,2-8,3.83-2.23,1.14-8.87,6.08-12.22,7s-4.65-2.33-3.36-3a18.91,18.91,0,0,0,9.12-10.34A2,2,0,0,1,378.12,391.66Z" style="fill: rgb(38, 50, 56); transform-origin: 379.945px 396.805px 0px;" id="ela9edzsc18b" class="animable"></path><path d="M317,406.86h9a.72.72,0,0,1,.7.56l1.63,7.34a1.19,1.19,0,0,1-1.19,1.46c-3.25-.05-7.95-.24-12-.24-4.78,0-8.9.26-14.5.26-3.39,0-4.33-3.43-2.91-3.74,6.45-1.41,11.72-1.56,17.3-5A3.82,3.82,0,0,1,317,406.86Z" style="fill: rgb(38, 50, 56); transform-origin: 312.726px 411.55px 0px;" id="el1ip6b8ajzy3" class="animable"></path><path d="M352.48,166.33c.86,2.21,1.81,4.37,2.77,6.4,1.64,3.51,3.28,6.57,4.47,8.68,1.06,1.91,1.76,3,1.76,3l18-8.94s-7.26-20.87-14.84-23.2C356.89,150,348.59,156.38,352.48,166.33Z" style="fill: rgb(38, 50, 56); transform-origin: 365.485px 168.111px 0px;" id="elx64c4cyhaka" class="animable"></path><g id="elwfk7xah1n7"><path d="M360.47,168.39c-1.57,1.15-2.69,4.26-3.49,7.91,1,2,2,3.75,2.74,5.11,1.06,1.91,1.76,3,1.76,3l2.06-1A39.8,39.8,0,0,0,360.47,168.39Z" style="opacity: 0.2; transform-origin: 360.26px 176.4px 0px;" class="animable"></path></g><path d="M314.38,179.64c0,2.8.07,5.89.22,9.3.41,9.25,1.42,20.78,3.35,35.11h44.12c.31-6.77-3.95-39.82,2.59-71.74a116.33,116.33,0,0,0-14.78-1.86,163,163,0,0,0-18.76,0,84.92,84.92,0,0,0-12.69,2.29S314.37,157.33,314.38,179.64Z" style="fill: rgb(38, 50, 56); transform-origin: 339.52px 187.115px 0px;" id="elp98ypu8x36" class="animable"></path><path d="M325.73,166.54a41.24,41.24,0,0,1-2.19,4c-.73,1.18-1.47,2.32-2.23,3.42-1.52,2.2-3.11,4.32-4.78,6.39A91.87,91.87,0,0,1,305.4,192a51.26,51.26,0,0,1-6.91,5.1l-1,.58-.26.14-.36.18-.73.35a13.79,13.79,0,0,1-2.94,1,18.66,18.66,0,0,1-5.46.28A26.39,26.39,0,0,1,279,197a32.94,32.94,0,0,1-3.67-2.1,31.8,31.8,0,0,1-3.41-2.55l3.54-6c4.33,1.14,9.21,2.16,12.57,1.68a5.87,5.87,0,0,0,2-.56,3.06,3.06,0,0,0,.58-.37l.09-.09.06,0,.14-.11.61-.42a48.6,48.6,0,0,0,4.86-4.24,102.81,102.81,0,0,0,9.09-10.54c1.43-1.87,2.81-3.79,4.14-5.72.65-1,1.3-1.92,1.9-2.87s1.2-1.92,1.51-2.53Z" style="fill: rgb(255, 181, 115); transform-origin: 298.825px 180.148px 0px;" id="eldzr4rmwxb4t" class="animable"></path><path d="M277.22,187.18l-7.61-3.61-.69,10.21s5.92,1,9.05-1.29Z" style="fill: rgb(255, 181, 115); transform-origin: 273.445px 188.784px 0px;" id="elwnh3u0wkn5q" class="animable"></path><polygon points="260.02 185.31 262.95 193.09 268.92 193.78 269.61 183.57 260.02 185.31" style="fill: rgb(255, 181, 115); transform-origin: 264.815px 188.675px 0px;" id="elkc41tmzuqjq" class="animable"></polygon><path d="M331.18,161.13c-.26,7.89-16.5,26.05-16.5,26.05L297.53,176S303,165.8,310,158.43C320.69,147.33,331.49,151.67,331.18,161.13Z" style="fill: rgb(38, 50, 56); transform-origin: 314.358px 169.515px 0px;" id="elmghmfvbqgi" class="animable"></path><g id="elgezhbe9e0r4"><polygon points="316.16 388.71 316.58 398.56 324.84 398.56 324.42 388.71 316.16 388.71" style="opacity: 0.2; transform-origin: 320.5px 393.635px 0px;" class="animable"></polygon></g><g id="elk397py1lazm"><polygon points="377.13 372.48 369.48 374.59 374.53 383.82 382.18 381.71 377.13 372.48" style="opacity: 0.2; transform-origin: 375.83px 378.15px 0px;" class="animable"></polygon></g><path d="M347,124.64c-.33,8.18-.1,13-4.14,17.27-6.08,6.43-16.24,2.9-18.36-5.21-1.91-7.31-1.05-19.46,6.88-22.88A11.16,11.16,0,0,1,347,124.64Z" style="fill: rgb(255, 181, 115); transform-origin: 335.329px 129.058px 0px;" id="eltjmxc28u2p" class="animable"></path><path d="M330.67,128.54c-2.95-2.1-5.84-6.43-5.61-9.65-2.73-.11-4.56-4.61-3.06-7.89.94,2.11,4.19.56,5.46-1.11-.68-1.61-.57-4.28,4.1-6.17-.39,1.36-.19,3.65,4.5,2,5.69-2,15.69-.66,12.76,6.11,4,.73,9.21,9,4.79,13.35s-5.33,11.38-9.11,12.1S330.89,138.25,330.67,128.54Z" style="fill: rgb(38, 50, 56); transform-origin: 338.379px 120.653px 0px;" id="elqbj5w7felb" class="animable"></path><path d="M346.16,111.56a7.66,7.66,0,0,1,9.14,2.57A27.85,27.85,0,0,0,346.16,111.56Z" style="fill: rgb(38, 50, 56); transform-origin: 350.73px 112.551px 0px;" id="elyrnaffbnnt" class="animable"></path><path d="M332.82,128.19a8.28,8.28,0,0,1-1.93,4.95c-1.56,1.82-3.27.76-3.62-1.39-.31-1.93.13-5.21,2.07-6.24S332.89,126,332.82,128.19Z" style="fill: rgb(255, 181, 115); transform-origin: 330.001px 129.625px 0px;" id="elzm36da4wq" class="animable"></path><path d="M333.6,224.05s-3.89,62.43,3.49,85.45c11.68,36.46,32.52,73.71,32.52,73.71l14.9-4.48s-16.39-39.32-21.78-70c-4.84-27.59-.66-62.11-.66-84.65Z" style="fill: rgb(64, 123, 255); transform-origin: 358.543px 303.63px 0px;" id="elq51de4rber" class="animable"></path><g id="el8vgook97239"><path d="M333,238c4.16-1.21,7.41-.75,8.25,2.95,2.2,9.67-4.4,35.18-7.69,46.85C332.2,271,332.51,251,333,238Z" style="opacity: 0.2; transform-origin: 337.136px 262.601px 0px;" class="animable"></path></g><path d="M365.4,378.94c-.06,0,3.89,4.61,3.89,4.61l16.28-4.9-2.07-5.5Z" style="fill: rgb(38, 50, 56); transform-origin: 375.485px 378.35px 0px;" id="elrjm4y8a7joj" class="animable"></path><path d="M318,224.05s-12.43,52.67-13.31,77.83c-1,28.22,8.87,94.77,8.87,94.77h14s1.72-67.07,2.34-92.77c.68-28,17.12-79.83,17.12-79.83Z" style="fill: rgb(64, 123, 255); transform-origin: 325.819px 310.35px 0px;" id="ely8tiguriwi" class="animable"></path><path d="M310.82,391.09c-.06,0,.79,5.8.79,5.8h17l.46-5.18Z" style="fill: rgb(38, 50, 56); transform-origin: 319.943px 393.99px 0px;" id="eltqd0gpken7" class="animable"></path><path d="M324.12,148.52c1.9-.66,16.31-2.49,26.77-1.93,6,.32,9.34,1,11.78,2.15s-1.93,7.12-3.95,7.85c.82,2.28-3.73,5.19-6.32,6.57-1,2.14-11.27,4.12-17.27-.48C330.52,159.14,318.73,150.39,324.12,148.52Z" style="fill: rgb(64, 123, 255); transform-origin: 343.064px 155.981px 0px;" id="el1an69oxollj" class="animable"></path></g><defs>     <filter id="active" height="200%">         <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>        <feMerge>            <feMergeNode in="OUTLINE"></feMergeNode>            <feMergeNode in="SourceGraphic"></feMergeNode>        </feMerge>    </filter>    <filter id="hover" height="200%">        <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>        <feMerge>            <feMergeNode in="OUTLINE"></feMergeNode>            <feMergeNode in="SourceGraphic"></feMergeNode>        </feMerge>            <feColorMatrix type="matrix" values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 "></feColorMatrix>    </filter></defs></svg>
	</div> --}}

</div>

<!-- /start-modal -->
<div class="modal fade" id="tambahProdi">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Pilih Mata Kuliah</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="" method="POST">
					@csrf
					<span class="text-danger">
						@error('nama_prodi')
							{{ $message }}
						@enderror
					</span>

					<div class="form-group">
						<label for="fakultas">Mata Kuliah</label>
						<select class="form-control" id="fakultas" name="fakultas">
							<option>--Select--</option>

							<option value=""></option>

						</select>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary">Add</button>
					</div>
				</form>


			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection
