@if(session('success'))
    <div>{{ session('success') }}</div>
@endif


<form method = "POST" action="{{route('contact-us.store')}}">
    @csrf
    <h1>Contact Us</h1>
    <input type="text" name="name" placeholder="Name"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <textarea name="message" placeholder="Message"></textarea><br>
    <button type="submit">Send</button>
</form>
