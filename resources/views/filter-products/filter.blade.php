@if($formData)
    <form class="d-block border border-light js-filter-products">
        @csrf
        @if(array_key_exists('attributes',$formData)&&(!empty($formData['attributes'])))
            @foreach($formData['attributes'] as $attribute)
                <div class="mb-4">
                    <h5><b>{{$attribute["name"]}}</b></h5>
                    @foreach($attribute["values"] as $key=>$value)
                        @if($attribute["type"]=='boolean')
                            <div class="form-check">
                                <input class="form-check-input" name="attribute_{{$attribute["id"]}}[]" type="checkbox"
                                       value="{{(int)$value[$attribute["type"]]}}" id="attribute_{{$attribute["id"]}}">
                                <label class="form-check-label" for="{{$attribute["id"]}}">
                                    {{(int)$value[$attribute["type"]]}} ({{$value['products_count']}})

                                </label>
                            </div>
                        @elseif(($attribute["type"]=='select') or ($attribute["type"]=='multiple_select'))
                            <div class="form-check">
                                <input class="form-check-input" name="attribute_{{$attribute["id"]}}[]" type="checkbox"
                                       value="{{$key}}" id="attribute_{{$attribute["id"]}}
                                @if($attribute["type"]=='multiple_select')
                                        multiple
@endif
                                        ">
                                <label class="form-check-label" for="{{$attribute["id"]}}">
                                    {{$result= $value["display_value"]?$value["display_value"]:$value["value"]}}
                                    ({{$value['products_count']}})
                                </label>
                            </div>
                        @else
                            <div class="form-check">
                                <input class="form-check-input" name="attribute_{{$attribute["id"]}}[]" type="checkbox"
                                       value="{{$value[$attribute["type"]]}}" id="attribute_{{$attribute["id"]}}">
                                <label class="form-check-label" for="{{$attribute["id"]}}">
                                    {{$value[$attribute["type"]]}} ({{$value['products_count']}})
                                </label>
                            </div>
                        @endif
                    @endforeach

                </div>
            @endforeach
        @endif
        @if(array_key_exists('brands',$formData)&&(!empty($formData['brands'])))
            <div class="mb-4">
                <h5><b>@lang('filter.manufacturers')</b></h5>
                @foreach($formData['brands'] as $brand)
                    <div class="form-check">
                        <input class="form-check-input" name="brand[]" type="checkbox" value="{{$brand['id']}}"
                               id="brand_{{ $brand['id']}}">
                        <label class="form-check-label" for="brand_{{ $brand['id']}}">
                            {{$brand['name']}} ({{$brand['products_count']}})
                        </label>
                    </div>
                @endforeach
            </div>
        @endif
        @if(array_key_exists('prices',$formData)&&(!empty($formData['prices'])))
            <div class="d-flex flex-column mb-4">
                <h5><b>@lang('filter.price')</b></h5>
                <div class="d-flex">
                    <div class="form-group">
                        <input name="price_from" class="form-control" type="number"
                               min="{{floor(convert($formData['prices']['min'],base_currency(), current_currency()))}}"
                               value="{{floor(convert($formData['prices']['min'],base_currency(), current_currency()))}}"
                               id="price_from">
                    </div>
                    <hr class="ml-1 mr-1" >
                    <div class="form-group">
                        <input name="price_to" class="form-control" type="number"
                               max="{{ceil(convert($formData['prices']['max'],base_currency(), current_currency()))}}"
                               value="{{ceil(convert($formData['prices']['max'],base_currency(), current_currency()))}}"
                               id="price_to">
                    </div>
                </div>

                <input type="text" class="price-slider" data-currency-sign="{{current_currency()->sign()}}">
            </div>
        @endif
        <div class="filter-controls d-flex justify-content-between">
            <button type="submit" class="btn">@lang('filter.do_filter')</button>
            <button type="reset" class="btn font-weight-bold">@lang('filter.reset_filter')</button>
        </div>
    </form>
@endif
