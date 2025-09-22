<form action="{{ route('importCsv') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="csv_file" required>
    <button type="submit">Upload</button>
</form>