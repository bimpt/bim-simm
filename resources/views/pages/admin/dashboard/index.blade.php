<x-app-layout title="">

    @section('breadcrumbs')
        <x-breadcrumbs></x-breadcrumbs>
    @endsection

    @section('content')
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                @foreach ($infopelanggans as $item)
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box {{ $item['color'] }}">
                        <div class="inner">
                            <h3>{{ $item['info'] }} {{ $item['desc'] }}</h3>

                            <p>{{ $item['title'] }}</p>
                        </div>
                        <div class="icon">
                            <i class="{{ $item['icon'] }}"></i>
                        </div>

                        </div>
                    </div>
                    <!-- ./col -->
                @endforeach
            </div>
            </div>
        </section>
    @endsection

</x-app-layout>
