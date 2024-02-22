@if (Session::has('Cart'))
    <div class="select-items">
        <table>
            <tbody>
                @foreach (Session::get('Cart')->products as $item)
                    <tr>
                        <td class="si-pic"><img src="/assets/img/products/{{ $item['productInfo']->img }}" alt="">
                        </td>
                        <td class="si-text">
                            <div class="product-selected">
                                <h6>{{ $item['productInfo']->name }}</h6>
                                <p>{{ number_format($item['productInfo']->price) }}đ x {{ $item['quanty'] }}</p>
                            </div>
                        </td>
                        <td class="si-close text-right">
                            <i class="ti-close" data-id="{{ $item['productInfo']->id }}"></i>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="select-total">
        <span>Total:</span>
        <h5>{{ number_format(Session::get('Cart')->totalPrice) }}đ</h5>
        <input hidden id="total-quanty-cart" type="number" value="{{ Session::get('Cart')->totalQuanty }}">
    </div>
@else
<input hidden id="total-quanty-cart" type="number" value="0">
@endif
