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
            	<div class="video-banner video-banner-bg bg-image text-center" style="background-image: url(images/videobanner.png)">
	                <div class="container">
	                	<h3 class="video-banner-title h1 text-white"><span>New Video</span><strong>Support India for Re-election to ITU Council 2027-2030</strong></h3><!-- End .video-banner-title -->
	                	<a href="https://www.youtube.com/watch?v=YM3Cih_O9Fk" class="btn-video btn-iframe"><i class="icon-play"></i></a>
	                </div><!-- End .container -->
            	</div><!-- End .video-banner bg-image -->

            	<div class="container">
            		<hr class="mt-5 mb-4">
            	</div><!-- End .container -->

				@foreach($PromotionalVideo as $video)
            	<div class="video-banner video-banner-poster text-center">
	                <div class="container">
	                	<div class="row align-items-center">
	                		<div class="col-md-6 mb-3 mb-md-0">
	                			<h3 class="video-banner-title h3"><span class="text-primary">{{ $video->category }}</span>{{ $video->title }}</h3><!-- End .video-banner-title -->
	                			<p>{{ $video->description }}</p>
	                		</div><!-- End .col-md-6 -->

	                		<div class="col-md-6">
	                			<div class="video-poster">
	                				<img src="{{ asset('storage/'.$video->thumbnail) }}" alt="poster">

	                				<div class="video-poster-content">
	                					<a href="{{ $video->url}}" class="btn-video btn-iframe"><i class="icon-play"></i></a>
	                				</div><!-- End .video-poster-content -->	
	                			</div><!-- End .video-poster -->
	                		</div><!-- End .col-md-6 -->
	                	</div><!-- End .row -->
	                </div><!-- End .container -->
            	</div><!-- End .video-banner -->
				@endforeach


            	
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
