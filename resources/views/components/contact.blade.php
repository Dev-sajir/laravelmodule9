<h1>Contact Us</h1>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif
<div class="m-5 id="contact-me">
<form method="post" action="{{ route('contact.submit') }}">
    @csrf
    <label class="form-label" for="name">Name:</label>
    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
    @error('name')
        <p style="color: red;">{{ $message }}</p>
    @enderror

    <label for="email" class="form-label">Email:</label>
    <input type="email"  class="form-control" name="email" value="{{ old('email') }}">
    @error('email')
        <p style="color: red;">{{ $message }}</p>
    @enderror

    <label for="message" class="form-label">Message:</label>
    <textarea name="message" class="form-control">{{ old('message') }}</textarea>
    @error('message')
        <p style="color: red;">{{ $message }}</p>
    @enderror

    <button class="btn btn-primary mb-3" type="submit">Submit</button>
</form>
<div>