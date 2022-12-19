<div class="page-content">

    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm my-paroller overlay-black-middle text-center" id="my-element" data-paroller-factor="-0.5" data-paroller-direction="horizontal" style="background-image: url({{ asset('assets/images/bnr/bnr1.jpg') }});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Careers</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Careers</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <section class="content-inner">
        <div class="container">
            <div class="clearfix">
                @if ($careers->count() > 0)
                <ul class="row blog-masonry">
                    @foreach ($careers as $career)
                    <li class="card-container grid-item col-xl-4 col-md-6">
                        <div class="dz-card style-1 shadow m-b30">
                            <div class="dz-info">
                                <div class="dz-meta">
                                    <ul>
                                        <li class="post-date">{{date('d F, Y', strtotime(   $career->created_at )) }}</li>
                                    </ul>
                                </div>
                                <h4 class="dz-title"><a href="{{ route('career.details', ['id' => $career->id]) }}">{{ $career->title }}</a></h4>
                                <p>{{ str_limit(strip_tags($career->description),170,'...')  }}</p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                @else
                <div class="alert alert-danger" role="alert"><h3 class="box-title alert-link">No Jobs at the moment</h3></div>
                @endif

            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 text-center m-b20">
                    <nav aria-label="Blog Pagination">
                        {{ $careers->links('pagination::bootstrap-4') }}
                    </nav>
                </div>
            </div>
        </div>
    </section>
</div>
