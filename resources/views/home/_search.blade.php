<div class="advance-search">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 align-content-center">
                <form action="{{route('gethouse')}}" method="post">
                    @csrf
                    @livewire('search')
                    <div class="form-row">
                        <div class="form-group col-md-3 align-self-center">
                            <button type="submit" class="btn btn-primary">Arama</button>
                        </div>
                    </div>
                </form>
                @section('footerjs')
                    @livewireScripts
                @endsection
            </div>
        </div>
    </div>
</div>
