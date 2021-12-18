@foreach($children as $subcategory)
        <ul class="dropdown-item">
            @if(count($subcategory->children))
                <li style="color: #0b0b0b; font-family: Arial">{{$subcategory->title}}</li>
                <ul class="dropdown-item">
                    @include('home.categorytree',['children'=>$subcategory->children])
                </ul>
                <hr>

            @else
                <li><a href="{{route('categoryhouses',['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></li>
            @endif
        </ul>
@endforeach
