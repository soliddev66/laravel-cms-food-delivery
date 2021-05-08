<div class="custom-container">
    <div class="header-title">
        BABE,
        <span> I WANT</span>
    </div>
    <div class="header-title-mobile">
        HEY HON <br>
        LETS GET
    </div>
    @if(config('settings.enable_location_search'))
    <form action="{{ route('front') }}">
        <div class="form-group{{ $errors->has('location') ? ' has-danger' : '' }} maketto-search">
            <div class="input-group mb-4">
                <input class="form-control" name="location" id="txtlocation" value="{{ $lastaddress }}" placeholder="" type="text" required>
                <div class="input-group-append button">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
                @if ($errors->has('location'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('location') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <input type="hidden" value="" name="expedition" id="expedition"/>
    </form>
    @else

    <form>
        <div class="form-group">
            <div class="input-group mb-4">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-basket"></i></span>
            </div>
            <input name="q" class="form-control lg" value="{{ request()->get('q') }}" placeholder="{{ __ ('Search') }}" type="text">
            </div>
        </div>
    </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-danger">{{ __('Find your meal') }}</button>
        </div>
    </form>
    @endif
    <div class="bring">
        BR<img src="{{ asset('images') }}/icons/bolt.svg">NG IT!
    </div>
    <div class="header-subtitle">
        <?php echo config('global.header_subtitle') ?>
    </div>
    <section class="section-profile-cover">
        <!-- Circles background -->
        <img class="bg-image" src="{{ config('global.search') }}">
    </section>
</div>

