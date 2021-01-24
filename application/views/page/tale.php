<style>
	.layout {
		background-color: #ffffff;
		padding: 1rem;
		height: 63vh;
	}

	.search-panel {
		background-color: #ffffff;
	}

	.list-tale {
		cursor: pointer;
	}

	.list-tale.active {
		background-color: #E0FCFF;
	}

	.list-tale:hover {
		background-color: #E0FCFF;
	}
</style>

<!-- Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="detailModalLabel"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="detailModalContent">
				<button class="btn btn-success" onclick="play()" ><i class="fas fa-play"></i> อ่านนิทาน</button>
				<button class="btn btn-danger" onclick="stop()" ><i class="fas fa-stop"></i> หยุดอ่านนิทาน</button>
				<p class="p-3 text-justify" id="tale-detail"></p>
			</div>
		</div>
	</div>
</div>

<div class="container-xl p-0 mt-1">
	<div class="container-fluid">
		<div class="form-inline">
			<div class="p-3 rounded w-100" style="background-color: #fbeec9;">
				<h2 style="color: black;">นิทานสำหรับเด็กพิการทางสายตา</h2>
			</div>
		</div>
	</div>

	<div class="text-center">
		<h4 class="no-browser-support mt-3" hidden>Sorry, Your Browser Doesn't Support the Web Speech API. Try Opening This In Google Chrome.</h4>
	</div>

	<div class="container-fluid app">

		<div class="row mt-2 mb-2">
			<div class="col-12 col-md-3">
				<div class="p-3 search-panel rounded">
					<div class="form-group">
						<strong>ค้นหานิทานสำหรับเด็กพิเศษ </strong>
						<input type="text" class="form-control" id="keyword_search">
						<div class="text-center pt-2">
							<button class="btn btn-primary" onclick="btn_search()"><i class="fas fa-search"></i> ค้นหา </button>
							<button class="btn bg-gradient-success" type="button" onclick="onStart_Record()" id="record-btn"><i class="fas fa-microphone"></i> กดพูด </button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-9">
				<div class="layout rounded">
					<div class="col-12 p-3" id="data-container" style="height: 53vh;">
					</div>
					<div class="col-12 p-3">
						<div id="pagination-container" class="paginationjs paginationjs-theme-blue"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url("fairy_tale/main.js"); ?>"></script>
<script src="https://code.responsivevoice.org/responsivevoice.js?key=cJFwgU0W"></script>