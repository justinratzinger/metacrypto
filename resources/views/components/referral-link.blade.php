<section class="container mb-5">
    <x-card cardHeader="Refer us & earn" class="text-white bg-primary">
        <p> Use the link below to invite your friends to {{env('APP_NAME')}}</p>
        <div class="input-group input-group-lg">
            <span class="input-group-text"><i class="fa fa-link" aria-hidden="true"></i></span>
            <input type="text" class="form-control" value="{{ Auth::user()->referral_link }}" id="copyReferral" disabled>
            <button class="btn btn-primary" type="button" onclick="copyToClipboard('copyReferral')">Copy</button>
          </div>
    </x-card>
</section>

