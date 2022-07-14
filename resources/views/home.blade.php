
{{-- @section('home') --}}
    <body>
        {{-- @include('includes.header') --}}
        {{-- @include('includes.header-scripts') --}}

        <div class="wrapper">
            @include('includes.sidebar')
            <div class="main-panel">
                @include('includes.navbar')
                @include('homesection')

            </div>

        </div>


    </body>


{{-- @endsection --}}
