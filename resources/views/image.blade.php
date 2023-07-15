<form action="{{ url('/img-upload') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="image" class="form-label">Choose file</label>
        <input type="file" class="form-control" name="image" id="image" placeholder=""
            aria-describedby="fileHelpId">
        <button type="submit" class="btn btn-primary">Upload</button>
    </div>
</form>
