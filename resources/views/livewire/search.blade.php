<div>
   <input wire:model="search" name="search" type="text" class="form-group col-md-9 form-control my-2 my-lg-1 input search-input" list="mylist" placeholder="Ne Arıyorsunuz..">
    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>
