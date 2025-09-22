@extends('frontend.partials.app')

@section('content')

<style>
    .table tr td {
        text-align: unset !important;
        padding-left: 10px;
    }
    .table tr th {
        text-align: unset !important;
        padding-left: 10px;
    }
</style>


        <main class="main">
        	<div class="page-header text-center" style="background-image: url('front/assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Promotional Videos</h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="container">
            		<h2 class="title mb-3 text-center">Fullwidth Banner</h2><!-- End .text-center -->
            	</div><!-- End .container -->
            	<div class="video-banner video-banner-bg bg-image text-center" style="background-image: url(assets/images/video/bg-1.jpg)">
	                <div class="container">
	                	<h3 class="video-banner-title h1 text-white"><span>New Video</span><strong>Womens New Arrivals</strong></h3><!-- End .video-banner-title -->
	                	<a href="https://youtu.be/ENhHgdE-OSM?si=L79_qF3IjpLrxEFH" class="btn-video btn-iframe"><i class="icon-play"></i></a>
	                </div><!-- End .container -->
            	</div><!-- End .video-banner bg-image -->

            	<div class="container">
            		<hr class="mt-5 mb-4">
            		<h2 class="title mb-3 text-center">Video Banner with Description</h2><!-- End .text-center -->
            	</div><!-- End .container -->

            	<div class="video-banner video-banner-poster text-center">
	                <div class="container">
	                	<div class="row align-items-center">
	                		<div class="col-md-6 mb-3 mb-md-0">
	                			<h3 class="video-banner-title h3"><span class="text-primary">New Video</span>Womens New Arrivals</h3><!-- End .video-banner-title -->
	                			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper ...</p>
	                		</div><!-- End .col-md-6 -->

	                		<div class="col-md-6">
	                			<div class="video-poster">
	                				<img src="assets/images/video/poster-1.jpg" alt="poster">

	                				<div class="video-poster-content">
	                					<a href="https://youtu.be/ENhHgdE-OSM?si=L79_qF3IjpLrxEFH" class="btn-video btn-iframe"><i class="icon-play"></i></a>
	                				</div><!-- End .video-poster-content -->	
	                			</div><!-- End .video-poster -->
	                		</div><!-- End .col-md-6 -->
	                	</div><!-- End .row -->
	                </div><!-- End .container -->
            	</div><!-- End .video-banner -->

            	<div class="container">
            		<hr class="mt-5 mb-4">
            		<h2 class="title mb-3 text-center">Video Banner with Background</h2><!-- End .text-center -->
            	</div><!-- End .container -->

            	<div class="video-banner bg-image text-center pt-8 pb-8" style="background-image: url(assets/images/video/bg-2.jpg)">
	                <div class="container">
	                	<div class="row">
	                		<div class="col-sm-10 offset-sm-1 col-md-8 offset-md-2">
	                			<div class="video-poster">
	                				<img src="assets/images/video/poster-2.jpg" alt="poster">

	                				<div class="video-poster-content">
	                					<h3 class="h4 video-poster-title text-white">Womens New Arrivals</h3><!-- End .video-poster-title -->
	                					<a href="https://youtu.be/ENhHgdE-OSM?si=L79_qF3IjpLrxEFH" class="btn-video btn-iframe"><i class="icon-play"></i></a>
	                				</div><!-- End .video-poster-content -->	
	                			</div><!-- End .video-poster -->
	                		</div><!-- End .col-sm-10 offset-sm-1 col-md-10 offset-md-2 -->
	                	</div><!-- End .row -->
	                </div><!-- End .container -->
            	</div><!-- End .video-banner bg-image -->

            	<div class="container">
            		<hr class="mt-5 mb-4">
            		<h2 class="title mb-3 text-center">Deal Video Banner</h2><!-- End .text-center -->
            	</div><!-- End .container -->

            	<div class="video-banner bg-light pt-5 pb-5">
	                <div class="container align-items-center">
	                	<div class="video-banner-box bg-white">
		                	<div class="row align-items-center">
		                		<div class="col-md-6 mb-3 mb-md-0">
		                			<div class="video-box-content">
		                				<h3 class="video-banner-title h1"><span class="text-primary">New Video</span><strong>Deal Banner</strong></h3><!-- End .video-banner-title -->
	                					<p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
	                					<a href="#" class="btn btn-outline-primary"><span>Click Here</span><i class="icon-long-arrow-right"></i></a>
		                			</div><!-- End .video-box-content -->
		                		</div><!-- End .col-md-6 -->
		                		<div class="col-md-6">
		                			<div class="video-poster">
		                				<img src="assets/images/video/poster-3.jpg" alt="poster">

		                				<div class="video-poster-content">
		                					<a href="https://youtu.be/ENhHgdE-OSM?si=L79_qF3IjpLrxEFH" class="btn-video btn-iframe"><i class="icon-play"></i></a>
		                				</div><!-- End .video-poster-content -->	
		                			</div><!-- End .video-poster -->
		                		</div><!-- End .col-md-6 -->
		                	</div><!-- End .row -->
	                	</div><!-- End .video-banner-box -->
	                </div><!-- End .container -->
            	</div><!-- End .video-banner bg-image -->
            </div><!-- End .page-content -->

        </main><!-- End .main -->


@endsection

@push('scripts')
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#ormsTable').DataTable({
        pageLength: 10,
        lengthMenu: [5, 10, 25, 50],
        searching: true,
        ordering: true,
    });
});
</script>
@endpush
