<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
    
            <div class="navbar-header navbar-left">
                <a class="navbar-brand" href="{{route('index')}}">{{$settings->site_name}}</a>
            </div>
    
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    @foreach($categories as $category)
                        <li class="nav-item">
                            <a href="{{route('category.single', ['id' => $category->id]) }}">{{$category->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>        
</div>
