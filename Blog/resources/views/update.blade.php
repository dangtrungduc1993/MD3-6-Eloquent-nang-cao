<form action="{{route('blog.update',$blog->id)}}"method="post">
    @csrf
    <input type="text"name="name"placeholder="name" value="{{$blog->name}}">
    <input type="text"name="title"placeholder="Title" value="{{$blog->title}}">
    <input type="text"name="content"placeholder="Content" value="{{$blog->content}}">
    <button>Update</button>
</form>



