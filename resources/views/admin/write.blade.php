<form action="{{route("director.userwrite")}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Сіздің аты-жөніңіз? (міндетті емес)">
    <textarea name="text"cols="30" rows="10"></textarea>
</form>
