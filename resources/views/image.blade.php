<div class="container">
    {{-- {!! QrCode::size(300)->generate(
        'https://www.google.com/m?hl=en-US&ie=UTF-8&source=android-browser&q=upi3A2F2Fpay3Fpa3Dalawa328240ybl26pn3DPriyanshu2520Alawa26mc3D000026mode3D0226purpose3D00',
    ) !!} --}}
    {{-- {!! QrCode::size(300)->generate('https://techvblogs.com/blog/generate-qr-code-laravel-8') !!} --}}
    {!! QrCode::size(300)->generate('7222942093') !!}
</div>


<form action="{{ url('/img-upload') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="image" class="form-label">Choose file</label>
        <input type="file" class="form-control" name="image" id="image" placeholder=""
            aria-describedby="fileHelpId">
        <button type="submit" class="btn btn-primary">Upload</button>
    </div>
</form>
